@extends('layouts.su_main_layout')

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Cita Seguimiento Paciente <!-- <small>Click to add/edit events</small> --></h3>
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
                          <img class="img-responsive avatar-view" src="/images/user.png" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3>Pedro Pablo Paez Pinto</h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> <strong>Edad: </strong>24
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> <strong>Documento: </strong>C.C. 591579
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> <strong>Tipo Sangre: </strong>B
                        </li>
                      </ul>

                      <a class="btn btn-success"><i class="fa fa-eye m-right-xs"></i> <strong>Detalle Paciente</strong></a>
                      <br>

                    </div>

                    <div class="col-md-9">

                      <div class="profile_title">
                        <div class="col-md-2">
                          <h2>Fecha Cita</h2>
                        </div>
                        <div class="col-md-10">
                          <div id="reportrange" class="pull-right" style="margin-top: 5px; background: #fff; padding: 5px 10px; border: 1px solid #E6E9ED">
                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                            <strong>February 8, 2017</strong>
                          </div>
                        </div>
                      </div>
                      
                      {{ Form::open( array( 'method' => 'POST', 'class' => 'form-horizontal form-label-left tracing', 'novalidate' => 'novalidate' ) ) }}
                            
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="">
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group item">
                              <small class="info-field">Peso</small>
                              <input type="text" class="form-control has-feedback-left num_input" placeholder="Peso" name="tracing-weight" id="tracing-weight" required>
                              <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                            </div>

                            <div class="" id="medicine">
                              <div class="medicines-container" id="medicine-row" data-row="1">

                                <div class="col-md-8 col-sm-8 col-xs-12 form-group item">
                                  <small class="info-field">Nombre Medicina</small>
                                  <input type="text" class="form-control has-feedback-left medicine-name" placeholder="Nombre Medicina" name="medicine-name">
                                  <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12 form-group item">
                                  <small class="info-field has-feedback-left">Tipo Medicina</small>
                                  <select class="select2_single form-control has-feedback-left medicine-type" tabindex="0" name="medicine-type" required>
                                    <option value="M">Medicamento</option>
                                    <option value="V">Vitamina</option>
                                    <option value="O">Otro</option>
                                  </select>
                                  <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                              </div>
                            </div>
                            <div class="pull-right manage-rows-form">
                                <input type="hidden" id="input_medicines" name="input_medicines" />
                                <button type="button" class="btn btn-round btn-danger rm-field-medicine"><i class="fa fa-chevron-circle-up"></i> Eliminar Medicina</button>
                                <button type="button" class="btn btn-round btn-warning add-field-medicine"><i class="fa fa-chevron-circle-down"></i> Agregar Medicina</button>
                              </div>

                            <div class="col-md-12 col-sm-6 col-xs-12 form-group item">
                              <small class="info-field">Tratamiento</small>
                              <input type="text" class="form-control has-feedback-left" placeholder="Marca" name="trademark-inventory" id="trademark-inventory" value="{{ isset( $product ) ? $product->trademark : '' }}">
                              <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                            </div>

                            <div class="col-md-12 col-sm-6 col-xs-12 form-group item">
                              <small class="info-field">Descripción Tratamiento </small>
                              <textarea class="form-control" rows="4" placeholder="Observación" name="description-inventory">{{ isset( $product ) ? $product->observation : '' }}</textarea>
                            </div>

                            <div class="form-group pull-right">
                              <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>&nbsp; &nbsp; <strong>Guardar Elemento</strong></button>
                            </div>

                          </div>
                        </div>

                      {{ Form::close() }}

                    </div>

                     
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection

