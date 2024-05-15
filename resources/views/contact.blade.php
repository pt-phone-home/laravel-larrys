@extends('master')

@section('title')
Contact | Larry's DIY
@endsection

@section('content')
<div class="banner-small">

    <h1>Contact <span> Larry's </span></h1>

</div>

<div class="contact-heading-container">
    <div class="contact-heading">
        <h1 class="">We would love to hear from you</h1>
    </div>
</div>

<div class="contact-form-container">

    <h2 class="">Send us a message</h2>
    <p class="">Use the contact form below to ask us a question or place an order. Please provide your full name, email address and contact number so that we can get in touch. Also, please give as much detail in the box provided about your question or your order.</p>

    <form action="/contact" method="POST" class="form">
        @csrf
        @include('inc.messages')
        <div class="form-group">
            <label for="name" class="">Name:</label>
        <input type="text" name="name" placeholder="Your name" class="" required value="{{old('name')}}">
        </div>

        <div class="form-group">
            <label for="email" class="">Email:</label>
        <input type="email" name="email" placeholder="Your email" class="" required value="{{old('email')}}">
        </div>

        <div class="form-group">
            <label for="number" class="">Contact Number:</label>
        <input type="number" name="number" class="" value="{{old('number')}}" placeholder="08......">
        </div>
        <div class="form-group">
            <label for="message">Your Message: </label>
        <textarea name="message" id="message" cols="30" rows="10" placeholder="Please enter your order or comments here" required>{{old('message')}}</textarea>
        </div>
<label for="ReCaptcha">Please TICK THIS BOX to let us know you are Human!:</label>
{!! NoCaptcha::renderJs() !!}
{!! NoCaptcha::display(array('required' => 'required')) !!}
  {{-- </div>
</div> --}}

        <button>Send</button>

        <i class="far fa-envelope"></i>
    </form>


</div>

<div class="contact-divider">

</div>

<div class="map-opening-container">
    <div class="map-opening">
        <div class="map-opening-heading">
            <h2 class="">Get in touch or drop in and see us</h2>
            <p class="">Call in and see us at our premises at 17, Gracepark Road (Richmond Rd end), Drumcondra, Dublin 9 or send us an email to info@larrysdiy.ie, or phone us on 01 837 3490</p>
        </div>

        <div class="map" id="map">

        </div>

        <div class="opening ml-4">
           {{-- <h1>Our Opening Times</h1> --}}
           <h1>From Tuesday 5th October 2021, our opening ours will change to:</h1>
           <table>
               <tr>
                   <td>Monday</td>
                   <td>Closed</td>
               </tr>
               <tr>
                   <td>Tuesday</td>
                   {{-- <td>9am - 5:30pm</td> --}}
                   <td>10am - 5pm</td>
               </tr>
               <tr>
                   <td>Wednesday</td>
                   {{-- <td>9am - 5:30pm</td> --}}
                   <td>10am - 5pm</td>
               </tr>
               <tr>
                   <td>Thursday</td>
                   {{-- <td>9am - 5:30pm</td> --}}
                   <td>10am - 5pm</td>
               </tr>
               <tr>
                   <td>Friday</td>
                   {{-- <td>9am - 5:30pm</td> --}}
                   <td>10am - 5pm</td>
               </tr>
               <tr>
                   <td>Saturday</td>
                   {{-- <td>9am - 4pm</td> --}}
                   <td>10am - 2pm</td>
               </tr>
               <tr>
                   <td>Sunday</td>
                   <td>Closed</td>
               </tr>
               <tr>
                   <td>Bank Holidays</td>
                   <td>Closed</td>
               </tr>
           </table>
           <p>Closed daily for lunch between <strong>1pm and 2pm</strong></p>
           <p class="opening-notice">
            <strong>Larry's DIY well be closed for holidays from 2pm on Saturday 25th of May, reopening at 10am on Wednesday 5th of June</strong>
           </p>
        </div>

    </div>
</div>

@endsection

@section('js')
<script>
        function initMap() {
          // The location of Larry's DIY
          var lar = { lat: 53.368928, lng: -6.24979 };
          // The map, centered at Uluru
          var map = new google.maps.Map(document.getElementById("map"), {
            zoom: 14,
            center: lar,
          });
          // The marker, positioned at Larrys
          var marker = new google.maps.Marker({ position: lar, map: map });
        }
      </script>
      <script
        async
        defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtbJayjrxT9C_mqWSebyR4DxEIi7cRl3g&callback=initMap"
      ></script>
@endsection
