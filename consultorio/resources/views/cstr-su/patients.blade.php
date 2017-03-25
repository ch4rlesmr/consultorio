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

            <form action="" class="form-horizontal form-label-left" autocomplete="off">

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
                <label class="control-label" for="first-name">Telefono</label>
                <div>
                  <input type="text" id="phone-patient" name="phone-patient" class="form-control">
                </div>
              </div>

              <div class="col-md-5">
                <label class="control-label">Tipo Paciente</label>
                <div>
                  <select id="type-patient" name="type-patient" class="form-control">
                    <option value="OLD">Antiguo</option>
                    <option value="NEW">Nuevo</option>
                  </select>
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
          <!-- <a href="{{ action('PatientController@create') }}" class="pull-right btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i> <strong>Añadir Nuevo Paciente</strong></a> -->
        
          <div class="clearfix"></div>
        </div>
        
        <div class="x_content">

          <div class="col-md-12 col-sm-12 col-xs-12 text-center" style="display:none;">
            <ul class="pagination pagination-split">
              
            </ul>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12 profile_details"></div>

          @foreach ($patients as $patient)
          <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
            <div class="well profile_view">
              <div class="col-sm-12">
                <div class="left col-xs-7">
                  <h2>{{ $patient->name . ' ' . $patient->last_name }}</h2>
                  <p><strong>Estado: </strong> {{ $patient->getStatus() }} </p>
                </div>
                <div class="right col-xs-5 text-center" style="position:absolute; right:0;">
                  <img src="/images/{{ $patient->getImagePatient() }}" alt="" class="img-circle img-responsive">
                </div>
                <div class="left col-xs-12">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-phone"></i> <strong>Telefono:</strong> <span>{{ $patient->phone }}</span></li>
                    @if ( isset( $patient->birthdate ) )
                    <li><i class="fa fa-slack user-profile-icon"></i> <strong>Edad: </strong>{{ Carbon\Carbon::createFromFormat('Y-m-d', $patient->birthdate)->diff(Carbon\Carbon::now())->format('%y Años') }}</li>
                    @endif
                    <li><i class="fa fa-list-alt user-profile-icon"></i> <strong>Identificación: </strong>{{ $patient->type_id_number . ' ' . $patient->id_number }}</li>
                  </ul>
                </div>
              </div>
              <div class="col-xs-12 bottom text-center">
                
                <div class="col-xs-12 col-sm-12 emphasis">
                  <a href="{{ action( 'PatientController@show', $patient->id ) }}" class="btn btn-success"><i class="fa fa-eye"> </i> Detalle</a>
                  <!-- <a href="" class="btn btn-warning"><i class="fa fa-pencil"> </i> Editar</a> -->
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        {{ $patients->appends([
          'document-patient' => Request::get('document-patient'),
          'name-patient' => Request::get('name-patient'),
          'phone-patient' => Request::get('phone-patient'),
          'type-patient' => Request::get('type-patient'),
        ]) }}
      </div>
    </div>
  </div>
</div>
@endsection
