@extends('layouts.su_main_layout')

@section('content')
<div class="right_col" role="main">
	<div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Paciente</h3>
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
                    <h2>Agregar Paciente <!-- <small>Sessions</small> --></h2>
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


                    <!-- Smart Wizard -->
                    <p>Complete los campos obligatorios para el registro de información de pacientes.</p>
                    <br />
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              Paso 1<br />
                                              <small>Datos Básicos</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Paso 2<br />
                                              <small>Inspección General</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                Paso 3<br />
                                <small>Alimentación</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-4">
                            <span class="step_no">4</span>
                            <span class="step_descr">Paso 4<br />
                                <small>Habitos y Antecedentes</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-5">
                            <span class="step_no">5</span>
                            <span class="step_descr">Paso 5 </br>
                              <small>Diagnostico</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-6">
                            <span class="step_no">6</span>
                            <span class="step_descr">Paso 6 </br>
                              <small>Signos y Tratamiento</small>
                            </span>
                          </a>
                        </li>
                      </ul>
                      <!-- <div id="step-1">
                        <form class="form-horizontal form-label-left">

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Middle Name / Initial</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div id="gender" class="btn-group" data-toggle="buttons">
                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                  <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                                </label>
                                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                  <input type="radio" name="gender" value="female"> Female
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                            </div>
                          </div>
                        </form>

                      </div> -->
                      @if(isset($patient))
                        {!! Form::open(array("route"=>["paciente.update", $patient->id], "method"=>"PUT","id"=>"form_patient")) !!}
                      @else
                        {!! Form::open(array("route"=>"paciente.store", "method"=>"POST","id"=>"form_patient")) !!}
                      @endif
                        <div id="step-1">
                          <h2 class="StepTitle">Datos Básicos</h2>						
                          <div class="form-horizontal form-label-left form-data" id="basic-data-form" novalidate>
                          	<div class="row">
                          		<div class="col-md-12 col-sm-12 col-xs-12">
                          			<div class="x_panel">
  	                        			<div class="col-md-6 col-sm-6 col-xs-12 form-group item">
  	                        				<small class="info-field">Nombres</small>
  	                        				<input data-validate-length-range="2" data-validate-words="1" type="text" class="form-control has-feedback-left" placeholder="Nombres" name="name-patient" id="name-patient" required>
                                    <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
  	                        			</div>

  	                        			<div class="col-md-6 col-sm-6 col-xs-12 form-group item">
  	                        				<small class="info-field">Apellidos</small>
  	                        				<input data-validate-length-range="2" data-validate-words="1" type="text" class="form-control has-feedback-left" placeholder="Apellidos" name="lastname-patient" id="lastname-patient" required>
                                    <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
  	                        			</div>

  	                        			<div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback item">
  	                        				<small class="info-field"> Fecha Nacimiento </small>
  	                        				<input data-validate-length-range="2" type="text" class="form-control has-feedback-left datepicker" placeholder="Fecha Nacimiento" name="dob-patient" id="dob-patient" required>
                                    <span class="fa fa-calendar form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
  	                        			</div>

  	                        			<div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback item">
  						                    <small class="info-field">Edad</small>
  						                    <input data-validate-minmax="10,200" type="text" class="form-control has-feedback-left num_input" placeholder="Edad" name="age-patient" id="age-patient" required>
                                  <span class="fa fa-sort-numeric-desc form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                         					</div>

                         					<div  class="col-md-2 col-sm-2 col-xs-12 form-group item">
                         						<small class="info-field has-feedback-left">Tipo Documento</small>
  					                        <select class="select2_single form-control has-feedback-left" tabindex="0" name="type-document" id="type-document" required>
                                      @foreach (App\Patient::all_types_id() as $key => $value)
    						                        <option value="{{ $key }}">{{ $value}}</option>
    						                      @endforeach
  					                        </select>
                                    <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                        					</div>

                          				<div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback item">
                       						<small class="info-field">No. Documento</small>
                       						<input data-validate-length-range="6" type="text" class="form-control has-feedback-left num_input" placeholder="No. Documento" name="number-document" id="number-document" required>
                          					<span class="fa fa-slack form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                        					</div>

                        					<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback item">
                        						<small class="info-field">Dirección</small>
  					                        <input data-validate-length-range="2" type="text" class="form-control has-feedback-left" placeholder="Dirección" name="address-patient" id="address-patient" required>
  					                        <span class="fa fa-home form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                        					</div>

                          				<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback item">
                          					<small class="info-field">Telefono</small>
  					                        <input data-validate-length-range="6" type="text" class="form-control has-feedback-left" placeholder="Telefono" name="phone-patient" id="phone-patient" required>
  					                        <span class="fa fa-phone-square form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                        					</div>
                    
                      					<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback item">
                      						  <small class="info-field">Correo Electronico</small>
                          					<input type="email" class="form-control has-feedback-left" placeholder="Correo Electrónico" name="email-patient" id="email-patient" required>
                          					<span class="fa fa-envelope form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                        					</div>

                        					<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback item">
                                    <small class="info-field">Entidad de Salud</small>
                          					<!-- <input type="text" class="form-control has-feedback-left" placeholder="Eps"> -->
                                    <select class=" select2_single form-control has-feedback-left" tabindex="0" name="eps-patient" id="eps-patient" required>
                                      @foreach($epsList as $eps)
                                        <option value="{{ $eps->id }}">{{ $eps->eps_name }}</option>
                                      @endforeach
                                    </select>
                          					<span class="fa fa-ambulance form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                        					</div>

              										<div class=" fa fa-tint col-md-2 col-sm-2 col-xs-12 form-group item">
              											<small class="info-field">Grupo sanguineo</small>
              											<select class=" select2_single form-control has-feedback-left" tabindex="0" name="blood-type" id="blood-type" required>
                                      @foreach($blood_types as $bt)
              												<option value="{{ $bt->id }}">{{ $bt->blood_group }}</option>
                                      @endforeach
              											</select>
                                    <span class="fa fa-plus-square form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
              										</div>

              										<div class=" fa fa-male col-md-2 col-sm-2 col-xs-12 form-group item"> 
              											<small class="info-field">Género</small>
              											<select class=" select2_single form-control has-feedback-left" tabindex="0" name="genre-patient" id="genre-patient" required>
                                      @foreach(App\Patient::genders() as $key => $value)
              												  <option value="{{ $key }}">{{ $value }}</option>
              												@endforeach
                                    </select>
                                    <span class="fa fa-transgender form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
              										</div>


              										<div class=" fa fa-group col-md-2 col-sm-2 col-xs-12 form-group item">
              											<small class="info-field">Nº Hijos</small>
                                    <input data-validate-minmax="0,20" type="text" class="form-control has-feedback-left num_input" placeholder="Hijos" name="sons-number" id="sons-number" required>
                                    <span class="fa fa-users form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
              										</div>

              										<div class=" fa fa-male col-md-3 col-sm-3 col-xs-12 form-group item">
              											<small class="info-field">Estado Civil</small>
              											<select class=" select2_single form-control has-feedback-left" tabindex="0" name="civil-status" id="civil-status" required>
                                      @foreach(App\Patient::civil_statuses() as $key => $value)
              												  <option value="{{ $key }}">{{ $value }}</option>
              												@endforeach
              											</select>
                                    <span class="fa fa-blind form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
              										</div>

              										<div class=" fa fa-graduation-cap col-md-3 col-sm-3 col-xs-12 form-group item">
              											<small class="info-field">Nivel Educativo</small>
              											<select class=" select2_single form-control has-feedback-left" tabindex="0" name="education-level" id="education-level" required>
                                      @foreach($academic_levels as $al)
              												  <option value="{{ $al->id }}">{{ $al->level }}</option>
              												@endforeach
              											</select>
                                    <span class="fa fa-book form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
              										</div>

                                  <div class="col-md-6 col-sm-6 col-xs-12 form-group item">
                                    <!-- <div id="dropZoneArea" class="x_content upload-area" style="height: 250px; width: 100%; border: 1px solid red;">
                                      <form action="form_upload.html" class="dropzone dz-clickable dz-started"></form>
                                    </div>-->
                                  </div> 

                          			</div>
                          		</div>
                          	</div>
                          </div>

                        </div>
                        <div id="step-2">

                          <h2 class="StepTitle">Metas, intentos y motivación</h2>           
                          <div class="form-horizontal form-label-left form-data" novalidate>
                            <div class="row">
                              <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                  <!-- se añade campo de talla  -->
                                  <div class="col-md-3 col-sm-3 col-xs-12 form-group item">
                                    <small class="info-field">Talla(cms)</small>
                                    <input type="text" class="form-control has-feedback-left num_input" placeholder="Talla" name="initial-size" id="initial-size" required>
                                    <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                  </div>

                                  <div class="col-md-3 col-sm-3 col-xs-12 form-group item">
                                    <small class="info-field">Meta (Kg)</small>
                                    <input type="text" class="form-control has-feedback-left num_input" placeholder="Meta" name="goal" id="goal" required>
                                    <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                  </div>

                                  <div class="col-md-3 col-sm-3 col-xs-12 form-group item">
                                    <small class="info-field">Peso Mínimo (Kg)</small>
                                    <input type="text" class="form-control has-feedback-left num_input" placeholder="Peso Mínimo" name="min-weight" id="min-weight" required>
                                    <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                  </div>

                                  <div class="col-md-3 col-sm-3 col-xs-12 form-group has-feedback item">
                                    <small class="info-field">Peso Máximo (Kg) </small>
                                    <input type="text" class="form-control has-feedback-left num_input" placeholder="Peso Máximo" name="max-weight" id="max-weight" required>
                                    <span class="fa fa-calendar form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                  </div>

                                  <div  class="  col-md-3 col-sm-3 col-xs-12 form-group  item">
                                    <small class="info-field has-feedback-left">Cuanto tiempo Hace</small>
                                    <input type="text" class="form-control has-feedback-left num_input" placeholder="Cuanto tiempo?" name="time-ago" id="time-ago" required>
                                    <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                  </div>

                                  <div  class="  col-md-3 col-sm-3 col-xs-12 form-group  item">
                                    <small class="info-field has-feedback-left">Días, meses o años</small>
                                    <select class="select2_single form-control has-feedback-left" tabindex="0" name="time-ago-units" id="time-ago-units" required>
                                      @foreach(App\Inspection::timeUnits() as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                      @endforeach
                                    </select>
                                    <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                  </div>

                                  <div  class="col-md-3 col-sm-3 col-xs-12 form-group  item">
                                    <small class="info-field has-feedback-left">Cuanto subio (Kg)</small>
                                    <input type="text" class="form-control has-feedback-left num_input" placeholder="Cuanto peso?" name="how-weight" id="how-weight" required>
                                    <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                  </div>

                                  <div  class="col-md-3 col-sm-3 col-xs-12 form-group  item">
                                    <small class="info-field has-feedback-left">Sentimiento</small>
                                    <select class="select2_single form-control has-feedback-left" tabindex="0" name="feeling" id="feeling" required>
                                      @foreach($feelings as $feeling)
                                        <option value="{{ $feeling->id }}">{{ $feeling->name }}</option>
                                      @endforeach
                                    </select>
                                    <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                  </div>

                                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback item">                         
                                  <small class="info-field">Tratamientos Iniciados</small>
                                  <input type="text" class="form-control has-feedback-left" placeholder="Tratamientos Iniciados" name="started-treatment" id="started-treatment">
                                    <span class="fa fa-slack form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                  </div>

                                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback item">
                                    <small class="info-field">Motivación</small>
                                    <input type="text" class="form-control has-feedback-left" placeholder="Motivación" name="motivation" id="motivation" required>
                                    <span class="fa fa-home form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                  </div>

                                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback item">
                                  <small class="info-field">Observaciones</small>
                                  <input type="text" class="form-control has-feedback-left" placeholder="Observaciones" name="observation" id="observation">
                                  <span class="fa fa-sort-numeric-desc form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                  </div required>


                                  <h2 class="StepTitle">Inspección General</h2> 
                                  <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                      <div class="x_panel">

                                        <div  class="col-md-3 col-sm-3 col-xs-12 form-group item">
                                          <small class="info-field has-feedback-left">Posición y Actitud</small>
                                          <select class="select2_single form-control has-feedback-left" tabindex="0" name="position-attitude" id="position-attitude" required>
                                            @foreach(App\Inspection::attitudes() as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                            @endforeach
                                          </select>
                                          <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                        </div>

                                        <div  class="col-md-3 col-sm-3 col-xs-12 form-group item">
                                          <small class="info-field has-feedback-left">Integridad</small>
                                          <select class="select2_single form-control has-feedback-left" tabindex="0" name="integrity" id="integrity" required>
                                            @foreach(App\Inspection::integrities() as $key => $value)
                                              <option value="{{ $key }}">{{ $value }}</option>
                                            @endforeach
                                          </select>
                                          <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                        </div>

                                        <div  class="col-md-3 col-sm-3 col-xs-12 form-group item">
                                          <small class="info-field has-feedback-left">Movimientos</small>
                                          <select class="select2_single form-control has-feedback-left" tabindex="0" name="movements" id="movements" required>
                                            @foreach(App\Inspection::movements() as $key => $value )
                                              <option value="{{ $key }}">{{ $value }}</option>
                                            @endforeach
                                          </select>
                                          <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-3 col-sm-3 col-xs-12 form-group has-feedback item">
                                          <small class="info-field">Otros</small>
                                          <input type="text" class="form-control has-feedback-left" placeholder="Otros" name="other-inspection" id="other-inspection">
                                          <span class="fa fa-home form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                        </div>

                                      </div>
                                    </div>
                                  </div>

                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                        <div id="step-3">
                          <h2 class="StepTitle">Alimentación</h2>
                          <!-- <p>
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                            eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                          </p>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                          </p> -->
                          <div class="form-horizontal form-label-left form-data" novalidate>
                            <div class="row">
                              <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel" id="aliments">

                                  <div class="fields-container" id="aliment-row" data-row="1">
                                    <div class="col-md-3 col-sm-3 col-xs-12 form-group item">
                                      <small class="info-field">Momento del día</small>
                                      <!-- <input type="text" class="form-control has-feedback-left" placeholder="Meta"> -->
                                      <select class="select2_single form-control has-feedback-left day-moment" tabindex="0" name="day-moment" required>
                                        @foreach(App\Aliment::details() as $key => $value)
                                          <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                      </select>
                                      <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                    </div>

                                    <div  class="col-md-3 col-sm-3 col-xs-12 form-group item">
                                      <small class="info-field has-feedback-left place-food" name="place-food">Lugar</small>
                                      <select class="select2_single form-control has-feedback-left place-moment" tabindex="0" name="place-food" required>
                                        @foreach(App\Aliment::placesFood() as $key => $value)
                                          <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                      </select>
                                      <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group item">
                                      <small class="info-field">Alimento</small>
                                      <select class="select2_single form-control has-feedback-left food_id" tabindex="0" name="food_id" required>
                                        @foreach($foods as $food)
                                          <option value="{{ $food->id }}">{{ $food->name }}</option>
                                        @endforeach
                                      </select>
                                      <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                    </div>
                                  </div>

                                  <div class="pull-right manage-rows-form">
                                    <input type="hidden" id="input_aliments" name="input_aliments"/>
                                    <button type="button" class="btn btn-round btn-danger rm-field"><i class="fa fa-chevron-circle-up"></i> Eliminar Alimento</button>
                                    <button type="button" class="btn btn-round btn-warning add-field"><i class="fa fa-chevron-circle-down"></i> Agregar Alimento</button>
                                  </div>

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div id="step-4">
                          <h2 class="StepTitle">Habitos, Alergias y Antecedentes</h2>
                          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                          </p>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                          </p>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                          </p> -->
                          <div class="form-horizontal form-label-left form-data" novalidate>
                            <div class="row">
                              <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel" id="habits">
                                  <h2 class="StepTitle">Habitos</h2>

                                  <div class="habit-container" id="habit-row">
                                    <div class="col-md-3 col-sm-3 col-xs-12 form-group item">
                                      <small class="info-field has-feedback-left">Habito</small>
                                      <input type="text" class="form-control has-feedback-left habit-name" placeholder="Nombre Habito" name="habit-name" required>
                                      <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                      <!-- <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span> -->
                                    </div>

                                    <div class="col-md-3 col-sm-3 col-xs-12 form-group item">
                                      <small class="info-field has-feedback-left frecuency-habit">Frecuencia</small>
                                      <select class="select2_single form-control has-feedback-left frecuency-habit" tabindex="0" name="frecuency-habit" required>
                                        @foreach(App\HabitPatient::frecuencies() as $key => $value)
                                          <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                      </select>
                                      <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-3 col-sm-3 col-xs-12 form-group item">
                                      <small class="info-field has-feedback-left">Tiempo</small>
                                      <input type="text" class="form-control has-feedback-left num_input time-habit" placeholder="Tiempo Habito"  name="time-habit" required>
                                      <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-3 col-sm-3 col-xs-12 form-group item">
                                      <small class="info-field has-feedback-left">Unidad Tiempo</small>
                                      <select class="select2_single form-control has-feedback-left time-habit-unit" tabindex="0" name="time-habit-unit" required>
                                        @foreach(App\HabitPatient::units() as $key => $value)
                                          <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                      </select>
                                      <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-12 col-sm-12 col-xs-12 item">
                                      <small class="info-field has-feedback-left">Descripción Habito</small>
                                      <textarea class="form-control habit-description" rows="3" name="habit-description"></textarea>
                                    </div>
                                  </div>

                                  <div class="pull-right manage-rows-form">
                                    <input type="hidden" id="input_habits" name="input_habits"/>
                                    <button type="button" class="btn btn-round btn-danger rm-field-habit"><i class="fa fa-chevron-circle-up"></i> Eliminar Alimento</button>
                                    <button type="button" class="btn btn-round btn-warning add-field-habit"><i class="fa fa-chevron-circle-down"></i> Agregar Alimento</button>
                                  </div>

                                  <h2 class="col-md-12 StepTitle">Planifica</h2>
                                  <div class="col-md-4 col-sm-4 col-xs-12 form-group item">
                                    <small class="info-field has-feedback-left">Metodo</small>
                                    <select class="select2_single form-control has-feedback-left" tabindex="0" name="planify-method" id="planify-method">
                                      @foreach($planning_methods as $method)
                                        <option value="{{ $method->id }}">{{ $method->name }}</option>
                                      @endforeach
                                    </select>
                                    <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                  </div>

                                  <div class="col-md-8 col-sm-8 col-xs-12 form-group item">
                                    <small class="info-field">Descripción Método</small>
                                    <input type="text" class="form-control has-feedback-left" placeholder="Descripción Método" name="method-description" id="method-description">
                                    <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                  </div>

                                  <h2 class="col-md-12 StepTitle">Menstruación</h2>
                                  <div class="col-md-4 col-sm-4 col-xs-12 form-group item">
                                    <small class="info-field has-feedback-left">Tipo</small>
                                    <select class="select2_single form-control has-feedback-left" tabindex="0" name="menstruation-type" id="menstruation-type">
                                      @foreach(App\MenstrualPeriod::types() as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                      @endforeach
                                    </select>
                                    <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                  </div>

                                  <div class="col-md-4 col-sm-4 col-xs-12 form-group item">
                                    <small class="info-field has-feedback-left">Frecuencia Días</small>
                                    <input type="text" class="form-control has-feedback-left num_input" placeholder="Frecuencia Días" name="menstruation-frecuency" id="menstruation-frecuency">
                                    <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                  </div>

                                  <div class="col-md-4 col-sm-4 col-xs-12 form-group Irregular">
                                    <small class="info-field has-feedback-left">Duración Días</small>
                                    <input type="text" class="form-control has-feedback-left num_input" placeholder="Duración Días" name="menstruation-duration" id="menstruation-duration">
                                    <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                  </div>

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div id="step-5">
                          <h2 class="StepTitle">Diagnostico</h2>
                          <div class="form-horizontal form-label-left form-data" novalidate>
                            <div class="row">

                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <h2 class="StepTitle">Miembro Superior Izquierdo (MSI)</h2>
                              </div>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <h2 class="StepTitle">Miembro Superior Derecho (MSD)</h2>
                              </div>

                              <div class="col-md-6 col-sm-6 col-xs-12 form-group item">
                                <small class="info-field">Intestino delgado y corazon</small>
                                <input type="text" class="form-control has-feedback-left" placeholder="Intestino delgado y corazon" name="intestiny-heart" id="intestiny-heart" required>
                                <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                              </div>

                              <div class="col-md-6 col-sm-6 col-xs-12 form-group item">
                                <small class="info-field">Pulmón - Intestino Grueso P-ID </small>
                                <input type="text" class="form-control has-feedback-left" placeholder="Pulmón - Intestino Grueso" name="intestiny-lung" id="intestiny-lung" required>
                                <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                              </div>

                              <div class="col-md-6 col-sm-6 col-xs-12 form-group item">
                                <small class="info-field">Higado - Vesícula Biliar H-VB</small>
                                <input type="text" class="form-control has-feedback-left" placeholder="Higado - Vesícula Biliar" name="liver-vesicle" id="liver-vesicle" required>
                                <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                              </div>

                              <div class="col-md-6 col-sm-6 col-xs-12 form-group item">
                                <small class="info-field">Estómago - Vaso E-V</small>
                                <input type="text" class="form-control has-feedback-left" placeholder="Estómago - Vaso" name="stomach-vessel" id="stomach-vessel" required>
                                <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                              </div>

                              <div class="col-md-6 col-sm-6 col-xs-12 form-group item">
                                <small class="info-field">Riñon agua- Vejiga RA-V</small>
                                <input type="text" class="form-control has-feedback-left" placeholder="Riñon agua- Vejiga" name="kidney-bladder" id="kidney-bladder" required>
                                <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                              </div>

                              <div class="col-md-6 col-sm-6 col-xs-12 form-group item">
                                <small class="info-field">Riñon fuego - Triple calentador- Pericardio RF -TC- PC</small>
                                <input type="text" class="form-control has-feedback-left" placeholder="Riñon fuego - Triple calentador- Pericardio" name="kidney-pericardium" id="kidney-pericardium" required>
                                <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                              </div>

                              <div class="clearfix"></div>

                              <div class="x_panel">

                                <h2 class="StepTitle">Otros Organos</h2>

                                <div class="col-xs-2">
                                  <ul class="nav nav-tabs tabs-left">
                                    <li class="active"><a href="#home" data-toggle="tab">Cara</a></li>
                                    <li><a href="#tongue" data-toggle="tab">Lengua</a></li>
                                    <li><a href="#eyes" data-toggle="tab">Ojos</a></li>
                                    <li><a href="#nose" data-toggle="tab">Nariz</a></li>
                                    <li><a href="#lips" data-toggle="tab">Labios</a></li>
                                    <li><a href="#nail" data-toggle="tab">Uñas</a></li>
                                  </ul>
                                </div>

                                <div class="col-xs-9">
                                  
                                  <div class="tab-content">
                                    <div class="tab-pane active" id="home">
                                      <p class="lead">Cara</p>

                                      <div class="col-md-12 col-sm-12 col-xs-12 form-group item">
                                        <select class="image-picker" name="face-type" id="face-type" required>
                                          <option data-img-src="/images/body_parts/face_type/f_redonda.png"value="RE">Redonda</option>
                                          <option data-img-src="/images/body_parts/face_type/f_frenteAlta.png"value="FA">Frente Alta</option>
                                          <option data-img-src="/images/body_parts/face_type/f_mandibulaPronunciada.png"value="MP">Mandibula Pronunciada</option>
                                          <!-- <option data-img-src="/images/body_parts/face_type/1_rectangle.png"value="3">Hexagonal</option>
                                          <option data-img-src="/images/body_parts/face_type/1_rectangle.png"value="4">Otro</option> -->
                                        </select>
                                      </div>

                                    </div>

                                    <div class="tab-pane" id="tongue">
                                      <p class="lead">Lengua</p>
                                      <div class="col-md-12 col-sm-12 col-xs-12 form-group item">
                                        <select class="image-picker" name="tongue-type" id="tongue-type" required>
                                          <option data-img-src="/images/body_parts/tongue_type/1_rounded.png" value="RE">Redondeada</option>
                                          <option data-img-src="/images/body_parts/tongue_type/1_rounded.png" value="PU">Puntuda</option>
                                          <option data-img-src="/images/body_parts/tongue_type/1_rounded.png" value="OT">Otra</option>
                                        </select>
                                      </div>
                                    </div>

                                    <div class="tab-pane" id="eyes">
                                      <p class="lead">Ojos</p>
                                      <div class="col-md-12 col-sm-12 col-xs-12 form-group item">
                                        <select class="image-picker" name="eyes-type" id="eyes-type" required>
                                          <option data-img-src="/images/body_parts/eye_type/e_equilibradosSanos.png" value="ES">Equilibrados y Sanos</option>
                                          <option data-img-src="/images/body_parts/eye_type/e_sanpakuYin.png" value="SYING">Sanpaku Ying</option>
                                          <option data-img-src="/images/body_parts/eye_type/e_sanpakuYang.png" value="SYANG">Sanpaku Yang</option>
                                          <option data-img-src="/images/body_parts/eye_type/e_saltones.png" value="SALT">Saltones</option>
                                          <option data-img-src="/images/body_parts/eye_type/e_parisLondres.png" value="PL">París y Londres</option>
                                          <option data-img-src="/images/body_parts/eye_type/e_bizcos.png" value="BI">Bizcos</option>
                                        </select>
                                      </div>
                                    </div>

                                    <div class="tab-pane" id="nose">
                                      <p class="lead">Nariz</p>
                                      <div class="col-md-12 col-sm-12 col-xs-12 form-group item">
                                        <select class="image-picker" name="nose-type" id="nose-type" required>
                                          <option data-img-src="/images/body_parts/nose_type/n_puntiaguda.png"value="PD">Puntiaguda y Delgada</option>
                                          <option data-img-src="/images/body_parts/nose_type/n_dilatada.png"value="DPR">Dilatada con Puntos Rojos</option>
                                          <!-- <option data-img-src="/images/body_parts/tongue_type/1_rounded.png"value="2">Otra</option> -->
                                        </select>
                                      </div>
                                    </div>

                                    <div class="tab-pane" id="lips">
                                      <p class="lead">Labios</p>
                                      <div class="col-md-12 col-sm-12 col-xs-12 form-group item">
                                        <select class="image-picker" name="lips-type" id="lips-type" required>
                                          <option data-img-src="/images/body_parts/lips_type/l_sanos.png" value="SU">Sanos y Uniformemente desarrollados</option>
                                          <option data-img-src="/images/body_parts/lips_type/l_superiorGrueso.png" value="SGID">Superior Grueso, Inferior Delgado</option>
                                          <option data-img-src="/images/body_parts/lips_type/l_inferiorGrueso.png" value="SDIG">Superior Delgado, Inferior Grueso</option>
                                          <option data-img-src="/images/body_parts/lips_type/l_mismoGrosor.png" value="MG">Del mismo Grosor</option>
                                        </select>
                                      </div>
                                    </div>

                                    <div class="tab-pane" id="nail">
                                      <p class="lead">Uñas</p>
                                      <div class="col-md-12 col-sm-12 col-xs-12 form-group item">
                                        <select class="image-picker" name="nails-type" id="nails-type" required>
                                          <option data-img-src="/images/body_parts/nails_type/n_triangular.png" value="TCYING">Triangular - Constitución Ying</option>
                                          <option data-img-src="/images/body_parts/nails_type/n_redonda.png" value="RCYANG">Redonda - Constitución Yang</option>
                                          <option data-img-src="/images/body_parts/nails_type/n_estriasVerticales.png" value="EVH">Estrias Verticales - Hepáticos</option>
                                          <option data-img-src="/images/body_parts/nails_type/n_cuadrada.png" value="HTA">Cuadrada - HTA</option>
                                          <option data-img-src="/images/body_parts/nails_type/n_curvada.png" value="CPR">Curvada- Pulmonar, Respiratorio</option>
                                          <option data-img-src="/images/body_parts/nails_type/n_acucarachada.png" value="AATAB">Acucarachada - Anemia Tensión Arterial Baja</option>
                                          <option data-img-src="/images/body_parts/nails_type/n_protuberanciaTransversal.png" value="PTL">Protuberancia Transversal - Lombrices</option>
                                          <option data-img-src="/images/body_parts/nails_type/u_grietas.png" value="GDMD">Grietas - Desnutrición Mala Digestión</option>
                                        </select>
                                      </div>
                                    </div>

                                  </div>

                                </div>

                              </div>

                            </div>
                          </div>
                        </div>
                        
                        <div id="step-6">
                          <h2 class="StepTitle">Signos y Tratamiento</h2>

                          <form class="form-horizontal form-label-left form-data" novalidate>
                            <div class="row">
                              <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel" id="medicine">

                                  
                                    <h2 class="StepTitle">Signos</h2>

                                    <div class="col-md-4 col-sm-6 col-xs-12 form-group item">
                                      <small class="info-field">Peso (Kg)</small>
                                      <input type="text" class="form-control has-feedback-left" placeholder="Peso" name="weight-patient" id="weight-patient" required>
                                      <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-4 col-sm-6 col-xs-12 form-group item">
                                      <small class="info-field">Talla</small>
                                      <input type="text" class="form-control has-feedback-left" placeholder="Talla" name="size-patient" required>
                                      <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-4 col-sm-6 col-xs-12 form-group item">
                                      <small class="info-field">Indice Masa Corporal</small>
                                      <input type="text" class="form-control has-feedback-left" placeholder="IMC" name="imc-patient" id="imc-patient" required>
                                      <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-4 col-sm-6 col-xs-12 form-group item">
                                      <small class="info-field">Tensión Arterial</small>
                                      <input type="text" class="form-control has-feedback-left" placeholder="Tensión" name="blood-pressure" id="blood-pressure" required>
                                      <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-4 col-sm-6 col-xs-12 form-group item">
                                      <small class="info-field">Frecuencia Cardiaca</small>
                                      <input type="text" class="form-control has-feedback-left" placeholder="Frecuencia Cardiaca" name="heart-rate" id="heart-rate" required>
                                      <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-4 col-sm-6 col-xs-12 form-group item">
                                      <small class="info-field">Frecuencia Respiratoria</small>
                                      <input type="text" class="form-control has-feedback-left" placeholder="Frecuencia Respiratoria" name="breathing-frequency" id="breathing-frequency" required>
                                      <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                    </div>

                                    <h2 class="col-md-12 StepTitle">Tratamiento</h2>
                                    <div class="col-md-12 col-sm-12 col-xs-12 item">
                                      <small class="info-field has-feedback-left">Descripción Tratamiento</small>
                                      <textarea class="form-control" rows="5" name="treatment-description" id="treatment-description" required></textarea>
                                    </div>

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

                                    <div class="pull-right manage-rows-form">
                                      <button type="button" class="btn btn-round btn-danger rm-field-medicine"><i class="fa fa-chevron-circle-up"></i> Eliminar Medicina</button>
                                      <button type="button" class="btn btn-round btn-warning add-field-medicine"><i class="fa fa-chevron-circle-down"></i> Agregar Medicina</button>
                                    </div>

                              </div>
                            </div>
                          </form>
                        </div>
                        
                      {!! Form::close() !!}
                    </div>
                    <!-- End SmartWizard Content -->

                  </div>
                </div>
              </div>
            </div>
          </div>
</div>

@endsection