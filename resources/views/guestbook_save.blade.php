@extends('layout')
@section('title')
    Guestbook
@endsection

@section('main_content')
{{--    <h2 style="color: #dadada" class="text-center">Comments form</h2>--}}
    @if($errors->any())
        <div class="alert alert" style="color: white">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form method="post" action="/guestbook/comment">
            @csrf
        <input class="form-control" type="text" name="name" id="name" placeholder="Enter name" class="form-control"><br>
        <input type="text" name="subject" id="subject" placeholder="Enter subject" class="form-control"><br>
        <textarea name="message" id="message" placeholder="Enter comments" class="form-control"></textarea><br>
        <button type="submit" class="btn btn-success">Send</button>
    </form>
    <div id="axios_test">

    </div>
    <br>
    <h2 style="color: #dadada" align="center">All comments</h2>
    @foreach($comments as $el)
        <div class="alert alert-warning">
            <h3>{{$el->subject}}</h3>
            <b>{{$el->name.':'}}</b>
            <b>{{$el->message}}</b>
        </div>
    @endforeach

<test-component/>
@endsection
