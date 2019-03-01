@extends('layouts.principal')

@section('content')
<style type="text/css">
 @import url(https://fonts.googleapis.com/css?family=Raleway:400,500,800);
figure.snip0078 {
  font-family: 'Raleway', Arial, sans-serif;
  color: #fff;
  position: relative;
  float: left;
  margin: 10px 1%;
  min-width: 220px;
  max-width: 310px;
  max-height: 310px;
  width: 100%;
  text-align: center;
}
figure.snip0078 * {
  -webkit-box-sizing: padding-box;
  box-sizing: padding-box;
}
figure.snip0078 img {
  opacity: 1;
  max-width: 100%;

  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  -webkit-transform: scale(0.85);
  transform: scale(0.85);
  -webkit-transform-origin: 0 0;
  transform-origin: 0 0;
}
figure.snip0078 figcaption {
  bottom: 0;
  width: 80%;
  right: 0;
  position: absolute;

  padding: 20px;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  -webkit-transform: translateY(0);
  transform: translateY(0);
  box-shadow: 0 0px 10px -10px #000000;
}
figure.snip0078 figcaption h2,
figure.snip0078 figcaption p {
  margin: 0;
  color: #ffffff;
}
figure.snip0078 figcaption h2 {
  font-weight: 400;
  text-transform: uppercase;
}
figure.snip0078 figcaption h2 span {
  font-weight: 800;
}
figure.snip0078 figcaption p {
  font-size: 0.9em;
  font-weight: 500;
  opacity: 0.65;
}
figure.snip0078 a {
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  position: absolute;
  z-index: 1;
}
figure.snip0078.blue figcaption {
  background: #fc4848;
}
figure.snip0078.blue img {

}
figure.snip0078.red figcaption {
  background: #81261d;
}
figure.snip0078.red img {
  border: 10px solid #81261d;
}
figure.snip0078.yellow figcaption {
  background: #a85913;
}
figure.snip0078.yellow img {
  border: 10px solid #a85913;
}
figure.snip0078:hover figcaption,
figure.snip0078.hover figcaption {

}
figure.snip0078:hover.blue img,
figure.snip0078.hover.blue img {

}
figure.snip0078:hover.red img,
figure.snip0078.hover.red img {
  border: 10px solid #c0392b;
}
figure.snip0078:hover.yellow img,
figure.snip0078.hover.yellow img {
  border: 10px solid #e67e22;
}
s

</style>



<!-- Services Section Start -->
<section class="services">
<!--Accordion wrapper-->
<div class="container">
  <style type="text/css">

  .row.heading h2 {
    color: #fff;
    font-size: 52.52px;
    line-height: 95px;
    font-weight: 400;
    text-align: center;
    margin: 0 0 40px;
    padding-bottom: 20px;
    text-transform: uppercase;
}
ul{
  margin:0;
  padding:0;
  list-style:none;
}
.heading.heading-icon {
    display: block;
}
.padding-lg {
  display: block;
  padding-top: 60px;
  padding-bottom: 60px;
}
.practice-area.padding-lg {
    padding-bottom: 55px;
    padding-top: 55px;
}
.practice-area .inner{
     border:1px solid #999999;
   text-align:center;
   margin-bottom:28px;
   padding:40px 25px;
}
.our-webcoderskull .cnt-block:hover {
    box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
    border: 0;
}
.practice-area .inner h3{
    color:#3c3c3c;
  font-size:24px;
  font-weight:500;
  font-family: 'Poppins', sans-serif;
  padding: 10px 0;
}
.practice-area .inner p{
    font-size:14px;
  line-height:22px;
  font-weight:400;
}
.practice-area .inner img{
  display:inline-block;
}


#lo1{
  background: url("{{ url('centro') }}/imagenes/img2/Imagen-1.png") no-repeat center top / cover;
}

