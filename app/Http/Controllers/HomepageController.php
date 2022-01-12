<?php

namespace App\Http\Controllers;

use App\Models\Specialty;
use App\Models\Practitioner;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    /**
     * Display Homepage with specialties and patient city.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('homepage.index', [
            "specialties" => Specialty::all(),
            "practitioners" => Practitioner::all()
        ]);
    }
}
