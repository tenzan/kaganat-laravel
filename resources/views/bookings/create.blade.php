@extends('layouts.app')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">New Booking</h1>

            <form method="POST" action="/bookings">
                @csrf

                <div class="field">
                    <label for="name" class="label">Name</label>
                    <div class="control">
                        <input
                            class="input @error('name') is-danger @enderror"
                            type="text"
                            name="name"
                            id="name"
                            value="{{old('name')}}">


                        @error('name')
                        <p class="help is-danger">{{$errors->first('name')}}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label for="phone" class="label">Phone</label>
                    <div class="control">
                        <input class="input @error('phone') is-danger @enderror"
                               type="text"
                               name="phone"
                               id="phone"
                               value="{{old('phone')}}">

                        @error('phone')
                        <p class="help is-danger">{{$errors->first('phone')}}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label for="address" class="label">Address</label>
                    <div class="control">
                        <input class="input @error('address') is-danger @enderror"
                               type="text"
                               name="address"
                               id="address"
                               value="{{old('address')}}">
                    </div>

                    @error('address')
                    <p class="help is-danger">{{$errors->first('address')}}</p>
                    @enderror
                </div>

                <div class="field">
                    <label for="wifi" class="label">Wi-Fi</label>
                    <div class="control">
                        <input class="form-check"
                               type="checkbox"
                               name="wifi"
                               id="wifi"
                               value="{{old('address')}}">
                    </div>
                </div>

                <div class="field">
                    <label for="desc" class="label">Description</label>
                    <div class="control">
                        <textarea
                            class="textarea @error('desc') is-danger @enderror"
                            name="desc"
                            id="desc"
                        >{{old('desc')}}</textarea>

                        @error('desc')
                        <p class="help is-danger">{{$errors->first('desc')}}</p>
                        @enderror
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
