@extends('layouts.principal')

@section('content')
  <section class="banner" style="background-image: url({{ url('centro') }}/imagenes/medicos.jpg);">
         <div class="gradient"></div>

          </div>
    </section>
<br>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <div class="d-flex justify-content-center">
        <img src="{{ url('centro') }}/imagenes/DOCTORA.png" alt="logo" width="400" height="400">
      </div>

    </div>
    <div class="col-md-6">
      <div class="container">

      <br>
      <p align="justify">
        El Centro De Excelencia en Prevención de Cáncer, es una organización educativa que forma parte de La Liga Contra el Cáncer, institución líder con 70 años en la prevención del cáncer en el Perú, realizando acciones de prevención y detección con el objetivo de disminuir la alta incidencia de cáncer en nuestro país.  Además, cuenta con un staff de especialistas altamente calificados en detección precoz, diagnóstico y tratamiento oportuno de los principales tipos de cáncer que afectan a la sociedad peruana.

La creación Centro de Excelencia está dirigido a médicos y profesionales de la salud, para contribuir en la reducción de la incidencia, morbilidad y mortalidad del cáncer, mejorando así la calidad de vida de la población más vulnerable.
</p>

        <hr>
      </div>


    </div>
  </div>
</div>


<style type="text/css">

  .demo{background: url("{{ url('centro') }}/imagenes/imagen-1.png") no-repeat center top / cover;}