#lo2{
  background: url("{{ url('centro') }}/imagenes/4.png") no-repeat center top / cover;

}
.our-webcoderskull .cnt-block{
;
   float:left;
   width:100%;
   background:#fff;
   padding:30px 20px;
   text-align:center;
   border:2px solid #d5d5d5;
   margin: 0 0 28px;
}
.our-webcoderskull .cnt-block figure{

   width:148px;
   height:148px;
   border-radius:100%;
   display:inline-block;
   margin-bottom: 15px;
}
.our-webcoderskull .cnt-block img{
   width:148px;
   height:148px;
   border-radius:100%;
}
.our-webcoderskull .cnt-block h3{
   color:#2a2a2a;
   font-size:20px;
   font-weight:500;
   padding:6px 0;
   text-transform:uppercase;
}
.our-webcoderskull .cnt-block h3 a{
  text-decoration:none;
  color:#2a2a2a;
}
.our-webcoderskull .cnt-block h3 a:hover{
  color:#337ab7;
}
.our-webcoderskull .cnt-block p{
   color:#2a2a2a;
   font-size:13px;
   line-height:20px;
   font-weight:400;
}
.our-webcoderskull .cnt-block .follow-us{
  margin:20px 0 0;
}
.our-webcoderskull .cnt-block .follow-us li{
    display:inline-block;
  width:auto;
  margin:0 5px;
}
.our-webcoderskull .cnt-block .follow-us li .fa{
   font-size:24px;
   color:#767676;
}
.our-webcoderskull .cnt-block .follow-us li .fa:hover{
   color:#025a8e;
}

elemento{
  height: 0px;
}

</style>

<div class="section-title">
            <h4 style="color: #606060; ">CURSOS Y CONGRESOS</h4>
</div>

@include('errors.request')
    @include('errors.flash')

<style type="text/css">
  .contenedor{
    position: relative;
    display: inline-block;
    text-align: center;
   }

