<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::latest()->get();

        return view('bookings.index', ['bookings' => $bookings]);
    }

    public function show($id)
    {
        $booking = Booking::find($id);

        return view('bookings.show', ['booking' => $booking]);
    }

    public function create()
    {
        return view('bookings.create');
    }

    public function store()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
