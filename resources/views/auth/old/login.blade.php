<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Vendor CSS -->
    <link href="{{ asset('/css/material/animate-css/animate.min.css') }}" rel="stylesheet">

    <!-- CSS -->
    <link href="{{ asset('/css/app.min.css') }}" rel="stylesheet">

<script>
function loadLoginOnClick(){  
    document.login.submit();        
}
</script>
</head>

 

<body class="login-content">

    <!-- Login -->
    <div class="lc-block toggled" id="l-login">        
        <form name="login" class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

       <div class="form-group">
                <div class="input-group m-b-20">
                    <span class="input-group-addon"><i class="md md-person"></i></span>
                    <div class="fg-line">
                        <input type="email" class="form-control" name="email" placeholder="E-mail" value="{{ old('email') }}">
                    </div>
                </div>
            </div>
      <div class="form-group">
                <div class="input-group m-b-20">
                    <span class="input-group-addon"><i class="md md-accessibility"></i></span>
                    <div class="fg-line">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="form-group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember">
                        <i class="input-helper"></i>
                        Lembrar-me
                    </label>
                </div>

            </div>

      
        </form>
      
      <a href="javascript:loadLoginOnClick()" class="btn btn-login btn-danger btn-float"><i class="md md-arrow-forward"></i></a>
        
        
       
        <ul class="login-navigation">        
         <a class="btn btn-link" href="{{ url('/password/email') }}">Esqueceu sua senha?</a>
        {{-- 
         <a class="btn btn-link" href="{{ url('/auth/register') }}">Registrar</a>
        --}}
        </ul>
    </div>

    

    <!-- Javascript Libraries -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="{{ asset('/js/waves.min.js') }}"></script>
    <script src="{{ asset('/js/functions.js') }}"></script>
</body>
</html>