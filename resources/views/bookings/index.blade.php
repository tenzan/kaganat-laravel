@extends('layouts.app')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">

            @foreach($bookings as $booking)
                <div class="content">
                    <div class="title">
                        <a href="/bookings/{{ $booking->id }}">
                            {{ $booking->name }}
                        </a>
                    </div>
                    {{ $booking->address }}
                </div>
            @endforeach
        </div>
    </div>
@endsection