.serviceBox{
    padding-bottom: 20px;
    border-radius: 0 10px 10px 10px;
    background: #fff;
    text-align: center;
    position: relative;
    z-index: 1;
    transition: all 0.3s ease 0s;
}
.serviceBox:hover{ box-shadow: 0 0 5px #000 inset; }
.serviceBox:before{
    content: "";
    display: inline-block;
    width: 200px;
    height: 15px;
    border-radius: 10px 10px 0 0;
    background: #2999c3;
    z-index: -1;
    position: absolute;
    top: -15px;
    left: 0;
}
.serviceBox .service-icon{
    width: 185px;
    height: 65px;
    background: #2999c3;
    font-size: 40px;
    margin-bottom: 80px;
    position: relative;
    transition: all 0.5s ease 0s;
}
.serviceBox .service-icon:after{
    content: "";
    width: 130px;
    height: 130px;
    background: #2999c3;
    border-radius: 0 0 20px 0;
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%) scale(1,0.7) rotate(45deg);
}
.serviceBox .service-icon span{
    display: block;
    font-size: 70px;
    color: #fff;
    position: absolute;
    top: 0;
    left: 50%;
    z-index: 1;
    transform: translateX(-50%) rotateX(360deg);
    transition: all 0.3s ease 0s;
}
.serviceBox:hover .service-icon span{ transform: translateX(-50%) rotateX(0); }
.serviceBox .title{
    font-size: 20px;
    color: #505050;
    letter-spacing: 1px;
    text-transform: uppercase;
    margin: 0 0 10px 0;
    transition: all 0.3s ease 0.1s;
}
.serviceBox:hover .title{ color: #2999c3; }
.serviceBox .description{
    padding: 0 10px;
    font-size: 15px;
    color: #505050;
    line-height: 27px;
    margin-bottom: 15px;
    transition: all 0.3s ease 0s;
}
.serviceBox.darkblue:before,
.serviceBox.darkblue .service-icon,
.serviceBox.darkblue .service-icon:after{ background: #1a6bac; }
.serviceBox.darkblue:hover .title{ color: #1a6bac; }
.serviceBox.yellow:before,
.serviceBox.yellow .service-icon,
.serviceBox.yellow .service-icon:after{ background: #fcb833; }
.serviceBox.yellow:hover .title{ color: #fcb833; }
.serviceBox.red:before,
.serviceBox.red .service-icon,
.serviceBox.red .service-icon:after{ background: #d7182a; }
.serviceBox.red:hover .title{ color: #d7182a; }
@media only screen and (max-width:990px){
    .serviceBox{ margin-bottom: 30px; }
}
</style>

<div class="demo">
  <br><br>
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-12  " style="background:url('{{ url('centro') }}/imagenes/img2/Marco.png'); background-size: cover;
                  background-repeat: no-repeat;
                  background-position: center; filter: grayscale(50%) brightness(200%);
              -webkit-filter: grayscale(50%) brightness(200%); height: 350px; padding: 40px;" >
                 <div class="d-flex justify-content-center">
                 <img id="imgG" src="{{ url('centro') }}/imagenes/img2/mision.png" alt="Avatar" style="height:100px">
               </div>
               <h2 align="center" style="color:white">MISIÓN</h2>
               <p  align="center" style="color:white">Promover la capacitación y formación de los profesionales de salud de todos los niveles de atención en prevención primaria y secundaria de los diversos tipos de cáncer.</p>
            </div>

            <div class="col-md-4 col-sm-12 offset-md-4" style="background:url('{{ url('centro') }}/imagenes/img2/Marco.png'); background-size: cover;
                  background-repeat: no-repeat;
                  background-position: center; filter: grayscale(50%) brightness(200%);
              -webkit-filter: grayscale(50%) brightness(200%); height: 350px; padding: 40px;" >
                 <div class="d-flex justify-content-center">
                 <img id="imgG" src="{{ url('centro') }}/imagenes/img2/mision.png" alt="Avatar" height="100px">
               </div>
               <h2 align="center" style="color:white">VISIÓN</h2>
               <p align="center" style="color:white">Posicionarnos como Centro de Excelencia Líder en Prevención de Cáncer en el Perú.</p>
            </div>





        </div>
    </div>
    <br><br>
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


.our-webcoderskull{


}
.our-webcoderskull .cnt-block{
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

<section class="our-webcoderskull padding-lg">
  <div class="container">

      <div class="section-title">
                  <h4 style="color: #606060; ">DIRECTIVOS</h4>
      </div>
    <ul class="row">
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="{{ url('centro') }}/imagenes/directivos/Dr-AguilarRamosPedro.png" class="img-responsive" alt=""></figure>
            <h3 >Dr. Aguilar Ramos Pedro </h3><br>
          </div>
      </li>
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="{{ url('centro') }}/imagenes/directivos/Dr.-Grisson-Barron,-Gilmar.png" class="img-responsive" alt=""></figure>
            <h3 >Dr. Grisson Barron, Gilmar </h3><br>
          </div>
      </li>
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="{{ url('centro') }}/imagenes/directivos/Dr.-Lama-Calle,-Carlos.png" class="img-responsive" alt=""></figure>
            <h3 >Dr. Lama Calle, Carlos</h3><br>
          </div>
      </li>
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="{{ url('centro') }}/imagenes/directivos/Dr.-López-Blanco,-Aldo.png" class="img-responsive" alt=""></figure>
            <h3 >Dr. López Blanco, Aldo </h3><br>
          </div>
      </li>
    </ul>


    <ul class="row">
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="{{ url('centro') }}/imagenes/directivos/Dr.-Velarde-Galdos,-Rafael.png" class="img-responsive" alt=""></figure>
            <h3 >Dr. Velarde Galdos, Raúl </h3><br>
          </div>
      </li>
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="{{ url('centro') }}/imagenes/directivos/Dr.-Velarde-Mendez,-Marco.png" class="img-responsive" alt=""></figure>
            <h3 >Dr. Velarde Méndez, Marco</h3><br>
          </div>
      </li>
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="{{ url('centro') }}/imagenes/directivos/Dra.-Carrasco-Collantes,-Marcia.png" class="img-responsive" alt=""></figure>
            <h3 >Dra. Carrasco Collantes, Marcia</h3><br>
          </div>
      </li>
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="{{ url('centro') }}/imagenes/directivos/Dra.-Malca-Tocas,-Mirtha.png" class="img-responsive" alt=""></figure>
            <h3 >Dra. Malca Tocas, Mirtha </h3><br>
          </div>
      </li>
    </ul>



        <ul class="row">
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="{{ url('centro') }}/imagenes/directivos/Lic.-Gonzales-Cabrera-,-Magali-Jovana.png" class="img-responsive" alt=""></figure>
            <h3 >Lic. Gonzáles Cabrera , Magali Jovana </h3><br>
          </div>
      </li>
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="{{ url('centro') }}/imagenes/directivos/Lic.-Lopez-Ampuero,-Catya-Luz.png" class="img-responsive" alt=""></figure>
            <h3 >Lic. López Ampuero, Catya Luz</h3><br>
          </div>
      </li>
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="{{ url('centro') }}/imagenes/directivos/Lic.-Medrano-Guillen,-Claudia-Nathaly.png" class="img-responsive" alt=""></figure>
            <h3> Lic. Medrano Guillen, Claudia Nathaly </h3><br>
          </div>
      </li>
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="{{ url('centro') }}/imagenes/directivos/Lic.-Torres-Campos,-Clerk-Oriele.png" class="img-responsive" alt=""></figure>
            <h3 >Lic. Torres Campos, Clerk Oriele </h3><br>
          </div>
      </li>
    </ul>
  </div>
</section>
@endsection

