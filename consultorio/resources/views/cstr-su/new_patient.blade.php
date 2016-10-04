@extends('layouts.su_main_layout')

@section('content')
<div class="right_col" role="main">
	<div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Wizards</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Wizards <small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
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
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <!-- Smart Wizard -->
                    <p>This is a basic form wizard example that inherits the colors from the selected scheme.</p>
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              Step 1<br />
                                              <small>Datos Básicos</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Step 2<br />
                                              <small>Inspección General</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                Step 3<br />
                                <small>Alimentación</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-4">
                            <span class="step_no">4</span>
                            <span class="step_descr">Step 4<br />
                                <small>Habitos y Antecedentes</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-5">
                            <span class="step_no">5</span>
                            <span class="step_descr">Step 5 </br>
                              <small>Diahnostico</small>
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
                      <div id="step-1">
                        <h2 class="StepTitle">Step 2 Content</h2>						
                        <form class="form-horizontal form-label-left">
                        	<div class="row">
                        		<div class="col-md-12 col-sm-12 col-xs-12">
                        			<div class="x_panel">
	                        			<div class="col-md-6 col-sm-6 col-xs-12 form-group">
	                        				<small class="info-field">Nombres</small>
	                        				<input type="text" class="form-control has-feedback-left" placeholder="Nombres">
                                  <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
	                        			</div>

	                        			<div class="col-md-6 col-sm-6 col-xs-12 form-group">
	                        				<small class="info-field">Apellidos</small>
	                        				<input type="text" class="form-control has-feedback-left" placeholder="Apellidos">
                                  <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
	                        			</div>

	                        			<div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
	                        				<small class="info-field"> Fecha Nacimiento </small>
	                        				<input type="text" class="form-control has-feedback-left" placeholder="Fecha Nacimiento">
                                  <span class="fa fa-calendar form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
	                        			</div>

	                        			<div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">
						                    <small class="info-field">Edad</small>
						                    <input type="text" class="form-control has-feedback-left" placeholder="Edad">
                                <span class="fa fa-sort-numeric-desc form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                       					</div>

                       					<div  class="  col-md-2 col-sm-2 col-xs-12 form-group ">
                       						<small class="info-field has-feedback-left">Tipo Documento</small>
					                        <select class="select2_single form-control has-feedback-left" tabindex="0" >
						                        <option value="C.C">C.C</option>
						                        <option value="T.I">T.I</option>
						                        <option value="C.E">C.E</option>
						                        <option value="PASAPORTE">PASAPORTE</option>
					                        </select>
                                  <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                      					</div>

                        				<div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">                         
                     						<small class="info-field">No. Documento</small>
                     						<input type="text" class="form-control has-feedback-left" placeholder="No. Documento">
                        					<span class="fa fa-slack form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                      					</div>

                      					<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                      						<small class="info-field">Direcćión</small>
					                        <input type="text" class="form-control has-feedback-left" placeholder="Dirección">
					                        <span class="fa fa-home form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                      					</div>

                        				<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        					<small class="info-field">Telefono</small>
					                        <input type="text" class="form-control has-feedback-left" placeholder="Telefono">
					                        <span class="fa fa-phone-square form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                      					</div>
                  
                    					<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    						  <small class="info-field">Correo Electronico</small>
                        					<input type="text" class="form-control has-feedback-left" placeholder="Correo Electrónico">
                        					<span class="fa fa-envelope form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                      					</div>

                      					<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                  <small class="info-field">Entidad de Salud</small>
                        					<input type="text" class="form-control has-feedback-left" placeholder="Eps">
                        					<span class="fa fa-ambulance form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                      					</div>

            										<div class=" fa fa-tint col-md-2 col-sm-2 col-xs-12 form-group ">
            											<small class="info-field">Grupo sanguineo</small>
            											<select class=" select2_single form-control has-feedback-left" tabindex="0" >
            												<option value="A">A</option>
            												<option value="O">O</option>
            												<option value="B">B</option>
            												<option value="AB">AB</option>
            											</select>
                                  <span class="fa fa-plus-square form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
            										</div>

            										<div class=" fa fa-male col-md-2 col-sm-2 col-xs-12 form-group "> 
            											<small class="info-field">Género</small>
            											<select class=" select2_single form-control has-feedback-left" tabindex="0" >
            												<option value="Femenino">Femenino</option>
            												<option value="Masculino">Masculino</option>
                                  </select>
                                  <span class="fa fa-transgender form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
            										</div>


            										<div class=" fa fa-group col-md-2 col-sm-2 col-xs-12 form-group ">
            											<small class="info-field">Nº Hijos</small>
            											<select class=" select2_single form-control has-feedback-left" tabindex="0" >
            												<option value="0">0</option>
            												<option value="1">1</option>
            											</select>
                                  <span class="fa fa-users form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
            										</div>

            										<div class=" fa fa-male col-md-3 col-sm-3 col-xs-12 form-group ">
            											<small class="info-field">Estado Civil</small>
            											<select class=" select2_single form-control has-feedback-left" tabindex="0" >
            												<option value="Soltero">Soltero</option>
            												<option value="Casado">Casado</option>
            											</select>
                                  <span class="fa fa-blind form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
            										</div>

            										<div class=" fa fa-graduation-cap col-md-3 col-sm-3 col-xs-12 form-group ">
            											<small class="info-field">Nivel Educativo</small>
            											<select class=" select2_single form-control has-feedback-left" tabindex="0" >
            												<option value="Bachiller">Bachiller</option>
            												<option value="Profesional">Profesional</option>
            											</select>
                                  <span class="fa fa-book form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
            										</div>

                        			</div>
                        		</div>
                        	</div>
                        </form>

                      </div>
                      <div id="step-2">
                        <!-- <h2 class="StepTitle">Step 2 Content</h2>
                        <p>
                          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                          eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p> -->

                        <h2 class="StepTitle">Metas, intentos y motivación</h2>           
                        <form class="form-horizontal form-label-left">
                          <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="x_panel">
                                <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                                  <small class="info-field">Meta (Kg)</small>
                                  <input type="text" class="form-control has-feedback-left" placeholder="Meta">
                                  <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                                  <small class="info-field">Peso Mínimo (Kg)</small>
                                  <input type="text" class="form-control has-feedback-left" placeholder="Peso Mínimo">
                                  <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                                  <small class="info-field">Peso Máximo (Kg) </small>
                                  <input type="text" class="form-control has-feedback-left" placeholder="Peso Máximo">
                                  <span class="fa fa-calendar form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div  class="  col-md-2 col-sm-2 col-xs-12 form-group ">
                                  <small class="info-field has-feedback-left">Cuanto tiempo Hace</small>
                                  <select class="select2_single form-control has-feedback-left" tabindex="0" >
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                  </select>
                                  <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div  class="  col-md-2 col-sm-2 col-xs-12 form-group ">
                                  <small class="info-field has-feedback-left">Días, meses o años</small>
                                  <select class="select2_single form-control has-feedback-left" tabindex="0" >
                                    <option value="D">Días</option>
                                    <option value="M">Meses</option>
                                    <option value="A">Años</option>
                                  </select>
                                  <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div  class="col-md-2 col-sm-2 col-xs-12 form-group ">
                                  <small class="info-field has-feedback-left">Cuanto subio (Kg)</small>
                                  <select class="select2_single form-control has-feedback-left" tabindex="0" >
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                  </select>
                                  <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div  class="col-md-2 col-sm-2 col-xs-12 form-group ">
                                  <small class="info-field has-feedback-left">Sentimiento</small>
                                  <select class="select2_single form-control has-feedback-left" tabindex="0" >
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                  </select>
                                  <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                                <small class="info-field">Observaciones</small>
                                <input type="text" class="form-control has-feedback-left" placeholder="Observaciones">
                                <span class="fa fa-sort-numeric-desc form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                         
                                <small class="info-field">Tratamientos Iniciados</small>
                                <input type="text" class="form-control has-feedback-left" placeholder="Tratamientos Iniciados">
                                  <span class="fa fa-slack form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                  <small class="info-field">Motivación</small>
                                  <input type="text" class="form-control has-feedback-left" placeholder="Motivación">
                                  <span class="fa fa-home form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <h2 class="StepTitle">Inspección General</h2> 
                                <div class="row">
                                  <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="x_panel">

                                      <div  class="col-md-3 col-sm-3 col-xs-12 form-group ">
                                        <small class="info-field has-feedback-left">Posición y Actitud</small>
                                        <select class="select2_single form-control has-feedback-left" tabindex="0" >
                                          <option value="YING">YING</option>
                                          <option value="YANG">YANG</option>
                                        </select>
                                        <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                      </div>

                                      <div  class="col-md-3 col-sm-3 col-xs-12 form-group ">
                                        <small class="info-field has-feedback-left">Integridad</small>
                                        <select class="select2_single form-control has-feedback-left" tabindex="0" >
                                          <option value="C">Completo</option>
                                          <option value="I">Incompleto</option>
                                        </select>
                                        <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                      </div>

                                      <div  class="col-md-3 col-sm-3 col-xs-12 form-group ">
                                        <small class="info-field has-feedback-left">Movimientos</small>
                                        <select class="select2_single form-control has-feedback-left" tabindex="0" >
                                          <option value="N">Normales</option>
                                          <option value="A">Anormales</option>
                                        </select>
                                        <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                      </div>

                                      <div class="col-md-3 col-sm-3 col-xs-12 form-group has-feedback">
                                        <small class="info-field">Otros</small>
                                        <input type="text" class="form-control has-feedback-left" placeholder="Otros">
                                        <span class="fa fa-home form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                      </div>

                                    </div>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>
                        </form>

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
                        <form class="form-horizontal form-label-left">
                          <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="x_panel">

                                <div class="col-md-8 col-sm-8 col-xs-12 form-group">
                                  <small class="info-field">Desayuno</small>
                                  <input type="text" class="form-control has-feedback-left" placeholder="Meta">
                                  <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div  class="col-md-4 col-sm-4 col-xs-12 form-group ">
                                  <small class="info-field has-feedback-left">Lugar</small>
                                  <select class="select2_single form-control has-feedback-left" tabindex="0" >
                                    <option value="C">Casa</option>
                                    <option value="O">Oficina</option>
                                    <option value="CA">Calle</option>
                                  </select>
                                  <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-8 col-sm-8 col-xs-12 form-group">
                                  <small class="info-field">Media Mañana</small>
                                  <input type="text" class="form-control has-feedback-left" placeholder="Meta">
                                  <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div  class="col-md-4 col-sm-4 col-xs-12 form-group ">
                                  <small class="info-field has-feedback-left">&nbsp;</small>
                                  <select class="select2_single form-control has-feedback-left" tabindex="0" >
                                    <option value="C">Casa</option>
                                    <option value="O">Oficina</option>
                                    <option value="CA">Calle</option>
                                  </select>
                                  <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-8 col-sm-8 col-xs-12 form-group">
                                  <small class="info-field">Media Mañana</small>
                                  <input type="text" class="form-control has-feedback-left" placeholder="Meta">
                                  <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div  class="col-md-4 col-sm-4 col-xs-12 form-group ">
                                  <small class="info-field has-feedback-left">&nbsp;</small>
                                  <select class="select2_single form-control has-feedback-left" tabindex="0" >
                                    <option value="C">Casa</option>
                                    <option value="O">Oficina</option>
                                    <option value="CA">Calle</option>
                                  </select>
                                  <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-8 col-sm-8 col-xs-12 form-group">
                                  <small class="info-field">Media Mañana</small>
                                  <input type="text" class="form-control has-feedback-left" placeholder="Meta">
                                  <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div  class="col-md-4 col-sm-4 col-xs-12 form-group ">
                                  <small class="info-field has-feedback-left">&nbsp;</small>
                                  <select class="select2_single form-control has-feedback-left" tabindex="0" >
                                    <option value="C">Casa</option>
                                    <option value="O">Oficina</option>
                                    <option value="CA">Calle</option>
                                  </select>
                                  <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-8 col-sm-8 col-xs-12 form-group">
                                  <small class="info-field">Media Mañana</small>
                                  <input type="text" class="form-control has-feedback-left" placeholder="Meta">
                                  <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div  class="col-md-4 col-sm-4 col-xs-12 form-group ">
                                  <small class="info-field has-feedback-left">&nbsp;</small>
                                  <select class="select2_single form-control has-feedback-left" tabindex="0" >
                                    <option value="C">Casa</option>
                                    <option value="O">Oficina</option>
                                    <option value="CA">Calle</option>
                                  </select>
                                  <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-8 col-sm-8 col-xs-12 form-group">
                                  <small class="info-field">Media Mañana</small>
                                  <input type="text" class="form-control has-feedback-left" placeholder="Meta">
                                  <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12 form-group ">
                                  <small class="info-field has-feedback-left">&nbsp;</small>
                                  <select class="select2_single form-control has-feedback-left" tabindex="0" >
                                    <option value="C">Casa</option>
                                    <option value="O">Oficina</option>
                                    <option value="CA">Calle</option>
                                  </select>
                                  <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                              </div>
                            </div>
                          </div>
                        </form>
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
                        <form class="form-horizontal form-label-left">
                          <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="x_panel">
                                <h2 class="StepTitle">Habitos</h2>

                                <div class="col-md-3 col-sm-3 col-xs-12 form-group ">
                                  <small class="info-field has-feedback-left">Tipo Habito</small>
                                  <select class="select2_single form-control has-feedback-left" tabindex="0" >
                                    <option value="C">Casa</option>
                                    <option value="O">Oficina</option>
                                    <option value="CA">Calle</option>
                                  </select>
                                  <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-3 col-sm-3 col-xs-12 form-group ">
                                  <small class="info-field has-feedback-left">Frecuencia Semanal</small>
                                  <select class="select2_single form-control has-feedback-left" tabindex="0" >
                                    <option value="C">Casa</option>
                                    <option value="O">Oficina</option>
                                    <option value="CA">Calle</option>
                                  </select>
                                  <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-3 col-sm-3 col-xs-12 form-group ">
                                  <small class="info-field has-feedback-left">Cantidad / Tiempo</small>
                                  <select class="select2_single form-control has-feedback-left" tabindex="0" >
                                    <option value="C">Casa</option>
                                    <option value="O">Oficina</option>
                                    <option value="CA">Calle</option>
                                  </select>
                                  <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-3 col-sm-3 col-xs-12 form-group ">
                                  <small class="info-field has-feedback-left">Descripción</small>
                                  <select class="select2_single form-control has-feedback-left" tabindex="0" >
                                    <option value="C">Casa</option>
                                    <option value="O">Oficina</option>
                                    <option value="CA">Calle</option>
                                  </select>
                                  <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-3 col-sm-3 col-xs-12 form-group ">
                                  <small class="info-field has-feedback-left">Tipo Habito</small>
                                  <select class="select2_single form-control has-feedback-left" tabindex="0" >
                                    <option value="C">Casa</option>
                                    <option value="O">Oficina</option>
                                    <option value="CA">Calle</option>
                                  </select>
                                  <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-3 col-sm-3 col-xs-12 form-group ">
                                  <small class="info-field has-feedback-left">Frecuencia Semanal</small>
                                  <select class="select2_single form-control has-feedback-left" tabindex="0" >
                                    <option value="C">Casa</option>
                                    <option value="O">Oficina</option>
                                    <option value="CA">Calle</option>
                                  </select>
                                  <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-3 col-sm-3 col-xs-12 form-group ">
                                  <small class="info-field has-feedback-left">Cantidad / Tiempo</small>
                                  <select class="select2_single form-control has-feedback-left" tabindex="0" >
                                    <option value="C">Casa</option>
                                    <option value="O">Oficina</option>
                                    <option value="CA">Calle</option>
                                  </select>
                                  <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-3 col-sm-3 col-xs-12 form-group ">
                                  <small class="info-field has-feedback-left">Descripción</small>
                                  <select class="select2_single form-control has-feedback-left" tabindex="0" >
                                    <option value="C">Casa</option>
                                    <option value="O">Oficina</option>
                                    <option value="CA">Calle</option>
                                  </select>
                                  <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-3 col-sm-3 col-xs-12 form-group ">
                                  <small class="info-field has-feedback-left">Tipo Habito</small>
                                  <select class="select2_single form-control has-feedback-left" tabindex="0" >
                                    <option value="C">Casa</option>
                                    <option value="O">Oficina</option>
                                    <option value="CA">Calle</option>
                                  </select>
                                  <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-3 col-sm-3 col-xs-12 form-group ">
                                  <small class="info-field has-feedback-left">Frecuencia Semanal</small>
                                  <select class="select2_single form-control has-feedback-left" tabindex="0" >
                                    <option value="C">Casa</option>
                                    <option value="O">Oficina</option>
                                    <option value="CA">Calle</option>
                                  </select>
                                  <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-3 col-sm-3 col-xs-12 form-group ">
                                  <small class="info-field has-feedback-left">Cantidad / Tiempo</small>
                                  <select class="select2_single form-control has-feedback-left" tabindex="0" >
                                    <option value="C">Casa</option>
                                    <option value="O">Oficina</option>
                                    <option value="CA">Calle</option>
                                  </select>
                                  <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-3 col-sm-3 col-xs-12 form-group ">
                                  <small class="info-field has-feedback-left">Descripción</small>
                                  <select class="select2_single form-control has-feedback-left" tabindex="0" >
                                    <option value="C">Casa</option>
                                    <option value="O">Oficina</option>
                                    <option value="CA">Calle</option>
                                  </select>
                                  <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-3 col-sm-3 col-xs-12 form-group ">
                                  <small class="info-field has-feedback-left">Tipo Habito</small>
                                  <select class="select2_single form-control has-feedback-left" tabindex="0" >
                                    <option value="C">Casa</option>
                                    <option value="O">Oficina</option>
                                    <option value="CA">Calle</option>
                                  </select>
                                  <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-3 col-sm-3 col-xs-12 form-group ">
                                  <small class="info-field has-feedback-left">Frecuencia Semanal</small>
                                  <select class="select2_single form-control has-feedback-left" tabindex="0" >
                                    <option value="C">Casa</option>
                                    <option value="O">Oficina</option>
                                    <option value="CA">Calle</option>
                                  </select>
                                  <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-3 col-sm-3 col-xs-12 form-group ">
                                  <small class="info-field has-feedback-left">Cantidad / Tiempo</small>
                                  <select class="select2_single form-control has-feedback-left" tabindex="0" >
                                    <option value="C">Casa</option>
                                    <option value="O">Oficina</option>
                                    <option value="CA">Calle</option>
                                  </select>
                                  <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-3 col-sm-3 col-xs-12 form-group ">
                                  <small class="info-field has-feedback-left">Descripción</small>
                                  <select class="select2_single form-control has-feedback-left" tabindex="0" >
                                    <option value="C">Casa</option>
                                    <option value="O">Oficina</option>
                                    <option value="CA">Calle</option>
                                  </select>
                                  <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <h2 class="StepTitle">Planifica</h2>
                                <div class="col-md-4 col-sm-4 col-xs-12 form-group ">
                                  <small class="info-field has-feedback-left">Metodo</small>
                                  <select class="select2_single form-control has-feedback-left" tabindex="0" >
                                    <option value="P">Preservativo</option>
                                    <option value="PA">Pastas</option>
                                    <option value="O">Otros</option>
                                  </select>
                                  <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-8 col-sm-8 col-xs-12 form-group">
                                  <small class="info-field">Descripción Método</small>
                                  <input type="text" class="form-control has-feedback-left" placeholder="Meta">
                                  <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <h2 class="StepTitle">Menstruación</h2>
                                <div class="col-md-4 col-sm-4 col-xs-12 form-group ">
                                  <small class="info-field has-feedback-left">Tipo</small>
                                  <select class="select2_single form-control has-feedback-left" tabindex="0" >
                                    <option value="R">Regular</option>
                                    <option value="I">Irregular</option>
                                  </select>
                                  <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12 form-group ">
                                  <small class="info-field has-feedback-left">Frecuencia</small>
                                  <select class="select2_single form-control has-feedback-left" tabindex="0" >
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                  </select>
                                  <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12 form-group ">
                                  <small class="info-field has-feedback-left">Duración Días</small>
                                  <select class="select2_single form-control has-feedback-left" tabindex="0" >
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                  </select>
                                  <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                              </div>
                            </div>
                          </div>
                        </form>
                      </div>

                      <div id="step-5">
                        <h2 class="StepTitle">Diagnostico</h2>
                        <form class="form-horizontal form-label-left">
                          <div class="row">

                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <h2 class="StepTitle">Miembro Superior Izquierdo (MSI)</h2>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <h2 class="StepTitle">Miembro Superior Derecho (MSD)</h2>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                              <small class="info-field">Intestino delgado y corazon</small>
                              <input type="text" class="form-control has-feedback-left" placeholder="Intestino delgado y corazon">
                              <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                              <small class="info-field">Pulmón - Intestino Grueso P-ID </small>
                              <input type="text" class="form-control has-feedback-left" placeholder="Pulmón - Intestino Grueso">
                              <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                              <small class="info-field">Higado - Vesícula Biliar H-VB</small>
                              <input type="text" class="form-control has-feedback-left" placeholder="Higado - Vesícula Biliar">
                              <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                              <small class="info-field">Estómago - Vaso E-V</small>
                              <input type="text" class="form-control has-feedback-left" placeholder="Estómago - Vaso">
                              <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                              <small class="info-field">Riñon agua- Vejiga RA-V</small>
                              <input type="text" class="form-control has-feedback-left" placeholder="Riñon agua- Vejiga">
                              <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                              <small class="info-field">Riñon fuego - Triple calentador- Pericardio RF -TC- PC</small>
                              <input type="text" class="form-control has-feedback-left" placeholder="Riñon fuego - Triple calentador- Pericardio">
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

                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                      <select class="image-picker">
                                        <option data-img-src="/images/body_parts/face_type/1_rectangle.png"value="0">Cuadrada</option>
                                        <option data-img-src="/images/body_parts/face_type/1_rectangle.png"value="1">Ovalada</option>
                                        <option data-img-src="/images/body_parts/face_type/1_rectangle.png"value="2">Circular</option>
                                        <option data-img-src="/images/body_parts/face_type/1_rectangle.png"value="3">Hexagonal</option>
                                        <option data-img-src="/images/body_parts/face_type/1_rectangle.png"value="4">Otro</option>
                                      </select>
                                    </div>

                                  </div>

                                  <div class="tab-pane" id="tongue">
                                    <p class="lead">Lengua</p>
                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                      <select class="image-picker">
                                        <option data-img-src="/images/body_parts/tongue_type/1_rounded.png"value="0">Redondeada</option>
                                        <option data-img-src="/images/body_parts/tongue_type/1_rounded.png"value="1">Puntuda</option>
                                        <option data-img-src="/images/body_parts/tongue_type/1_rounded.png"value="2">Otra</option>
                                      </select>
                                    </div>
                                  </div>

                                  <div class="tab-pane" id="eyes">
                                    <p class="lead">Ojos</p>
                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                      <select class="image-picker">
                                        <option data-img-src="/images/body_parts/tongue_type/1_rounded.png"value="0">Redondeada</option>
                                        <option data-img-src="/images/body_parts/tongue_type/1_rounded.png"value="1">Puntuda</option>
                                        <option data-img-src="/images/body_parts/tongue_type/1_rounded.png"value="2">Otra</option>
                                      </select>
                                    </div>
                                  </div>

                                  <div class="tab-pane" id="nose">
                                    <p class="lead">Nariz</p>
                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                      <select class="image-picker">
                                        <option data-img-src="/images/body_parts/tongue_type/1_rounded.png"value="0">Redondeada</option>
                                        <option data-img-src="/images/body_parts/tongue_type/1_rounded.png"value="1">Puntuda</option>
                                        <option data-img-src="/images/body_parts/tongue_type/1_rounded.png"value="2">Otra</option>
                                      </select>
                                    </div>
                                  </div>

                                  <div class="tab-pane" id="lips">
                                    <p class="lead">Labios</p>
                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                      <select class="image-picker">
                                        <option data-img-src="/images/body_parts/tongue_type/1_rounded.png"value="0">Redondeada</option>
                                        <option data-img-src="/images/body_parts/tongue_type/1_rounded.png"value="1">Puntuda</option>
                                        <option data-img-src="/images/body_parts/tongue_type/1_rounded.png"value="2">Otra</option>
                                      </select>
                                    </div>
                                  </div>

                                  <div class="tab-pane" id="nail">
                                    <p class="lead">Uñas</p>
                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                      <select class="image-picker">
                                        <option data-img-src="/images/body_parts/tongue_type/1_rounded.png"value="0">Redondeada</option>
                                        <option data-img-src="/images/body_parts/tongue_type/1_rounded.png"value="1">Puntuda</option>
                                        <option data-img-src="/images/body_parts/tongue_type/1_rounded.png"value="2">Otra</option>
                                      </select>
                                    </div>
                                  </div>

                                </div>

                              </div>

                            </div>

                          </div>
                        </form>
                      </div>

                    </div>
                    <!-- End SmartWizard Content -->

                  </div>
                </div>
              </div>
            </div>
          </div>
</div>
@endsection