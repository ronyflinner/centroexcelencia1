@extends('layouts.principal')

@section('content')

<section class="banner" style="background-image: url({{ url('centro') }}/imagenes/3.png);">

    </section>
<br>

       <div class="section-title">
            <h4 style="color: #606060; " align="center">Inscripción</h4>
       </div>

       <div class="container">
        @include('errors.request')
        @include('errors.flash')
                 <form class="contact100-form validate-form" enctype="multipart/form-data" action="{{ route('inscripcion.store') }} " method="post"  id="avatarForm">

                      <form class="contact100-form validate-form"  enctype="multipart/form-data">

                      {!! Form::open(['route'=>'inscripcion.store', 'method'=>'POST',"class"=>"form form-id",'files' => true, 'id'=>'form-id']) !!}
                      {!! Form::token() !!}
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                            <label for="name">
                                Nombre</label>
                            <input type="text" class="form-control" name="name" placeholder="Ingresa nombre" required="required" />
                        </div>
                  </div>
                   <div class="col-md-6">
                      <div class="form-group">
                            <label for="email">
                                DNI</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="text" class="form-control" id="dni" name="dni" placeholder="Ingresa DNI" required="required" /></div>
                        </div>
                   </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
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
                   </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                              <label for="exampleFormControlSelect1">Seleccionar Curso</label>
                              <select class="form-control" id="exampleFormControlSelect1" name="curso">
                                <option value="1">CONGRESO DE PREVENCIÓN DE CANCER EN PRIMER NIVEL DE ATENCIÓN DE SALUD </option>
                                <option value="2">CURSO DE ASESORIA GENETICA DE CANCER DIRIGIDO AL PRIMER NIVEL DE ATENCIÓN DE SALUD</option>
                              </select>
                          </div>
                  </div>
                   <div class="col-md-6">
                      <div class="form-group">
                              <label for="exampleFormControlSelect1">Seleccionar tipo de participante</label>
                              <select class="form-control" id="exampleFormControlSelect1" name="tipo">
                                <option value="1">Medicos Especialistas </option>
                                <option value="2">Medicos Generales</option>
                                <option value="3">Otras Profesiones</option>
                                <option value="4">Internos</option>
                              </select>
                          </div>
                   </div>
                </div>
                <div class="row">

                   <div class="col-md-6 offset-6">
                        {{ csrf_field() }}

                     <div class=" mr-sm-2 col-sm-5 wrap-input-container">
                        <label class="custom-file-upload form-control">
                          <i class="fa fa-cloud-upload"></i> Añadir voucher de pago
                        </label>
                        <input class="file-upload" name="archivo" type="file">
                      </div>
                   </div>
                </div>



                <div class="modal-footer">

                    <button type="submit" class="btn btn-primary d-flex justify-content-center" id="enviar">
                            Enviar</button>

                </div>
                </form>

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