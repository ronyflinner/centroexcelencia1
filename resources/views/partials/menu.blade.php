   <div class="top-container d-flex justify-content-center">

    <div class="container-fluid" style="">
        <div class="row">
            <div class="col-sm-6 col-7 col2 offset-6">
                <a href="https://www.ligacancer.org.pe/"><img src="{{ url('centro') }}/imagenes/lcc.png" style="width: 90px; margin-right: 40px; margin-top: 20px; margin-bottom: 3px;"></a>
            </div>
        </div>
    </div>
   </div>

    <!-- Navigation -->
   <!-- Navigation -->
    <nav id="myHeader" class="header navbar navbar-expand-lg navbar-dark">
      <div class="container">



        <div class="d-inline d-sm-none"> <a class="navbar-brand" href="{{ url('/') }}"><img  src="{{url('centro')}}/imagenes/logo-201x44.png" alt="logo" style="width: 200px;"> </div>
        <div class="d-none d-sm-block d-md-none d-lg-none d-xl-none"> <img  src="{{url('centro')}}/imagenes/logo-201x44.png" alt="logo" > </div>
        <div class="d-none d-md-block d-lg-none d-xl-none"> <img  src="{{url('centro')}}/imagenes/logo-201x44.png" alt="logo" > </div>
        <div class="d-none d-lg-block d-xl-none"> <img  src="{{url('centro')}}/imagenes/logo-201x44.png" alt="logo" > </div>
        <div class="d-none d-xl-block">  <a class="navbar-brand" href="index.html"><img  src="{{url('centro')}}/imagenes/Logotipo1.png" alt="logo" width="300" height="80">  </div>

       <img id="img2" >

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="background:red;">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item {{active_class(if_uri_pattern(['/'],'active','other'))}}">
              <a class="nav-link" href="{{ url('/') }}">Inicio
              </a>
              <span class="sr-only">(current)</span>
            </li>
            <li class="nav-item {{active_class(if_uri_pattern(['conocenos2'],'active','other'))}}">
              <a class="nav-link" href="{{ route('conocenos2.index') }}">Conócenos</a>
            </li>
            <li class="nav-item {{active_class(if_uri_pattern(['especialidad'],'active','other'))}}">
              <a class="nav-link" href="{{ route('especialidad.index') }}">Especialidad</a>

            </li>
            <li class="nav-item {{active_class(if_uri_pattern(['inscripcion'],'active','other'))}}">
              <a class="nav-link" href="{{ route('inscripcion.index') }}">Inscripción</a>
            </li>
            <li class="nav-item {{active_class(if_uri_pattern(['sobrecancer'],'active','other'))}}">
              <a class="nav-link" href="{{ route('sobrecancer.index') }}" >Cáncer en el Perú</a>
            </li>

            <li class="nav-item {{active_class(if_uri_pattern(['contactos2'],'active','other'))}}">
              <a class="nav-link" href="{{ route('contactos2.index') }}">contacto</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>