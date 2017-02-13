@extends('layouts.su_main_layout')

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Restricciones <!-- <small>Click to add/edit events</small> --></h3>
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
                    <h2>Restricciones Tipo de Sangre <!-- <small>Sessions</small> --></h2>
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

                    <div class="col-xs-2">
                      <ul class="nav nav-tabs tabs-left">
                        <li class="active"><a href="#bloodA" data-toggle="tab">A</a></li>
                        <li><a href="#bloodO" data-toggle="tab">O</a></li>
                        <li><a href="#bloodB" data-toggle="tab">B</a></li>
                        <li><a href="#bloodAB" data-toggle="tab">AB</a></li>
                      </ul>
                    </div>

                    <div class="col-xs-10">

                      <div class="tab-content">

                        <div class="tab-pane active" id="bloodA">
                          <h2>Tipo de sangre: <strong>A</strong></h2>
                          <div class="table-responsive">
                            <table class="table table-striped jambo_table">
                              <thead>
                                <tr class="headings" style="text-transform:uppercase;">
                                  <th class="text-center" width="5%">#</th>
                                  <th class="text-center">Grupo de Alimentos</th>
                                  <th class="text-center">Permitidos</th>
                                  <th class="text-center">No Permitidos</th>
                                  
                                </tr>
                              </thead>
                              <tbody style="text-align: center;">
                                <tr>
                                  <td>1</td>
                                  <td>
                                    <p>Carnes, Pescados y Mariscos</p>
                                  </td>
                                  <td>
                                    <p>Carne de res, Cordero, Ternera, Pollo, Pavo, Conejo, Atún, Robalo, Salmon, Sardina, Trucha, Merlusa, Venado, Camaron, Almejas</p>
                                  </td>
                                  <td>
                                    <p>Cerdo,  Tocino, Bagre, Salmon ahumado, Caviar, Pulmo</p>
                                  </td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                  <td>
                                    <p>Huevos y Lacteos</p>
                                  </td>
                                  <td>
                                    <p>Huevos 4 por semana, Leche de soya, Deslactosada, Queso descremado, Mozarella, Maduros con paipa, Fibra, Cabra, Oveja y soya, Yogurt fitness y griego, Helado dietetico</p>
                                  </td>
                                  <td>
                                    <p>Leche entera,  Queso crema, Yogurt, Queso suizo, Doble crema, Campesino, Helado, Sueros</p>
                                  </td>
                                </tr>
                                <tr>
                                  <td>3</td>
                                  <td>
                                    <p>Aceites y Grasas</p>
                                  </td>
                                  <td>
                                    <p>Aceite de oliva, Girasol, Canola, Linasa</p>
                                  </td>
                                  <td>
                                    <p>Maiz, Mani, Algodón, Manteca</p>
                                  </td>
                                </tr>
                                <tr>
                                  <td>4</td>
                                  <td>
                                    <p>Nueces y Semillas</p>
                                  </td>
                                  <td>
                                    <p>Almendras, Avellanas, Semilla de girasol</p>
                                  </td>
                                  <td>
                                    <p>Mani, Nueces, Pistachos</p>
                                  </td>
                                </tr>
                                <tr>
                                  <td>5</td>
                                  <td>
                                    <p>Leguminosas</p>
                                  </td>
                                  <td>
                                    <p>Arvejas, Garbanzos</p>
                                  </td>
                                  <td>
                                    <p>Lenteja, Frijol, Habas</p>
                                  </td>
                                </tr>
                                <tr>
                                  <td>6</td>
                                  <td>
                                    <p>Cereales y Panes</p>
                                  </td>
                                  <td>
                                    <p>Arroz blanco, Cebada, Pan de centeno, Arabe, Quinoa, Soya, Granola dietetica</p>
                                  </td>
                                  <td>
                                    <p>Harina de trigo, Maiz, Avena, Harina, Integrales</p>
                                  </td>
                                </tr>
                                <tr>
                                  <td>7</td>
                                  <td>
                                    <p>Tuberculos</p>
                                  </td>
                                  <td>
                                    <p>Ñame, Yuca, Platano</p>
                                  </td>
                                  <td>
                                    <p>Papa</p>
                                  </td>
                                </tr>
                                <tr>
                                  <td>8</td>
                                  <td>
                                    <p>Vegetales</p>
                                  </td>
                                  <td>
                                    <p>Acelga, Ajo, Brocoli, Calabaza, Cebolla, Perejil, Lechuga, Rabano, Pimenton, Tomate, Pepino, Zanahoria, Ahuyama, Calabacin, Cilantro, Apio, Espinaca, Champiñon, Berros, Nopal, Alcachofas, Esparragos, Abichuelas</p>
                                  </td>
                                  <td>
                                    <p>Berenjena, Coliflor, Repollo, Aguacate, Maiz, Col, Brotes de alfalfa, Aceitunas</p>
                                  </td>
                                </tr>
                                <tr>
                                  <td>9</td>
                                  <td>
                                    <p>Frutas</p>
                                  </td>
                                  <td>
                                    <p>Kiwi, Higos, Uvas, Durazno, Carambolo, Ciruela, Piña, Guayaba, Papaya, Patilla, Arandanos, Granadilla, Cereza, Mango, Pera verde, Lima, Toronja, Guanabana, Feijoa, Manzana verde</p>
                                  </td>
                                  <td>
                                    <p>Naranja, Mora, Fresa, Banano, Mandarina</p>
                                  </td>
                                </tr>
                                <tr>
                                  <td>10</td>
                                  <td>
                                    <p>Especias y Condimentos</p>
                                  </td>
                                  <td>
                                    <p>Ajo, Azafran, Clavo, Cominos, Pimentón, Mostaza, Salsa inglesa, Mayonesa, Salsa de soya</p>
                                  </td>
                                  <td>
                                    <p>Canela, Nuez moscada, Pimienta, Vinagre, Salsa de tomate</p>
                                  </td>
                                </tr>
                                <tr>
                                  <td>11</td>
                                  <td>
                                    <p>Infuciones</p>
                                  </td>
                                  <td>
                                    <p>Manzanilla, Valeriana, Tomillo, Menta, Perejil, Diente de león, Jengibre</p>
                                  </td>
                                  <td>
                                    <p>Ruibardo, Alfalfa, Aloe</p>
                                  </td>
                                </tr>
                                <tr>
                                  <td>12</td>
                                  <td>
                                    <p>Bebidas</p>
                                  </td>
                                  <td>
                                    <p>Agua mineral, Jugo de apio, Tomate, Papaya, Cereza, Zanahoria, Piña, Arandano, Uva, Pepino, Leche deslactosada, Té verde</p>
                                  </td>
                                  <td>
                                    <p>Café, Té, Gaseosa, Cerveza, Jugos de manzana, Coles y Naranja, Aguardiente</p>
                                  </td>
                                </tr>
                                <tr>
                                  <td>13</td>
                                  <td>
                                    <p>Otros</p>
                                  </td>
                                  <td>
                                    <p>Stevia, Fructuosa</p>
                                  </td>
                                  <td>
                                    <p>Encurtidos, Dulces y Vinagres</p>
                                  </td>
                                </tr>
                                <tr>
                                  <td>14</td>
                                  <td>
                                    <p>Vitaminas</p>
                                  </td>
                                  <td>
                                    <p>Stevia, FructuosaK : Higado, Yemas de huevo, Verduras Calcio: Sardina, Brocoli, SalmonYodo: Algas negras, Pescado y Mariscos Algas marinas, Sal yodada.</p>
                                  </td>
                                  <td>
                                    <p></p>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>

                        <div class="tab-pane" id="bloodO">
                          <h2>Tipo de sangre: <strong>O</strong></h2>
                          <table class="table table-striped jambo_table">
                            <thead>
                              <tr class="headings" style="text-transform:uppercase;">
                                <th class="text-center" width="5%">#</th>
                                <th class="text-center">Grupo de Alimentos</th>
                                <th class="text-center">Permitidos</th>
                                <th class="text-center">No Permitidos</th>
                                
                              </tr>
                            </thead>
                            <tbody style="text-align: center;">
                              <tr>
                                <td>1</td>
                                <td>
                                  <p>Carnes, Pescados y Mariscos</p>
                                </td>
                                <td>
                                  <p>Carne de res, Cordero, Ternera, Pollo, Pavo, Conejo, Atún, Robalo, Salmon, Sardina, Trucha, Merlusa, Venado, Camaron, Almejas</p>
                                </td>
                                <td>
                                  <p>Cerdo,  Tocino, Bagre, Salmon ahumado, Caviar, Pulmo</p>
                                </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>
                                  <p>Huevos y Lacteos</p>
                                </td>
                                <td>
                                  <p>Huevos 4 por semana, Leche de soya, Deslactosada, Queso descremado, Mozarella, Maduros con paipa, Fibra, Cabra, Oveja y soya, Yogurt fitness y griego, Helado dietetico</p>
                                </td>
                                <td>
                                  <p>Leche entera,  Queso crema, Yogurt, Queso suizo, Doble crema, Campesino, Helado, Sueros</p>
                                </td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>
                                  <p>Aceites y Grasas</p>
                                </td>
                                <td>
                                  <p>Aceite de oliva, Girasol, Canola, Linasa</p>
                                </td>
                                <td>
                                  <p>Maiz, Mani, Algodón, Manteca</p>
                                </td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td>
                                  <p>Nueces y Semillas</p>
                                </td>
                                <td>
                                  <p>Almendras, Avellanas, Semilla de girasol</p>
                                </td>
                                <td>
                                  <p>Mani, Nueces, Pistachos</p>
                                </td>
                              </tr>
                              <tr>
                                <td>5</td>
                                <td>
                                  <p>Leguminosas</p>
                                </td>
                                <td>
                                  <p>Arvejas, Garbanzos</p>
                                </td>
                                <td>
                                  <p>Lenteja, Frijol, Habas</p>
                                </td>
                              </tr>
                              <tr>
                                <td>6</td>
                                <td>
                                  <p>Cereales y Panes</p>
                                </td>
                                <td>
                                  <p>Arroz blanco, Cebada, Pan de centeno, Arabe, Quinoa, Soya, Granola dietetica</p>
                                </td>
                                <td>
                                  <p>Harina de trigo, Maiz, Avena, Harina, Integrales</p>
                                </td>
                              </tr>
                              <tr>
                                <td>7</td>
                                <td>
                                  <p>Tuberculos</p>
                                </td>
                                <td>
                                  <p>Ñame, Yuca, Platano</p>
                                </td>
                                <td>
                                  <p>Papa</p>
                                </td>
                              </tr>
                              <tr>
                                <td>8</td>
                                <td>
                                  <p>Vegetales</p>
                                </td>
                                <td>
                                  <p>Acelga, Ajo, Brocoli, Calabaza, Cebolla, Perejil, Lechuga, Rabano, Pimenton, Tomate, Pepino, Zanahoria, Ahuyama, Calabacin, Cilantro, Apio, Espinaca, Champiñon, Berros, Nopal, Alcachofas, Esparragos, Abichuelas</p>
                                </td>
                                <td>
                                  <p>Berenjena, Coliflor, Repollo, Aguacate, Maiz, Col, Brotes de alfalfa, Aceitunas</p>
                                </td>
                              </tr>
                              <tr>
                                <td>9</td>
                                <td>
                                  <p>Frutas</p>
                                </td>
                                <td>
                                  <p>Kiwi, Higos, Uvas, Durazno, Carambolo, Ciruela, Piña, Guayaba, Papaya, Patilla, Arandanos, Granadilla, Cereza, Mango, Pera verde, Lima, Toronja, Guanabana, Feijoa, Manzana verde</p>
                                </td>
                                <td>
                                  <p>Naranja, Mora, Fresa, Banano, Mandarina</p>
                                </td>
                              </tr>
                              <tr>
                                <td>10</td>
                                <td>
                                  <p>Especias y Condimentos</p>
                                </td>
                                <td>
                                  <p>Ajo, Azafran, Clavo, Cominos, Pimentón, Mostaza, Salsa inglesa, Mayonesa, Salsa de soya</p>
                                </td>
                                <td>
                                  <p>Canela, Nuez moscada, Pimienta, Vinagre, Salsa de tomate</p>
                                </td>
                              </tr>
                              <tr>
                                <td>11</td>
                                <td>
                                  <p>Infuciones</p>
                                </td>
                                <td>
                                  <p>Manzanilla, Valeriana, Tomillo, Menta, Perejil, Diente de león, Jengibre</p>
                                </td>
                                <td>
                                  <p>Ruibardo, Alfalfa, Aloe</p>
                                </td>
                              </tr>
                              <tr>
                                <td>12</td>
                                <td>
                                  <p>Bebidas</p>
                                </td>
                                <td>
                                  <p>Agua mineral, Jugo de apio, Tomate, Papaya, Cereza, Zanahoria, Piña, Arandano, Uva, Pepino, Leche deslactosada, Té verde</p>
                                </td>
                                <td>
                                  <p>Café, Té, Gaseosa, Cerveza, Jugos de manzana, Coles y Naranja, Aguardiente</p>
                                </td>
                              </tr>
                              <tr>
                                <td>13</td>
                                <td>
                                  <p>Otros</p>
                                </td>
                                <td>
                                  <p>Stevia, Fructuosa</p>
                                </td>
                                <td>
                                  <p>Encurtidos, Dulces y Vinagres</p>
                                </td>
                              </tr>
                              <tr>
                                <td>14</td>
                                <td>
                                  <p>Vitaminas</p>
                                </td>
                                <td>
                                  <p>Stevia, FructuosaK : Higado, Yemas de huevo, Verduras Calcio: Sardina, Brocoli, SalmonYodo: Algas negras, Pescado y Mariscos Algas marinas, Sal yodada.</p>
                                </td>
                                <td>
                                  <p></p>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>

                        <div class="tab-pane" id="bloodB">
                          <h2>Tipo de sangre: <strong>B</strong></h2>
                          <table class="table table-striped jambo_table">
                            <thead>
                              <tr class="headings" style="text-transform:uppercase;">
                                <th class="text-center" width="5%">#</th>
                                <th class="text-center">Grupo de Alimentos</th>
                                <th class="text-center">Permitidos</th>
                                <th class="text-center">No Permitidos</th>
                                
                              </tr>
                            </thead>
                            <tbody style="text-align: center;">
                              <tr>
                                <td>1</td>
                                <td>
                                  <p>Carnes, Pescados y Mariscos</p>
                                </td>
                                <td>
                                  <p>Carne de res, Cordero, Ternera, Pollo, Pavo, Conejo, Atún, Robalo, Salmon, Sardina, Trucha, Merlusa, Venado, Camaron, Almejas</p>
                                </td>
                                <td>
                                  <p>Cerdo,  Tocino, Bagre, Salmon ahumado, Caviar, Pulmo</p>
                                </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>
                                  <p>Huevos y Lacteos</p>
                                </td>
                                <td>
                                  <p>Huevos 4 por semana, Leche de soya, Deslactosada, Queso descremado, Mozarella, Maduros con paipa, Fibra, Cabra, Oveja y soya, Yogurt fitness y griego, Helado dietetico</p>
                                </td>
                                <td>
                                  <p>Leche entera,  Queso crema, Yogurt, Queso suizo, Doble crema, Campesino, Helado, Sueros</p>
                                </td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>
                                  <p>Aceites y Grasas</p>
                                </td>
                                <td>
                                  <p>Aceite de oliva, Girasol, Canola, Linasa</p>
                                </td>
                                <td>
                                  <p>Maiz, Mani, Algodón, Manteca</p>
                                </td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td>
                                  <p>Nueces y Semillas</p>
                                </td>
                                <td>
                                  <p>Almendras, Avellanas, Semilla de girasol</p>
                                </td>
                                <td>
                                  <p>Mani, Nueces, Pistachos</p>
                                </td>
                              </tr>
                              <tr>
                                <td>5</td>
                                <td>
                                  <p>Leguminosas</p>
                                </td>
                                <td>
                                  <p>Arvejas, Garbanzos</p>
                                </td>
                                <td>
                                  <p>Lenteja, Frijol, Habas</p>
                                </td>
                              </tr>
                              <tr>
                                <td>6</td>
                                <td>
                                  <p>Cereales y Panes</p>
                                </td>
                                <td>
                                  <p>Arroz blanco, Cebada, Pan de centeno, Arabe, Quinoa, Soya, Granola dietetica</p>
                                </td>
                                <td>
                                  <p>Harina de trigo, Maiz, Avena, Harina, Integrales</p>
                                </td>
                              </tr>
                              <tr>
                                <td>7</td>
                                <td>
                                  <p>Tuberculos</p>
                                </td>
                                <td>
                                  <p>Ñame, Yuca, Platano</p>
                                </td>
                                <td>
                                  <p>Papa</p>
                                </td>
                              </tr>
                              <tr>
                                <td>8</td>
                                <td>
                                  <p>Vegetales</p>
                                </td>
                                <td>
                                  <p>Acelga, Ajo, Brocoli, Calabaza, Cebolla, Perejil, Lechuga, Rabano, Pimenton, Tomate, Pepino, Zanahoria, Ahuyama, Calabacin, Cilantro, Apio, Espinaca, Champiñon, Berros, Nopal, Alcachofas, Esparragos, Abichuelas</p>
                                </td>
                                <td>
                                  <p>Berenjena, Coliflor, Repollo, Aguacate, Maiz, Col, Brotes de alfalfa, Aceitunas</p>
                                </td>
                              </tr>
                              <tr>
                                <td>9</td>
                                <td>
                                  <p>Frutas</p>
                                </td>
                                <td>
                                  <p>Kiwi, Higos, Uvas, Durazno, Carambolo, Ciruela, Piña, Guayaba, Papaya, Patilla, Arandanos, Granadilla, Cereza, Mango, Pera verde, Lima, Toronja, Guanabana, Feijoa, Manzana verde</p>
                                </td>
                                <td>
                                  <p>Naranja, Mora, Fresa, Banano, Mandarina</p>
                                </td>
                              </tr>
                              <tr>
                                <td>10</td>
                                <td>
                                  <p>Especias y Condimentos</p>
                                </td>
                                <td>
                                  <p>Ajo, Azafran, Clavo, Cominos, Pimentón, Mostaza, Salsa inglesa, Mayonesa, Salsa de soya</p>
                                </td>
                                <td>
                                  <p>Canela, Nuez moscada, Pimienta, Vinagre, Salsa de tomate</p>
                                </td>
                              </tr>
                              <tr>
                                <td>11</td>
                                <td>
                                  <p>Infuciones</p>
                                </td>
                                <td>
                                  <p>Manzanilla, Valeriana, Tomillo, Menta, Perejil, Diente de león, Jengibre</p>
                                </td>
                                <td>
                                  <p>Ruibardo, Alfalfa, Aloe</p>
                                </td>
                              </tr>
                              <tr>
                                <td>12</td>
                                <td>
                                  <p>Bebidas</p>
                                </td>
                                <td>
                                  <p>Agua mineral, Jugo de apio, Tomate, Papaya, Cereza, Zanahoria, Piña, Arandano, Uva, Pepino, Leche deslactosada, Té verde</p>
                                </td>
                                <td>
                                  <p>Café, Té, Gaseosa, Cerveza, Jugos de manzana, Coles y Naranja, Aguardiente</p>
                                </td>
                              </tr>
                              <tr>
                                <td>13</td>
                                <td>
                                  <p>Otros</p>
                                </td>
                                <td>
                                  <p>Stevia, Fructuosa</p>
                                </td>
                                <td>
                                  <p>Encurtidos, Dulces y Vinagres</p>
                                </td>
                              </tr>
                              <tr>
                                <td>14</td>
                                <td>
                                  <p>Vitaminas</p>
                                </td>
                                <td>
                                  <p>Stevia, FructuosaK : Higado, Yemas de huevo, Verduras Calcio: Sardina, Brocoli, SalmonYodo: Algas negras, Pescado y Mariscos Algas marinas, Sal yodada.</p>
                                </td>
                                <td>
                                  <p></p>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>

                        <div class="tab-pane" id="bloodAB">
                          <h2>Tipo de sangre: <strong>AB</strong></h2>
                          <table class="table table-striped jambo_table">
                            <thead>
                              <tr class="headings" style="text-transform:uppercase;">
                                <th class="text-center" width="5%">#</th>
                                <th class="text-center">Grupo de Alimentos</th>
                                <th class="text-center">Permitidos</th>
                                <th class="text-center">No Permitidos</th>
                                
                              </tr>
                            </thead>
                            <tbody style="text-align: center;">
                              <tr>
                                <td>1</td>
                                <td>
                                  <p>Carnes, Pescados y Mariscos</p>
                                </td>
                                <td>
                                  <p>Carne de res, Cordero, Ternera, Pollo, Pavo, Conejo, Atún, Robalo, Salmon, Sardina, Trucha, Merlusa, Venado, Camaron, Almejas</p>
                                </td>
                                <td>
                                  <p>Cerdo,  Tocino, Bagre, Salmon ahumado, Caviar, Pulmo</p>
                                </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>
                                  <p>Huevos y Lacteos</p>
                                </td>
                                <td>
                                  <p>Huevos 4 por semana, Leche de soya, Deslactosada, Queso descremado, Mozarella, Maduros con paipa, Fibra, Cabra, Oveja y soya, Yogurt fitness y griego, Helado dietetico</p>
                                </td>
                                <td>
                                  <p>Leche entera,  Queso crema, Yogurt, Queso suizo, Doble crema, Campesino, Helado, Sueros</p>
                                </td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>
                                  <p>Aceites y Grasas</p>
                                </td>
                                <td>
                                  <p>Aceite de oliva, Girasol, Canola, Linasa</p>
                                </td>
                                <td>
                                  <p>Maiz, Mani, Algodón, Manteca</p>
                                </td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td>
                                  <p>Nueces y Semillas</p>
                                </td>
                                <td>
                                  <p>Almendras, Avellanas, Semilla de girasol</p>
                                </td>
                                <td>
                                  <p>Mani, Nueces, Pistachos</p>
                                </td>
                              </tr>
                              <tr>
                                <td>5</td>
                                <td>
                                  <p>Leguminosas</p>
                                </td>
                                <td>
                                  <p>Arvejas, Garbanzos</p>
                                </td>
                                <td>
                                  <p>Lenteja, Frijol, Habas</p>
                                </td>
                              </tr>
                              <tr>
                                <td>6</td>
                                <td>
                                  <p>Cereales y Panes</p>
                                </td>
                                <td>
                                  <p>Arroz blanco, Cebada, Pan de centeno, Arabe, Quinoa, Soya, Granola dietetica</p>
                                </td>
                                <td>
                                  <p>Harina de trigo, Maiz, Avena, Harina, Integrales</p>
                                </td>
                              </tr>
                              <tr>
                                <td>7</td>
                                <td>
                                  <p>Tuberculos</p>
                                </td>
                                <td>
                                  <p>Ñame, Yuca, Platano</p>
                                </td>
                                <td>
                                  <p>Papa</p>
                                </td>
                              </tr>
                              <tr>
                                <td>8</td>
                                <td>
                                  <p>Vegetales</p>
                                </td>
                                <td>
                                  <p>Acelga, Ajo, Brocoli, Calabaza, Cebolla, Perejil, Lechuga, Rabano, Pimenton, Tomate, Pepino, Zanahoria, Ahuyama, Calabacin, Cilantro, Apio, Espinaca, Champiñon, Berros, Nopal, Alcachofas, Esparragos, Abichuelas</p>
                                </td>
                                <td>
                                  <p>Berenjena, Coliflor, Repollo, Aguacate, Maiz, Col, Brotes de alfalfa, Aceitunas</p>
                                </td>
                              </tr>
                              <tr>
                                <td>9</td>
                                <td>
                                  <p>Frutas</p>
                                </td>
                                <td>
                                  <p>Kiwi, Higos, Uvas, Durazno, Carambolo, Ciruela, Piña, Guayaba, Papaya, Patilla, Arandanos, Granadilla, Cereza, Mango, Pera verde, Lima, Toronja, Guanabana, Feijoa, Manzana verde</p>
                                </td>
                                <td>
                                  <p>Naranja, Mora, Fresa, Banano, Mandarina</p>
                                </td>
                              </tr>
                              <tr>
                                <td>10</td>
                                <td>
                                  <p>Especias y Condimentos</p>
                                </td>
                                <td>
                                  <p>Ajo, Azafran, Clavo, Cominos, Pimentón, Mostaza, Salsa inglesa, Mayonesa, Salsa de soya</p>
                                </td>
                                <td>
                                  <p>Canela, Nuez moscada, Pimienta, Vinagre, Salsa de tomate</p>
                                </td>
                              </tr>
                              <tr>
                                <td>11</td>
                                <td>
                                  <p>Infuciones</p>
                                </td>
                                <td>
                                  <p>Manzanilla, Valeriana, Tomillo, Menta, Perejil, Diente de león, Jengibre</p>
                                </td>
                                <td>
                                  <p>Ruibardo, Alfalfa, Aloe</p>
                                </td>
                              </tr>
                              <tr>
                                <td>12</td>
                                <td>
                                  <p>Bebidas</p>
                                </td>
                                <td>
                                  <p>Agua mineral, Jugo de apio, Tomate, Papaya, Cereza, Zanahoria, Piña, Arandano, Uva, Pepino, Leche deslactosada, Té verde</p>
                                </td>
                                <td>
                                  <p>Café, Té, Gaseosa, Cerveza, Jugos de manzana, Coles y Naranja, Aguardiente</p>
                                </td>
                              </tr>
                              <tr>
                                <td>13</td>
                                <td>
                                  <p>Otros</p>
                                </td>
                                <td>
                                  <p>Stevia, Fructuosa</p>
                                </td>
                                <td>
                                  <p>Encurtidos, Dulces y Vinagres</p>
                                </td>
                              </tr>
                              <tr>
                                <td>14</td>
                                <td>
                                  <p>Vitaminas</p>
                                </td>
                                <td>
                                  <p>Stevia, FructuosaK : Higado, Yemas de huevo, Verduras Calcio: Sardina, Brocoli, SalmonYodo: Algas negras, Pescado y Mariscos Algas marinas, Sal yodada.</p>
                                </td>
                                <td>
                                  <p></p>
                                </td>
                              </tr>
                            </tbody>
                          </table>
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

