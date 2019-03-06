
@extends('layouts.app')

@section('content')

  <style type="text/css">

  	th, td { white-space: nowrap; }
    div.dataTables_wrapper {
        margin: 0 auto;
    }

    div.container {
        width: 80%;
    }



    .modal-header-success {
    color:#fff;
    padding:9px 15px;
    border-bottom:1px solid #eee;
    background-color: #5cb85c;
    -webkit-border-top-left-radius: 5px;
    -webkit-border-top-right-radius: 5px;
    -moz-border-radius-topleft: 5px;
    -moz-border-radius-topright: 5px;
     border-top-left-radius: 5px;
     border-top-right-radius: 5px;
}
.modal-header-warning {
  color:#fff;
    padding:9px 15px;
    border-bottom:1px solid #eee;
    background-color: #f0ad4e;
    -webkit-border-top-left-radius: 5px;
    -webkit-border-top-right-radius: 5px;
    -moz-border-radius-topleft: 5px;
    -moz-border-radius-topright: 5px;
     border-top-left-radius: 5px;
     border-top-right-radius: 5px;
}
.modal-header-danger {
  color:#fff;
    padding:9px 15px;
    border-bottom:1px solid #eee;
    background-color: #d9534f;
    -webkit-border-top-left-radius: 5px;
    -webkit-border-top-right-radius: 5px;
    -moz-border-radius-topleft: 5px;
    -moz-border-radius-topright: 5px;
     border-top-left-radius: 5px;
     border-top-right-radius: 5px;
}
.modal-header-info {
    color:#fff;
    padding:9px 15px;
    border-bottom:1px solid #eee;
    background-color: #5bc0de;
    -webkit-border-top-left-radius: 5px;
    -webkit-border-top-right-radius: 5px;
    -moz-border-radius-topleft: 5px;
    -moz-border-radius-topright: 5px;
     border-top-left-radius: 5px;
     border-top-right-radius: 5px;
}
.modal-header-primary {
  color:#fff;
    padding:9px 15px;
    border-bottom:1px solid #eee;
    background-color: #428bca;
    -webkit-border-top-left-radius: 5px;
    -webkit-border-top-right-radius: 5px;
    -moz-border-radius-topleft: 5px;
    -moz-border-radius-topright: 5px;
     border-top-left-radius: 5px;
     border-top-right-radius: 5px;
}
  </style>

  <div class="box box-primary">
        <div class="box-header with-border" >
            <div class="container">
               <h3 class="box-title" align="center">Consultar Documentos</h3>
               <br><br>
             <div class="row">
               <div class="col-md-6">
                 <div class="form-group">
                  <h4>Seleccionar curso : </h4>
                    <select class="form-control" id="sel1">
                    </select>
              </div>
               </div>
             <!--  <div class="col-md-6">
                  <h4>Seleccionar : </h4>
                  <label class="radio-inline"><input type="radio" name="optradio" checked>Incripciones Aceptadas</label>
                  <label class="radio-inline"><input type="radio" name="optradio">Incripciones Rechazadas</label>

               </div>-->
             </div>

        <div class="container-fluid" id="No">
            <table class="table table-bordered" id="Na">
               <thead>
                  <tr>
                     <th>N°</th>
                     <th>DNI</th>
                     <th>Nombre</th>
                     <th>Correo</th>
                     <th>Estado</th>
                     <th>Voucher</th>

                  </tr>
               </thead>
            </table>
        </div>



    </div>
                    </div>
  </div>




<div class="container">
    <!-- Modal -->
    <div class="modal fade" id="primary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-primary">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h1><i class="glyphicon glyphicon-thumbs-up"></i> Vaucher Enviado</h1>
                </div>
                <div class="modal-body">


                  <div id='imagen'>

                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary pull-left" id="aceptar" data-dismiss="modal" >Aceptar</button>
                  <button type="button" class="btn btn-danger pull-left" id="rechazar"  data-dismiss="modal">Rechazar</button>
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>



@endsection

