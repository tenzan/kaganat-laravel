@extends('layouts.app')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">Update Booking</h1>

            <form method="POST" action="/bookings/{{ $booking->id }}">
                @csrf
                @method('PUT')

                <div class="field">
                    <label for="name" class="label">Name</label>
                    <div class="control">
                        <input type="text" class="input" name="name" id="name" value="{{ $booking->name}}">
                    </div>
                </div>

                <div class="field">
                    <label for="phone" class="label">Phone</label>
                    <div class="control">
                        <input type="text" class="input" name="phone" id="phone" value="{{ $booking->phone }}">
                    </div>
                </div>

                <div class="field">
                    <label for="address" class="label">Address</label>
                    <div class="control">
                        <input type="text" class="input" name="address" id="address" value="{{ $booking->address }}">
                    </div>
                </div>

                <div class="field">
                    <label for="wifi" class="label">Wi-Fi</label>
                    <div class="control">
                        <input type="checkbox" class="form-check" name="wifi" id="wifi"
                               value="1" {{  ($booking->wifi == 1 ? ' checked' : '') }} >
                    </div>
                </div>

                <div class="field">
                    <label for="desc" class="label">Description</label>
                    <div class="control">
                        <textarea class="textarea" name="desc" id="desc">{{ $booking->desc }}</textarea>
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
