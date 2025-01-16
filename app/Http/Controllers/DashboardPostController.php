<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
// use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Return Post::where('user_id',auth()->user()->id)->get();
        return view('admin.posts.index',[
            'posts' => Post::where('user_id',auth()->user()->id)->get()
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        // return $request->file('foto')->store('post-images');

        $data = $request->validate([
            'judul' => 'required',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'foto' => 'nullable|image|file|mimes:jpeg,jpg,svg,png,gif|max:2048',
            'body' => 'required'
        ]);

        if ($request->file('foto'))
        {
            $data['foto'] = $request->file('foto')->store('post-images');
        }

        $data['user_id'] = auth()->user()->id;
        Post::create($data);
        return redirect('/dashboard/posts')->withSuccess('Dosen berhasil ditambahkan');
        // $post = new Post();
        // $post->fill($request->all());
        // $store = $post->save();
     
        // if ($store){
        //     return redirect('/dashboard/posts')->withSuccess('Dosen berhasil ditambahkan');

        // }else
        // {
        //     return redirect()->back()->withErrors("Data Gagal Ditambahkan");

        // }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show',[
            'post' => $post
        ]);

        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     *  @param  App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        
        $categories = Category::all();
        return view('admin.posts.edit',compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Post $post)
    {
        $data = $request->validate([
            'judul' => 'required',
            'slug' => 'required|unique:posts,slug,' . $post->id,
            'category_id' => 'required',
            'foto' => 'nullable|image|file|mimes:jpeg,jpg,svg,png,gif|max:2048',
            'body' => 'required'
        ]);
        
        if ($request->file('foto'))
        {
            $data['foto'] = $request->file('foto')->store('post-images');
        }
        $data['user_id'] = auth()->user()->id;
        Post::where('id', $post->id)->update($data);
        return redirect('/dashboard/posts')->withSuccess('Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        // $post = Post::find($post->id);
        // $post->delete();
        Post::destroy($post->id);
        return redirect('/dashboard/posts')->withSuccess('Berhasil di hapus');
    }

    // public function checkSlug(Request $request)
    // {
    //     $slug = SlugService::createSlug(Post::class, 'slug', $request->judul);

    //     return response()->json(['slug'=> $slug]);
    // }
}
