@extends('base')

@section('title')
    video
@endsection
@section('content')
    <div class="container">
        <video width="720" height="480" controls>
            <source src="{{ asset('video/video3.mp4')}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
@endsection