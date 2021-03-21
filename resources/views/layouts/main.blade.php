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
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
  <!-- CSS Files -->
  <link href="{!! asset('assets/css/bootstrap.min.css')!!}" rel="stylesheet"/>
  <link href="{!! asset('assets/css/styles.css')!!}" rel="stylesheet"/>
  <link href="{!!asset('assets/css/light-bootstrap-dashboard.css?v=2.0.1')!!}" rel="stylesheet"/>
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/css/demo.css" rel="stylesheet"/>

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <script src="https://kit.fontawesome.com/18147cf313.js" crossorigin="anonymous"></script>
</head>
<body>
<!-- NAVEGADOR-ASIDE -->
@include('partials.nav_alter')
<!-- FIN-NAVEGADOR-ASIDE -->
<div class="main-panel">

<!-- NAVBAR -->
  @include('partials.navbar')
<!-- FIN-NAVBAR -->
  @yield('jumbo')
<!-- CONTENT -->
  @if (session('status'))
    <div class="row">
      <div class="col-sm-12">
        <div class="alert alert-success">
          <span>{{ session('status') }}</span>
        </div>
      </div>
    </div>
  @endif
  @yield('content')


<!-- END-CONTENT -->
  @include('partials.footer')

</div>
</body>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,600&display=swap');


</style>

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
<script src="{{'js/demo.js'}}"></script>
<!--<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.showNotification();
    });
</script>-->
<script src="../assets/js/tableAcademias.js"></script>
</html>
