@extends('layouts.app')


@section('content')
<H1>Contact</H1>


{!! Form::open(['url' => 'contact/submit']) !!}


<div class="form-group">
{{Form::label('firstName:', 'firstName')}}
{{Form::text('firstName', '', ['class'=>'form-control', 'placeholder'=>'Firstname'])}}

{{Form::label('lastName:', 'lastName')}}
{{Form::text('lastName' , '', ['class'=>'form-control', 'placeholder'=>'lastName'])}}
</div>
<!-- <div class="form-group">

</div> -->
<div class="form-group">
{{Form::label('email:', 'E-Mail Address')}}
{{Form::text('email' , '', ['class'=>'form-control', 'placeholder'=>'email'])}}
</div>
<div class="form-group">
{{Form::label('message:','message')}}
{{Form::textarea('message' ,'', ['class'=>'form-control', 'placeholder'=>'message'])}}
</div>
<div>
{{Form::submit('submit',['class'=>'btn btn-primary'])}}
</div>
{!! Form::close() !!}


@endsection
