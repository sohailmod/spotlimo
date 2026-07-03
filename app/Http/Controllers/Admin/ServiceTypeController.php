<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceType;
use Illuminate\Http\Request;

class ServiceTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.service-types.index');
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
            0 => 'id',
            1 => 'name',
            2 => 'action',
        ];

        $totalData = ServiceType::count();
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {
            $posts = ServiceType::offset($start)
                ->limit($limit)
                ->orderBy('id', 'desc')
                ->get();
            $totalFiltered = ServiceType::count();
        } else {
            $search = $request->input('search.value');
            $posts = ServiceType::where('name', 'like', "%{$search}%")
                ->orWhere('id', 'like', "%{$search}%")
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
            $totalFiltered = ServiceType::where('name', 'like', "%{$search}%")
                ->orWhere('id', 'like', "%{$search}%")
                ->count();
        }

        $data = [];

        if ($posts) {
            foreach ($posts as $key => $r) {
                $nestedData['id'] = $r->id;
                $nestedData['name'] = $r->name;
                $nestedData['action'] = '<a class="btn btn btn-outline-primary btn-sm edit" data-data='.base64_encode($r).' href='.route('admin.vehicle-types.edit', $r->id).'><i class="fas fa-edit"></i> Edit</a>&nbsp;<a class="btn btn btn-outline-danger btn-sm edit"  onClick="deleteVehicle('.$r->id.')"> <i class="fas fa-trash"></i> Delete</a>&nbsp;';
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
