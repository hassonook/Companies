<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job_title;
use App\Models\Profession;

class LookupController extends Controller
{
    public function job(Request $request)
    {
        $job = Job_title::create([
            'name' => $request->input('name'),
            'name_ar' => $request->input('nameAr')
        ]);
        return response()->json($job);
    }

    public function profession(Request $request)
    {
        $profession = Profession::create([
            'name' => $request->input('name'),
            'name_ar' => $request->input('nameAr')
        ]);
        return response()->json($profession);
    }
}
