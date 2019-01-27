@extends('master')

@section('title')
Contact | Larry's DIY
@endsection

@section('content')
<div class="banner-small">

    <h1>Contact <span> Larry's </span></h1>

</div>

<div class="contact-heading-container gc-full ds-g gtc-1 h-10">
    <div class="contact-heading w-80 js-c ds-g">
        <h1 class="js-c as-c">We would love to hear from you</h1>
    </div>
</div>

<div class="contact-form-container gc-full ds-g gtc-1 h-60">
    
    <h2 class="ta-c mb-2">Send us a message</h2>
    <p class="w-80 js-c mb-2">Use the contact form below to ask us a question or place an order. Please provide your full name, email address and contact number so that we can get in touch. Also, please give as much detail in the box provided about your question or your order.</p>

    <form action="" class="form">
        <div class="form-group">
            <label for="name" class="">Name:</label>
            <input type="text" name="name" placeholder="Your name" class="" required>
        </div>

        <div class="form-group">
            <label for="email" class="">Email:</label>
            <input type="email" name="email" placeholder="Your email" class="" required>
        </div>

        <div class="form-group">
            <label for="number" class="">Contact Number:</label>
            <input type="number" name="number" class=""  placeholder="08......">
        </div>
        <div class="form-group">
            <label for="message">Your Message: </label>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Please enter your order or comments here"></textarea>
        </div>

        <button>Submit</button>
        <i class="far fa-envelope"></i>
    </form>

    
</div>

<div class="contact-divider h-3 bg-g1">

</div>

<div class="map-opening-container gc-full ds-g bg-pd">
    <div class="map-opening js-c w-80 ds-g gtc-1-1">
        <div class="map-opening-heading gc-full js-c">
            <h2 class="ta-c">Get in touch or drop in and see us</h2>
            <p class="ta-c">Call in and see us at our premises at 17, Gracepark Road (Richmond Rd end), Drumcondra, Dublin 9 or send us an email to info@larrysdiy.ie, or phone us on 01 837 3490</p>
        </div>

        <div class="map h-40 bs" id="map">

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