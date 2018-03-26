@extends('layouts.app')

@section('title','Home')


@push('stylesheets')
    <link href="{{ asset("css/home-page.css") }}" rel="stylesheet" />
@endpush

@section('content')
    <div class="hero">
    <div class="container">

    </div>
</div>
<div class="ecosystem">
    <div class="container">

    </div>
</div>
<div class="solution">
    <div class="container">

    </div>
</div>
<div class="vision">
    <div class="container">

    </div>
</div>
<div class="technical-papers">
    <div class="container">

    </div>
</div>
<div class="media-coverage">
    <div class="container">
        <h1 class="media-coverage--color">Ibinex Media Coverage</h1>
        <img src="Assets/Images/media-yahoo.png">
        <img src="Assets/Images/media-theguardian.png">
        <img src="Assets/Images/media-techcrunch.png">
        <img src="Assets/Images/media-mashable.png">
        <img src="Assets/Images/media-bi.png">
        <img src="Assets/Images/media-hp.png">
    </div>
</div>
@endsection