<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Group;

class RelationalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //  $members = Member::with('groups')->get();
        // return view('members.index', compact('members'));
    }
    public function member()
    {
        $members = Member::with('groups')->get();
        return view('members.index', compact('members'));
    }
    public function group()
    {
        return "relational group";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
