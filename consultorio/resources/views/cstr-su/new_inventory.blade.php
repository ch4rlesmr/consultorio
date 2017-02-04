@extends('layouts.su_main_layout')

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>{{ $message }} <!-- <small>Click to add/edit events</small> --></h3>
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

                    <form method="POST" action="{{ action('ProductController@store') }}" class="form-horizontal form-label-left inventory" novalidate>
                          {!! csrf_field() !!}
                          <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="x_panel">
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group item">
                                  <small class="info-field">Referencia</small>
                                  <input data-validate-length-range="2" data-validate-words="1" type="text" class="form-control has-feedback-left" placeholder="Serial" name="reference-inventory" id="reference-inventory" required>
                                  <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group item">
                                  <small class="info-field">Nombre Inventario</small>
                                  <input data-validate-length-range="2" data-validate-words="1" type="text" class="form-control has-feedback-left" placeholder="Inventario" name="name-inventory" id="name-inventory" required>
                                  <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-4 col-sm-6 col-xs-12 form-group item">
                                  <small class="info-field">Garantia</small>
                                  <input data-validate-length-range="2" data-validate-words="1" type="text" class="form-control has-feedback-left" placeholder="Inventario" name="warranty-inventory" id="warranty-inventory" required>
                                  <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div  class="col-md-4 col-sm-2 col-xs-12 form-group item">
                                  <small class="info-field has-feedback-left">Tipo Inventario</small>
                                  <select class="select2_single form-control has-feedback-left" tabindex="0" name="inventory-type" id="inventory-type" required>
                                    @foreach ($types as $productType)
                                      <option value="{{ $productType->id_type }}">{{ $productType->name_type }}</option>
                                    @endforeach
                                  </select>
                                  <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div  class="col-md-4 col-sm-2 col-xs-12 form-group item">
                                  <small class="info-field has-feedback-left">Estado del Elemento</small>
                                  <select class="select2_single form-control has-feedback-left" tabindex="0" name="status-inventory" id="status-inventory" required>
                                    <option value="E">Excelente</option>
                                    <option value="B">Bueno</option>
                                    <option value="R">Regular</option>
                                    <option value="M">Mal</option>
                                    <option value="P">Pesimo</option>
                                  </select>
                                  <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-12 col-sm-6 col-xs-12 form-group item">
                                  <small class="info-field">Descripción del Elemento de inventario </small>
                                  <textarea class="form-control" rows="5" placeholder="Descripción" name="description-inventory"></textarea>
                                </div>

                                <div class="form-group pull-right">
                                  <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>&nbsp; &nbsp; <strong>Guardar Elemento</strong></button>
                                </div>

                              </div>
                            </div>
                          </div>
                        </form>
                     
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection

