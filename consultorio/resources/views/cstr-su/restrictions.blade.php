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

                    <div class="col-xs-9">

                      <div class="tab-content">

                        <div class="tab-pane active" id="bloodA">
                          <h2>Tipo de sangre: <strong>A</strong></h2>
                          <p>Goodbye, Walter.  I don't owe you a damn thing.  All of this -- falling apart like this -- is on YOU.  We had a good thing, you stupid son of a bitch!  We had Fring.  We had a lab.  We had everything we needed and it all ran like clockwork.  You could've shut your mouth, cooked, and made as much money as you ever needed.  It was perfect.  But no!  You just had to blow it up.  YOU!  And your pride and your ego.  You just had to be the man.  If you'd done your job, known your place, we'd all be fine right now. </p>
                          <p>Any other drugs in the house? Think hard; your freedom depends on it. What about guns, you got any guns in the house? Here's your story - You woke up, you found her, that's all you know. Say it. Say it, please. I woke up I found her that's all I know. Say it. I woke up I found her, that's all I know. Again. Again. Again. </p>
                          <p>Once you call it in, the people who show up with be with the office of medical investigations. it's primarily who you'll talk to. Police officers may arrive they may not, depends on how busy a morning they're having. Typically ODs are not a high priority call. There's nothing here to incriminate you, so I'd be amazed if you got placed under arrest. However, if you do, you say nothing. You tell them you just want your lawyer. And you call Saul Goodman.</p>
                          <p>And do I need to state the obvious? I was not here. You put on a long sleeve shirt and cover those track marks on your arm. Count down from twenty, and then you dial. Hang tough, you're in the home stretch.</p>
                        </div>

                        <div class="tab-pane" id="bloodO">
                          <h2>Tipo de sangre: <strong>O</strong></h2>
                          <p>Goodbye, Walter.  I don't owe you a damn thing.  All of this -- falling apart like this -- is on YOU.  We had a good thing, you stupid son of a bitch!  We had Fring.  We had a lab.  We had everything we needed and it all ran like clockwork.  You could've shut your mouth, cooked, and made as much money as you ever needed.  It was perfect.  But no!  You just had to blow it up.  YOU!  And your pride and your ego.  You just had to be the man.  If you'd done your job, known your place, we'd all be fine right now. </p>
                          <p>Any other drugs in the house? Think hard; your freedom depends on it. What about guns, you got any guns in the house? Here's your story - You woke up, you found her, that's all you know. Say it. Say it, please. I woke up I found her that's all I know. Say it. I woke up I found her, that's all I know. Again. Again. Again. </p>
                          <p>Once you call it in, the people who show up with be with the office of medical investigations. it's primarily who you'll talk to. Police officers may arrive they may not, depends on how busy a morning they're having. Typically ODs are not a high priority call. There's nothing here to incriminate you, so I'd be amazed if you got placed under arrest. However, if you do, you say nothing. You tell them you just want your lawyer. And you call Saul Goodman.</p>
                          <p>And do I need to state the obvious? I was not here. You put on a long sleeve shirt and cover those track marks on your arm. Count down from twenty, and then you dial. Hang tough, you're in the home stretch.</p>
                        </div>

                        <div class="tab-pane" id="bloodB">
                          <h2>Tipo de sangre: <strong>B</strong></h2>
                          <p>Goodbye, Walter.  I don't owe you a damn thing.  All of this -- falling apart like this -- is on YOU.  We had a good thing, you stupid son of a bitch!  We had Fring.  We had a lab.  We had everything we needed and it all ran like clockwork.  You could've shut your mouth, cooked, and made as much money as you ever needed.  It was perfect.  But no!  You just had to blow it up.  YOU!  And your pride and your ego.  You just had to be the man.  If you'd done your job, known your place, we'd all be fine right now. </p>
                          <p>Any other drugs in the house? Think hard; your freedom depends on it. What about guns, you got any guns in the house? Here's your story - You woke up, you found her, that's all you know. Say it. Say it, please. I woke up I found her that's all I know. Say it. I woke up I found her, that's all I know. Again. Again. Again. </p>
                          <p>Once you call it in, the people who show up with be with the office of medical investigations. it's primarily who you'll talk to. Police officers may arrive they may not, depends on how busy a morning they're having. Typically ODs are not a high priority call. There's nothing here to incriminate you, so I'd be amazed if you got placed under arrest. However, if you do, you say nothing. You tell them you just want your lawyer. And you call Saul Goodman.</p>
                          <p>And do I need to state the obvious? I was not here. You put on a long sleeve shirt and cover those track marks on your arm. Count down from twenty, and then you dial. Hang tough, you're in the home stretch.</p>
                        </div>

                        <div class="tab-pane" id="bloodAB">
                          <h2>Tipo de sangre: <strong>AB</strong></h2>
                          <p>Goodbye, Walter.  I don't owe you a damn thing.  All of this -- falling apart like this -- is on YOU.  We had a good thing, you stupid son of a bitch!  We had Fring.  We had a lab.  We had everything we needed and it all ran like clockwork.  You could've shut your mouth, cooked, and made as much money as you ever needed.  It was perfect.  But no!  You just had to blow it up.  YOU!  And your pride and your ego.  You just had to be the man.  If you'd done your job, known your place, we'd all be fine right now. </p>
                          <p>Any other drugs in the house? Think hard; your freedom depends on it. What about guns, you got any guns in the house? Here's your story - You woke up, you found her, that's all you know. Say it. Say it, please. I woke up I found her that's all I know. Say it. I woke up I found her, that's all I know. Again. Again. Again. </p>
                          <p>Once you call it in, the people who show up with be with the office of medical investigations. it's primarily who you'll talk to. Police officers may arrive they may not, depends on how busy a morning they're having. Typically ODs are not a high priority call. There's nothing here to incriminate you, so I'd be amazed if you got placed under arrest. However, if you do, you say nothing. You tell them you just want your lawyer. And you call Saul Goodman.</p>
                          <p>And do I need to state the obvious? I was not here. You put on a long sleeve shirt and cover those track marks on your arm. Count down from twenty, and then you dial. Hang tough, you're in the home stretch.</p>
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

