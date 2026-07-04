<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\VehicleRequest;
use App\Models\VehicleType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VehicleTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.vehicle-types.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vehicle-types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehicleRequest $request)
    {
        $data = new VehicleType();
        $data->name = $request->name;
        $data->capacity_of_passenger = $request->capacity_of_passenger;
        $data->max_allowed_seats = $request->max_allowed_seats;
        $data->no_of_luggage = $request->no_of_luggage;
        $data->miles_under_10 = $request->miles_under_10;
        $data->first_15_miles = $request->first_15_miles;
        $data->after_15_miles = $request->after_15_miles;
        $data->per_mile_charge = $request->per_mile_charge;
        $data->rush_hour_charge = $request->rush_hour_charge;
        $data->hourly_charge = $request->hourly_charge;
        $data->tax = $request->tax;
      
        $data->minimum_hours = $request->minimum_hours;
        $data->remark = $request->remark;

        $img = $request->file('image');
        $newName = $img->hashName();
        $request->image->move(public_path('/vehicle-type'), $newName);

        $data->image = 'vehicle-type/'.$newName;

        $data->save();

        return redirect()
            ->route('admin.vehicle-types.index')
            ->with('success', 'Vehicle create successfully!');
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
            2 => 'status',
            3 => 'action',
        ];

        $totalData = VehicleType::count();
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {
            $posts = VehicleType::offset($start)
                ->limit($limit)
                ->orderBy('id', 'desc')
                ->get();
            $totalFiltered = VehicleType::count();
        } else {
            $search = $request->input('search.value');
            $posts = VehicleType::where('name', 'like', "%{$search}%")
                ->orWhere('id', 'like', "%{$search}%")
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
            $totalFiltered = VehicleType::where('name', 'like', "%{$search}%")
                ->orWhere('id', 'like', "%{$search}%")
                ->count();
        }

        $data = [];

        if ($posts) {
            foreach ($posts as $key => $r) {
                $nestedData['id'] = $r->id;
                $nestedData['name'] = $r->name;
                $nestedData['status'] = $r->is_enable ? '<span class="badge badge-success">Active</span>' : '<span class="badge badge-warning">Deactivate</span>';
                $nestedData['action'] = '<a class="btn btn btn-outline-primary btn-sm edit" data-data='.base64_encode($r).' href='.route('admin.vehicle-types.edit', $r->id).'><i class="fas fa-edit"></i> Edit</a>&nbsp;<a class="btn btn btn-outline-danger btn-sm edit" onClick="deleteVehicle('.$r->id.')"> <i class="fas fa-trash"></i> Delete</a>&nbsp;'.
                    ($r->is_enable ?
                        '<a class="btn btn-danger btn-sm edit" href='.route('admin.vehicle-types.active', ['id' => $r->id]).'><i class="fas fa-stop"></i> Deactivate</a>' :
                        '<a class="btn btn-success btn-sm edit" href='.route('admin.vehicle-types.active', ['id' => $r->id]).'> <i class="fas fa-edit"></i> Active</a>');
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
        $data = VehicleType::find($id);

        return view('admin.vehicle-types.update', compact('data'));
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
        $data = VehicleType::find($request->id);
        $data->name = $request->name;
        $data->capacity_of_passenger = $request->capacity_of_passenger;
        $data->max_allowed_seats = $request->max_allowed_seats;
        $data->no_of_luggage = $request->no_of_luggage;
        $data->miles_under_10 = $request->miles_under_10;
        $data->first_15_miles = $request->first_15_miles;
        $data->after_15_miles = $request->after_15_miles;
        $data->per_mile_charge = $request->per_mile_charge;
        $data->rush_hour_charge = $request->rush_hour_charge;
        $data->hourly_charge = $request->hourly_charge;
        $data->tax = $request->tax;
        $data->minimum_hours = $request->minimum_hours;
        $data->remark = $request->remark;

        $img = $request->file('image');

        if ($img) {
            $newName = $img->hashName();
            $request->image->move(public_path('/vehicle-type'), $newName);
            $data->image = 'vehicle-type/'.$newName;
        }

        $data->save();

        return redirect()
            ->route('admin.vehicle-types.index')
            ->with('success', 'Vehicle update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        VehicleType::find($request->id)->delete();

        return response()->json(['success' => 'Vehicle  Delete successfully!']);
    }

    public function activeVehicle(Request $request)
    {
        $data = VehicleType::find($request->id);
        $data->is_enable = $data->is_enable ? false : true;
        $data->save();

        return redirect()->back();
    }

    public function getVehicleDetail(Request $request)
    {
        $vehicle = VehicleType::find($request->id);

        $data = [
            ['passengers' => $vehicle->capacity_of_passenger],
            ['bags' => $vehicle->no_of_luggage],
            ['vehicle' => $vehicle],
        ];

        return response()->json($data);
    }
}
