
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

            <div class="sign-in-page" style="margin-top: 25px;">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="sign-in">
                            <h4 class=""> Change Password </h4>
                            <form action="{{url('change_password')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label> Old Password </label>
                                            <input type="password" name="old_password" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label> New Password </label>
                                            <input type="password" name="password" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label> Confirm Password </label>
                                            <input type="password" name="confirm_password" class="form-control" />
                                        </div>
                                    </div>
                                    <button type="submit" name="submit" value="submit" class="btn btn-primary"> Submit </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
