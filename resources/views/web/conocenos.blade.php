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
        <h3>
        <u>El Centro De Excelencia en Prevención de Cáncer</u>
      </h3>
      <br>
      <p align="justify">
          El Centro De Excelencia en Prevención de Cáncer, es una organización educativa que forma parte de La Liga Contra el Cáncer, institución líder con 70 años en la prevención del cáncer en el Perú realizando acciones de prevención y detección con el objetivo de disminuir la alta incidencia de cáncer en nuestro país.</p>
      <p align="justify">
          Este nuevo Centro de Excelencia en Prevención de Cáncer, contará con especialistas calificados en, detección precoz, diagnóstico y tratamiento oportuno de lesiones precancerosas y además con conocimientos en problemas de salud pública en países en vías de desarrollo. Cuya misión es salvar vidas y educar a la población sobre la prevención y detección de la enfermedad.
      </p>
      <p align="justify">
          La creación del Centro de Excelencia, tiene como objetivo formar y capacitar a profesionales de la salud en prevención y control de los diferentes tipos de cáncer: cáncer de cuello uterino, cáncer de estómago, cáncer de mama, cáncer de varones (próstata, pene y testículos) y cáncer de piel; buscando contribuir a la reducción de la incidencia, morbilidad y mortalidad del cáncer, mejorando así la calidad de vida de la población más vulnerable.
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
               <p  align="center" style="color:white">Promover la capacitación de los profesionales de salud de todos los niveles de atención en prevención primaria y secundaria de los diversos tipos de cáncer</p>
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
<section class="team-area pt-100 pb-100" id="team">
    <div class="container">
      <div class="row">
        <div class="col-xl-8 mx-auto text-center">
          <div class="section-title">
            <h4>Mi equipo</h4>
            <p>Contamos, con un equipo de profesionales calificados, líderes en prevención primaria y secundaria de cáncer en el Perú, quienes están comprometidos con su misión de salvar vidas y educar a la población sobre la prevención de la enfermedad. </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="single-team">
            <img src="http://infinityflamesoft.com/html/xenon-preview/assets/img/team/team1.jpg" alt="">
            <div class="team-hover">
              <h4>john doe <span>web developer</span></h4>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-youtube"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-team">
            <img src="http://infinityflamesoft.com/html/xenon-preview/assets/img/team/team2.jpg" alt="">
            <div class="team-hover">
              <h4>john doe <span>web developer</span></h4>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-youtube"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-team">
            <img src="http://infinityflamesoft.com/html/xenon-preview/assets/img/team/team3.jpg" alt="">
            <div class="team-hover">
              <h4>john doe <span>web developer</span></h4>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-youtube"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
@endsection

