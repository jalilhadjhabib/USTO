<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Panel</title><meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap-responsive.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/matrix-login.css')}}" />
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <link href="css/home.css" rel="stylesheet" type="text/css" media="all">


</head>
<div style="padding: 80px;"></div>
<body class="bgded overlay" style="background-image:url('images/snv_banner.jpg');">
<div id="loginbox">
    <form id="loginform" class="form-vertical" method="POST" action="{{ route('login') }}">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="control-group normal_text"> <h3><h1 style="font-size: 40px;">Admin Panel</h1></h3></div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <p style="font-size: 20px;color: yellow;">E-mail</p>
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
                    <p style="font-size: 20px;color: yellow;">Mot de passe</p>
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
            <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Mot de passe oublié</a></span>
            <span class="pull-right"><button type="submit" class="btn btn-success">Se conneceter</button></span>
        </div>
    </form>
    <form id="recoverform" action="#" class="form-vertical">
        <p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.<p>

        <div class="controls">
            <div class="main_input_box">
                <input type="text" placeholder="E-mail address" />
            </div>
        </div>

        <div class="form-actions">
            <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Retourner</a></span>
            <span class="pull-right"><a class="btn btn-info">Envoyer</a></span>
        </div>
    </form>
</div>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/matrix.login.js')}}"></script>
</body>

</html>