@section('javascript')
  <script>

       vurl='{{ url('admin/buscarCurso') }}';

       var parametros = {
               "id" : 0
            };
        //$(location).attr('href',vurl);
       // var doc = 'statusEdit';
        $.ajax({
        url:   vurl,
        data: parametros,
        type:  'GET', //método de envio
        dataType : 'json',
        headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  } ,
        success:  function (data) {
            $.each( data, function( key, value ) {

                  $('#sel1').append("<option value='"+value['id']+"'>"+value['nombre']+"</option>")

                });
            console.log(data);

        },
        error: function (data) {

           console.log('Error:', data);
          },
          async: false
        });


        $("#sel1").change(function(){
          var value = $(this).val();

          var parametros = {
               "id" : value,
            };
          $('#Na').remove();
          $('#Na_wrapper').remove();
          $('#No').append('<table class="table table-bordered" id="Na"><thead><tr><th>N°</th><th>DNI</th><th>Nombre</th><th>Correo</th><th>Estado</th><th>Voucher</th></tr></thead></table>');

          itable = $('#Na').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax:{
                            url:'{{ url('admin/dataT') }}' ,
                            type:'get',
                            data: parametros,
                        } ,
                         language: {
                            url: '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json'
                         },
                        columns: [
                            {data: 'id', name:'id','orderable': false},
                            {data: 'dni', name:'dni'},
                            {data: 'nombre', name:'nombre'},
                            {data: 'correo', name:'correo'},
                            {data: 'estado', name:'estado'},
                            {data: 'voucher', name:'voucher'},
                        ],
                        bAutoWidth: false,
                        order: [[0, 'asc']],
                        'aaSorting': [],
                        paging: true,
                        searching: false,
                        columnDefs: [
                    { width: 20, height: 100,  targets: 0 }
                ],
                fixedColumns: true,
                    });
             });


         var parametros = {
               "id" : $('#sel1').val(),
            };

             itable = $('#Na').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax:{
                            url:'{{ url('admin/dataT') }}' ,
                            type:'get',
                            data: parametros,
                        } ,
                         language: {
                            url: '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json'
                         },
                        columns: [
                              {data: 'id', name:'id','orderable': false},
                            {data: 'dni', name:'dni'},
                            {data: 'nombre', name:'nombre'},
                            {data: 'correo', name:'correo'},
                            {data: 'estado', name:'estado'},
                            {data: 'voucher', name:'voucher'},
                        ],
                        bAutoWidth: false,
                        order: [[0, 'asc']],
                        'aaSorting': [],
                        paging: true,
                        searching: false,
                        columnDefs: [
                    { width: 20, height: 100,  targets: 0 }
                ],
                fixedColumns: true,
                    });



         var obtener_data_editar = function(tbody,table,bt){
              $(tbody).on("click",bt,function(){
                var data = table.row($(this).parents("tr")).data();


                 $('#imagen').remove();
                 $('.modal-body').append("<div id='imagen'></div>")
                 $('#imagen').append("<img src='{{ url('/') }}/"+$(this).val()+"' style='width:90%'>");
                 $('#imagen').attr('href',data.id);


                // alert($('#imagen').attr('href'));
              })
            }

        // aceptar
           $('#aceptar').click(function(){
            // alert($('#imagen').attr('href'));
              vurl='{{ url('admin/aceptarInscripcion') }}';

             var parametros = {
                     "id" : $('#imagen').attr('href'),
                  };
              //$(location).attr('href',vurl);
             // var doc = 'statusEdit';
              $.ajax({
              url:   vurl,
              data: parametros,
              type:  'GET', //método de envio
              dataType : 'json',
              headers: {
                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        } ,
              success:  function (data) {
               /*   $.each( data, function( key, value ) {

                        $('#sel1').append("<option value='"+value['id']+"'>"+value['nombre']+"</option>")

                      }); */

                  location.reload();
                 

              },
              error: function (data) {

                 console.log('Error:', data);
                },
                async: false
              });
           });

           $('#rechazar').click(function(){
            // alert($('#imagen').attr('href'));
              vurl='{{ url('admin/denegarInscripcion') }}';

             var parametros = {
                     "id" : $('#imagen').attr('href'),
                  };
              //$(location).attr('href',vurl);
             // var doc = 'statusEdit';
              $.ajax({
              url:   vurl,
              data: parametros,
              type:  'GET', //método de envio
              dataType : 'json',
              headers: {
                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        } ,
              success:  function (data) { 
                  location.reload();
                  

              },
              error: function (data) {

                 console.log('Error:', data);
                },
                async: false
              });
           });


            obtener_data_editar("#Na tbody",itable,"button.editar");

             




         </script>
         @endsection

