@extends('layouts.app')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">

            <div class="name">
                <h2>{{ $booking->name }}</h2>
            </div>

            {{ $booking->phone }}
            {{ $booking->address }}
            {{ $booking->wifi }}
            {{ $booking->desc }}

        </div>
    </div>
@endsection
