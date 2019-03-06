@extends('layouts.principal')

@section('content')
<section class="banner" style="background-image: url({{ url('centro') }}/imagenes/ime-3.png);">

    </section>
<br>

<!-- <div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <div class="d-flex justify-content-center">
        <img src="{ { url('centro') }}/imagenes/img2/Screenshot_7.png" alt="logo" width="400" height="400">
      </div>

    </div>
    <div class="col-md-6">
      <div class="container">
      <p align="justify">
        El Centro de Excelencia en Prevención de Cáncer, como parte de su programa de formación y entrenamiento de los profesionales de la salud, brindará cursos y congresos especializados en los diferentes tipos de cáncer como:
      </p>

      </div>


    </div>
  </div>
</div> -->
<style type="text/css">
 @import url(https://fonts.googleapis.com/css?family=Raleway:400,500,800);
figure.snip0078 {
  font-family: 'Rubik', Arial, sans-serif;
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
  font-family: 'Rubik', sans-serif;
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

<div>
            <h2 style="color: #606060; " align="center">Cursos y Capacitaciones</h2>
              <hr>
             <p align="center" style="text-transform:none; color: black">El Centro de Excelencia en Prevención de Cáncer, como parte de su programa de formación y entrenamiento de los profesionales de la salud, brindará cursos y congresos especializados en los diferentes tipos de cáncer. </p>
</div>

@include('errors.request')
    @include('errors.flash')

<style type="text/css">
  .contenedor{
    position: relative;
    /*display: inline-block;*/
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
                   <a class="collapsed" data-toggle="collapse" href="#collapse97" aria-expanded="false" aria-controls="collapse97" style="font-size: 16px; text-transform:none;">Curso de Prevención de Cáncer en Primer Nivel de Atención de Salud<i class="fa fa-angle-down rotate-icon fa-2x"></i>

               <h2 class="text-uppercase mb-0 py-1">
                   <a class="collapsed" data-toggle="collapse" href="#collapse97" aria-expanded="false" aria-controls="collapse97" style="font-size: 16px; text-transform:none;">1ER CURSO INTERNACIONAL EN CONTROL DE CÁNCER PARA PRIMERA NIVEL DE ATENCIÓN<i class="fa fa-angle-down rotate-icon fa-2x"></i>

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
          <!-- <h5 style="color:white" align="center">Curso de Prevención de Cancer En Primer Nivel de Atención de Salud</h5>-->
             <div class="mb-2"></div>
            <h6 align="center" style="color:white" >Requisitos: Profesiones de la salud.</h6>
            <div class="mb-2" ></div>
            <h6 align="center" style="color:white">Fecha de inicio: 09 y 10 de abril</h6>
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
            <h4 style="font-size:30px; color: #606060;">INSCRIPCIÓN</h4>
  </div>
  <div class="row">
  <div class="col-md-3 col-sm-12 d-flex justify-content-center" style="margin-bottom: 10px;">
        <a href="{{route('inscripcion.index')}}">

      <div class="contenedor">
        <img src="{{ url('centro') }}/imagenes/precio-1.png" style='width: 250px' />
        <h5 style="color:white">Médicos Especialistas</h5>
        <div class="texto-encima"></div>
        <div class="centrado">

                  <h5 style="color:white">Médicos Especialistas</h5>
                  <h7 style="color:white">Incripción <br> 250 soles</h7>
                  <div style="color:white" class="md-3"></div>
                  <p class="text-center" style="font-size: 11px; color:white;" >Día del envento<br> 300 soles</p>

        </div>


        </div>
    </a>
  </div>
    <div class="col-md-3 col-sm-12 d-flex justify-content-center" style="margin-bottom: 10px;">
        <a href="{{route('inscripcion.index')}}"><div class="contenedor">
        <img src="{{ url('centro') }}/imagenes/precio-2.png" style='width: 250px' />

        <div class="texto-encima"></div>
        <div class="centrado"> <h5 style="color:white">Médicos Generales</h5>
                <h7 style="color:white">Incripción <br> 200 soles</h7>
                <div style="color:white" class="md-3"></div>
                <p class="text-center"  style="font-size: 11px; color:white;" >Día del envento <br> 250 soles</p></div>
        </div></a>
  </div>

  <div class="col-md-3 col-sm-12 d-flex justify-content-center" style="margin-bottom: 10px;">
       <a href="{{route('inscripcion.index')}}"> <div class="contenedor">
        <img src="{{ url('centro') }}/imagenes/precio-3.png" style='width: 250px' />

        <div class="texto-encima"></div>
        <div class="centrado"> <h5 style="color:white">Otros Profesionales</h5>
                <h7 style="color:white">Incripción <br> 180 soles</h7>
                <div style="color:white" class="md-3"></div>
                <p class="text-center" style="font-size: 11px; color:white;" >Día del envento <br> 200 soles</p></div>
        </div></a>
  </div>
  <div class="col-md-3 col-sm-12 d-flex justify-content-center" style="margin-bottom: 10px;">
       <a href="{{route('inscripcion.index')}}"> <div class="contenedor">
        <img src="{{ url('centro') }}/imagenes/precio-4.png" style='width: 250px' />

        <div class="texto-encima"></div>
        <div class="centrado"> <h5 style="color:white">Internos</h5>
                <h7 style="color:white">Incripción <br> 100 soles</h7>
                <div style="color:white" class="md-3"></div>
                <p class="text-center" style="font-size: 11px; color:white;" >Día del envento <br> 150 soles</p></div>
        </div></a>
  </div>


</div>
</div>
               </div>
           </div>
       </div>
    <!--   <div class="card" data-aos="fade-up" data-aos-delay="300">
           <div class="card-header blue lighten-3 z-depth-1" role="tab" id="heading98">
               <h2 class="text-uppercase mb-0 py-1">
                   <a class="collapsed" data-toggle="collapse" href="#collapse98" aria-expanded="false" aria-controls="collapse98" style="font-size: 16px; text-transform:none;" > <span class="glyphicon glyphicon-ok" style="color:blue"></span>
                       Curso de Asersoría Genética de Prevención de Cáncer Dirigido al Primer Nivel de Atención de salud <i class="fa fa-angle-down rotate-icon fa-2x"></i>
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


</section>-->


<!--<div class="container">
  <br>
  <div class="section-title">
            <h4 style="font-size:30px; color: #606060;">Precio</h4>
  </div>

  <div class="row d-flex justify-content-center" >

  <div class="col-md-3 col-sm-12 d-flex justify-content-center" style="margin-bottom: 10px;">
        <a href="{{route('inscripcion.index')}}"><div class="contenedor">
        <img src="{{ url('centro') }}/imagenes/precio-1.png" style='width: 250px' />

        <div class="texto-encima"></div>
        <div class="centrado"> <h5 style="color:white">Médicos Especialistas</h5>
                <h7 style="color:white">Precio : S/. 250</h7>
                <div style="color:white" class="md-3"></div>
                <p style="font-size: 11px; color:white;" >Día del envento : S/. 300</p></div>
        </div></a>
  </div>
  <div class="col-md-3 col-sm-12 d-flex justify-content-center" style="margin-bottom: 10px;">
        <div class="contenedor">
        <img src="{{ url('centro') }}/imagenes/precio-2.png" style='width: 250px' />

        <div class="texto-encima"></div>
        <div class="centrado"> <h5 style="color:white">Médicos generales</h5>
                <h7 style="color:white">Precio : S/. 200</h7>
                <div style="color:white" class="md-3"></div>
                <p style="font-size: 11px; color:white;" >Día del envento: S/. 250</p></div>
        </div>
  </div>


</div>
</div>-->
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
<!-- <div class="d-flex justify-content-center" style="background: url('{ { url('centro') }}/imagenes/imagen-1.png'); background-size: cover;
                  background-repeat: no-repeat;
                  background-position: center; height: 200px" >

   <div class="d-flex align-items-center" >
         <a class="btn btn-primary"   href="#primary" data-toggle="modal" style="background: white; border: 0px; color:red; padding: 20px;"><span class="glyphicon glyphicon-ok"></span> Inscribete Aquí</a>
   </div>
</div> -->

<style type="text/css">
  .row.heading h2 {
    color: #fff;
    font-size: 52.52px;
    line-height: 95px;
    font-weight: 400;
    text-align: center;
    margin: 0 0 40px;
    padding-bottom: 20px;

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

</style>
<section class="our-webcoderskull padding-lg" id="lo1">
  <br><br><br>
  <div class="container">
     <div class="row">

            <div class="col-md-2 col-sm-12" >

            </div>
            <div class="col-md-4 col-sm-12" style="background:url('{{ url('centro') }}/imagenes/img2/Marco.png'); background-size: cover;
                  background-repeat: no-repeat;
                  background-position: center; filter: grayscale(50%) brightness(200%);
              -webkit-filter: grayscale(50%) brightness(200%); height: 350px; padding: 35px;" >
                 <div class="d-flex justify-content-center">
                 <img id="imgG" src="{{ url('centro') }}/imagenes/img2/Icon-Certificacion.png" alt="Avatar" style="height :100px">
               </div>
               <h2 align="center">CERTIFICACIÓN</h2>
               <p align="center">Se otorgará con el número de créditos brindados por los colegios profesionales: </p>

              <div class="row">

                <div class="d-flex flex-row bd-highlight mb-3">
                  <div class="p-2 bd-highlight">
                     <a href="https://www.cmp.org.pe/">
                      <img src="{{ url('centro') }}/imagenes/Logo-LCC-240x240.png" alt="" width="80px" height="80px">
                    </a>
                  </div>
                  <div class="p-1 bd-highlight">
                     <a href="https://www.cep.org.pe/ ">
                       <img src="{{ url('centro') }}/imagenes/Logo-LCC-240x240.png" alt="" width="80px" height="80px">
                    </a>
                  </div>
                  <div class="p-1 bd-highlight">
                     <a href="http://www.usmp.edu.pe/fobstetri/escuelas/obstetricia/index.php">
                       <img src="{{ url('centro') }}/imagenes/Logo-LCC-240x240.png" alt="" width="80px" height="80px">
                    </a>
                  </div>
                   <div class="p-1 bd-highlight">
                      <a href="http://www.usmp.edu.pe/fobstetri/escuelas/obstetricia/index.php">
                         <img src="{{ url('centro') }}/imagenes/Logo-LCC-240x240.png" alt="" width="80px" height="80px">
                      </a>
                  </div>


                </div>

              </div>

            </div>



            <div class="col-md-4 col-sm-12" style="background:url('{{ url('centro') }}/imagenes/img2/Marco.png'); background-size: cover;
                  background-repeat: no-repeat;
                  background-position: center; filter: grayscale(50%) brightness(200%);
              -webkit-filter: grayscale(50%) brightness(200%); height: 350px; padding: 35px;" >
                 <div class="d-flex justify-content-center">
                 <img id="imgG" src="{{ url('centro') }}/imagenes/img2/Icon-Modalidad.png" alt="Avatar" style="height:100px">
               </div>
               <h2 align="center">MODALIDAD</h2>
               <p align="center">Presencial</p>
            </div>





        </div>
  </div>
</section>

@endsection

