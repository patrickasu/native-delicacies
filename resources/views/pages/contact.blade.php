@extends('layouts.layout')

@section('content')
    <div class="content-section">  
        <div class="content">  
            <form id="contact" method="POST" action="https://formspree.io/patrickasu@gmail.com">
                @csrf
                <h3>Get in Touch With Us</h3>
                <h4>For your reservationnd orders you can either call us on {{$settings["general_setting"]->phone_number}} or you can email us on {{$settings["general_setting"]->email}}.</h4> 
                <fieldset>
                    <input id="inputfname" type="text" class="form-control form-control-lg @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" placeholder="First name" tabindex="1" required autofocus>
                    @error('fname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </fieldset>     
                <fieldset>
                    <input id="inputlname" type="text" class="form-control form-control-lg @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" placeholder="Last name" tabindex="2" required autofocus>
                    @error('lname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </fieldset>
                <fieldset>
                <input id="inputemail" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Your Email Address" tabindex="3" required autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </fieldset>
                <fieldset>
                <input id="inputphone_number" type="tel" class="form-control form-control-lg @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" placeholder="Your Phone Number" tabindex="4" required autofocus>
                    @error('phone_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </fieldset>
                <fieldset>
                    <textarea name="message" placeholder="Type your Message Here...." tabindex="5" required></textarea>
                </fieldset>
                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Send Message</button>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
