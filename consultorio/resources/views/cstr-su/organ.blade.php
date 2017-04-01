@extends('layouts.su_main_layout')

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Órganos <!-- <small>Click to add/edit events</small> --></h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Órganos y sus Referencias <!-- <small>Sessions</small> --></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <!-- <div id='calendar'></div> -->
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table">
                        <thead>
                          <tr class="headings" style="text-transform:uppercase;">
                            <th class="text-center">Órgano</th>
                            <th class="text-center">Elemento</th>
                            <th class="text-center">Viscera</th>
                            <th class="text-center">Tejido</th>
                            <th class="text-center">Nutre</th>
                            <th class="text-center">Agujero</th>
                            <th class="text-center">Sentido</th>
                            <th class="text-center">Liquido</th>
                            <th class="text-center">Color</th>
                            <th class="text-center">Sabor</th>
                            <th class="text-center">Olor</th>
                            <th class="text-center">Sentimiento</th>
                            <th class="text-center">Estación</th>
                            <th class="text-center">Clima</th>
                          </tr>
                        </thead>
                        <tbody style="text-align: center;">
                          <!-- empezar aqui -->
                          <tr>
                            <td>Higado</td>
                            <td>Madera</td>
                            <td>VesÍcula Biliar</td>
                            <td>Tendón</td>
                            <td>Uñas y Tendones</td>
                            <td>Ojo</td>
                            <td>Vista</td>
                            <td>Lágrima</td>
                            <td>Verde</td>
                            <td>Ácido</td>
                            <td>Rancio</td>
                            <td>Ira</td>
                            <td>Primavera</td>
                            <td>Viento</td>
                           </tr>
                            <tr>
                             <td>Corazón</td>
                                <td> Fuego </td>
                                <td> Intestino Delgado </td> 
                                <td> Vasos Sanguíneos</td>
                                <td> Cara y Pulso</td>
                                <td> Lengua </td>
                                <td> Lenguaje </td>
                                <td> Sudor</td>
                                <td> Rojo </td>
                                <td> Amargo </td>
                                <td> Quemado </td>
                                <td> Alegría  </td>
                                <td> Verano </td>
                                <td> Calor</td>                    
                              </tr>
                                <tr>
                                <td>Bazo</td>
                                <td> Tierra </td>
                                <td> Estómago </td> 
                                <td> Músculo</td>
                                <td> Músculo y Labios</td>
                                <td> Boca </td>
                                <td> Gusto </td>
                                <td> Saliva</td>
                                <td> Amarillo </td>
                                <td> Dulce </td>
                                <td> Perfumado </td>
                                <td> Pensamiento  </td>
                                <td> Verano Largo Canícula </td>
                                <td> Humedad</td>                               
                              </tr>
                                <tr>
                                <td>Pulmón</td>
                                <td> Metal </td>
                                <td> Intestino Grueso </td> 
                                <td> Piel</td>
                                <td> Piel y Vellosidad</td>
                                <td> Naríz </td>
                                <td> Olfato </td>
                                <td> Moco</td>
                                <td> Blanco </td>
                                <td> Picante </td>
                                <td> Carne Podrida </td>
                                <td> Melancolía </td>
                                <td> Otoño </td>
                                <td> Seco</td>                               
                              </tr>
                              <tr>
                                <td>Riñón</td>
                                <td> Agua </td>
                                <td> Vejiga </td> 
                                <td> Hueso y Médula</td>
                                <td> Oido</td>
                                <td> Uretra,Ano y oído </td>
                                <td> Audición </td>
                                <td> Humedad de la lengua</td>
                                <td> Negro </td>
                                <td> Salado </td>
                                <td> Pútrido </td>
                                <td> Miedo </td>
                                <td> Invierno </td>
                                <td> Frio</td>                               
                              </tr>                   




                          <!-- Terminar aqui -->
                        </tbody>
                      </table>
                    </div>

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