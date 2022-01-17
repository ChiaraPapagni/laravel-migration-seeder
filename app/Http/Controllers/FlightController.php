<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flights = Flight::paginate(12);
        return view('flights.index', compact('flights'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function show(Flight $flight)
    {
        return view('flights.index', compact('flight'));
    }
}