<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Renderable
     */
    public function index()
    {
        $records = Post::latest()->paginate();
        return view('admin.posts.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Renderable
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $validated = $this->validate($request, [
            'category_id' => ['required'],
            'title' => ['required'],
            'body' => ['required'],
        ]);
        Post::create($validated);
        return redirect()->action([self::class, 'create']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Renderable
     */
    public function show($id)
    {
        $data = Post::findOrFail($id);
        return view('admin.posts.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Renderable
     */
    public function edit($id)
    {
        $data = Post::findOrFail($id);
        $categories = Category::all();
        return view('admin.posts.edit', compact('data', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $validated = $this->validate($request, [
            'category_id' => ['required'],
            'title' => ['required'],
            'body' => ['required'],
        ]);
        $data = Post::findOrFail($id);
        $data->update($validated);
        return redirect()->action([self::class, 'edit'], $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->action([self::class, 'index']);
    }
}
