<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the appointments.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get the appointments of the users login with Auth::user()
        $appointments = Auth::user()->practitioner->appointments ??
                        Auth::user()->patient->appointments;

        if ($appointments) {
            // differentiate appointments in the past or future
            $futureAppointments = [];
            $pastAppointments = [];
            foreach ($appointments as $appointment) {
                // Carbon::parse() is a method for transform string into time format
                $meetTime = Carbon::parse($appointment->meet_at);
                $now = Carbon::now();
                // gt() is a Carbon method to compare two date values
                if ($meetTime->gt($now) && $appointment->status === 'active') {
                    array_push($futureAppointments, $appointment);
                } else {
                    array_push($pastAppointments, $appointment);
                }
            }
        }

        return view('appointment.patient', [
            "futureAppointments" => $futureAppointments,
            "pastAppointments" => $pastAppointments
        ]);
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
     * Update the appointment status to 'canceled' in storage for cancel the appointment.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $appointment = Appointment::where('id', $id)->first();
        $appointment->status = 'canceled';
        $appointment->update();
        return redirect()->back();
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
}
