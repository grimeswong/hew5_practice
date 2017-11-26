@extends('layouts.master')

@section('title')
    Main Page
@endsection

@section('content')

            <div class="header">
                <p class="col-sm-4 offset-sm-2">University Of Queensland</p>
            </div>
            <div>
                <img id="image" src="img/uq.jpg" />
                <div class="col-sm-8 offset-sm-2" id="mid-block">
                    <p id="mid-title">Welcome to UQ Researcher Site<p>
                </div>
            </div>
            <div class="main-content">
                <p class="main-content-title">Researcher Profile</p>
                <p class="main-content-subtitle">Please enter your profile details<p>

                  <form class="col-sm-8" id="profile-form" method="GET" action="">  <!-- need to change POST later -->

                    <div class="row">
                      <div class="form-group col-sm-6">
                        <label class="control-label">First Name</label>
                        <input class="form-control" placeholder="First Name">
                      </div>
                      <div class="form-group col-sm-6">
                        <label class="control-label">Last Name</label>
                        <input class="form-control" placeholder="Last Name">
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-sm-6">
                        <label class="control-label">Position</label>
                        <input class="form-control" placeholder="Position">
                      </div>
                      <div class="form-group col-sm-6">
                        <label class="control-label">Email</label>
                        <input class="form-control" placeholder="name@example.com">
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-sm-12">
                        <label class="control-label">Biography</label>
                        <textarea class="form-control" rows="5" placeholder="something about yourself"></textarea>
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-sm-12">
                        <label class="control-label">Profile Image</label>
                        <input type="file" class="form-control-file">
                    </div>

                    <button class="btn btn-success btn-lg offset-md-3 col-sm-12 col-md-6">Submit</button>


                  </form>
                </div>
            </div>



@endsection
