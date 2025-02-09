<?php require_once ("models/includes/general_header.php"); ?>
  <?php include_once("models/includes/header.php"); ?>
  <!-- Menu -->
  <?php include_once("models/includes/menu.php"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Users table</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>User</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Reason</th>
                </tr>
                <tr>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>11-7-2014</td>
                  <td>
                    <div class="input-group margin">
                      <div class="input-group-btn">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Action
                          <span class="fa fa-caret-down"></span></button>
                        <ul class="dropdown-menu">
                          <li style="background-color: #00c0ef !important"><a href="#" style="color: white">Edit user</a></li>
                          <li><a href="#">Remove user</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Pop up to comments</a></li>
                        </ul>
                      </div>
                    </div>
                  </td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>219</td>
                  <td>Reynald Rodriguez</td>
                  <td>11-7-2014</td>
                  <td>
                    <div class="input-group margin">
                      <div class="input-group-btn">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Action
                          <span class="fa fa-caret-down"></span></button>
                        <ul class="dropdown-menu">
                          <li style="background-color: #00c0ef !important"><a href="#" style="color: white">Edit user</a></li>
                          <li><a href="#">Remove user</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Pop up to comments</a></li>
                        </ul>
                      </div>
                    </div>
                  </td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>657</td>
                  <td>Bob Doe</td>
                  <td>11-7-2014</td>
                  <td>
                    <div class="input-group margin">
                      <div class="input-group-btn">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Action
                          <span class="fa fa-caret-down"></span></button>
                        <ul class="dropdown-menu">
                          <li style="background-color: #00c0ef !important"><a href="#" style="color: white">Edit user</a></li>
                          <li><a href="#">Remove user</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Pop up to comments</a></li>
                        </ul>
                      </div>
                    </div>
                  </td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>175</td>
                  <td>Bryant</td>
                  <td>2-7-2025</td>
                  <td>
                    <div class="input-group margin">
                      <div class="input-group-btn">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Action
                          <span class="fa fa-caret-down"></span></button>
                        <ul class="dropdown-menu">
                          <li style="background-color: #00c0ef !important"><a href="#" style="color: white">Edit user</a></li>
                          <li><a href="#">Remove user</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Pop up to comments</a></li>
                        </ul>
                      </div>
                    </div>
                  </td>
                  <td>
                    Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.
                  </td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
 <!-- Footer -->
 <?php include_once("models/footer.php"); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" style="display: none;">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                
              <div class="input-group margin">
                      <div class="input-group-btn">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Action
                          <span class="fa fa-caret-down"></span></button>
                        <ul class="dropdown-menu">
                          <li style="background-color: #00c0ef !important"><a href="#" style="color: white">Edit the user</a></li>
                          <li><a href="#">Remove the user</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Pop up to comments</a></li>
                        </ul>
                      </div></span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                
              <div class="input-group margin">
                      <div class="input-group-btn">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action
                          <span class="fa fa-caret-down"></span></button>
                        <ul class="dropdown-menu">
                          <li style="background-color: #00c0ef !important"><a href="#" style="color: white">Edit the user</a></li>
                          <li><a href="#">Remove the user</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                        </ul>
                      </div></span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                
              <div class="input-group margin">
                      <div class="input-group-btn">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action
                          <span class="fa fa-caret-down"></span></button>
                        <ul class="dropdown-menu">
                          <li style="background-color: #00c0ef !important"><a href="#" style="color: white">Edit the user</a></li>
                          <li><a href="#">Remove the user</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                        </ul>
                      </div></span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                
              <div class="input-group margin">
                      <div class="input-group-btn">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action
                          <span class="fa fa-caret-down"></span></button>
                        <ul class="dropdown-menu">
                          <li style="background-color: #00c0ef !important"><a href="#" style="color: white">Edit the user</a></li>
                          <li><a href="#">Remove the user</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                        </ul>
                      </div></span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
<?php require_once("models/includes/general_footer.php"); ?>>
