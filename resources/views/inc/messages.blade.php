@if(session('mail'))
<div class="mail-message">
    {{session('mail')}}
</div>
@endif