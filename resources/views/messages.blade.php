@extends('layouts.app')


@section('content')
<H1>MESSAGES</H1>
@if(count($messages)>0)

@foreach($messages as $message)
<ul class="list-group">
<li class="list-group-item"> FirstName: {{$message->FirstName}}</li>
<li class="list-group-item"> LastName: {{$message->LastName}}</li>
<li class="list-group-item"> Email: {{$message->Email}}</li>
<li class="list-group-item"> Message: {{$message->Message}}</li>

</ul>

@endforeach


@endif
@endsection

@section('sidebar')
@parent
<p>This is not my sidebar</p>
@endsection
