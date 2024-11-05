<?php

namespace App\Http\Controllers;
use App\Models\User;
// use App\Models\auth;
use App\Models\Message;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Scholarship;
use App\Models\Alumni;
use App\Models\Menu;
use App\Models\MenuPermission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;



class DashbaordController extends Controller
{


    private function getStudentAdmissionsData()
    {
        // Sample logic: Get admissions count per month over the past year
        $studentAdmissions = Student::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->whereYear('created_at', now()->year)
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        // Format data for the chart
        $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        $admissionsData = array_fill(0, 12, 0);

        foreach ($studentAdmissions as $entry) {
            $admissionsData[$entry->month - 1] = $entry->count;
        }

        return [
            'labels' => $months,
            'data' => $admissionsData
        ];
    }

    private function getAlumniGrowthData()
    {
        // Sample logic: Get alumni count per year over the past five years
    

            $alumniGrowth = Alumni::selectRaw('pass_year as year, COUNT(*) as count')
        ->whereBetween('pass_year', [now()->subYears(5)->year, now()->year])
        ->groupBy('pass_year')
        ->orderBy('pass_year', 'asc')
        ->get();

        // Format data for the chart
        $years = [];
        $growthData = [];

        foreach ($alumniGrowth as $entry) {
            $years[] = $entry->year;
            $growthData[] = $entry->count;
        }

        return [
            'labels' => $years,
            'data' => $growthData
        ];
    }

       public function dashboard()
    {
            // Get the current user's role
            $roleId = Auth::user()->role_id;

            // Fetch top-level menus with their children, applying permissions
            // Get the authenticated user's role
            $roleId = Auth::user()->role_id;

            // Fetch menus where the user has at least one permission
            $menus = Menu::with(['children' => function ($query) use ($roleId) {
                $query->whereHas('permissions', function ($q) use ($roleId) {
                    $q->where('role_id', $roleId)
                    ->where(function ($q) {
                        $q->where('can_create', true)
                            ->orWhere('can_edit', true)
                            ->orWhere('can_update', true)
                            ->orWhere('can_delete', true);
                    });
                });
            }])
            ->whereNull('parent_id') // Only top-level menus
            ->whereHas('permissions', function ($query) use ($roleId) {
                $query->where('role_id', $roleId)
                    ->where(function ($q) {
                        $q->where('can_create', true)
                            ->orWhere('can_edit', true)
                            ->orWhere('can_update', true)
                            ->orWhere('can_delete', true);
                    });
            })
            ->orderBy('order')
            ->get();

            // {{-- fixed --}}
        // // Assuming the authenticated user has a role assigned
        // $roleId = Auth::user()->role_id;

        // // Step 1: Retrieve menus with access based on role permissions
        // $menus = Menu::with(['children' => function($query) use ($roleId) {
        //                     $query->whereHas('permissions', function($q) use ($roleId) {
        //                         $q->where('role_id', $roleId);
        //                     });
        //                 }])
        //             ->whereNull('parent_id') // Top-level menus
        //             ->whereHas('permissions', function($query) use ($roleId) {
        //                 $query->where('role_id', $roleId);
        //             })
        //             ->orderBy('order')
        //             ->get();
        // {{-- fixed --}}


        $studentCount = Student::count();
        $facultyCount = Teacher::count();
        $alumniCount = Alumni::count();
        $scholarshipCount = Scholarship::count();
        $studentData = $this->getStudentAdmissionsData();

        // Fetch and process data for the Alumni Growth chart
        $alumniData = $this->getAlumniGrowthData();

       return view('dashboard',[
        'studentCount' => $studentCount,
        'facultyCount' => $facultyCount,
        'alumniCount' => $alumniCount,
        'scholarshipCount' => $scholarshipCount,
        'menus' => $menus,
        'studentData' => $studentData,
        'alumniData' => $alumniData,

    ]);
    }


}
