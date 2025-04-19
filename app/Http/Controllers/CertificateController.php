<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Certificate;
use Barryvdh\DomPDF\Facade\Pdf;

class CertificateController extends Controller
{
    public function showForm()
    {
        return view('certificate_form');
    }

    public function preview(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'office_agency' => 'required|string',
            'appearance_date' => 'required|date',
            'purpose' => 'required|string',
            'issued_date' => 'required|date',
        ]);

        return view('certificate_preview', compact('data'));
    }

    public function generate(Request $request)
{
    $data = $request->only(['name', 'office_agency', 'appearance_date', 'purpose', 'issued_date']);

    // Optional: Save to database here if needed
    Certificate::create($data);

    $pdf = Pdf::loadView('certificate_template', $data);

    if ($request->input('action') === 'preview') {
        return $pdf->stream('Certificate_' . $data['name'] . '.pdf');
    }

    return $pdf->download('Certificate_' . $data['name'] . '.pdf');
}


    public function history()
    {
        $certificates = Certificate::latest()->get();
        return view('certificate_history', compact('certificates'));
    }
}
