@if(session('mail'))
<div class="mail-message">
    {{session('mail')}}
</div>
@endif

@if($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif