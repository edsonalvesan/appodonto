<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro</title>

    <!-- Vendor CSS -->
   <link href="{{ asset('/css/material/animate-css/animate.min.css') }}" rel="stylesheet">

    <!-- CSS -->
    <link href="{{ asset('/css/app.min.css') }}" rel="stylesheet">
<script>
function loadRegisterOnClick(){  
 
        document.register.submit();  
      
}
</script>
</head>

<body class="login-content">
    <!-- Register -->
    <div class="lc-block toggled" id="l-register">       
    <form name="register" class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    @if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
                                        
	<div class="form-group">                                                
        <div class="input-group m-b-20">
            <span class="input-group-addon"><i class="md md-person"></i></span>
            <div class="fg-line">
                <input type="text" class="form-control" placeholder="Nome" name="name" value="{{ old('name') }}">
            </div>
        </div>
	</div>

		<div class="form-group">                                                       
             <div class="input-group m-b-20">
            <span class="input-group-addon"><i class="md md-mail"></i></span>
            <div class="fg-line">
                <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
            </div>
        </div>
		</div>

				
             <div class="form-group">                                           
            <div class="input-group m-b-20">
            <span class="input-group-addon"><i class="md md-accessibility"></i></span>
            <div class="fg-line">
                <input type="password" class="form-control" placeholder="Password" name="password">
            </div>
        </div>
						</div>

						<div class="form-group">

                                                        
                                                        <div class="input-group m-b-20">
            <span class="input-group-addon"><i class="md md-accessibility"></i></span>
            <div class="fg-line">

                <input type="password" class="form-control" placeholder="Confirmar Password" name="password_confirmation">
            </div>
        </div>
	</div>

						<div class="form-group">
                                                    
                                                     <div class="clearfix"></div>

        <div class="checkbox">
            <label>
                <input type="checkbox" value="">
                <i class="input-helper"></i>
                Aceito os termos de licença
            </label>
        </div>
						</div>
	</form>

    
        <a href="javascript:loadRegisterOnClick()" class="btn btn-login btn-danger btn-float"><i class="md md-arrow-forward"></i></a>

        <ul class="login-navigation">        
         <a class="btn btn-link" href="{{ url('/password/email') }}">Esqueci a senha</a>
         <a class="btn btn-link" href="{{ url('/auth/login') }}">Login</a>
        </ul>
    
    </div>
    <!-- Javascript Libraries -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="{{ asset('/js/waves.min.js') }}"></script>
    <script src="{{ asset('/js/functions.js') }}"></script>
</body>
</html>