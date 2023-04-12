
@extends('layouts.default')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="sidemenu">
                @include('layouts.sidemenu')
            </div>
        </div>
        <div class="col-md-9">
            <div class="sign-in-page">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="sign-in">
                            <h4 class="">Update Profile</h4>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <form action="" method="post">
                                        @csrf
                                        <label> First name </label>
                                        <input type="text" value="{{$update->first_name}}" name="first_name"class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label> Last name</label>
                                        <input type="text" value="{{$update->last_name}}"  name="last_name"class="form-control" />
                                    </div>
                                </div>
                                {{-- <div class="col-md-4">
                                    <div class="form-group">
                                        <label> Phone Number </label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div> --}}
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label> Email Adress </label>
                                        <input type="email"value="{{$update->email}}"  name="email"class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label> Date of Birth </label>
                                        <input type="text"name="dob"value="{{$update->dob}}"  class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label> Gender </label>
                                        <select class="form-control" value="{{$update->gender}}" name="gender">
                                            <option> Male </option>
                                            <option> Female </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <a href="{{url('account_info')}}">
                                <button type="submit"name="submit" value="submit" class="btn btn-primary checkout-btn"> Update Profile </button>
                            </a>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
