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
    $user = Auth::user();
    $roleId = $user->role_id;

    // Fetch menus with permissions based on user role
    $menus = Menu::with(['permissions' => function ($query) use ($roleId) {
        $query->where('role_id', $roleId);
    }])
    ->whereNull('parent_id') // Only top-level menus
    ->orderBy('order')
    ->get();


    return view('setup-menu.menus.index',[
        'menus' => $menus,

    ]);
}

        public function display(){

            $menus = Menu::all();



            return view('setup-menu.menus.display',compact('menus'));
        }


    // Store the new menu item (admin and super-admin only)
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',         // Icon is optional
            'link' => 'nullable|string|max:255',         // Link is optional
            'parent_id' => 'nullable|integer|exists:menus,id',
            'order' => 'nullable|integer',          // Sort order is optional
        ]);

       $menuData= Menu::create([
            'name' => $request->name,
            'icon' => $request->icon,                    // Nullable
            'link' => $request->link,                    // Nullable
            'parent_id' => $request->parent_id,          // Nullable for top-level menus
            'order' => $request->order,        // Nullable
        ]);
        MenuPermission::create([
            'menu_id' => $menuData->id,
            'role_id' => 5,6,
            'can_create' => $request->input('permissions.can_create', 0),
            'can_edit' => $request->input('permissions.can_edit', 0),
            'can_update' => $request->input('permissions.can_update', 0),
            'can_delete' => $request->input('permissions.can_delete', 0),
        ]);
        // Redirect to a specific route with a success message
        return redirect()->route('menus.index')->with('success', 'Menu created successfully!');

    }




    public function edit($id)
    {
        $menu = Menu::findOrFail($id); // Find the menu by ID
        $menus = Menu::whereNull('parent_id')->get(); // Get top-level menus for the parent dropdown

        return view('setup-menu.menus.edit', compact('menu', 'menus'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',
            'link' => 'nullable|string|max:255',
            'parent_id' => 'nullable|exists:menus,id',
            'order' => 'nullable|integer',
        ]);

        // Find the menu by ID and update it
        $menu = Menu::findOrFail($id);
        $menu->name = $request->input('name');
        $menu->icon = $request->input('icon');
        $menu->link = $request->input('link');
        $menu->parent_id = $request->input('parent_id');
        $menu->order = $request->input('order');
        $menu->save();

        return redirect()->route('menus.index')->with('success', 'Menu updated successfully!');
    }



            // Delete the menu item (super-admin only)
            public function destroy($id)
        {
            // Find and delete the menu
            $menu = Menu::findOrFail($id);

            // Check if menu has children and prevent deletion if it does
            if ($menu->children()->count() > 0) {
                return redirect()->back()->with('error', 'Cannot delete a menu with submenus.');
            }

            $menu->delete();

            return redirect()->route('menus.index')->with('success', 'Menu deleted successfully!');
        }

}
