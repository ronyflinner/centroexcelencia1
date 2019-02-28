@extends('layouts.principal')

@section('content')
<!-- Contact section Start -->
<div class="jumbotron jumbotron-sm" style="background: #ea2929;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Contactanos</h1>
            </div>
        </div>
    </div>
</div>
<div class="container">

    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div><br />
      @endif


    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Nombre</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Ingresa nombre" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Correo Electronico</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Ingresa correo electronico" required="required" /></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Mensaje</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Escribe el mensaje"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">


                        <button type="button" class="btn btn-primary pull-right" id="btnContactUs">
                            Enviar mensaje</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span>Información General</legend>
            <address>
                <strong>Para mayor información comunicarse con Coordinación Académica</strong><br>
                Lic. Catya López Ampuero<br>

                <abbr title="Phone">
                    <a href="mailto:#">clopez@ligacancer.org.pe</a>


                </abbr><br>
                Teléfono: 204-0404
                <br>Anexo: 244
            </address>

            </form>
        </div>
    </div>
</div>


<div class="g-recaptcha" data-sitekey="6LcgopQUAAAAAGlo2G4Vhn1dc72papTgB5rKwKcn"></div>
<br><br><br>
@endsection

@section('javascript')
  <script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
  <script type="text/javascript">

     $('#btnContactUs').click(function(event) {
         vurl='{{ url('createComentario') }}';
           var parametros = {
                   "nombre" : $('#nombre').val(),
                   "email" : $('#email').val(),
                   "mensaje" : $('#message').val(),
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

                  location.reload();
            },
            error: function (data2) {
               console.log('Error:', data2);
              },
              async: false
            });
     });


  </script>

@endsection

