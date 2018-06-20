@extends('layouts.app')

@section('content')
     <div class="col-xs-offset-4 col-xs-4">
        <h1>My Page</h1>
             Name: {{ Auth::user()->name }}
            <br>
            Events that you're going to join
            <br>
            $data
            <br>
    </div>
@endsection
