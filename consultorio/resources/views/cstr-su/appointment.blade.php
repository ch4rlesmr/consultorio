@extends('layouts.su_main_layout')

@section('content')
<div class="right_col" role="main">
            <div class="page-title">
              <div class="title_left">
                <h3>Citas <!-- <small>Click to add/edit events</small> --></h3>
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
                    <h2>Busqueda por Cita</h2>&nbsp;
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
                          <label class="control-label">No. Identificación</label>
                          <div>
                            <input type="text" id="name-inventory" name="name-inventory" class="form-control">
                          </div>
                        </div>



                        <div class="col-md-5">
                          <label class="control-label" for="first-name">Estado Cita</label>
                          <div>
                            <select class="select2_single form-control" tabindex="0" name="status-inventory" id="status-inventory" name="status-inventory">
                              <option selected="true" disabled="disabled">Escoger Estado</option>
                              <option value="ACTV">Confirmada</option>
                              <option value="CANC">Cancelada</option>
                              <option value="DONE">Cumplida</option>
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
                    <h2>Detalle Búsqueda Cita <!-- <small>Sessions</small> --></h2>
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
                   <!-- <a href="" class="pull-right btn btn-success">
                      <i class="fa fa-plus-circle" aria-hidden="true"></i> <strong>Añadir Nuevo Producto</strong>
                    </a>
                  -->
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table inventory-list">
                        <thead>
                          <tr class="headings" style="text-transform:uppercase;">
                            <th class="text-center">Fecha</th>
                            <th class="text-center">Nombre Paciente</th>
                            <th class="text-center">Nº Identificación</th>
                            <th class="text-center">Tipo Cita</th>
                            <th class="text-center">Estado</th>
                            <th width="28%" class="text-center">Opciones</th>
                          </tr>
                        </thead>
                        <tbody style="text-align: center;">
                          @foreach ($meetings as $meeting)
                            <tr>
                              <td>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $meeting->start_meeting)->toDayDateTimeString() }}</td>
                              <td><a href="{{ action( 'PatientController@show', $meeting->patient->id ) }}" class="btn btn-default btn-xs"><strong>{{ $meeting->patient->name . ' ' . $meeting->patient->last_name }}</strong></a></td>
                              <td>{{ $meeting->patient->id_number }}</td>
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
                             <!-- <a href="" type="button" class="btn btn-warning "><span class="fa fa-pencil"></span> Editar</a> -->
                              
                              </td>
                            </tr>
                          @endforeach
                          
                        </tbody>
                      </table>
                    </div>

                    <div class="col-md-6">
                      
                    </div>
                    <div class="col-md-6">
                      <a href="" class="btn btn-primary pull-right"><span class="fa fa-file-excel-o"></span> <strong>Descargar Listado de Citas</strong></a>
                      
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection

@section('popup')
  
@endsection