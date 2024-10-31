<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\MenuPermission;
use Illuminate\Auth\Events\Validated;

class MenuController extends Controller
{
    // Display the menu items (only those the user has view permission for)
    // Show form to create a new menu (admin and super-admin only)


    public function create()
    {
        // $this->authorizeAction('can_create');
        $menus = Menu::whereNull('parent_id')->get();


        return view('setup-menu.menus.create', compact('menus'));
    }



    public function index()
{
    // $user = auth()->user();
    // $menus = Menu::whereNull('parent_id')->get();
    // $userMenus = Menu::where('user_id', $user->id)->get();
    // $permissions = MenuPermission::where('user_id', $user->id)->get();
    // return view('setup-menu.menus.index', compact('menus', 'userMenus', 'permissions
    // '));


    $userRoleId = Auth::user()->role_id;

    // Query the menus with role-based permissions
    $menus = Menu::with(['children', 'permissions' => function ($query) use ($userRoleId) {
        $query->where('role_id', $userRoleId);
    }])
    ->whereNull('parent_id')  // Get only parent menus initially
    ->orderBy('id')           // Order by the desired field
    ->get();
    return view('setup-menu.menus.index', compact('menus'));


    // Fetch menus with their permissions
    // $menus = Menu::with('permissions') // Eager load permissions if you have defined a relationship
    //     ->get()
    //     ->filter(function ($menu) use ($user) {
    //         // Check if the user has permissions for the menu
    //         $permission = MenuPermission::where('role', $user->role)
    //             ->where('menu_id', $menu->id)
    //             ->whereNotIn('name','Notification')
    //             ->first();

    //         // Include menu if the user has view permission or is a super-admin
    //         return $user->role === 'super-admin' || ($permission && $permission->view);
    //     })
    //     ->groupBy('parent_id'); // Group menus by parent_id

    // return view('setup-menu.index', compact('menus'));


}

    // public function index()
    // {
    //     $user = auth()->user();
    //     $menus = Menu::all()->filter(function ($menu) use ($user) {
    //         $permission = MenuPermission::where('role', $user->role)
    //             ->where('menu_id', $menu->id)
    //             ->first();

    //         // Only include menu if the user has view permission or is a super-admin
    //         return $permission && ($permission->view || $user->role == 'super-admin');
    //     });

    //     return view('setup-menu.index', compact('menus'));


    // }


    // Store the new menu item (admin and super-admin only)
    public function store(Request $request)
    {

           // Validate the form data
        //    $request->validate([
        //     'icon' => 'nullable|string',
        //     'name' => 'required|string|max:255',
        //     'link' => 'nullable|string|max:255',
        //     'parent_id' => 'nullable|exists:menus,id'

        // ]);

        // // Create a new menu item
        // Menu::create([
        //     'icon' => $request->icon,
        //     'name' => $request->name,
        //     'link' => $request->link,
        //     'parent_id' => $request->parent_id,

        // ]);
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',         // Icon is optional
            'link' => 'nullable|string|max:255',         // Link is optional
            'parent_id' => 'nullable|integer|exists:menus,id',
            'sort_order' => 'nullable|integer',          // Sort order is optional
        ]);

        Menu::create([
            'name' => $request->name,
            'icon' => $request->icon,                    // Nullable
            'link' => $request->link,                    // Nullable
            'parent_id' => $request->parent_id,          // Nullable for top-level menus
            'sort_order' => $request->sort_order,        // Nullable
        ]);
        // Redirect to a specific route with a success message
        return redirect()->route('menus.create')->with('success', 'Menu item created successfully!');


    //     $request->validate([
    //          'icon' => 'nullable|string',
    //         'name' => 'required|string',
    //         'link' => 'nullable|string', // Allow plain text input
    //     ]);

    // $data['icon'] =$request->icon;
    //  $data['name'] =$request->name;
    //  $data['link'] =$request->link;

    // Menu::create(
    //     $data
    // );


    // return redirect()->back()->with('success', 'Menu item created successfully.');

    }

    // Show form to edit an existing menu item (admin and super-admin only)
    public function edit($id)
    {
        $this->authorizeAction('can_edit');
        $menu = Menu::findOrFail($id);
        return view('menus.edit', compact('menu'));
    }

    // Update the menu item (admin and super-admin only)
    public function update(Request $request, $id)
    {
        $this->authorizeAction('can_edit');
        $request->validate([
            'name' => 'required|string',
           'link' => 'required|string',
        ]);

        $menu = Menu::findOrFail($id);
        $menu->update($request->only(['name', 'link']));
        return redirect()->route('menus.index')->with('success', 'Menu item updated successfully.');
    }

    // Delete the menu item (super-admin only)
    public function destroy($id)
    {
        $this->authorizeAction('can_delete');
        $menu = Menu::findOrFail($id);
        $menu->delete();
        return redirect()->route('menus.index')->with('success', 'Menu item deleted successfully.');
    }

    // Helper function to check action permissions
    private function authorizeAction($permission)
    {
        $role = Auth::user()->role;
        $menuPermission = MenuPermission::where('role', $role)
            ->where('menu_id', request()->route('id'))
            ->first();

        if (!$menuPermission || !$menuPermission->$permission) {
            abort(403, 'Unauthorized action.');
        }
    }
}
