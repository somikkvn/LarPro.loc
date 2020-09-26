@extends('layout')
@section('title')
    Task
@endsection
@section('main_content')

    <h2 style="color: #dadada" align="center">Task</h2><br>
{{--    <img class="card-img-top" src="{{URL::asset('/images/1.png')}}" alt="Card">--}}
    <img align="left" src="{{URL::asset('/images/1.jpg')}}" height="180">
    <img align="right" src="{{URL::asset('/images/2.jpg')}}" height="180">
    <pre align="center" style="color: white">

     Create a guestbook that consists of the following elements:

     Logins, registration, pages for adding messages.

     Validation should be done on the server side,

     with post-submission input error messages, if any.

     List of all reviews up to three nesting levels.

     Use mysql as storage.

</pre>

@endsection

