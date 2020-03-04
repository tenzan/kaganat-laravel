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

    public function show(Booking $booking)
    {
        return view('bookings.show', ['booking' => $booking]);
    }

    public function create()
    {
        return view('bookings.create');
    }

    public function store()
    {
        Booking::create($this->validateBooking());

        return redirect('/bookings');
    }

    public function edit(Booking $booking)
    {
        return view('bookings.edit', compact('booking'));
    }

    public function update(Booking $booking)
    {
        $booking->update($this->validateBooking());

        return redirect('/bookings/' . $booking->id);
    }

    public function destroy()
    {

    }

    /**
     * @return array
     */
    public function validateBooking(): array
    {
        return request()->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'desc' => 'required'
        ]);
    }
}
