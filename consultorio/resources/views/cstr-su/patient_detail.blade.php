@extends('layouts.su_main_layout')

@section('content')
<div class="right_col" role="main" style="min-height: 1172px;">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Perfil Paciente</h3>
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
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Reporte de Paciente <!-- <small>Activity report</small> --></h2>
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
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="{{ asset('/images/'.$patient->getImagePatient()) }}" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3>{{ $patient->name . ' ' . $patient->last_name }}</h3>

                      <ul class="list-unstyled user_data">
                        @if ( isset( $patient->birthdate ) )
                          <li><i class="fa fa-slack user-profile-icon"></i> <strong>Edad: </strong>{{ Carbon\Carbon::createFromFormat('Y-m-d', $patient->birthdate)->diff(Carbon\Carbon::now())->format('%y Años') }}</li>
                        @endif

                        <li><i class="fa fa-list-alt user-profile-icon"></i> <strong>Identificación: </strong>{{ $patient->type_id_number . ' ' . $patient->id_number }}</li>
                        @if ( isset( $patient->blood_type->blood_group ) )
                          <li><i class="fa fa-plus-square user-profile-icon"></i> <strong>Tipo Sangre: </strong>{{ $patient->blood_type->blood_group }}</li>
                        @endif
                      </ul>

                      <a href="{{ route('paciente.edit', $patient->id) }}" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Editar información de Paciente</a>
                      <br>

                      <!-- start skills -->
                      <!-- <h4>Skills</h4>
                      <ul class="list-unstyled user_data">
                        <li>
                          <p>Web Applications</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50" aria-valuenow="49" style="width: 50%;"></div>
                          </div>
                        </li>
                        <li>
                          <p>Website Design</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="70" aria-valuenow="69" style="width: 70%;"></div>
                          </div>
                        </li>
                        <li>
                          <p>Automation &amp; Testing</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="30" aria-valuenow="29" style="width: 30%;"></div>
                          </div>
                        </li>
                        <li>
                          <p>UI / UX</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50" aria-valuenow="49" style="width: 50%;"></div>
                          </div>
                        </li>
                      </ul> -->
                      <!-- end of skills -->

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <div class="profile_title" style="margin-bottom: 25px;">
                        <div class="col-md-6">
                          <!-- <h2>User Activity Report</h2> -->
                          <h2>Progreso de Paciente   Peso/Mes</h2>
                        </div>
                        <!-- <div class="col-md-6">
                          <div id="reportrange" class="pull-right" style="margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED">
                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                            <span>January 14, 2017 - February 12, 2017</span> <b class="caret"></b>
                          </div>
                        </div> -->
                      </div>
                      <!-- start of user-activity-graph -->
                      <!-- <div id="graph_bar" style="width: 100%; height: 280px; position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="280" version="1.1" width="756" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.75px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël @@VERSION</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="33.5" y="200.36860278" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.009227780000003" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,200.36860278H731" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="156.52645208500002" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.010827085000017" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">100</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,156.52645208500002H731" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="112.68430139" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.012426390000002" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">200</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,112.68430139H731" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="68.84215069500002" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.014025695000015" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">300</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,68.84215069500002H731" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">400</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,25H731" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="696.75" y="212.86860278" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.5,-0.866,0.866,0.5,159.5198,721.1349)"><tspan dy="4.009227780000003" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Oct</tspan></text><text x="628.25" y="212.86860278" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.5,-0.866,0.866,0.5,124.2698,663.5442)"><tspan dy="4.009227780000003" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Sep</tspan></text><text x="559.75" y="212.86860278" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.5,-0.866,0.866,0.5,90.2698,603.7885)"><tspan dy="4.009227780000003" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Aug</tspan></text><text x="491.25" y="212.86860278" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.5,-0.866,0.866,0.5,57.2698,542.3007)"><tspan dy="4.009227780000003" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Jul</tspan></text><text x="422.75" y="212.86860278" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.5,-0.866,0.866,0.5,22.0198,484.71)"><tspan dy="4.009227780000003" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Jun</tspan></text><text x="354.25" y="212.86860278" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.5,-0.866,0.866,0.5,-12.4802,425.8203)"><tspan dy="4.009227780000003" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">May</tspan></text><text x="285.75" y="212.86860278" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.5,-0.866,0.866,0.5,-45.9802,365.1985)"><tspan dy="4.009227780000003" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Apr</tspan></text><text x="217.25" y="212.86860278" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.5,-0.866,0.866,0.5,-80.7302,306.7418)"><tspan dy="4.009227780000003" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Mar</tspan></text><text x="148.75" y="212.86860278" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.5,-0.866,0.866,0.5,-115.2302,247.852)"><tspan dy="4.009227780000003" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Feb</tspan></text><text x="80.25" y="212.86860278" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.5,-0.866,0.866,0.5,-149.2302,188.0963)"><tspan dy="4.009227780000003" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Jan</tspan></text><rect x="54.5625" y="165.294882224" width="24.1875" height="35.07372055600001" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="123.0625" y="145.56591441125" width="24.1875" height="54.80268836875001" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="191.5625" y="123.2064175568" width="24.1875" height="77.1621852232" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="260.0625" y="102.16218522320001" width="24.1875" height="98.20641755679999" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="328.5625" y="84.18690343825001" width="24.1875" height="116.18169934174999" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="397.0625" y="62.7042495977" width="24.1875" height="137.6643531823" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="465.5625" y="48.23633986835" width="24.1875" height="152.13226291165" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="534.0625" y="74.54163028535001" width="24.1875" height="125.82697249465" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="602.5625" y="95.14744111200001" width="24.1875" height="105.221161668" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="671.0625" y="107.86166481355001" width="24.1875" height="92.50693796645" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect></svg><div class="morris-hover morris-default-style" style="left: 88.75px; top: 102px; display: none;"><div class="morris-hover-row-label">Feb</div><div class="morris-hover-point" style="color: #26B99A">
  Hours worked:
  125