.texto-encima{
    position: absolute;
    top: 10px;
    left: 10px;
}
.centrado{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
</style>
<section class="services">
<!--Accordion wrapper-->
<div class="container">
   <div class="accordion accordion-1" id="accordionEx23" role="tablist">
       <div class="card" data-aos="fade-up" data-aos-delay="300">
           <div class="card-header blue lighten-3 z-depth-1" role="tab" id="heading97">
               <h2 class="text-uppercase mb-0 py-1">
                   <a class="collapsed" data-toggle="collapse" href="#collapse97" aria-expanded="false" aria-controls="collapse97" style="font-size: 16px">
                       CONGRESO DE PREVENCIÓN DE CANCER EN PRIMER NIVEL DE ATENCIÓN DE SALUD<i class="fa fa-angle-down rotate-icon fa-2x"></i>
                   </a>
               </h2>
           </div>
           <div id="collapse97" class="collapse" role="tabpanel" aria-labelledby="heading97" data-parent="#accordionEx23">
               <div class="card-body">
                     <section>
  <div class="container">
     <div class="row">


         <div class="col-md-6 d-inline d-sm-none" style="background: url('{{ url('centro') }}/imagenes/img2/congres_350x400.png'); background-size: cover;
                  background-repeat: no-repeat;
                  background-position: center; height: 400px">  </div>
          <div class="col-md-6 d-none d-sm-inline d-md-none" style="background: url('{{ url('centro') }}/imagenes/img2/congres_350x400.png'); background-size: cover;
                  background-repeat: no-repeat;
                  background-position: center; height: 400px">  </div>
         <div class="col-md-6 d-none d-md-inline d-lg-none" style="background: url('{{ url('centro') }}/imagenes/img2/congres_350x400.png'); background-size: cover;
                  background-repeat: no-repeat;
                  background-position: center; height: 400px">  </div>
          <div class="col-md-6 d-none d-lg-inline d-xl-none" style="background: url('{{ url('centro') }}/imagenes/img2/congres_350x400.png'); background-size: cover;
                  background-repeat: no-repeat;
                  background-position: center; height: 400px">  </div>
          <div class="col-md-6 d-none d-xl-inline" style="background: url('{{ url('centro') }}/imagenes/img2/congreso.png'); background-size: cover;
                  background-repeat: no-repeat;
                  background-position: center; height: 400px">  </div>


      <!--  <div class="col-md-6 .hidden-sm-up" style="background: url('http://localhost/centroLiga/public/centro/imagenes/img2/congreso.png'); background-size: cover;
                  background-repeat: no-repeat;
                  background-position: center; height: 400px">  </div>-->


     <div class="col-md-6 " style="background:#ea2929; height: 400px">
         <br>
        <div class="d-flex justify-content-center" style="border-right: 2px solid white; border-left: 2px solid white; height: 350px; ">
          <div class="container d-flex align-items-center">
            <div class="container">
            <div class="mb-3"></div>
            <div class="cnt-block equal-hight">
            <h5 style="color:white" align="center">CONGRESO DE PREVENCIÓN DE CANCER EN PRIMER NIVEL DE ATENCIÓN DE SALUD</h5>
             <div class="mb-2"></div>
            <h6 align="center" style="color:white" >Requisitos: Profesiones de la salud.</h6>
            <div class="mb-2" ></div>
            <h6 align="center" style="color:white">Fecha de inicio: 9 y 10 de abril</h6>
            <div class="mb-2"></div>
            <h6 align="center" style="color:white">Lugar: Hotel Sol de Oro, Calle San Martín 305 miraflores</h6>
           <div class="mb-2"></div>
            <div class="d-flex justify-content-center">
              <a class="btn btn-primary btn-download" href="{{ url('/') }}/words/pdfcongreso.pdf" download="CONGRESO DE PREVENCIÓN DE CANCER EN PRIMER NIVEL DE ATENCIÓN DE SALUD.pdf" style="background: white; border: 0px; color:red;"><span class="glyphicon glyphicon-ok"></span> Descargar Temario</a>


            </div>

          </div>
            </div>

          </div>
       </div>
     </div>
     </div>

  </div>


</section>
<style type="text/css">
  figure p{
         color: white;
  }
</style>
<div class="container">
  <div class="row">
    <div class="col-md-3">

    </div>
  </div>
</div>




<div class="container">
  <br>
  <div class="section-title">
            <h4 style="font-size:30px; color: #606060;">Costo</h4>
            <p>Costo de inversión para cada participante, previo al día del evento </p>
  </div>
  <div class="row">
  <div class="col-md-3">
        <div class="contenedor">
        <img src="{{ url('centro') }}/imagenes/precio-1.png" style='width: 250px' />

        <div class="texto-encima"></div>
        <div class="centrado"> <h5 style="color:white">Medicos Especialistas</h5>
                <h7 style="color:white">Precio : S/. 250</h7>
                <div style="color:white" class="md-3"></div>
                <p style="font-size: 11px; color:white;" >Día del envento : S/. 300</p></div>
        </div>
  </div>
    <div class="col-md-3">
        <div class="contenedor">
        <img src="{{ url('centro') }}/imagenes/precio-2.png" style='width: 250px' />

        <div class="texto-encima"></div>
        <div class="centrado"> <h5 style="color:white">Médicos generales</h5>
                <h7 style="color:white">Precio : S/. 200</h7>
                <div style="color:white" class="md-3"></div>
                <p style="font-size: 11px; color:white;" >Día del envento : S/. 250</p></div>
        </div>
  </div>

  <div class="col-md-3">
        <div class="contenedor">
        <img src="{{ url('centro') }}/imagenes/precio-3.png" style='width: 250px' />

        <div class="texto-encima"></div>
        <div class="centrado"> <h5 style="color:white">Otros Profesionales</h5>
                <h7 style="color:white">Precio : S/. 180</h7>
                <div style="color:white" class="md-3"></div>
                <p style="font-size: 11px; color:white;" >Día del envento : S/. 200</p></div>
        </div>
  </div>
  <div class="col-md-3">
        <div class="contenedor">
        <img src="{{ url('centro') }}/imagenes/precio-4.png" style='width: 250px' />

        <div class="texto-encima"></div>
        <div class="centrado"> <h5 style="color:white">Internos</h5>
                <h7 style="color:white">Precio : S/. 100</h7>
                <div style="color:white" class="md-3"></div>
                <p style="font-size: 11px; color:white;" >Día del envento : S/. 150</p></div>
        </div>
  </div>


</div>
</div>
               </div>
           </div>
       </div>
       <div class="card" data-aos="fade-up" data-aos-delay="300">
           <div class="card-header blue lighten-3 z-depth-1" role="tab" id="heading98">
               <h2 class="text-uppercase mb-0 py-1">
                   <a class="collapsed" data-toggle="collapse" href="#collapse98" aria-expanded="false" aria-controls="collapse98" style="font-size: 16px" >
                       CURSO DE ASESORIA GENETICA DE PREVENCIÓN DE CANCER DIRIGIDO AL PRIMER NIVEL DE ATENCIÓN DE SALUD <i class="fa fa-angle-down rotate-icon fa-2x"></i>
                   </a>
               </h2>
           </div>
           <div id="collapse98" class="collapse" role="tabpanel" aria-labelledby="heading98" data-parent="#accordionEx23">
               <div class="card-body">
                     <section>
  <div class="container">
     <div class="row">

     <div class="col-md-6 " style="background:#ea2929; height: 400px">
         <br>
        <div class="d-flex justify-content-center" style="border-right: 2px solid white; border-left: 2px solid white; height: 350px; ">
          <div class="container d-flex align-items-center">
            <div class="mb-5"></div>
            <div class="cnt-block equal-hight">
            <h5 style="color:white" align="center">CURSO DE ASESORIA GENETICA DE PREVENCIÓN DE CANCER DIRIGIDO AL PRIMER NIVEL DE ATENCIÓN DE SALUD</h5>
             <div class="mb-5"></div>
            <h6 align="center" style="color:white" >Requisitos: Profesiones de la salud.</h6>
            <div class="mb-2" ></div>
            <h6 align="center" style="color:white">Fecha de inicio: Por confirmar</h6>
            <div class="mb-2"></div>
            <h6 align="center" style="color:white">Lugar: Por confirmar </h6>

          </div>
          </div>
       </div>
     </div>



                <div class="col-md-6 d-inline d-sm-none" style="background: url('{{ url('centro') }}/imagenes/img2/curso_350x400.png'); background-size: cover;
                  background-repeat: no-repeat;
                  background-position: center; height: 400px">  </div>
          <div class="col-md-6 d-none d-sm-inline d-md-none" style="background: url('{{ url('centro') }}/imagenes/img2/curso_350x400.png'); background-size: cover;
                  background-repeat: no-repeat;
                  background-position: center; height: 400px">  </div>
         <div class="col-md-6 d-none d-md-inline d-lg-none" style="background: url('{{ url('centro') }}/imagenes/img2/curso_350x400.png'); background-size: cover;
                  background-repeat: no-repeat;
                  background-position: center; height: 400px">  </div>
          <div class="col-md-6 d-none d-lg-inline d-xl-none" style="background: url('{{ url('centro') }}/imagenes/img2/curso.png'); background-size: cover;
                  background-repeat: no-repeat;
                  background-position: center; height: 400px">  </div>
          <div class="col-md-6 d-none d-xl-inline" style="background: url('{{ url('centro') }}/imagenes/img2/curso.png'); background-size: cover;
                  background-repeat: no-repeat;
                  background-position: center; height: 400px">  </div>

     </div>

  </div>


</section>


<div class="container">
  <br>
  <div class="section-title">
            <h4 style="font-size:30px; color: #606060;">Costo</h4>
            <p align="center" ></p>
  </div>
  <div class="row d-flex justify-content-center">

  <div class="col-md-3">
        <div class="contenedor">
        <img src="{{ url('centro') }}/imagenes/precio-1.png" style='width: 250px' />

        <div class="texto-encima"></div>
        <div class="centrado"> <h5 style="color:white">Medicos Especialistas</h5>
                <h7 style="color:white">Precio : S/. 250</h7>
                <div style="color:white" class="md-3"></div>
                <p style="font-size: 11px; color:white;" >Día del envento : S/. 300</p></div>
        </div>
  </div>
    <div class="col-md-3">
        <div class="contenedor">
        <img src="{{ url('centro') }}/imagenes/precio-2.png" style='width: 250px' />

        <div class="texto-encima"></div>
        <div class="centrado"> <h5 style="color:white">Médicos generales</h5>
                <h7 style="color:white">Precio : S/. 200</h7>
                <div style="color:white" class="md-3"></div>
                <p style="font-size: 11px; color:white;" >Día del envento : S/. 250</p></div>
        </div>
  </div>


</div>
</div>
               </div>
           </div>
       </div>
   </div>
   <!--Accordion wrapper-->
</div>
</section>



</div>
</section>

<style type="text/css">

</style>
<div class="d-flex justify-content-center" style="background: url('{{ url('centro') }}/imagenes/imagen-1.png'); background-size: cover;
                  background-repeat: no-repeat;
                  background-position: center; height: 200px" >
      <!--Accordion wrapper-->
   <div class="d-flex align-items-center" >
         <a class="btn btn-primary"   href="#primary" data-toggle="modal" style="background: white; border: 0px; color:red; padding: 20px;"><span class="glyphicon glyphicon-ok"></span> Inscribete Aquí</a>
   </div>
</div>

   <div class="container">
    <!-- Modal -->
    <div class="modal fade" id="primary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                      <div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Inscripción</h1>
            </div>
        </div>
    </div>
</div>


       <div class="container">
                 <form class="contact100-form validate-form" enctype="multipart/form-data" action="{{ route('inscripcion.store') }} " method="post"  id="avatarForm">

                      <form class="contact100-form validate-form"  enctype="multipart/form-data">

                      {!! Form::open(['route'=>'inscripcion.store', 'method'=>'POST',"class"=>"form form-id",'files' => true, 'id'=>'form-id']) !!}
                      {!! Form::token() !!}

                <div class="row ">
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="name">
                                Nombre</label>
                            <input type="text" class="form-control" name="name" placeholder="Ingresa nombre" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                DNI</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="text" class="form-control" id="dni" name="dni" placeholder="Ingresa DNI" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Correo Electronico</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" name="email" placeholder="Ingresa correo electronico" required="required" /></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Numero telefónico</label>
                      <input type="text" class="form-control" name="cell" placeholder="Ingresa tu numero telefónico" required="required" />
                        </div>
                         <div class="form-group">
                              <label for="exampleFormControlSelect1">Seleccionar Curso</label>
                              <select class="form-control" id="exampleFormControlSelect1" name="curso">
                                <option value="1">CONGRESO DE PREVENCIÓN DE CANCER EN PRIMER NIVEL DE ATENCIÓN DE SALUD </option>
                                <option value="2">CURSO DE ASESORIA GENETICA DE CANCER DIRIGIDO AL PRIMER NIVEL DE ATENCIÓN DE SALUD</option>
                              </select>
                          </div>
                          <div class="form-group">
                              <label for="exampleFormControlSelect1">Seleccionar tipo de participante</label>
                              <select class="form-control" id="exampleFormControlSelect1" name="tipo">
                                <option value="1">Medicos Especialistas </option>
                                <option value="2">Medicos Generales</option>
                                <option value="3">Otras Profesiones</option>
                                <option value="4">Internos</option>
                              </select>
                          </div>
                            <div class="box">
                               <!-- <input id="file-4" type="file" multiple=true name = "archivo">-->
                            </div>


                    </div>
                     {{ csrf_field() }}

                     <div class=" mr-sm-2 col-sm-5 wrap-input-container">
                        <label class="custom-file-upload form-control">
                          <i class="fa fa-cloud-upload"></i> Añadir voucher de pago
                        </label>
                        <input class="file-upload" name="archivo" type="file">
                      </div>
                </div>
                <div class="modal-footer">

                    <button type="submit" class="btn btn-primary d-flex justify-content-center" id="enviar">
                            Enviar</button>
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
                </div>
                </form>

          </div>
                </div>



            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- Modal -->


</div>


<style type="text/css">
  /*

@import url('https://fonts.googleapis.com/css?family=Open+Sans');
font-family: 'Open Sans', sans-serif;

 */

@import url('https://fonts.googleapis.com/css?family=Open+Sans');

html {

  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}

body {
     overflow-x:hidden;
     font-family: 'Open Sans', sans-serif;
     position:relative;
}

section {
    padding: 30px 0;
    overflow-y: auto !important;
}

section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}

