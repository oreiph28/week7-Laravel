@extends('layouts.app')

@section('content')
<br/>
<div id="about" >
<h1 align="center">{{$title}}</h1>

<p id="text1">

   <br />
   Virtual Market is a website to post your advertisements.
   It has been developed by Ornelio Reiph. <br />
   You are free to add your advertisements here. <br />
   You can create an account through the 'Registers-Menu' to add your advertisements. <br />
   There is the possibility to place pictures or other 'files with your advertisement. <br />
   <br />
   You can contact the 'administrator' through the 'contact-menu'. <br /> <br />

   With kind regards, <br /><br />
   Ornelio Reiph <br />
   Your Administrator. <br />

   </p>
   <img src="{{ asset('img/nelio1.png') }}" width="210" height="180" alt="administrator" title="Virtual Market" />

</div>

@endsection
