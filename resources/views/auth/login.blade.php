<!DOCTYPE html>
<html lang="en">
<head>
  <title>Administrateur</title><meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{asset('css/bootstrap-responsive.min.css')}}" />
  <link rel="stylesheet" href="{{asset('css/matrix-login.css')}}" />
  <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="header-middle"><!--header-middle-->
<div id="loginbox">
    <form id="loginform" class="form-vertical" method="POST" action="{{ route('login') }}">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
      <!--  <div class="control-group normal_text"> <h3><img src="{{asset('img/logo.png')}}" alt="Logo" /></h3></div> -->
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_lg"><i class="icon-user"> </i></span>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <br><span class="invalid-feedback" style="color: white;">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_ly"><i class="icon-lock"></i></span>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
        <div class="form-actions">
            <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Mot de passe oublié?</a></span>
            <span class="pull-right"><button type="submit" class="btn btn-success">Se Conncter</button></span>
        </div>
    </form>
</div>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/matrix.login.js')}}"></script>
</body>

</html>
