@extends('frontEnd.layouts.master')
@section('title','page inscription')
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
                <div class="login-form"><!--Partie Connexion -->
                    <h2>Connectez-vous à votre compte</h2>
                    <form action="{{url('/user_login')}}" method="post" class="form-horizontal">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="email" placeholder="Email" name="email"/>
                        <input type="password" placeholder="Mot de passe" name="password"/>
                        <span>
                            <input type="checkbox" class="checkbox">
                             Restez connecter
                        </span>
                        <button type="submit" class="btn btn-default">Se connecter</button>
                    </form>
                </div>
            </div>
            <div class="col-sm-1">
                <h2 class="or">OU</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form"><!--Partie d'inscription-->
                    <h2>Nouveau Compte!</h2>
                    <form action="{{url('/register_user')}}" method="post" class="form-horizontal">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                        <input type="text" placeholder="Nom" name="name" value="{{old('name')}}"/>
                        <span class="text-danger">{{$errors->first('name')}}</span>

                        <input type="email" placeholder="Adresse email " name="email" value="{{old('email')}}"/>
                        <span class="text-danger">{{$errors->first('email')}}</span>

                        <input type="password" placeholder="Mot de passe" name="password" value="{{old('password')}}"/>
                        <span class="text-danger">{{$errors->first('password')}}</span>

                        <input type="password" placeholder="Confirmé mot de passe" name="password_confirmation" value="{{old('password_confirmation')}}"/>
                        <span class="text-danger">{{$errors->first('password_confirmation')}}</span>

                        <button type="submit" class="btn btn-default">Nouveau compte</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-bottom: 20px;"></div>
@endsection
