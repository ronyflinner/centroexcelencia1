@extends('layouts.principal')

@section('content')
<section class="banner" style="background-image: url({{ url('centro') }}/imagenes/ime-3.png);">

    </section>
<br>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <div class="d-flex justify-content-center">
        <img src="{{ url('centro') }}/imagenes/img2/Screenshot_7.png" alt="logo" width="400" height="400">
      </div>

    </div>
    <div class="col-md-6">
      <div class="container">
         <h3>
        <u>CÁNCER DE CUELLO UTERINO</u>
      </h3>
      <br>

      <p align="justify">
        Formación y entrenamiento de profesionales de la salud en prevención y control de cáncer de cuello uterino en el primer nivel de atención en salud.
      </p>
      <p>
        Con la Formación de proveedores de atención primaria de salud en prevención de cáncer de cuello uterino (en IVAA, Crioterapia, Thermocuagulación, pruebas moleculares), buscamos contribuir a la reducción de la incidencia, morbilidad y mortalidad del cáncer de cuello uterino y mejorar la calidad de vida de la población más vulnerable. Las actividades están encaminadas a la promoción de la salud en la población saludable, prevención del cáncer, detección temprana mediante el tamizaje y tratamiento oportuno.
      </p>
      </div>


    </div>
  </div>
</div>


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

</style>
<section class="our-webcoderskull padding-lg" id="lo1">
  <br><br><br>
  <div class="container">
     <div class="row">

            <div class="col-md-4 col-sm-12  " style="background:url('{{ url('centro') }}/imagenes/img2/Marco.png'); background-size: cover;
                  background-repeat: no-repeat;
                  background-position: center; filter: grayscale(50%) brightness(200%);
              -webkit-filter: grayscale(50%) brightness(200%); height: 350px; padding: 35px;" >
                 <div class="d-flex justify-content-center">

                 <img id="imgG" src="{{ url('centro') }}/imagenes/img2/Icon-estudio.png" alt="Avatar" style="height: 100px">
               </div>
               <h2 align="center" >PLAN DE ESTUDIO</h2>
               <p  align="center">(IVAA, Crioterapia, Thermocuagulación, pruebas moleculares y vacunación contra VPH).</p>
            </div>

            <div class="col-md-4 col-sm-12" style="background:url('{{ url('centro') }}/imagenes/img2/Marco.png'); background-size: cover;
                  background-repeat: no-repeat;
                  background-position: center; filter: grayscale(50%) brightness(200%);
              -webkit-filter: grayscale(50%) brightness(200%); height: 350px; padding: 35px;" >
                 <div class="d-flex justify-content-center">
                 <img id="imgG" src="{{ url('centro') }}/imagenes/img2/Icon-Certificacion.png" alt="Avatar" style="height :100px">
               </div>
               <h2 align="center">CERTIFICACIÓN</h2>
               <p align="center">Se otorgarán con el número de créditos otorgado por los colegios profesionales y La Liga Contra el Cáncer.</p>
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

