<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function listereservation()
    {
        $reservation = Reservation::all();

        return view('forme.listereservation', [
            'reservation' => $reservation,
        ]);
    }
    public function listereservationapi()
    {
        $reservation = Reservation::all();
        return response()->json($reservation);
    }
    public function activate(Reservation $reservation)
    {
        $reservation->update(['status' => 1]);
        return redirect()->back();
    }

    public function deactivate(Reservation $reservation)
    {
        $reservation->update(['status' => 0]);
        return redirect()->back();
    }

    public function index()
    {
        //
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
