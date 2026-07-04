<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\UserContactReply;
use App\Models\Contact;
use App\Models\ContactReply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user-contact.index');
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
            2 => 'email',
            3 => 'is_read',
            4 => 'action',
        ];

        $totalData = Contact::count();
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {
            $posts = Contact::offset($start)
                ->limit($limit)
                ->orderBy('id', 'desc')
                ->get();
            $totalFiltered = Contact::count();
        } else {
            $search = $request->input('search.value');
            $posts = Contact::where('name', 'like', "%{$search}%")
                ->orWhere('id', 'like', "%{$search}%")
                ->orWhere('email', 'like', "%{$search}%")
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
            $totalFiltered = Contact::where('name', 'like', "%{$search}%")
                ->orWhere('email', 'like', "%{$search}%")
                ->orWhere('id', 'like', "%{$search}%")
                ->count();
        }

        $data = [];

        if ($posts) {
            foreach ($posts as $r) {
                $nestedData['id'] = $r->id;
                $nestedData['name'] = $r->name;
                $nestedData['email'] = $r->email;
                $nestedData['is_read'] = $r->is_read == true ? '<span class="badge badge-success">Read</span>' : ($r->status == '0' ? '<span class="badge badge-danger">Reject</span>' : '<span class="badge badge-warning">Unread</span>');
                $nestedData['action'] = '<a class="btn btn btn-outline-success btn-sm edit" href='.route('admin.user-contacts.view', ['id' => $r->id]).'><i class="far fa-sticky-note"></i> View</a>&nbsp; &nbsp;<a class="btn btn btn-outline-danger btn-sm edit"  onClick="deleteContact('.$r->id.')"> <i class="fas fa-trash"></i> Delete</a>';
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

    public function viewContact(Request $request)
    {
        $contact = Contact::find($request->id);
        // print_r($contact->toArray());

        $replyContact = $contact->reply;
// print_r($replyContact);
        return view('admin.user-contact.view', compact('contact', 'replyContact'));
    }

    public function readContact(Request $request)
    {
        $contact = Contact::find($request->id);
        $contact->is_read = $request->is_read;
        $contact->save();

        return redirect()->route('admin.user-contacts.index')
            ->with('success', 'Status Updated Successfully!');
    }

    public function replyContact(Request $request)
    {
        $contact = Contact::find($request->id);

        ContactReply::create([
            'contact_id' => $contact->id,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        $contact->is_read = 1;
        $contact->save();

        $mailData = [
            'message' => $request->message,
            'name' => $contact->name,
            'subject' => $request->subject,
        ];

        try {
            Mail::to($request->email)->send(new UserContactReply($mailData));
        } catch (\Exception $e) {
            Log::debug($e->getMessage());
        }

        return redirect()->back()
            ->with('success', 'Contact Message Reply Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Contact::find($request->id)->delete();

        return response()->json(['success' => 'User Contact Delete successfully!']);
    }
}
