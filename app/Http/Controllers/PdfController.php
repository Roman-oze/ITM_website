<?php

namespace App\Http\Controllers;

use App\Models\NoticeBoard;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use PHPUnit\Framework\TestStatus\Notice;

class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function pdf_generate()
    {

        $notices = NoticeBoard::get();
        $data = [

            'university' => 'Daffodil International University (DIU)',
            'address' => 'Daffodil Smart City, Birulia, Savar, Dhaka-1216, Bangladesh',
            'department' => 'Information Technology & Management',
            'name' => '(Ms. Nusrat Jahan)',
            'position' => 'Head of ITM Department',
            'date' => date('m/d/y'),
            'notices' => $notice,



        ];
        $pdf = Pdf::loadView('pdf.invoice', $data);
        return $pdf->download('itm.pdf');
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
