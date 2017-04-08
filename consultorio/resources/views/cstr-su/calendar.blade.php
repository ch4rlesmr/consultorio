@extends('layouts.su_main_layout')

@section('content')

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Calendario <!-- <small>Click to add/edit events</small> --></h3>
              </div>
              <!-- <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div> -->
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Calendario de Citas <!-- <small>Sessions</small> --></h2>
                    <!-- <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul> -->
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div id='calendar'></div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection

@section('popup')
	<!-- calendar modal -->
    <div id="CalenderModalNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Registro de Nueva Cita</h4>
          </div>
          <div class="modal-body">
            <div class="" role="tabpanel" data-example-id="togglable-tabs">
              <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Paciente Nuevo</a>
                </li>
                <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Paciente Registrado</a>
                </li>
              </ul>
              <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                  <!-- <form class="form-horizontal form-label-left form-data mode2" id="basic-data-form" novalidate=""> -->
                  {!! Form::open(array("action"=>"MeetingController@store", "method"=>"POST","id"=>"register_calendar_patient", "novalidate" => "novalidate", "autocomplete" => "off")) !!}
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group item">
                            <small class="info-field">Nombres</small>
                            <input data-validate-length-range="2" data-validate-words="1" type="text" class="form-control has-feedback-left" placeholder="Nombres" name="name-patient" id="name-patient" required="">
                            <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                          </div>

                          <div class="col-md-6 col-sm-6 col-xs-12 form-group item">
                            <small class="info-field">Apellidos</small>
                            <input data-validate-length-range="2" data-validate-words="1" type="text" class="form-control has-feedback-left" placeholder="Apellidos" name="lastname-patient" id="lastname-patient" required="">
                            <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                          </div>

                          <div class="col-md-2 col-sm-2 col-xs-12 form-group item">
                            <small class="info-field has-feedback-left">Tipo Documento</small>
                            <select class="select2_single form-control has-feedback-left" tabindex="0" name="type-document" id="type-document" required="">
                              @foreach (App\Patient::all_types_id() as $key => $value)
                                <option value="{{ $key }}">{{ $value}}</option>
                              @endforeach
                            </select>
                            <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                          </div>

                          <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback item">
                          <small class="info-field">No. Documento</small>
                          <input data-validate-length-range="6" type="text" class="form-control has-feedback-left num_input" placeholder="No. Documento" name="number-document" id="number-document" required="">
                            <span class="fa fa-slack form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                          </div>

                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback item">
                            <small class="info-field">Telefono</small>
                            <input data-validate-length-range="6" type="text" class="form-control has-feedback-left" placeholder="Telefono" name="phone-patient" id="phone-patient" required="">
                            <span class="fa fa-phone-square form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                          </div>
            
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback item">
                            <small class="info-field">Correo Electronico</small>
                            <input type="email" class="form-control has-feedback-left" placeholder="Correo Electrónico" name="email-patient" id="email-patient" required="">
                            <span class="fa fa-envelope form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                          </div>

                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback item">
                            <small class="info-field">Dirección</small>
                            <input type="text" class="form-control has-feedback-left" placeholder="Dirección" name="address-patient" id="address-patient" required="">
                            <span class="fa fa-home form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                          </div>

                          <input type="hidden" name="date-agenda" id="date-agenda">

                          <div class="col-md-12 col-sm-6 col-xs-12 form-group item">
                            <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary" id="save_new_patient">Guardar Cita</button>
                          </div> 

                        </div>
                      </div>
                    </div>
                    {!! Form::close() !!}
                  <!-- </form> -->
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                  <div class="col-md-12">
                    <div class="x_panel">
                      <div class="well">
                        <form action="" class="form-horizontal form-label-left mode2">
                          <div class="col-md-5">
                            <label class="control-label" for="first-name">No. Identificación</label>
                            <div>
                              <input type="text"name="search-document-patient" id="search-document-patient" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-5">
                            <label class="control-label">Nombre Paciente</label>
                            <div>
                              <input type="text"name="search-patient-name" id="search-patient-name" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-2" style ="padding-top:25px;">
                            <button type="button" class="btn btn-success" id="searchOldPatients"><span class="fa fa-search"></span> <strong>Buscar !</strong></button>
                          </div>
                        </form>
                      </div>
                      <div class="table-responsive">
                        <table class="table table-striped jambo_table" id="result-search-patient">
                          <thead>
                            <tr class="headings" style="text-transform:uppercase;">
                              <th class="text-center" width="25%"> N° Identificación</th>
                              <th class="text-center">Nombre Paciente</th>
                              <th class="text-center" width="25%"></th>
                            </tr>
                          </thead>
                          <tbody style="text-align: center;">
                          </tbody>
                        </table>
                        {!! Form::open(array("action"=>"MeetingController@store", "method"=>"POST", "class" => "form-date-assignment-hidden")) !!}
                          <input type="hidden" name="old-patient-id" id="old-patient-id">
                          <input type="hidden" name="date-meeting-old-patient" id="date-meeting-old-patient">
                        {!! Form::close() !!}
                      </div>
                      
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                
              </div>
            </div>
          </div>
          <!-- <div class="modal-footer">
            
          </div> -->
        </div>
      </div>
    </div>
    <div id="CalenderModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel2">¿ Cancelar Cita ?</h4>
          </div>
          <div class="modal-body">
            <h4>Desea realmente cancelar la cita programada</h4>
          </div>
          <div class="modal-footer">
            <!-- <button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Close</button> -->
            {{ Form::open( array( 'route' => 'cita.eliminar', 'type' => 'POST' ) ) }}
            <input type="hidden" id="delete-meeting" name="id-meeting">
            <button type="submit" class="btn btn-danger antosubmit2"><i class="fa fa-calendar"></i> Cancelar cita</button>
            {{ Form::close() }}
          </div>
        </div>
      </div>
    </div>

    <div id="CalenderModalDetail" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel2">Cita ya realizada !</h4>
          </div>
          <div class="modal-body">
            <h4>La cita seleccionada ya a sido confirmada y realizada, la doctora puede ver el detalle de esta.</h4>
          </div>
          <div class="modal-footer">
            @if ( !Auth::user()->isAdmin() )
              <a href="{{ route( 'agenda.show', '' ) }}" class="btn btn-primary" id="link_meeting_detail"><i class="fa fa-calendar"></i> Detalle de cita</a>
            @endif
            <button type="button" class="btn btn-success antoclose" data-dismiss="modal"><i class="fa fa-check-circle"></i> Aceptar</button>
          </div>
        </div>
      </div>
    </div>

    <div id="fc_create" data-toggle="modal" data-target="#CalenderModalNew"></div>
    <div id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit"></div>
    <div id="fc_detail" data-toggle="modal" data-target="#CalenderModalDetail"></div>
    <!-- /calendar modal -->
@endsection