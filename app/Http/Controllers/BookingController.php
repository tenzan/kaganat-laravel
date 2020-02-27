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
        $booking = new Booking();
        $booking->user_id = 1;
        $booking->name = request('name');
        $booking->phone = request('phone');
        $booking->wifi = request('wifi');
        $booking->address = request('address');
        $booking->desc = request('desc');
        $booking->save();

        return redirect('/bookings');
    }

    public function edit()
    {
        return view('bookings.edit');
    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
