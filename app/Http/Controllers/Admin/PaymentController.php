<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.payment');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
            0 => 'payment_id',
            1 => 'amount',
            2 => 'status',
            3 => 'charge_id',
        ];

        $totalData = Payment::count();
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {
            $posts = Payment::offset($start)
                ->limit($limit)
                ->orderBy('id', 'desc')
                ->get();
            $totalFiltered = Payment::count();
        } else {
            $search = $request->input('search.value');
            $posts = Payment::query()
                ->whereHas('reservation', function ($query) use ($search) {
                    $query->where('code', 'like', "%{$search}%");
                })
                ->orWhere('id', 'like', "%{$search}%")
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
            $totalFiltered = Payment::query()
                ->whereHas('reservation', function ($query) use ($search) {
                    $query->where('code', 'like', "%{$search}%");
                })
                ->orWhere('id', 'like', "%{$search}%")
                ->count();
        }

        $data = [];

        if ($posts) {
            foreach ($posts as $key => $r) {
                $nestedData['id'] = $r->reservation->code;
                $nestedData['amount'] = format_price($r->amount);
                $nestedData['status'] = '<span class="badge badge-pill badge-'.$r->status_color.'">'.$r->status.'</span>';
                $nestedData['charge_id'] = $r->charge_id;
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
