@extends('layouts.master')

@section('title')
    Main Page
@endsection

@section('content')

            <div class="header">
                <p class="col-sm-4 offset-sm-2">University Of Queensland</p>
            </div> <!-- end of header -->
            <div>
                <img id="image" src="img/uq.jpg" />
                <div class="col-sm-8 offset-sm-2" id="mid-block">
                    <p id="mid-title">Welcome to UQ Researcher Site<p>
                </div>
            </div> <!-- end of Upper Content -->

            <div class="main-content">
                <p class="main-content-title">Researcher Profile</p>
                <p class="main-content-subtitle">Please enter your profile details<p>

                  <form class="col-md-8 col-sm-12" id="profile-form" method="GET" action="#">  <!-- need to change POST later -->

                    <div class="row">
                      <div class="form-group col-sm-6">
                        <label class="control-label">First Name</label>
                        <input class="form-control" type="text" name="firstName"placeholder="First Name">
                      </div>
                      <div class="form-group col-sm-6">
                        <label class="control-label">Last Name</label>
                        <input class="form-control" type="text" name="lastName"placeholder="Last Name">
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-sm-6">
                        <label class="control-label">Position</label>
                        <input class="form-control" type="text" name="position" placeholder="Position">
                      </div>
                      <div class="form-group col-sm-6">
                        <label class="control-label">Email</label>
                        <input class="form-control" type="text" name="email" placeholder="name@example.com">
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-sm-12">
                        <label class="control-label">Biography</label>
                        <textarea class="form-control" name="biography" rows="5" placeholder="something about yourself"></textarea>
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-sm-12">
                        <label class="control-label">Profile Image</label>
                        <input type="file" name="image" class="form-control-file" id="file-upload">
                      </div>
                    </div>

                    <button class="btn btn-success btn-lg offset-md-1 col-md-4 offset-sm-1 col-sm-10 ">Submit</button>
                    <a class="btn btn-secondary btn-lg col-md-4 offset-sm-1 col-sm-10  btn-top" href="/">Cancel</a>
                  </form>
            </div>



@endsection
