<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function download()
    {
        $filePath = public_path('resume.pdf');
        return response()->download($filePath);
    }
}
