<?php



namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;


class BlogController extends Controller
{
    public function index()
    {
        // $blogPosts = BlogPost::all();   

        // Pass the data to the 'index' view
        // return view('admin.blogs.index', compact('blogPosts'));
        return view('admin.blogs.index');
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required',
            'introduction' => 'required',
            'content' => 'required',
            'first_image_url' => 'required|url',
            'first_image_caption' => 'nullable|max:255',
            'second_image_url' => 'required|url',
            'second_image_caption' => 'nullable|max:255',
            'third_image_url' => 'required|url',
            'third_image_caption' => 'nullable|max:255',
        ]);
        $blogPost =  new BlogPost();
        $blogPost->title = $request->title;
        $blogPost->slug = $request->slug;
        $blogPost->introduction = $request->introduction;
        $blogPost->content = $request->content;
        $blogPost->first_image_url = $request->first_image_url;
        $blogPost->second_image_url = $request->second_image_url;
        $blogPost->third_image_url = $request->third_image_url;
        $blogPost->first_image_caption = $request->first_image_caption;
        $blogPost->first_image_alt = $request->first_image_alt;
        $blogPost->second_image_caption = $request->second_image_caption;
        $blogPost->second_image_alt = $request->second_image_alt;
        $blogPost->third_image_caption = $request->third_image_caption;
        $blogPost->third_image_alt = $request->third_image_alt;
        $blogPost->save();
        // BlogPost::create($validatedData);
        // echo "<pre>";
        // print_r($request->all());
        return redirect()->route('admin.blogs.index')->with('success', 'Blog post created successfully!');
    }


    public function show(Request $request)
    {
        $columns = [
            0 => 'id',
            1 => 'title',
            2 => 'introduction',
            3 => 'action',
        ];

        $totalData = BlogPost::count();
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {
            $blogPosts = BlogPost::offset($start)
                ->limit($limit)
                ->orderBy('id', 'desc')
                ->get();
            $totalFiltered = BlogPost::count();
        } else {
            $search = $request->input('search.value');
            $blogPosts = BlogPost::where('title', 'like', "%{$search}%")
                ->orWhere('introduction', 'like', "%{$search}%")
                ->orWhere('id', 'like', "%{$search}%")
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
            $totalFiltered = BlogPost::where('title', 'like', "%{$search}%")
                ->orWhere('introduction', 'like', "%{$search}%")
                ->orWhere('id', 'like', "%{$search}%")
                ->count();
        }

        $data = [];

        if ($blogPosts) {
            foreach ($blogPosts as $key => $blogPost) {
                $nestedData['id'] = $blogPost->id;
                $nestedData['title'] = $blogPost->title;
                $nestedData['introduction'] = $blogPost->introduction;
                $nestedData['action'] = '<a class="btn btn-outline-primary btn-sm" href="' . route('admin.blogs.edit', $blogPost->id) . '"><i class="fas fa-edit"></i> Edit</a>&nbsp;<button class="btn btn-outline-danger btn-sm" onclick="deleteBlog(' . $blogPost->id . ')"><i class="fas fa-trash"></i> Delete</button>&nbsp;';
                $data[] = $nestedData;
            }
        }

        $json_data = [
            'draw' => intval($request->input('draw')),
            'recordsTotal' => intval($totalData),
            'recordsFiltered' => intval($totalFiltered),
            'data' => $data,
        ];

        return response()->json($json_data);
    }

    public function edit($id)
    {
        $blogPost = BlogPost::find($id);

        return view('admin.blogs.update', compact('blogPost'));
    }



    public function update(Request $request)
    {
        $blogPost = BlogPost::find($request->id);

        if (!$blogPost) {
            return redirect()
                ->route('admin.blogs.index')
                ->with('error', 'Blog Post not found!');
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string',
            'introduction' => 'required|string',
            'content' => 'required|string',
            'first_image_url' => 'required|string|max:255',
            'second_image_url' => 'required|string|max:255',
            'third_image_url' => 'required|string|max:255',
            'first_image_caption' => 'nullable|string|max:255',
            'second_image_caption' => 'nullable|string|max:255',
            'third_image_caption' => 'nullable|string|max:255',
        ]);

        $blogPost->title = $request->title;
        $blogPost->slug = $request->slug;
        $blogPost->introduction = $request->introduction;
        $blogPost->content = $request->content;
        $blogPost->first_image_url = $request->first_image_url;
        $blogPost->second_image_url = $request->second_image_url;
        $blogPost->third_image_url = $request->third_image_url;
        $blogPost->first_image_caption = $request->first_image_caption;
        $blogPost->first_image_alt = $request->first_image_alt;
        $blogPost->second_image_caption = $request->second_image_caption;
        $blogPost->second_image_alt = $request->second_image_alt;
        $blogPost->third_image_caption = $request->third_image_caption;
        $blogPost->third_image_alt = $request->third_image_alt;

        // Handle the image update if provided
        // if ($request->hasFile('image')) {
        //     $request->validate([
        //         'image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Adjust the file types and max size as needed
        //     ]);

        //     $imageName = $request->file('image')->hashName();
        //     $request->file('image')->move(public_path('images'), $imageName);
        //     $blogPost->image = 'images/' . $imageName;
        // }

        $blogPost->save();

        return redirect()
            ->route('admin.blogs.index')
            ->with('success', 'Blog Post updated successfully!');
    }


    public function destroy(Request $request)
    // Code to delete a specific blog post from the database
    {
        BlogPost::find($request->id)->delete();

        return response()->json(['success' => 'Blog Delete successfully!']);
    }
}
