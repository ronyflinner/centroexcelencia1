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
    </style>
    <br>
<div class="container">
    <div id="products" class="row view-group">
                <div class="item col-xs-4 col-lg-4">
                    <div class="thumbnail card">
                        <div class="img-event">
                            <img class="group list-group-image img-fluid" src="{{ url('centro') }}/imagenes/sbc_1.png" alt="" />
                        </div>
                        <div class="caption card-body" >
                           Hoy en día, en el mundo, el cáncer causa 18 millones de nuevos casos, generando 9.6 millones de muertes; además, 43.8 millones de personas viven con cáncer actualmente. Se estima que esta cifra se incrementará alarmantemente hasta 2020, sobre todo en países de desarrollo.
                            <br><br><br>
                        </div>
                    </div>
                </div>
                <div class="item col-xs-4 col-lg-4" >
                    <div class="thumbnail card">
                        <div class="img-event">
                             <img class="group list-group-image img-fluid" src="{{ url('centro') }}/imagenes/sbc_2.png" alt="" />
                        </div>
                        <div class="caption card-body">
                          El cáncer en el Perú es un problema de salud pública. Según el último informe realizado por la Agencia Internacional de Investigación sobre el Cáncer (IARC), Globocan 2018, en el Perú al año se presentan más de 66 mil 627 nuevos casos de cáncer y 33 mil 098 personas fallecen a causa de la enfermedad, por falta de cultura preventiva y estilos de vida saludables.
                        </div>
                    </div>
                </div>
                <div class="item col-xs-4 col-lg-4">
                    <div class="thumbnail card">
                        <div class="img-event">
                            <img class="group list-group-image img-fluid" src="{{ url('centro') }}/imagenes/sbc_3.png" alt="" />
                        </div>
                        <div class="caption card-body">
                            El 85% de los casos de cáncer en el Perú se detectan en estadios avanzados, lo que repercute en menores probabilidades de curación, menor calidad de vida, mayor costo de tratamientos y una elevada mortalidad, sin embargo, si la detección del cáncer se realizara en etapa temprana los pacientes podrían evitar pasar por esa penosa situación.
                        </div>
                    </div>
                </div>
            </div>


        </div>

@endsection

