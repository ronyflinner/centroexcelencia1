@extends('layouts.principal')

@section('content')
    <section class="banner" style="background-image: url({{ url('centro') }}/imagenes/3.png);">

    </section>

    <style type="text/css">
        .view-group {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: row;
    flex-direction: row;
    padding-left: 0;
    margin-bottom: 0;
}
.thumbnail
{
    margin-bottom: 30px;
    padding: 0px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    border-radius: 0px;
}

.item.list-group-item
{
    float: none;
    width: 100%;
    background-color: #fff;
    margin-bottom: 30px;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
    padding: 0 1rem;
    border: 0;
}
.item.list-group-item .img-event {
    float: left;
    width: 30%;
}

.item.list-group-item .list-group-image
{
    margin-right: 10px;
}
.item.list-group-item .thumbnail
{
    margin-bottom: 0px;
    display: inline-block;
}
.item.list-group-item .caption
{
    float: left;
    width: 70%;
    margin: 0;
}

.item.list-group-item:before, .item.list-group-item:after
{
    display: table;
    content: " ";
}

.item.list-group-item:after
{
    clear: both;
}

.box{
    padding:60px 0px;
}

.box-part{
    background:#FFF;
    border-radius:0;
    padding:60px 10px;
    margin:30px 0px;
}
.text{
    margin:20px 0px;
}

.fa{
     color:#4183D7;
}




/******************* Timeline Demo - 2 *****************/
.main-timeline2{padding-top:50px;overflow:hidden;position:relative}
.main-timeline2:before{content:"";width:7px;height:100%;background:#084772;margin:0 auto;position:absolute;top:80px;left:0;right:0}
.main-timeline2 .timeline{width:50%;float:left;padding:20px 60px;border-top:7px solid #084772;border-right:7px solid #084772;border-radius:0 30px 0 0;position:relative;right:-3.5px}
.main-timeline2 .icon{display:block;width:50px;height:50px;line-height:50px;border-radius:50%;background:#e84c47;border:1px solid #fff;text-align:center;font-size:25px;color:#fff;box-shadow:0 0 0 2px #e84c47;position:absolute;top:-30px;left:0}
.main-timeline2 .timeline-content{display:block;padding:30px 10px 10px;border-radius:20px;background:#e84c47;color:#fff;position:relative}
.main-timeline2 .timeline-content:hover{text-decoration:none;color:#fff}
.main-timeline2 .timeline-content:after,.main-timeline2 .timeline-content:before{content:"";display:block;width:10px;height:50px;border-radius:10px;background:#e84c47;border:1px solid #fff;position:absolute;top:-35px;left:50px}
.main-timeline2 .timeline-content:after{left:auto;right:50px}
.main-timeline2 .title{font-size:24px;margin:0}
.main-timeline2 .description{font-size:15px;letter-spacing:1px;margin:0 0 5px}
.main-timeline2 .timeline:nth-child(2n){border-right:none;border-left:7px solid #084772;border-radius:30px 0 0;right:auto;left:-3.5px}
.main-timeline2 .timeline:nth-child(2n) .icon{left:auto;right:0;box-shadow:0 0 0 2px #4bd9bf}
.main-timeline2 .timeline:nth-child(2){margin-top:130px}
.main-timeline2 .timeline:nth-child(odd){margin:-130px 0 30px}
.main-timeline2 .timeline:nth-child(even){margin-bottom:80px}
.main-timeline2 .timeline:first-child,.main-timeline2 .timeline:last-child:nth-child(even){margin:0 0 30px}
.main-timeline2 .timeline:nth-child(2n) .icon,.main-timeline2 .timeline:nth-child(2n) .timeline-content,.main-timeline2 .timeline:nth-child(2n) .timeline-content:after,.main-timeline2 .timeline:nth-child(2n) .timeline-content:before{background:#4bd9bf}
.main-timeline2 .timeline:nth-child(3n) .icon,.main-timeline2 .timeline:nth-child(3n) .timeline-content,.main-timeline2 .timeline:nth-child(3n) .timeline-content:after,.main-timeline2 .timeline:nth-child(3n) .timeline-content:before{background:#ff9e09}
.main-timeline2 .timeline:nth-child(3n) .icon{box-shadow:0 0 0 2px #ff9e09}
.main-timeline2 .timeline:nth-child(4n) .icon,.main-timeline2 .timeline:nth-child(4n) .timeline-content,.main-timeline2 .timeline:nth-child(4n) .timeline-content:after,.main-timeline2 .timeline:nth-child(4n) .timeline-content:before{background:#3ebae7}
.main-timeline2 .timeline:nth-child(4n) .icon{box-shadow:0 0 0 2px #3ebae7}
@media only screen and (max-width:767px){.main-timeline2:before{left:0;right:auto}
.main-timeline2 .timeline,.main-timeline2 .timeline:nth-child(even),.main-timeline2 .timeline:nth-child(odd){width:100%;float:none;padding:20px 30px;margin:0 0 30px;border-right:none;border-left:7px solid #084772;border-radius:30px 0 0;right:auto;left:0}
.main-timeline2 .icon{left:auto;right:0}
}
@media only screen and (max-width:480px){.main-timeline2 .title{font-size:18px}
}

    </style>
    <br>
<div class="container">
             <h2 style="color: #606060; " align="center">Sobre el cancer</h2>
              <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="main-timeline2">
                        <div class="timeline">
                            <span class="icon fa fa-globe"></span>
                            <a href="#" class="timeline-content">
                                <h3 class="title">En el mundo</h3>
                                <p class="description">
                                     Hoy en día, en el mundo, el cáncer causa 18 millones de nuevos casos, generando 9.6 millones de muertes; además, 43.8 millones de personas viven con cáncer actualmente. Se estima que esta cifra se incrementará alarmantemente hasta 2020, sobre todo en países de desarrollo.
                                </p>
                            </a>
                        </div>
                        <div class="timeline">
                            <span class="icon fa fa-rocket"></span>
                            <a href="#" class="timeline-content">
                                <h3 class="title"> El cáncer en el Perú</h3>
                                <p class="description">
                                    Según el último informe realizado por la Agencia Internacional de Investigación sobre el Cáncer (IARC), Globocan 2018, en el Perú al año se presentan más de 66 mil 627 nuevos casos de cáncer y 33 mil 098 personas fallecen a causa de la enfermedad, por falta de cultura preventiva y estilos de vida saludables.
                                </p>
                            </a>
                        </div>
                        <div class="timeline">
                            <span class="icon fa fa-briefcase"></span>
                            <a href="#" class="timeline-content">
                                <h3 class="title">Casos en el Perú</h3>
                                <p class="description">
                                    El 85% de los casos de cáncer en el Perú se detectan en estadios avanzados, lo que repercute en menores probabilidades de curación, menor calidad de vida, mayor costo de tratamientos y una elevada mortalidad, sin embargo, si la detección del cáncer se realizara en etapa temprana los pacientes podrían evitar pasar por esa penosa situación.
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

