<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Storage;

class BlogController extends Controller
{
    // public function index (){
    //     return view('blog.index');
    // }



    public function blog()
    {
        $videos = Blog::latest()->take(6)->get();

        return view('blog.blog', compact('videos'));
    }

    public function index()
    {
        $videos = Blog::latest()->get();

        return view('blog.index', compact('videos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            'title' => 'required|max:255',

            'category' => 'required|max:100',

            'description' => 'required',

            'video' => 'required|mimes:mp4,mov,avi,mkv,webm|max:51200',
        ]);

        $thumbnail = null;

        if ($request->hasFile('thumbnail')) {

            $thumbnail = $request->file('thumbnail')
                ->store('blogs/thumbnails', 'public');
        }

        $video = $request->file('video')
            ->store('blogs/videos', 'public');

        Blog::create([

            'thumbnail' => $thumbnail,

            'title' => $request->title,

            'category' => $request->category,

            'description' => $request->description,

            'video' => $video,

        ]);

        return redirect()
            ->route('blog.index')
            ->with('success', 'Video Blog created successfully.');
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            'title' => 'required|max:255',

            'category' => 'required|max:100',

            'description' => 'required',

            'video' => 'nullable|mimes:mp4,mov,avi,mkv,webm|max:51200',
        ]);

        $data = [

            'title' => $request->title,

            'category' => $request->category,

            'description' => $request->description,

        ];

        if ($request->hasFile('thumbnail')) {

            if (
                $blog->thumbnail &&
                \Storage::disk('public')->exists($blog->thumbnail)
            ) {

                \Storage::disk('public')->delete($blog->thumbnail);
            }

            $data['thumbnail'] = $request->file('thumbnail')
                ->store('blogs/thumbnails', 'public');
        }

        if ($request->hasFile('video')) {

            if (\Storage::disk('public')->exists($blog->video)) {

                \Storage::disk('public')->delete($blog->video);
            }

            $data['video'] = $request->file('video')
                ->store('blogs/videos', 'public');
        }

        $blog->update($data);

        return redirect()
            ->route('blog.index')
            ->with('success', 'Video Blog updated successfully.');
    }
    public function destroy(Blog $blog)
    {
        if (
            $blog->thumbnail &&
            Storage::disk('public')->exists($blog->thumbnail)
        ) {

            \Storage::disk('public')->delete($blog->thumbnail);
        }

        if (\Storage::disk('public')->exists($blog->video)) {

            \Storage::disk('public')->delete($blog->video);
        }

        $blog->delete();

        return redirect()
            ->route('blog.index')
            ->with('success', 'Video Blog deleted successfully.');
    }
}
