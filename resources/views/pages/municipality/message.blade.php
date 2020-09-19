@extends('layouts/app')

@section('content')
<!-- Introduction -->
<div class=" container w-100 p-3" id="Introduction">
    <div class="row w-100"  id="intro">
        <div class="col-sm-4 mb-5">
            <img class="m-frame rounded-circle" src="{{ $official && $official->welcome_image ? asset('/storage/officials/'.$official->position.'/'.$official->welcome_image) : asset('img/official.png')}}" width="100%">
            <h4 class="text-center mt-2 mb-0">{{ $official ? $official->first_name.' '.$official->middle_name.' '.$official->last_name : 'No official yet :)' }}</h4>
            <center>
                <span class="text-center"><i>Mayor</i></span>
            </center>
        </div>
        <div class="col-sm-8">
        <center><strong>
            <h4>
            WELCOME TO BAGULIN
            </h4>
            <h4>
            UMALI KAYO!
        </h4>
        </strong>
        <h6>
        <i class="italic">
            “Quality Softbroom of the North”
        </i>
        </h6>
    </center>
        @php
            $lorem = "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>";
        @endphp
        @if ($official)
            {!! $official->welcome_message && $official->welcome_message !== "<p><br></p>" ? $official->welcome_message : $lorem !!}
        @else
            {!! $lorem !!}
        @endif
        </div>
    </div>
</div>
@endsection
