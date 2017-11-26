@extends('layouts.master')

@section('title')
    Main Page
@endsection

@section('content')

            <div class="header">
                <h4 class="col-md-2 offset-md-2">University Of Queensland</h4>
            </div>
            <div>
                <img id="image" src="img/uq.jpg" />
                <div class="col-md-8 offset-md-2" id="mid-block">
                    <p id="mid-title">Welcome to UQ Researcher Site<p>
                </div>
            </div>
            <div id="content">
                <p id="content-title">Content title</p>
                <p>Some text here</p>
            </div>

@endsection
