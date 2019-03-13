<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>AdminLTE 3 @yield('title')</title>
   <link rel="stylesheet" href="css/app.css">
</head>
<body class="hold-transition sidebar-mini">
   <div id="app"> <!-- VUE -->
   <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
         <!-- Left navbar links -->
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
               <a href="#" class="nav-link">Inicio</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
               <a href="#" class="nav-link">Contact</a>
            </li>
         </ul>
         <!-- SEARCH FORM -->
         <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
               <input class="form-control form-control-navbar" type="search" placeholder="Buscar" aria-label="Search">
               <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                     <i class="fa fa-search"></i>
                  </button>
               </div>
            </div>
         </form>
      </nav>
      <!-- /.navbar -->

      @include('plantilla.sidebar')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2" v-if="menu2==0">
                  <div class="col-sm-6" >
                     <!--<h1 class="m-0 text-dark" v-if="menu==0" @click="menu2=0">Pacientes</h1> -->
                     <h1 class="m-0 text-dark" v-if="menu==2">Perfil</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right" v-if="menu==0 && menu2==2">
                        <li class="breadcrumb-item"><a href="#">{{ Auth::user()->name }}</a></li>
                     </ol>
                     <ol class="breadcrumb float-sm-right" v-else-if="menu==2">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Perfil</li>
                     </ol>
                     <ol class="breadcrumb float-sm-right" v-else-if="menu>2">
                        <li class="breadcrumb-item"><a href="#">{{ Auth::user()->name }}</a></li>
                        <li class="breadcrumb-item active">Perfil</li>
                     </ol>
                  </div><!-- /.col -->
               </div><!-- /.row -->
            </div><!-- /.container-fluid -->
         </div>
         <!-- /.content-header -->
         @yield('conten')
      </div>
      <!-- /.content-wrapper -->
      </div><!-- TERMINA APP DE VUE -->
      <!-- Main Footer -->
      <footer class="main-footer">
         <!-- To the right -->
         <div class="float-right d-none d-sm-inline">
            Historias Clinicas
         </div>
         <!-- Default to the left -->
         <strong>Copyright &copy; 2019 <a href="#"> Raccoon Ware </a></strong> Todos los derechos reservados.
      </footer>
   </div>

<script src="js/app.js"></script>
<script src="js/input-mask/jquery.inputmask.js"></script>
<script src="js/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="js/input-mask/jquery.inputmask.extensions.js"></script>
<script>
$('#nuevoPaciente, #editarPaciente, #borrarPacient').on('hidden.bs.modal', function (e) {
  $(this)
    .find("input,textarea,select")
       .val('')
       .end()
    .find("input[type=checkbox], input[type=radio]")
       .prop("checked", "")
       .end();
})
</script>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
    'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
</script>
<script>

  $(function () {

    $('label[data-toggle="tooltip"]').tooltip({
    animated: 'fade',
    placement: 'bottom',
    html: true
})
    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })

    $('#mainCarousel').carousel({
    interval: 3000
})
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

  });


</script>
<script>
$(document).ready(function(){
  // Activate Carousel with a specified interval
  $("#myCarousel").carousel({interval: 90000});

  // Enable Carousel Indicators
  $(".item1").click(function(){
    $("#myCarousel").carousel(0);
  });
  $(".item2").click(function(){
    $("#myCarousel").carousel(1);
  });
  $(".item3").click(function(){
    $("#myCarousel").carousel(2);
  });

  // Enable Carousel Controls
  $(".carousel-control-prev").click(function(){
    $("#myCarousel").carousel("prev");
  });
  $(".carousel-control-next").click(function(){
    $("#myCarousel").carousel("next");
  });
});
</script>

</body>
</html>
