@extends('layouts.su_main_layout')

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Inventario <!-- <small>Click to add/edit events</small> --></h3>
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
                    <h2>Busqueda Inventario</h2>&nbsp;
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
                          <label class="control-label">Referencia</label>
                          <div>
                            <input type="text" id="reference-inventory" name="reference-inventory" class="form-control">
                          </div>
                        </div>

                        <div class="col-md-5">
                          <label class="control-label">Elemento</label>
                          <div>
                            <input type="text" id="name-inventory" name="name-inventory" class="form-control">
                          </div>
                        </div>

                        <div class="col-md-5 col-md-offset-1">
                          <label class="control-label">Tipo</label>
                          <div>
                            <select class="select2_single form-control" tabindex="0" name="type-inventory" id="type-inventory">
                              <option selected="true" disabled="disabled">Escoger Tipo</option>
                              @foreach ($types as $productType)
                                <option value="{{ $productType->id_type }}">{{ $productType->name_type }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>

                        <div class="col-md-5">
                          <label class="control-label" for="first-name">Estado</label>
                          <div>
                            <select class="select2_single form-control" tabindex="0" name="status-inventory" id="status-inventory" name="status-inventory">
                              <option selected="true" disabled="disabled">Escoger Estado</option>
                              <option value="E">Excelente</option>
                              <option value="B">Bueno</option>
                              <option value="R">Regular</option>
                              <option value="M">Mal</option>
                              <option value="P">Pesimo</option>
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
                    <h2>Inventario de Equipos y Mobiliario <!-- <small>Sessions</small> --></h2>
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
                    <a href="{{ action('ProductController@create') }}" class="pull-right btn btn-success">
                      <i class="fa fa-plus-circle" aria-hidden="true"></i> <strong>Añadir Nuevo Producto</strong>
                    </a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table inventory-list">
                        <thead>
                          <tr class="headings" style="text-transform:uppercase;">
                            <th class="text-center">Referencia</th>
                            <th class="text-center">Elemento</th>
                            <th class="text-center">Tipo</th>
                            <th class="text-center">Garantia</th>
                            <th class="text-center">Estado</th>
                            <th width="28%" class="text-center">Opciones</th>
                          </tr>
                        </thead>
                        <tbody style="text-align: center;">
                          @foreach($products as $product)
                          <tr>
                            <td>{{ $product->reference }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->product_type->name_type }}</td>
                            <td>{{ $product->warranty }}</td>
                            <td>
                              {{ $product->getStatus() }}
                            </td>
                            <td>
                              <a href="#" type="button" class="btn btn-success "><span class="fa fa-eye"></span>  Ver</a>
                              <a href="{{ action('ProductController@edit',$product->id_product) }}" type="button" class="btn btn-warning "><span class="fa fa-pencil"></span> Editar</a>
                              <a href="#" type="button" class="btn btn-danger "><span class="fa fa-trash"></span> Borrar</a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                    <a href="#" class="btn btn-primary pull-right"><span class="fa fa-print"></span> <strong>Imprimir Lista de Inventario</strong></a>

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
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">New Calendar Entry</h4>
          </div>
          <div class="modal-body">
            <div id="testmodal" style="padding: 5px 20px;">
              <form id="antoform" class="form-horizontal calender" role="form">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Title</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="title" name="title">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Description</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" style="height:55px;" id="descr" name="descr"></textarea>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary antosubmit">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <div id="CalenderModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel2">Edit Calendar Entry</h4>
          </div>
          <div class="modal-body">

            <div id="testmodal2" style="padding: 5px 20px;">
              <form id="antoform2" class="form-horizontal calender" role="form">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Title</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="title2" name="title2">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Description</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" style="height:55px;" id="descr2" name="descr"></textarea>
                  </div>
                </div>

              </form>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary antosubmit2">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    <div id="fc_create" data-toggle="modal" data-target="#CalenderModalNew"></div>
    <div id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit"></div>
    <!-- /calendar modal -->
@endsection