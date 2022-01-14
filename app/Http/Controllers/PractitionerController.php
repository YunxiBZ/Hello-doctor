<?php

namespace App\Http\Controllers;

use App\Models\Specialty;
use App\Models\Practitioner;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Carbon\CarbonImmutable;

class PractitionerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $request->validate([
            'specialty' => ['required'],
            'city' => ['required'],
        ]);
        // get specialty choosed by request body
        $specialty_id = $request->specialty;
        $specialty = Specialty::where('id', $specialty_id)->first()->name;
        // get city choosed by request body
        $city = $request->city;
        // filters practitioners by city
        $practitioners = Practitioner::where('city', $city)
                                    //with relationship table 'specialty' data
                                    ->with('specialty')
                                    ->where('specialty_id', $specialty_id)
                                    ->get();

        // Get the future 5 work days with Carbon
        $today = CarbonImmutable::now()->locale('fr_FR');

        $weekdays = array();
        for ($i = 0; $i < 7; $i++) {
            if ($today->add($i, 'day')->isWeekday()) {
                array_push($weekdays, $today->add($i, 'day'));
            }
        }

        // not found a practitioner
        if (!$practitioners->first()) {
            return view('search-result.index', [
                "city" => $city,
                "specialty" => $specialty,
                "practitioners" => $practitioners,
                "weekdays" => $weekdays,
                "message" => "Désolés, pour l'instant, il n'y a pas de medecin disponible dans votre recheche."
            ]);
        }
        // found a practitioner
        return view('search-result.index', [
            "practitioners" => $practitioners,
            "city" => $city,
            "specialty" => $specialty,
            "weekdays" => $weekdays,
            "message" => ""
        ]);
    }
}
