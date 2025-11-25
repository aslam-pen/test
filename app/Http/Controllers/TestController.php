<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;
use Illuminate\Support\Facades\Http;

class TestController extends Controller
{
    public function pdf()
    {
        return view('pdf');
    }


    public function pdf2()
    {
        $html = view('pdf')->render();

        $response = Http::post('https://api.html2pdf.app/v1/generate', [
            'html' => $html,
            'apiKey' => 'YOUR_API_KEY'
        ]);

        $pdfPath = public_path('invoice.pdf');
        file_put_contents($pdfPath, $response->body());

        return response()->download($pdfPath);
    }
}
