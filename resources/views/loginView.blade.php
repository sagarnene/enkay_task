<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <title> SmartAdmin</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- #CSS Links -->
        <!-- Basic Styles -->
        <link rel="stylesheet" type="text/css" media="screen" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" media="screen" href="assets/css/font-awesome.min.css">

        <!-- SmartAdmin Styles : Caution! DO NOT change the order -->
        <link rel="stylesheet" type="text/css" media="screen" href="assets/css/smartadmin-production-plugins.min.css">
        <link rel="stylesheet" type="text/css" media="screen" href="assets/css/smartadmin-production.min.css">
        <link rel="stylesheet" type="text/css" media="screen" href="assets/css/smartadmin-skins.min.css">

        <!-- SmartAdmin RTL Support -->
        <link rel="stylesheet" type="text/css" media="screen" href="assets/css/smartadmin-rtl.min.css"> 

        <!-- We recommend you use "your_style.css" to override SmartAdmin
             specific styles this will also ensure you retrain your customization with each SmartAdmin update.-->
        <link rel="stylesheet" type="text/css" media="screen" href="assets/css/your_style.css"> 

        <!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
        <link rel="stylesheet" type="text/css" media="screen" href="assets/css/demo.min.css">

        <!-- #FAVICONS -->
        <link rel="shortcut icon" href="assets/img/favicon/favicon.ico" type="image/x-icon">
        <link rel="icon" href="assets/img/favicon/favicon.ico" type="image/x-icon">

        <!-- #GOOGLE FONT -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

        <link rel="shortcut icon" href="http://www.enkayhomes.com/favicon_enkay.ico" type="image/x-icon">
        <style>
            .errors{color:red;text-align: center}
        </style>
    </head>

    <body class=" ">

        <header id="header">
            <div id="logo-group"> 

                <!-- PLACE YOUR LOGO HERE --> 
                <span id="logo"> <img src="assets/img/logo.png" alt="SmartAdmin"> </span> 
                <!-- END LOGO PLACEHOLDER --> 

            </div>


        </header>

        <div id="main" role="main">

            <!-- MAIN CONTENT -->
            <div id="content" class="container">

                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4 login-outer">
                        <div class="well no-padding">
                            {!! Form::open(['url' => 'login-check','method' => 'POST', 'id' => 'login-form', 'class' => 'smart-form client-form'] ) !!}
                           
                                <header>
                                    Log In
                                </header>
            @if(Session::has('alert_msg'))
              <p class="errors">{!! Session::get('alert_msg') !!}</p>
              @endif
                                <fieldset>

                                    <section>
                                        <label class="label">Username</label>
                                        <label class="input"> <i class="icon-append fa fa-user"></i>
                                            <input type="text" name="username">
                                            {!!$errors->first('username')!!}
                                            <b class="tooltip tooltip-top-right errors"><i class="fa fa-user txt-color-teal"></i> Please enter email address/username</b></label>
                                    </section>

                                    <section>
                                        <label class="label">Password</label>
                                        <label class="input"> <i class="icon-append fa fa-lock"></i>
                                            <input type="password" name="password">
                                            {!!$errors->first('password')!!}
                                            <b class="tooltip tooltip-top-right errors"><i class="fa fa-lock txt-color-teal"></i> Enter your password</b> </label>
                                        <!--div class="note">
                                            <a href="forgotpassword.html">Forgot password?</a>
                                        </div>
                                    </section>

                                    <section>
                                        <label class="checkbox">
                                            <input type="checkbox" name="remember" checked="">
                                            <i></i>Stay signed in</label>
                                    </section-->
                                </fieldset>
                                <footer>
                                    <button type="submit" class="btn btn-primary">
                                        Sign in
                                    </button>
                                </footer>
                            {!! Form::close() !!}

                        </div>





                    </div>
                </div>
            </div>

        </div>

        <!--================================================== -->	

        <!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
        <script src="assets/js/plugin/pace/pace.min.js"></script>

        <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script> if (!window.jQuery) {
                        document.write('<script src="assets/js/libs/jquery-2.1.1.min.js"><\/script>');}</script>

        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script> if (!window.jQuery.ui) {
                        document.write('<script src="assets/js/libs/jquery-ui-1.10.3.min.js"><\/script>');}</script>

        <!-- IMPORTANT: APP CONFIG -->
        <script src="assets/js/app.config.js"></script>

        <!-- JS TOUCH : include this plugin for mobile drag / drop touch events 		
        <script src="assets/js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> -->

        <!-- BOOTSTRAP JS -->		
        <script src="assets/js/bootstrap/bootstrap.min.js"></script>


        <!-- JQUERY VALIDATE -->
        <script src="assets/js/plugin/jquery-validate/jquery.validate.min.js"></script>

        <!-- JQUERY MASKED INPUT -->
        <script src="assets/js/plugin/masked-input/jquery.maskedinput.min.js"></script>

        <!--[if IE 8]>
                
                <h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>
                
        <![endif]-->

        <!-- MAIN APP JS FILE -->
        <script src="assets/js/app.min.js"></script>

        <script type="text/javascript">
            runAllForms();

            $(function () {
                // Validation
                $("#login-form").validate({
                    // Rules for form validation
                    rules: {
                        username: {
                            required: true
                           
                        },
                        password: {
                            required: true,
                            minlength: 3,
                            maxlength: 20
                        }
                    },
                    // Messages for form validation
                    messages: {
                        username: {
                            required: 'Please enter your username address',
                            
                        },
                        password: {
                            required: 'Please enter your password'
                        }
                    },
                    // Do not change code below
                    errorPlacement: function (error, element) {
                        error.insertAfter(element.parent());
                    }
                });
            });
        </script>

    </body>
</html>