a {
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  transition: all 0.5s;
  font-family: 'Open Sans', sans-serif;
  color: #000;
}
a:hover {
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  transition: all 0.5s;
  color: #000;
  text-decoration: none;
}

h1,h2,h3,h4,h5{
       font-family: 'Open Sans', sans-serif;
}
p, ul,li{
    font-family: 'Open Sans', sans-serif;
    font-size: 14px;
    line-height: 25px;
}
.form-inline .form-control.custom-file-upload {
  border: 1px solid #ccc;

  padding: 6px 12px;
  cursor: pointer;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  width: 100%;
}

.wrap-input-container {
  display: inline-block;
  position: relative;
  overflow: hidden;
}
.wrap-input-container input {
position: absolute;
font-size: 400px;
opacity: 0;
z-index: 1;
top: 0;
left: 0;
}

</style>

@endsection

@section('javascript')
  <script src="{{ url('adminlte/js/fileinput.min.js') }}"></script>

 <script type="text/javascript">

       // Dynamically add-on fields

$(function() {
    // Remove button click
    $(document).on(
        'click',
        '[data-role="dynamic-fields"] > .form-inline [data-role="remove"]',
        function(e) {
            e.preventDefault();
            $(this).closest('.form-inline').remove();
        }
    );
    // Add button click
    $(document).on(
        'click',
        '[data-role="dynamic-fields"] > .form-inline [data-role="add"]',
        function(e) {
            e.preventDefault();
            var container = $(this).closest('[data-role="dynamic-fields"]');
            new_field_group = container.children().filter('.form-inline:first-child').clone();
          new_field_group.find('label').html('Upload Document'); new_field_group.find('input').each(function(){
                $(this).val('');
            });
            container.append(new_field_group);
        }
    );
});



// file upload

$(document).on('change', '.file-upload', function(){
  var i = $(this).prev('label').clone();
  var file = this.files[0].name;
  $(this).prev('label').text(file);
});
          $("#file-3").fileinput({
            showCaption: false,
            showUpload: false,
            browseClass: "btn btn-primary btn-lg",
            fileType: "any"
        });
/*
   $('#enviar').click(function(event) {

    var file2 = $('#file-1');   //Ya que utilizas jquery aprovechalo...
    var archivo = file2[0].files;       //el array pertenece al elemento

    if(archivo)
    {

        // Crea un formData y lo envías
        var formData = new formData(form);
        formData.append('titulo',titulo);
        formData.append('archivo[]',archivo);

        console.log(archivo);

        vurl='{ { url('inscribir2') }}';
                               var parametros = {
                                       "usuario" : formData,
                                    };
                                console.log(vurl);
                                $.ajax({
                                url:   vurl,
                                data: parametros,
                                type:  'GET',
                                dataType : 'json',
                                headers: {
                                           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                          } ,
                                success:  function (data) {
                                      console.log(data);
                                },
                                error: function (data2) {
                                   console.log('Error:', data2);
                                  },
                                  async: false
                                });

    }
   });


   */
 </script>
@endsection