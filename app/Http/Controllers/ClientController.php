<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view client')->only(['index', 'show']);
        $this->middleware('permission:create client')->only(['create', 'store']);
        $this->middleware('permission:update client')->only(['edit', 'update']);
        $this->middleware('permission:delete client')->only(['destroy']);
    }

    /**
     * Display a listing of the resource.
     */
    public function client()
    {
        $clients = Client::latest()->paginate(10);

        return view('components.client-section', compact('clients'));
    }

    public function index()
    {
        $clients = Client::latest()->paginate(10);

        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'  => 'required|string|max:255',
            'link'   => 'required|url|max:255',
            'image'  => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'status' => 'required|in:0,1',
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('uploads/client'), $imageName);
        }

        Client::create([
            'title'  => $request->title,
            'link'   => $request->link,
            'image'  => $imageName,
            'status' => $request->status,
        ]);

        return redirect()
            ->route('clients.index')
            ->with('success', 'Client created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        return view('client.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('client.edit', compact('client'));
    }

    /**
     * Update the specified resource.
     */
public function update(Request $request, $id)
{
    $client = Client::findOrFail($id);

        $request->validate([
            'title'  => 'required|string|max:255',
            'link'   => 'required|url|max:255',
            'image'  => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'status' => 'required|in:0,1',
        ]);

        $imageName = $client->image;

        if ($request->hasFile('image')) {

            $oldImage = public_path('uploads/client/' . $client->image);

            if (File::exists($oldImage)) {
                File::delete($oldImage);
            }

            $image = $request->file('image');

            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('uploads/client'), $imageName);
        }

        $client->update([
            'title'  => $request->title,
            'link'   => $request->link,
            'image'  => $imageName,
            'status' => $request->status,
        ]);

        return redirect()
            ->route('clients.index')
            ->with('success', 'Client updated successfully.');
    }

    /**
     * Remove the specified resource.
     */
    public function destroy($id)
    {
        $client = Client::findOrFail($id);

        $imagePath = public_path('uploads/client/' . $client->image);

        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        $client->delete();

        return redirect()
            ->route('clients.index')
            ->with('success', 'Client deleted successfully.');
    }
}
