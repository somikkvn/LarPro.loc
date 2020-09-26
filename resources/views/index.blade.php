@extends('layout')
@section('title')
    Home
@endsection

@section('main_content')
    <h2 style="color: #dadada" align="center">Guestbook</h2>
    <div class="container" style="color: #f4f0e6">
        <div align="justify"  class="row align-items-start">
            <div class="col">
                <img align="left" src="{{URL::asset('/images/3.jpg')}}" height="333">
            </div>
            <div class="col">
                A guestbook (also guest book, visitor log, visitors' book, visitors' album) is a paper or electronic means for a visitor to acknowledge a visit to a site, physical or web-based, and leave details such as their name, postal or electronic address and any comments. Such paper-based ledgers or books are traditional in churches, at weddings, funerals, B&Bs, museums, schools, institutions and other private facilities open to the public. Some private homes keep visitors' books. Specialised forms of guestbooks include hotel registers, wherein guests are required to provide their contact information, and Books of Condolence, which are used at funeral homes and more generally after notable public deaths.
               <a style="color: gray" href="https://en.wikipedia.org/wiki/Guestbook">wikipedia.org</a>
            </div>
            <div class="col">
                <img align="right" src="{{URL::asset('/images/4.jpg')}}" height="333">
            </div>
        </div>
    </div>
@endsection
