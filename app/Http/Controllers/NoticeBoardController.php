<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NoticeBoard;

class NoticeBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $notices = NoticeBoard::all();
       return view('notice-board.index', compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('notice-board.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        $notice = new NoticeBoard();
        $notice->title = $request->input('title');
        $notice->content = $request->input('content');
        $notice->save();
        return redirect()->route('notice.index')->with('success', 'Notice Board created successfully');



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $notice = NoticeBoard::find($id);
       return view('notice-board.edit', compact('notice'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            ]);

            // $notice = NoticeBoard::find($id);
            // $notice->title = $request->input('title');
            // $notice->content = $request->input('content');
            // $notice->save();
            // return redirect()->route('notice.index')->with('success', 'Notice Board updated successfully');
            $notice['title']=$request->title;
            $notice['content']=$request->content;
            NoticeBoard::where('id',$id)->update($notice);
            return redirect('/notices');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $notice = NoticeBoard::where('id',$id)->delete();
        return redirect()->back();
    }
}
