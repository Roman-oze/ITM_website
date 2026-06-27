<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NoticeBoard;

class NoticeBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function notice(){
        $notices = NoticeBoard::all();
        return view('notice-board.notice', compact('notices'));
    }
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
        // Validate the request data
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        // Find the notice by ID
      $data['title'] = $request->title;
      $data['content'] = $request->content;

      NoticeBoard::where('id',$id)->update($data);

        // Redirect with a success message
        return redirect()->route('notice.index')->with('success', 'Notice Board updated successfully!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $notice = NoticeBoard::where('id',$id)->delete();
        return redirect()->route('notice.index')->with('success','Deleted Successfully !');
    }
}
