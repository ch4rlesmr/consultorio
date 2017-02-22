@extends('layouts.su_main_layout')

@section('content')
<div class="right_col" role="main">

  <div class="page-title">
    <div class="title_left">
      <h3>Paciente</h3>
    </div>
  </div>

  <div class="clearfix"></div>

  <div class="row">
    <div class="col-md-12">

      <div class="x_panel">
        <div class="x_title">
          <h2>Busqueda Paciente</h2>&nbsp;
          <ul class="nav navbar-left panel_toolbox">

            <li><a class="collapse-link pull-right"><i class="fa fa-chevron-up"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <div class="well">

            <form action="" class="form-horizontal form-label-left">

              <div class="col-md-5 col-md-offset-1">
                <label class="control-label">Documento de Identificación</label>
                <div>
                  <input type="text" id="document-patient" name="document-patient" class="form-control">
                </div>
              </div>

              <div class="col-md-5">
                <label class="control-label">Nombre Paciente</label>
                <div>
                  <input type="text" id="name-patient" name="name-patient" class="form-control">
                </div>
              </div>

              <div class="col-md-5 col-md-offset-1">
                <label class="control-label">Fecha Próxima Cita</label>
                <div>
                  <input type="text" id="date-patient" name="date-patient" class="form-control">
                </div>
              </div>

              <div class="col-md-5">
                <label class="control-label" for="first-name">Telefono</label>
                <div>
                  <input type="text" id="phone-patient" name="phone-patient" class="form-control">
                </div>
              </div>

              <div class="col-md-4 col-md-offset-5">
                <br>
                <button type ="submit" class="btn btn-success"><span class="fa fa-search"></span> <strong>Buscar !</strong></button>
              </div>

            </form>
          </div>  
        </div>
      </div>

      <div class="x_panel">

        <div class="x_title">
          <h2>Pacientes</h2>
          <a href="{{ action('PatientController@create') }}" class="pull-right btn btn-success">
            <i class="fa fa-plus-circle" aria-hidden="true"></i> <strong>Añadir Nuevo Paciente</strong>
          </a>
        
          <div class="clearfix"></div>
        </div>
        
        <div class="x_content">

          <div class="col-md-12 col-sm-12 col-xs-12 text-center" style="display:none;">
            <ul class="pagination pagination-split">
              
            </ul>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12 profile_details"></div>

          <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
            <div class="well profile_view">
              <div class="col-sm-12">
                <div class="left col-xs-7">
                  <h2>Nicole Pearson Nicole</h2>
                  <p><strong>Tratamiento: </strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit </p>
                </div>
                <div class="right col-xs-5 text-center">
                  <img src="/images/user.png" alt="" class="img-circle img-responsive">
                </div>
                <div class="left col-xs-12">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-phone"></i> <strong>Telefono:</strong> <span>7721736</span></li>
                    <li><i class="fa fa-calendar"></i> <strong>Prox. Cita:</strong> <span>28 Julio 2007 - 9:30 AM</span> </li>
                  </ul>
                </div>
              </div>
              <div class="col-xs-12 bottom text-center">
                
                <div class="col-xs-12 col-sm-12 emphasis">
                  <a href="{{ action('PatientController@show', 2) }}" class="btn btn-success"><i class="fa fa-eye"> </i> Detalle</a>
                  <!-- <a href="" class="btn btn-warning"><i class="fa fa-pencil"> </i> Editar</a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
            <div class="well profile_view">
              <div class="col-sm-12">
                <div class="left col-xs-7">
                  <h2>Nicole Pearson Nicole</h2>
                  <p><strong>Tratamiento: </strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit </p>
                </div>
                <div class="right col-xs-5 text-center">
                  <img src="/images/user.png" alt="" class="img-circle img-responsive">
                </div>
                <div class="left col-xs-12">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-phone"></i> <strong>Telefono:</strong> <span>7721736</span></li>
                    <li><i class="fa fa-calendar"></i> <strong>Prox. Cita:</strong> <span>28 Julio 2007 - 9:30 AM</span> </li>
                  </ul>
                </div>
              </div>
              <div class="col-xs-12 bottom text-center">
                
                <div class="col-xs-12 col-sm-12 emphasis">
                  <a href="{{ action('PatientController@show', 2) }}" class="btn btn-success"><i class="fa fa-eye"> </i> Detalle</a>
                  <!-- <a href="" class="btn btn-warning"><i class="fa fa-pencil"> </i> Editar</a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
            <div class="well profile_view">
              <div class="col-sm-12">
                <div class="left col-xs-7">
                  <h2>Nicole Pearson Nicole</h2>
                  <p><strong>Tratamiento: </strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit </p>
                </div>
                <div class="right col-xs-5 text-center">
                  <img src="/images/user.png" alt="" class="img-circle img-responsive">
                </div>
                <div class="left col-xs-12">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-phone"></i> <strong>Telefono:</strong> <span>7721736</span></li>
                    <li><i class="fa fa-calendar"></i> <strong>Prox. Cita:</strong> <span>28 Julio 2007 - 9:30 AM</span> </li>
                  </ul>
                </div>
              </div>
              <div class="col-xs-12 bottom text-center">
                
                <div class="col-xs-12 col-sm-12 emphasis">
                  <a href="{{ action('PatientController@show', 2) }}" class="btn btn-success">
                    <i class="fa fa-eye"> </i> Detalle
                  </a>
                  <!-- <a href="" class="btn btn-warning"><i class="fa fa-pencil"> </i> Editar</a> -->
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
</div>
@endsection
