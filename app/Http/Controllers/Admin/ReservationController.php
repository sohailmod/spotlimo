<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationRequest;
use App\Models\Reservation;
use App\Models\User;
use App\Services\ReservationService;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.reservations.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.reservations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReservationRequest $request)
    {
        app(ReservationService::class)->saveCustomerReservation($request);

        return redirect()
            ->route('admin.reservations.index')
            ->with('success', 'Customer reservation create successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $columns = [
            0 => 'id',
            1 => 'name',
            2 => 'date',
            3 => 'status',
            4 => 'payment_status',
            5 => 'action',
        ];

        $totalData = Reservation::count();
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {
            $posts = Reservation::offset($start)
                ->limit($limit)
                ->orderBy('id', 'desc')
                ->get();
            $totalFiltered = Reservation::count();
        } else {
            $search = $request->input('search.value');
            $posts = Reservation::where('date', 'like', "%{$search}%")
                ->orWhere('id', 'like', "%{$search}%")
                ->orWhere('code', 'like', "%{$search}%")
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
            $totalFiltered = Reservation::where('date', 'like', "%{$search}%")
                ->orWhere('id', 'like', "%{$search}%")
                ->orWhere('code', 'like', "%{$search}%")
                ->count();
        }

        $data = [];

        if ($posts) {
            foreach ($posts as $key => $r) {
                $nestedData['id'] = $r->code;
                $nestedData['name'] = $r->mainPassenger->name;
                $nestedData['date'] = date('m/d/Y', strtotime($r->date));
                $nestedData['status'] = '<span class="badge badge-pill badge-'.$r->status_color.'">'.$r->status.'</span>';
                $nestedData['payment_status'] = '<span class="badge badge-pill badge-'.$r->payment->status_color.'">'.$r->payment->status.'</span>';
                $nestedData['action'] = '<a class="btn btn btn-outline-primary btn-sm edit" data-data='.base64_encode($r).' href='.route('admin.reservations.edit', $r->id).'><i class="fas fa-edit"></i> Edit</a>&nbsp;<a class="btn btn btn-outline-danger btn-sm edit"  onclick="deleteReservation('.$r->id.')"> <i class="fas fa-trash"></i> Delete</a>&nbsp;';
                $data[] = $nestedData;
            }
        }

        $json_data = [
            'draw' => intval($request->input('draw')),
            'recordsTotal' => intval($totalData),
            'recordsFiltered' => intval($totalFiltered),
            'data' => $data,
        ];

        echo json_encode($json_data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Reservation::find($id);
        $detail = $data->detail;
        $vehicleType = $data->vehicle;

        $mainPassenger = $data->mainPassenger;
        $bookingContact = $data->bookingContact;

        if ($data->to_stop) {
            $waypoints = unserialize($data->to_stop);
        } else {
            $waypoints = false;
        }

        return view('admin.reservations.update', compact('data', 'mainPassenger', 'bookingContact', 'waypoints', 'detail', 'vehicleType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Reservation::find($request->id)->delete();

        return response()->json(['success' => 'Reservation  Delete successfully!']);
    }

    public function allPassenger(Request $request)
    {
        $data = [];
        if ($request->has('q')) {
            $data = User::select('id', 'name', 'email')
                ->where('name', 'LIKE', "%$request->q%")
                ->get();
        }

        return response()->json($data);
    }

    public function calculatePrice(Request $request)
    {
        return app(ReservationService::class)->calculatePrice($request);
    }
}