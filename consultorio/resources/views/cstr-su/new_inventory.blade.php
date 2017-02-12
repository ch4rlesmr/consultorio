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
                    @if ( isset( $product ) )
                        {{ Form::open( array( 'action' => array('ProductController@update', $product->id), 'method' => 'PUT', 'class' => 'form-horizontal form-label-left inventory', 'novalidate' => 'novalidate' ) ) }}
                    @else
                          {{ Form::open( array( 'action' => 'ProductController@store', 'method' => 'POST', 'class' => 'form-horizontal form-label-left inventory', 'novalidate' => 'novalidate' ) ) }}
                    @endif
                          
                          <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="x_panel">
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group item">
                                  <small class="info-field">Referencia</small>
                                  <input data-validate-length-range="2" data-validate-words="1" type="text" class="form-control has-feedback-left" placeholder="Serial" name="reference-inventory" id="reference-inventory" value="{{ isset( $product ) ? $product->reference : '' }}" required>
                                  <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group item">
                                  <small class="info-field">Nombre Inventario</small>
                                  <input data-validate-length-range="2" data-validate-words="1" type="text" class="form-control has-feedback-left" placeholder="Inventario" name="name-inventory" id="name-inventory" value="{{ isset( $product ) ? $product->name : '' }}" required>
                                  <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-4 col-sm-6 col-xs-12 form-group item">
                                  <small class="info-field">Garantia</small>
                                  <input type="text" class="form-control has-feedback-left" placeholder="Inventario" name="warranty-inventory" id="warranty-inventory" value="{{ isset( $product ) ? $product->warranty : '' }}">
                                  <span class="fa fa-file-text form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div  class="col-md-4 col-sm-2 col-xs-12 form-group item">
                                  <small class="info-field has-feedback-left">Tipo Inventario</small>
                                  <select class="select2_single form-control has-feedback-left" tabindex="0" name="inventory-type" id="inventory-type" required>
                                    @foreach ($types as $productType)
                                      <option value="{{ $productType->id }}"
                                        @if ( isset($product) )
                                          @if ( $productType->id === $product->product_id )
                                            {{ 'selected' }}
                                          @endif
                                        @endif
                                        >{{ $productType->name_type }}</option>
                                    @endforeach
                                  </select>
                                  <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div  class="col-md-4 col-sm-2 col-xs-12 form-group item">
                                  <small class="info-field has-feedback-left">Estado del Elemento</small>
                                  <select class="select2_single form-control has-feedback-left" tabindex="0" name="status-inventory" id="status-inventory" required>
                                    <option value="E" @if ( isset($product) )  @if ( $product->status === 'E' ) {{ 'selected' }} @endif @endif>Excelente</option>
                                    <option value="B" @if ( isset($product) ) @if ( $product->status === 'B' ) {{ 'selected' }} @endif @endif>Bueno</option>
                                    <option value="R" @if ( isset($product) ) @if ( $product->status === 'R' ) {{ 'selected' }} @endif @endif>Regular</option>
                                    <option value="M" @if ( isset($product) ) @if ( $product->status === 'M' ) {{ 'selected' }} @endif @endif>Mal</option>
                                    <option value="P" @if ( isset($product) ) @if ( $product->status === 'P' ) {{ 'selected' }} @endif @endif>Pesimo</option>
                                  </select>
                                  <span class="fa fa-list-alt form-control-feedback form-control-feedback-input left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-12 col-sm-6 col-xs-12 form-group item">
                                  <small class="info-field">Descripción del Elemento de inventario </small>
                                  <textarea class="form-control" rows="5" placeholder="Descripción" name="description-inventory">{{ isset( $product ) ? $product->observation : '' }}</textarea>
                                </div>

                                <div class="form-group pull-right">
                                  <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>&nbsp; &nbsp; <strong>Guardar Elemento</strong></button>
                                </div>

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
@endsection

