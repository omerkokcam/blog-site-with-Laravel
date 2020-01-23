<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> İlk | Panel </title>

    <!-- Bootstrap -->
    <link href="{{asset('cms/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('cms/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('cms/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('cms/vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('cms/build/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                {{Form::open(array('route'=>'login'))}}
                    <h1>Giriş Formu</h1>
                    <div>
                        <input name="email" id="email" type="email" class="form-control" placeholder="Email" required="" />
                    </div>
                    <div>
                        <input name="password" id="password" type="password" class="form-control" placeholder="Password" required="" />
                    </div>
                    <div>

                        {{Form::submit('Log in', array('class'=>'btn btn-default submit') )}}
                        <a class="reset_pass" href="#">Şifreni mi unuttun?</a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">Bu sitede yeni misin?
                            <a href="{{route('register')}}" class="to_register">Yeni Hesap Oluştur! </a>
                        </p>

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1><i class="fa fa-paw"></i> ÖMER MİRAÇ KÖKÇAM</h1>
                            <p>©2019 Tüm hakları saklıdır.</p>
                        </div>
                    </div>
                {{Form::close()}}
            </section>
        </div>


    </div>
</div>
</body>
</html>
