@extends('layouts.principal')

@section('content')

    <img class="d-inline d-sm-none" src="{{ url('centro')}}/imagenes/Slider/Celular/Slider-6.png"  style="width:430px; height: 400px; "alt="First slide">
      <img class="d-none d-sm-inline d-md-none" src="{{ url('centro')}}/imagenes/Slider/Celular/Slider-6.png" alt="First slide" style="width:90000px; height: 400px; ">
      <img class="d-none d-md-inline d-lg-none " src="{{ url('centro')}}/imagenes/Slider/Celular/Slider-6.png" alt="First slide" style="width:800px; height: 400px; ">
      <img class="d-none d-lg-inline d-xl-none" src="{{ url('centro')}}/imagenes/Slider/Web-Windows/Slider-6.png" alt="First slide">
      <img class="d-none d-xl-inline" src="{{ url('centro')}}/imagenes/Slider/Web-iMac/Slider-6.png" alt="First slide" style="width:1400px; height: 400px; ">
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
                            <input type="text" class="form-control" data-parsley-required name="name" placeholder="Ingresa nombre" />
                        </div>
                  </div>

                    <div class="col-md-6">
                       <div class="form-group">
                            <label for="name">
                                DNI</label>
                      <input type="text" class="form-control dni" data-parsley-required id="dni" name="dni" placeholder="Ingresa DNI"   />
                        </div>
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-6">
                       <div class="form-group">
                            <label for="name">
                                Correo Electrónico</label>
                      <input type="email" class="form-control" name="email" data-parsley-required placeholder="Ingresa correo electrónico"  data-parsley-type="email"   />
                        </div>
                   </div>
                   <div class="col-md-6">
                       <div class="form-group">
                            <label for="name">
                                Número telefónico</label>
                      <input type="text" class="form-control telefono" data-parsley-required  name="cell" placeholder="Ingresa tu número telefónico"  />
                        </div>
                   </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                          <label for="exampleFormControlSelect1">Seleccionar Curso</label>
                          <select class="form-control" id="exampleFormControlSelect1" data-parsley-required name="curso">
                            <option value="" selected="">Selecionar </option>
                            <option value="1">Curso de Prevención de Cancer en Primer Nivel de Atención de Salud </option>
                            <!--<option value="2">Curso de Asesoria Genética de Cancer Dirigido al Perimer Nivel de Atención de Salud</option>-->
                          </select>
                    </div>
                  </div>
                   <div class="col-md-6">
                      <div class="form-group">
                              <label for="exampleFormControlSelect1">Seleccionar tipo de participante</label>
                              <select class="form-control" data-parsley-required  id="exampleFormControlSelect1" name="tipo">
                                 <option value="" selected="">Selecionar </option>
                                <option value="1">Médicos Especialistas </option>
                                <option value="2">Médicos Generales</option>
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
                        <input class="file-upload" data-parsley-required name="archivo" type="file">
                      </div>
                   </div>
                </div>

                <br>
                <div class="container">
                      <h3 class="text-center">Términos y Condiciones</h3>
                </div><br>

                <div class="container text-justify" style="overflow: scroll; height: 200px;">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, dolorum. Beatae, ullam magni praesentium consequatur. Qui deserunt, earum tempora. Non optio similique dolorum accusamus placeat soluta impedit incidunt, reiciendis distinctio.lorem  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, dolorum. Beatae, ullam magni praesentium consequatur. Qui deserunt, earum tempora. Non optio similique dolorum accusamus placeat soluta impedit incidunt, reiciendis distinctio.lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, dolorum. Beatae, ullam magni praesentium consequatur. Qui deserunt, earum tempora. Non optio similique dolorum accusamus placeat soluta impedit incidunt, reiciendis distinctio.lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, dolorum. Beatae, ullam magni praesentium consequatur. Qui deserunt, earum tempora. Non optio similique dolorum accusamus placeat soluta impedit incidunt, reiciendis distinctio.lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, dolorum. Beatae, ullam magni praesentium consequatur. Qui deserunt, earum tempora. Non optio similique dolorum accusamus placeat soluta impedit incidunt, reiciendis distinctio.lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, dolorum. Beatae, ullam magni praesentium consequatur. Qui deserunt, earum tempora. Non optio similique dolorum accusamus placeat soluta impedit incidunt, reiciendis distinctio.lorem
                </div>

                <div class="container mt-3">
                  <label class="checkbox-inline"><input type="radio" name='contrato'data-parsley-required  checked="" value="1"> Acuerdo</label>
                  <label class="checkbox-inline"><input type="radio" name='contrato' value=""> Desacuerdo</label>
                </div>
                <div class="modal-footer">
                    <div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_KEY')}}"></div>
                    <button type="submit" class="btn btn-success" id="enviar">
                           Registrar </button>
                </div>
                </form>
      </div>
<style type="text/css">
  /*

@import url('https://fonts.googleapis.com/css?family=Open+Sans');
font-family: 'Open Sans', sans-serif;

 */

@import url('https://fonts.googleapis.com/css?family=Open+Sans');





</style>

@endsection

@section('javascript')
  <script src="{{ url('adminlte/js/fileinput.min.js') }}"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
 <script type="text/javascript">

       // Dynamically add-on fields

$(function() {


    $('#avatarForm').on('submit', function(event){
        event.preventDefault();
        form_to=$(this);

      if($('#avatarForm').parsley().isValid())
        {
          document.getElementById("avatarForm").submit();
        }
    });

   $('.dni').mask('000000000');
   $('.telefono').mask('(51)000000000');
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