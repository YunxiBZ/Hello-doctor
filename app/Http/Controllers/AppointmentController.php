<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Practitioner;
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
            $canceledAppointments = [];
            $pastAppointments = [];
            foreach ($appointments as $appointment) {
                // Carbon::parse() is a method for transform string into time format
                $meetTime = Carbon::parse($appointment->meet_at);
                $now = Carbon::now();
                // gt() is a Carbon method to compare two date values
                if ($meetTime->gt($now) && $appointment->status === 'active') {
                    array_push($futureAppointments, $appointment);
                } elseif ($appointment->status === 'canceled') {
                    array_push($canceledAppointments, $appointment);
                } else {
                    array_push($pastAppointments, $appointment);
                }
            }
        }

        return view('appointment.patient', [
            "futureAppointments" => $futureAppointments,
            "canceledAppointments" => $canceledAppointments,
            "pastAppointments" => $pastAppointments
        ]);
    }

    /**
     * Show the form for creating a new appointment.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $practitionerSelected = Practitioner::where('id', $request->practitioner)->first();
        $time = $request->time;
        $date = Carbon::parse("$request->date $time:00 ");

        // validate if the appointment is available
        $appointmentsByPractitionerSelected = $practitionerSelected->appointments;
        $now = Carbon::now();
        foreach ($appointmentsByPractitionerSelected as $appointment) {
            if (Carbon::parse($date)->gt($now) && Carbon::parse($appointment->meet_at)->ne($date)) {
                return view('appointment.confirmation', [
                    'practitioner' => $practitionerSelected,
                    'date' => $date,
                    'time' => $time,
                    'messageError' => '',
                ]);
            } else {
                return view('appointment.confirmation', [
                    'practitioner' => $practitionerSelected,
                    'date' => $date,
                    'time' => $time,
                    'messageError' => 'n\'est pas disponible, Veuillez choisir un autre.',
                ]);
            }
        }
    }

    /**
     * Store a newly created appontment in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patientId = Auth::user()->patient->id;
        $practitionerSelected = Practitioner::where('id', $request->practitioner)->first();
        $dateSelected = Carbon::parse("$request->date");
        $newAppointment = new Appointment();
        //TODO should create a textarea for get motif
        $newAppointment->reason = "default";
        $newAppointment->meet_at = $dateSelected;
        $newAppointment->status = "active";
        $newAppointment->patient_id = $patientId;
        $newAppointment->practitioner_id = $practitionerSelected->id;
        $newAppointment->save();
        return redirect()->to('appointments');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd($id);
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
