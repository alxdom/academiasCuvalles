<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Academias</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet"/>
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet"/>
</head>

<body>


    <div class="main-">
        
           


            <!-- NAVBAR -->
            @include('partials.navbar')
            <!-- FIN-NAVBAR -->
                <!-- CONTENT -->
                @yield('jumbo')

                <div class="content">
                    <div class="container-fluid">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5 ml-auto">
                                    <div class="card">
                                        <div class="card-header">{{ __('Inicia sesión con tus credenciales de SIIAU') }}</div>
                                            <div class="card-body">
                                            <form method="POST" action="{{route('validar_usuario')}}">
                                                @csrf
                        
                                                <div class="form-group row">
                                                    <label for="codigo" class="col-md-4 col-form-label text-md-right">{{ __('Código') }}</label>
                        
                                                    <div class="col-md-6">
                                                        
                                                        <input id="codigo" name="codigo" type="text" class="form-control @error('codigo') is-invalid @enderror" name="codigo" value="{{ old('codigo') }}" required autocomplete="codigo" autofocus>
                        
                                                        @error('codigo')
                                                        <div class="alert alert-primary" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                          </div>
                                                        @enderror
                        
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>
                        
                                                    <div class="col-md-6">
                                                        <input placeholder="Contraseña de SIIAU" id="pass" name="pass" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                        
                                                <div class="form-group row mb-0">
                                                    <div class="col-md-8 offset-md-4">
                                                        <button type="submit" class="btn btn-primary">
                                                            {{ __('Entrar') }}
                                                        </button>
                        
                                                        @if (Route::has('password.request'))
                                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                {{ __('¿Perdió su contraseña?') }}
                                                            </a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                
                                    @yield('content')

                            </div>
                        </div>
                    </div>
                    <!-- END-CONTENT -->


                    <!-- FOOTER -->

                @include('partials.footer')

                <!-- END-FOOTER -->


                </div>
            </div>
    </div>
</body>


<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!--  jVector Map  -->
<script src="../assets/js/plugins/jquery-jvectormap.js" type="text/javascript"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="../assets/js/plugins/moment.min.js"></script>
<!--  DatetimePicker   -->
<script src="../assets/js/plugins/bootstrap-datetimepicker.js"></script>
<!--  Sweet Alert  -->
<script src="../assets/js/plugins/sweetalert2.min.js" type="text/javascript"></script>
<!--  Tags Input  -->
<script src="../assets/js/plugins/bootstrap-tagsinput.js" type="text/javascript"></script>
<!--  Sliders  -->
<script src="../assets/js/plugins/nouislider.js" type="text/javascript"></script>
<!--  Bootstrap Select  -->
<script src="../assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
<!--  jQueryValidate  -->
<script src="../assets/js/plugins/jquery.validate.min.js" type="text/javascript"></script>
<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
<!--  Bootstrap Table Plugin -->
<script src="../assets/js/plugins/bootstrap-table.js"></script>
<!--  DataTable Plugin -->
<script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
<!--  Full Calendar   -->
<script src="{{'js/plugins/fullcalendar.min.js'}}"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{'js/light-bootstrap-dashboard.js?v=2.0.1'}}" type="text/javascript"></script>
<!-- Light Dashboard DEMO methods, don't include it in your project! -->
<script  src="{{'js/demo.js'}}"></script>
<!--<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.showNotification();
    });
</script>-->

</html>