@extends('layouts.layout')

@section('content')
    <div class="content-section">  
        <div class="content">  
            <form id="contact" method="POST" action="/reservations">
                @csrf
                <h3>Get On The List</h3>
                <h4>Please Note: This is not a reservation. you will be added to the current wait list. You may have a short wait once you arrive while we prepare your table.</h4>
                <fieldset>
                    <input id="inputfname" type="text" class="form-control form-control-lg @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" placeholder="First name" tabindex="1" autofocus>
                    @error('fname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </fieldset>     
                <fieldset>
                    <input id="inputlname" type="text" class="form-control form-control-lg @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" placeholder="Last name" tabindex="2" autofocus>
                    @error('lname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </fieldset>
                <fieldset>
                <input id="inputemail" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Your Email Address" tabindex="3" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </fieldset>
                <fieldset>
                <input id="inputphone_number" type="tel" class="form-control form-control-lg @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" placeholder="Your Phone Number" tabindex="4" autofocus>
                    @error('phone_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </fieldset>
                <div class="form-group">
                <label for="guestsinput">How many Guest</label>
                <select class="form-control form-control-lg @error('guests_total') is-invalid @enderror" name="guests_total" id="guestsinput">
                  <option disabled selected>Please select...</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                @error('guests_total')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              {{-- <div class="form-group">
                <label for="timeinput">What Time</label>
                <select class="form-control form-control-lg @error('time') is-invalid @enderror" name="time" id="timeinput">
                  <option value="6">6:00 PM</option>
                  <option value="7">7:00 PM</option>
                  <option value="8">8:00 PM</option>
                  <option value="9">9:00 PM</option>
                  <option value="10">10:00 PM</option>
                </select>
                @error('time')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div> --}}
              <div class="form-group">
                <label for="timeinput">What Time</label>
                <select class="form-control form-control-lg @error('time') is-invalid @enderror" name="time" id="timeinput">
                  <option disabled selected>Please select...</option>
                  <option value="6">6:00 PM</option>
                  <option value="7">7:00 PM</option>
                  <option value="8">8:00 PM</option>
                  <option value="9">9:00 PM</option>
                  <option value="10">10:00 PM</option>
                </select>
                @error('time')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
                <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
