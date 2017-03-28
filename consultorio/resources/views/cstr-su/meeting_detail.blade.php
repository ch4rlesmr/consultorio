@extends('layouts.su_main_layout')

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Detalle de Cita Paciente <!-- <small>Click to add/edit events</small> --></h3>
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
                  <div class="x_content">

                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="{{ asset('/images/'.$meeting->patient->getImagePatient()) }}" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3>{{ $meeting->patient->name . ' ' . $meeting->patient->last_name }}</h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-slack user-profile-icon"></i> <strong>Edad: </strong>{{ Carbon\Carbon::createFromFormat('Y-m-d', $meeting->patient->birthdate)->diff(Carbon\Carbon::now())->format('%y Años') }}</li>
                        <li><i class="fa fa-list-alt user-profile-icon"></i> <strong>Identificación: </strong>{{ $meeting->patient->type_id_number . ' ' . $meeting->patient->id_number }}</li>
                        <li><i class="fa fa-plus-square user-profile-icon"></i> <strong>Tipo Sangre: </strong>{{ $meeting->patient->blood_type->blood_group }}</li>
                      </ul>

                      <a href="{{ action( 'PatientController@show', $meeting->patient->id ) }}" class="btn btn-success"><i class="fa fa-eye m-right-xs"></i> <strong>Detalle Paciente</strong></a>
                      <br>

                    </div>

                    <div class="col-md-9">
                      
                      <div class="profile_title">
                        <div class="col-md-2">
                          <h2>Fecha Cita</h2>
                        </div>
                        <div class="col-md-6">
                          <div id="reportrange" class="pull-left" style="margin-top: 5px; background: #fff; padding: 5px 10px; border: 1px solid #E6E9ED">
                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                            <strong>{{ Carbon\Carbon::createFromFormat( 'Y-m-d H:i:s', $meeting->start_meeting )->toDayDateTimeString() }}</strong>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="pull-right">
                            <a href="#" class="btn btn-primary"><i class="fa fa-print"></i> <strong>Imprimir</strong></a>
                            <a href="{{ route( 'agenda.edit', $meeting->id ) }}" class="btn btn-warning"><i class="fa fa-pencil"></i> <strong>Editar</strong></a>
                          </div>
                        </div>
                      </div>
                            
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="">

                            @if ( isset($meeting->treatment_id) )
                            <!-- Valores para seccion de signos -->
                            <div class="clearfix"></div>
                            <div class="x_title">
                              <h3>Signos</h3>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12 form-group item">
                              <strong class="info-field">Peso (Kg)</strong>
                              <input type="text" class="form-control has-feedback-left num_input" value="{{ $sign->weight }}" readonly>
                              <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12 form-group item">
                              <strong class="info-field">Talla</strong>
                              <input type="text" class="form-control has-feedback-left num_input" value="{{ $sign->size }}" readonly>
                              <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12 form-group item">
                              <strong class="info-field">Indice Masa Corporal</strong>
                              <input type="text" class="form-control has-feedback-left num_input" value="{{ $sign->imc }}" readonly>
                              <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12 form-group item">
                              <strong class="info-field">Tensión Arterial</strong>
                              <input type="text" class="form-control has-feedback-left num_input" value="{{ $sign->blood_presure }}" readonly>
                              <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12 form-group item">
                              <strong class="info-field">Frecuencia Cardiaca</strong>
                              <input type="text" class="form-control has-feedback-left num_input" value="{{ $sign->heart_rate }}" readonly>
                              <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12 form-group item">
                              <strong class="info-field">Frecuencia Respiratoria</strong>
                              <input type="text" class="form-control has-feedback-left num_input" value="{{ $sign->breathing_rate }}" readonly>
                              <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12 form-group item">
                              <strong class="info-field">Contextura</strong>
                              <input type="text" class="form-control has-feedback-left num_input" value="{{ $sign->contexture }}" readonly>
                              <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                            </div>
                            <!-- /Valores para seccion de signos -->
                            @elseif ( isset($meeting->tracing_id) )
                            <!-- Seguimiento -->
                            <div class="clearfix"></div>
                            <div class="x_title">
                              <h3>Seguimiento</h3>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12 form-group item">
                              <strong class="info-field">Peso (Kg)</strong>
                              <input type="text" class="form-control has-feedback-left num_input" value="{{ $tracing->evolution }}" readonly>
                              <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12 form-group item">
                              <strong class="info-field">Calificación</strong><br>
                              <div class="starrr starrr-readonly"></div>
                              <input type="hidden" id="qualification" value="{{ $tracing->qualification }}">
                            </div>
                            <!-- /Seguimiento -->
                            @endif

                            <!-- Diagnostico -->
                            <div class="clearfix"></div>
                            <div class="x_title">
                              <h3>Diagnostico y Observaciones</h3>
                            </div>

                            @if ( isset($meeting->treatment_id) )
                              <div class="col-md-12 col-sm-6 col-xs-12 form-group item">
                                <strong class="info-field">Diagnostico</strong>
                                <input type="text" class="form-control has-feedback-left num_input" value="{{ $treatment->diagnosis }}" readonly>
                                <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                              </div>

                              <div class="col-md-12 col-sm-6 col-xs-12 form-group item">
                                <strong class="info-field">Observaciones</strong>
                                <textarea class="form-control" rows="4" readonly>{{ $treatment->description }}</textarea>
                              </div>
                            @elseif ( isset($meeting->tracing_id) )
                              <div class="col-md-12 col-sm-6 col-xs-12 form-group item">
                                <strong class="info-field">Diagnostico</strong>
                                <input type="text" class="form-control has-feedback-left num_input" value="{{ $tracing->diagnosis }}" readonly>
                                <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                              </div>

                              <div class="col-md-12 col-sm-6 col-xs-12 form-group item">
                                <strong class="info-field">Observaciones</strong>
                                <textarea class="form-control" rows="7" readonly>{{ $tracing->considerations }}</textarea>
                              </div>
                            @endif
                            <!-- /Diagnostico -->

                            <!-- Medicinas -->
                            <div class="clearfix"></div>
                            <div class="x_title">
                              <h3>Medicamentos</h3>
                            </div>

                            <div class="col-md-12">
                              <div class="table-responsive">
                                <table class="table table-striped jambo_table inventory-list">
                                  <thead>
                                    <tr class="headings" style="text-transform:uppercase;">
                                      <th class="text-center">Nombre Medicina</th>
                                      <th class="text-center">Tipo Medicina</th>
                                      <th class="text-center">Dosis</th>
                                    </tr>
                                  </thead>
                                  <tbody style="text-align: center;">
                                    @foreach ( $meeting->medications as $medicine )
                                      <tr>
                                        <td>{{ $medicine->medicine_name }}</td>
                                        <td>{{ $medicine->getMedicationType() }}</td>
                                        <td>{{ $medicine->dose }}</td>
                                      </tr>
                                    @endforeach
                                  </tbody>
                                </table>
                              </div>
                            </div>
                            <!-- /Medicinas -->

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

