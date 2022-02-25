@extends('frontEnd.layouts.master')
@section('title','Mon compte')
@section('slider')
@endsection
@section('content')
    <div class="container">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                {{Session::get('message')}}
            </div>
        @endif
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <form action="{{url('/update-profile',$user_login->id)}}" method="post" class="form-horizontal">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        {{method_field('PUT')}}
                        <legend>Comot de passete Profil</legend>
                        <div class="form-group {{$errors->has('name')?'has-error':''}}">
                            <input type="text" class="form-control" name="name" id="name" value="{{$user_login->name}}" placeholder="Name">
                            <span class="text-danger">{{$errors->first('name')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('address')?'has-error':''}}">
                            <input type="text" class="form-control" value="{{$user_login->address}}" name="address" id="address" placeholder="Address">
                            <span class="text-danger">{{$errors->first('address')}}</span>
                        </div>

                        <div class="form-group">
                            <select name="country" id="country" class="form-control">
                                @foreach($countries as $country)
                                    <option value="{{$country->country_name}}" {{$user_login->country==$country->country_name?' selected':''}}>{{$country->country_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group {{$errors->has('mobile')?'has-error':''}}">
                            <input type="text" class="form-control" name="mobile" value="{{$user_login->mobile}}" id="mobile" placeholder="Mobile">
                            <span class="text-danger">{{$errors->first('mobile')}}</span>
                        </div>
                        <button type="submit" class="btn btn-primary" style="float: right;">Mise à jour votre profil</button>
                    </form>
                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">Ou</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form"><!--sign up form-->
                    <form action="{{url('/update-password',$user_login->id)}}" method="post" class="form-horizontal">
                        <legend>Mise à jour votre mot de passe</legend>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        {{method_field('PUT')}}
                        <div class="form-group {{$errors->has('password')?'has-error':''}}">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Ancien mot de passe">
                            @if(Session::has('oldpassword'))
                                <span class="text-danger">{{Session::get('oldpassword')}}</span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('newPassword')?'has-error':''}}">
                            <input type="password" class="form-control" name="newPassword" id="newPassword" placeholder="Nouveau mot de passe">
                            <span class="text-danger">{{$errors->first('newPassword')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('newPassword_confirmation')?'has-error':''}}">
                            <input type="password" class="form-control" name="newPassword_confirmation" id="newPassword_confirmation" placeholder="Confirmer mot de passe">
                            <span class="text-danger">{{$errors->first('newPassword_confirmation')}}</span>
                        </div>
                        <button type="submit" class="btn btn-primary" style="float: right;">Mise à jour du mot de passe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-bottom: 20px;"></div>
@endsection