</div><div class="morris-hover-point" style="color: #34495E">
  SORN:
  -
</div></div></div> -->
                      <!-- end of user-activity-graph -->

                    <canvas id="lineChart"></canvas>
                    @if ( isset($datesValues) )
                      <input type="hidden" id="date-meetings" data-date-meetings="{{ $datesValues }}">
                      <input type="hidden" id="weight-values" data-weight-values="{{ $weightValues }}">
                    @endif

                    </div>
                    <div class="col-md-12">
                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="false">Ultimos Diagnosticos</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Citas</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="true">Información Paciente</a>
                          </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                            <!-- start recent activity -->
                            <ul class="messages">
                              @foreach ( $meetings->where( 'meeting_status', '=', 'DONE' ) as $meeting )
                                <li>
                                  <i class="fa fa-paw"></i>
                                  <div class="message_date">
                                    <h3 class="date text-info">{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $meeting->start_meeting)->day }}</h3>
                                    <p class="month">
                                      <strong>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $meeting->start_meeting)->format('F Y') }}</strong>
                                    </p>
                                  </div>
                                  @if ( $meeting->treatment_id !== NULL )
                                    <div class="message_wrapper">
                                      <h4 class="heading">{{ App\Treatment::find($meeting->treatment_id)->diagnosis }}</h4>
                                      <blockquote class="message">{{ App\Treatment::find($meeting->treatment_id)->description }}</blockquote>
                                      <br>
                                      <p class="url">
                                        <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                        <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                                      </p>
                                    </div>
                                  @elseif ( $meeting->tracing_id !== NULL )
                                    <div class="message_wrapper">
                                      <h4 class="heading">{{ App\Tracing::find($meeting->tracing_id)->diagnosis }}</h4>
                                      <blockquote class="message">{{ App\Tracing::find($meeting->tracing_id)->considerations }}</blockquote>
                                      <br>
                                      <p class="url">
                                        <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                        <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                                      </p>
                                    </div>
                                  @endif
                                </li>
                              @endforeach
                            </ul>
                            <!-- end recent activity -->

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                            <!-- start user projects -->
                            <table class="data table table-striped no-margin">
                              <thead>
                                <tr>
                                  <th>Fecha</th>
                                  <th>Tipo Cita</th>
                                  <th>Estado Cita</th>
                                  <th class="hidden-phone">Opciones</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($meetings as $meeting)
                                <tr>
                                  <td>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $meeting->start_meeting)->toDayDateTimeString() }}</td>
                                  <td>{{ $meeting->meetingType() }}</td>
                                  <td>
                                    @if ( $meeting->meeting_status == 'ACTV' )
                                      <i class="fa fa-circle" style="font-size:35px; color:#5cb85c;"></i>
                                    @elseif ( $meeting->meeting_status == 'CANC' )
                                      <i class="fa fa-times-circle" style="font-size:35px; color:#d43f3a;"></i>
                                    @elseif ( $meeting->meeting_status == 'DONE' )
                                      <i class="fa fa-check-circle" style="font-size:35px; color:#2e6da4;"></i>
                                    @endif
                                  </td>
                                  <td data-meeting-id="{{ $meeting->id }}">
                                   @if ( $meeting->meeting_status == 'ACTV' )
                                     @if ( $meeting->patient->patient_status === 'NEW' )
                                       <a href="{{ route( 'cita.tratamiento', $meeting->id ) }}" class="btn btn-success product_detail"><span class="fa fa-calendar"></span> Ir a cita </a>
                                       <a href="#" type="button" class="btn btn-danger product_delete" data-toggle="modal" data-target="#inventoryDelete"><span class="fa fa-ban"></span> Cancelar</a>
                                     @else
                                       <a href="{{ route( 'cita.seguimiento', $meeting->id ) }}" class="btn btn-success product_detail"><span class="fa fa-calendar"></span> Ir a cita </a>
                                       <a href="#" type="button" class="btn btn-danger product_delete" data-toggle="modal" data-target="#inventoryDelete"><span class="fa fa-ban"></span> Cancelar</a>
                                     @endif
                                   @elseif ( $meeting->meeting_status == 'DONE' )
                                       <a href="{{ route( 'agenda.show', $meeting->id ) }}" class="btn btn-primary product_detail"><span class="fa fa-eye"></span> Detalle de cita </a>
                                   @endif                                   
                                  </td>
                                  <!-- <td class="vertical-align-mid">
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-success" data-transitiongoal="35" aria-valuenow="35" style="width: 35%;"></div>
                                    </div>
                                  </td> -->
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                            <!-- end user projects -->

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                            
                            <!-- informacion basica paciente container -->
                            <div class="col-md-12 col-sm-6 col-xs-12">
                              <div class="x_panel">
                                <div class="x_title">
                                  <h2>Datos Personales<!--  <small>Stripped table subtitle</small> --></h2>
                                  <ul class="nav navbar-right panel_toolbox"  style="min-width: auto;">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <!-- <li class="dropdown">
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                      <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                      </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li> -->
                                  </ul>
                                  <div class="clearfix"></div>
                                </div>

                                <!-- Datos Personales Paciente -->
                                <div class="x_content">
                                  <table class="table table-striped">
                                    <tbody>
                                      <tr>
                                        <th scope="row">Nombre:</th>
                                        <td>{{ $patient->name . ' ' . $patient->last_name }}</td>
                                        <th scope="row">Identificacion:</th>
                                        <td>{{ $patient->type_id_number . ' ' . $patient->id_number }}</td>
                                      </tr>

                                      @if ( isset($patient->birthdate) )
                                      <tr>
                                        <th scope="row">Fecha Nacimiento:</th>
                                        <td>{{ Carbon\Carbon::createFromFormat('Y-m-d', $patient->birthdate)->toFormattedDateString() }}</td>
                                        <th scope="row">Edad:</th>
                                        <td>{{ Carbon\Carbon::createFromFormat('Y-m-d', $patient->birthdate)->diff(Carbon\Carbon::now())->format('%y Años') }}</td>
                                      </tr>
                                      @endif

                                      <tr>
                                        <th scope="row">Dirección::</th>
                                        <td>{{ $patient->address }}</td>
                                        <th scope="row">Telefono:</th>
                                        <td>{{ $patient->phone }}</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Email:</th>
                                        <td>{{ $patient->email }}</td>

                                        @if ( isset($patient->job) )
                                        <th scope="row">Ocupación:</th>
                                        <td>{{ $patient->job }}</td>
                                        @endif

                                      </tr>

                                      @if ( isset($patient->academic_level->level) && isset($patient->eps->eps_abbreviation) )
                                      <tr>
                                        <th scope="row">Nivel Educativo:</th>
                                        <td>{{ $patient->academic_level->level }}</td>
                                        <th scope="row">Entidad de Salud:</th>
                                        <td>{{ $patient->eps->eps_abbreviation }}</td>
                                      </tr>
                                      @endif

                                      @if ( isset($patient->civil_status) && isset($patient->number_children) )
                                      <tr>
                                        <th scope="row">Estado Civil:</th>
                                        <td>{{ $patient->getCivilStatus() }}</td>
                                        <th scope="row">Numero de Hijos:</th>
                                        <td>{{ $patient->number_children }}</td>
                                      </tr>
                                      @endif

                                      @if ( isset($patient->gender) && isset($patient->blood_type->blood_group) )
                                      <tr>
                                        <th scope="row">Género:</th>
                                        <td>{{ $patient->getGender() }}</td>
                                        <th scope="row">Grupo Sanguineo:</th>
                                        <td>{{ $patient->blood_type->blood_group }}</td>
                                      </tr>
                                      @endif

                                    </tbody>
                                  </table>
                                </div>

                              </div>
                            </div>
                            <!-- /informacion basica paciente container -->

                            <!-- Metas, intentos y motivavion container -->
                            @if ( isset($patient->inspection) )
                            <div class="col-md-12 col-sm-6 col-xs-12">
                              <div class="x_panel">
                                <div class="x_title">
                                  <h2>Metas, Intentos y Motivavión<!--  <small>Stripped table subtitle</small> --></h2>
                                  <ul class="nav navbar-right panel_toolbox" style="min-width: auto;">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <!-- <li class="dropdown">
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                      <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                      </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li> -->
                                  </ul>
                                  <div class="clearfix"></div>
                                </div>

                                <!-- Datos Personales Paciente -->
                                <div class="x_content">
                                  <table class="table table-striped">
                                    <tbody>
                                      <tr>
                                        <th scope="row">Talla:</th>
                                        <td>{{ round($patient->inspection->size, 0) }}</td>
                                        <th scope="row">Meta (Kg):</th>
                                        <td>{{ $patient->inspection->goal }}</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Peso Minimo (Kg):</th>
                                        <td>{{ $patient->inspection->min_weight }}</td>
                                        <th scope="row">Peso Máximo (Kg):</th>
                                        <td>{{ $patient->inspection->max_weight }}</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Cuanto Tiempo:</th>
                                        <td>{{ $patient->inspection->hlar_num . ' ' . $patient->inspection->getTimeUnit() }}</td>
                                        <th scope="row">Cuanto Subio (Kg):</th>
                                        <td>{{ $patient->inspection->hlar_weight }}</td>
                                      </tr>
                                      @if ( isset($patient->inspection->treatment_initiated) )
                                      <tr>
                                        <th scope="row">Tratamientos Iniciados:</th>
                                        <td colspan="3">{{ $patient->inspection->treatment_initiated }}</td>
                                      </tr>
                                      @endif
                                      <tr>
                                        <th scope="row">Motivación:</th>
                                        <td colspan="3">{{ $patient->inspection->motivation }}</td>
                                      </tr>
                                      @if ( isset($patient->inspection->observation) )
                                      <tr>
                                        <th scope="row">Observaciones:</th>
                                        <td colspan="3">{{ $patient->inspection->observation }}</td>
                                      </tr>
                                      @endif
                                      <tr>
                                        <th scope="row">Posición y Actitud:</th>
                                        <td>{{ $patient->inspection->attitude }}</td>
                                        <th scope="row">Integridad:</th>
                                        <td>{{ $patient->inspection->getIntegrity() }}</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Movimientos:</th>
                                        <td>{{ $patient->inspection->movement }}</td>
                                        <th scope="row">Otros:</th>
                                        <td>{{ $patient->inspection->others }}</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>

                              </div>
                            </div>
                            @endif
                            <!-- /Metas, intentos y motivavion container -->

                            <!-- Alimentación -->
                            @if ( isset($patient->aliments) )
                            <div class="col-md-12 col-sm-6 col-xs-12">
                              <div class="x_panel">
                                <div class="x_title">
                                  <h2>Alimentación<!--  <small>Stripped table subtitle</small> --></h2>
                                  <ul class="nav navbar-right panel_toolbox" style="min-width: auto;">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <!-- <li class="dropdown">
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                      <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                      </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li> -->
                                  </ul>
                                  <div class="clearfix"></div>
                                </div>

                                <!-- Datos Personales Paciente -->
                                <div class="x_content">
                                  <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th>Momento Día</th>
                                        <th>Lugar</th>
                                        <th>Alimento</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ( $patient->aliments as $aliment)
                                      <tr>
                                        <td>{{ $aliment->getDetail() }}</td>
                                        <td>{{ $aliment->getPlace() }}</td>
                                        <td>{{ $aliment->food_description }}</td>
                                      </tr>
                                      @endforeach
                                    </tbody>
                                  </table>
                                </div>

                              </div>
                            </div>
                            @endif
                            <!-- /Alimentación -->

                            <!-- Habitos Alergias y antecedentes -->
                            @if ( isset($patient->habits) && isset($patient->plannings_patient) )
                            <div class="col-md-12 col-sm-6 col-xs-12">
                              <div class="x_panel">
                                <div class="x_title">
                                  <h2>Habitos, Planificación y Menstruación<!--  <small>Stripped table subtitle</small> --></h2>
                                  <ul class="nav navbar-right panel_toolbox" style="min-width: auto;">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <!-- <li class="dropdown">
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                      <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                      </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li> -->
                                  </ul>
                                  <div class="clearfix"></div>
                                </div>

                                <!-- Datos Personales Paciente -->
                                <div class="x_content">
                                  <h3>Habitos</h3>
                                  <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th>Habito</th>
                                        <th>Frecuencia</th>
                                        <th>Tiempo</th>
                                        <th>Descripción</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ( $patient->habits as $habit)
                                      <tr>
                                        <td>{{ $habit->habit_name }}</td>
                                        <td>{{ $habit->getFrecuency() }}</td>
                                        <td>{{ round( $habit->habit_lot ) . ' ' . $habit->getUnit() }}</td>
                                        <td colspan="4">{{ $habit->habit_description }}</td>
                                      </tr>
                                      @endforeach
                                    </tbody>
                                  </table>
                                  <h3>Planifica</h3>
                                  <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th>Metodo</th>
                                        <th>Descripción Metodo</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>{{ App\PlanningMethod::find( $patient->plannings_patient->planning_method_id )->name }}</td>
                                        <td>{{ $patient->plannings_patient->description }}</td>
                                      </tr>
                                    </tbody>
                                  </table>

                                  @if ( isset($patient->menstrual_period) )
                                  <h3>Menstruación</h3>
                                  <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th>Tipo</th>
                                        <th>Frecuencia Días</th>
                                        <th>Duración Días</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>{{ $patient->menstrual_period->getType() }}</td>
                                        <td>{{ $patient->menstrual_period->frecuency }} &nbsp; Días</td>
                                        <td>{{ $patient->menstrual_period->duration }} &nbsp; Días</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  @endif

                                </div>

                              </div>
                            </div>
                            @endif
                            <!-- /Habitos Alergias y antecedentes -->

                            <!-- Diagnostico -->
                            @if ( isset($patient->diagnostic) )
                            <div class="col-md-12 col-sm-6 col-xs-12">
                              <div class="x_panel">
                                <div class="x_title">
                                  <h2>Diagnostico<!--  <small>Stripped table subtitle</small> --></h2>
                                  <ul class="nav navbar-right panel_toolbox" style="min-width: auto;">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <!-- <li class="dropdown">
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                      <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                      </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li> -->
                                  </ul>
                                  <div class="clearfix"></div>
                                </div>

                                <!-- Datos Personales Paciente -->
                                <div class="x_content">
                                  <h3>Diagnostico</h3>
                                  <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th colspan="2">Miembro Superior Izquierdo (MSI)</th>
                                        <th colspan="2">Miembro Superior Izquierdo (MSI)</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">Intestino delgado y corazón:</th>
                                        <td>{{ $patient->diagnostic->id_c }}</td>
                                      
                                        <th scope="row">Pulmón - Intestino grueso P-ID:</th>
                                        <td>{{ $patient->diagnostic->p_ig }}</td>

                                      </tr>
                                      <tr>

                                        <th scope="row">Higado - Vesicuña Biliar H-VB:</th>
                                        <td>{{ $patient->diagnostic->h_vb }}</td>

                                        <th scope="row">Estómago - Baso E-B:</th>
                                        <td>{{ $patient->diagnostic->e_v }}</td>

                                      </tr>
                                      <tr>

                                        <th scope="row">Riñon Agua - Vejiga RV-A:</th>
                                        <td>{{ $patient->diagnostic->ra_v }}</td>

                                        <th scope="row">Riñon fuego - Triple calentador - Percardio RF-TC-PC:</th>
                                        <td>{{ $patient->diagnostic->rf_tp_pc }}</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  <h3>Otros Organos</h3>
                                  <table class="table table-striped">
                                    <tbody>
                                      <tr>
                                        <th scope="row">Cara:</th>
                                        <td>{{ $patient->diagnostic->getFaceType() }}</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Lengua:</th>
                                        <td>{{ $patient->diagnostic->type_tongue }}</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Ojos:</th>
                                        <td>{{ $patient->diagnostic->getEyesType() }}</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Nariz:</th>
                                        <td>{{ $patient->diagnostic->getNoseType() }}</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Labios:</th>
                                        <td>{{ $patient->diagnostic->getLipsType() }}</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Uñas:</th>
                                        <td>{{ $patient->diagnostic->getNailsType() }}</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>

                              </div>
                            </div>
                            @endif
                            <!-- /Diagnostico -->

                          </div>


                        </div>
                      </div>
                    </div>
                    <!-- </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection