
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
  </style>

  <div class="box box-primary">
                    <div class="box-header with-border" >
                        <div class="container">
               <h3 class="box-title" align="center">Consultar Media</h3>
               <br>
  <br>
        <div class="container-fluid" id="No">
            <table class="table table-bordered" id="Na">
               <thead>
                  <tr>
                     <th>N°</th>
                     <th>Título</th>
                     <th>Fecha</th>
                     <th>Estado</th>
                     <th>Habilitar</th>
                     <th>Editar</th>

                  </tr>
               </thead>
            </table>
        </div>



    </div>
                    </div>
  </div>


@endsection

@section('javascript')
  <script>



        itable = $('#Na').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax:{
                            url:'{{ route('admin.medisearch.create') }}' ,
                            type:'get',
                        } ,
                         language: {
                            url: '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json'
                         },
                        columns: [
                            {data: 'id', name:'id','orderable': false},
                            {data: 'title', name:'title'},
                            {data: 'publish', name:'publish'},
                           {data: 'estado', name:'estado'},
                           {'defaultContent':"<button type='button' class='editar2 btn btn-danger'><i class='glyphicon glyphicon-off'></i></button> "},
                            {'defaultContent':"<button type='button' class='editar btn btn-primary'><i class='fa fa-pencil-square-o'></i></button> "},
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

       var editar = function(tbody, table){
            $(tbody).on("click","button.editar", function(){
                  alert("hola")
            })
          }



        var obtener_habilitar = function(tbody,table,bt){
              $(tbody).on("click",bt,function(){
                var data = table.row($(this).parents("tr")).data();
                console.log(data.url_title_id);

                var parametros = {
                         "id" : data.url_title_id
                      };

               url1 = data.url_title_id;

               vurl='{{ url('admin/statusEdit') }}';
                vurl = `${vurl}?id=${url1}`;

               //(Location).load(vurl, { id: url1 });



                console.log(vurl);
                $(location).attr('href',vurl);

                //var doc = 'statusEdit';
                $.ajax({
                url:   vurl,
                data: {id:data.url_title_id},
                type:  'GET', //método de envio
                dataType : 'json',
                headers: {
                              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                          } ,
                success:  function (data) {
                       console.log(data);



                       location.reload();

                     // document.getElementById("variable").value=data;

                },
                error: function (data) {
                    console.log('Error:', data);
                  }
                });
              })
            }

            obtener_habilitar("#Na tbody",itable,"button.editar2");
         </script>
         @endsection