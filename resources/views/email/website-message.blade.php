@component('mail::message')
# New Message from LarrysDIY.ie

You have a new message from {{$email->name}} <br> <br>
Email: {{$email->email}} <br> <br>
Contact Number: {{$email->number}} <br> <br>

Their Message is: 
{{$email->message}}



Thanks,<br>
<strong>Rocket.Chip Web Solutions</strong>
@endcomponent
