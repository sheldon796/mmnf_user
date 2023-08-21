<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Widgets</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
	<?php include "navbar.php" ; ?>
  	<?php include "aside.php" ; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Widgets</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Widgets</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section><!-- Main content -->
    <section class="content">
      <div class="container-fluid"> <!-- Direct Chat -->
        <h4 class="mt-4 mb-2">Direct Chat</h4>
        <div class="row">
          <div class="col-md-3"><!-- DIRECT CHAT PRIMARY -->
            <div class="card card-primary card-outline direct-chat direct-chat-primary">
              <div class="card-header">
                <h3 class="card-title">Direct Chat</h3>
                <div class="card-tools">
                  <span title="3 New Messages" class="badge bg-primary">3</span>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle"><i class="fas fa-comments"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body"><!-- Conversations are loaded here -->
                <div class="direct-chat-messages"><!-- Message. Default to the left -->
                  <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-left">Alexander Pierce</span>
                      <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                    </div><!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="Message User Image"><!-- /.direct-chat-img -->
                    <div class="direct-chat-text">Is this template really for free? That's unbelievable!</div><!-- /.direct-chat-text -->
                  </div><!-- /.direct-chat-msg -->
                  <div class="direct-chat-msg right"><!-- Message to the right -->
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-right">Sarah Bullock</span>
                      <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                    </div><!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="Message User Image"><!-- /.direct-chat-img -->
                    <div class="direct-chat-text">You better believe it!</div><!-- /.direct-chat-text -->
                  </div><!-- /.direct-chat-msg -->
                </div><!--/.direct-chat-messages-->                
                <div class="direct-chat-contacts"><!-- Contacts are loaded here -->
                  <ul class="contacts-list">
                    <li>
                      <a href="#"><img class="contacts-list-img" src="dist/img/user1-128x128.jpg" alt="User Avatar">
                        <div class="contacts-list-info">
                          <span class="contacts-list-name">Count Dracula<small class="contacts-list-date float-right">2/28/2015</small></span>
                          <span class="contacts-list-msg">How have you been? I was...</span>
                        </div><!-- /.contacts-list-info -->
                      </a>
                    </li><!-- End Contact Item -->
                  </ul><!-- /.contacts-list -->
                </div><!-- /.direct-chat-pane -->
              </div><!-- /.card-body -->
              <div class="card-footer">
                <form action="#" method="post">
                  <div class="input-group">
                    <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                    <span class="input-group-append"><button type="submit" class="btn btn-primary">Send</button></span>
                  </div>
                </form>
              </div><!-- /.card-footer-->
            </div><!--/.direct-chat -->
          </div><!-- /.col -->
          <div class="col-md-3"><!-- DIRECT CHAT SUCCESS -->
            <div class="card card-success card-outline direct-chat direct-chat-success">
              <div class="card-header">
                <h3 class="card-title">Direct Chat</h3>
                <div class="card-tools">
                  <span title="3 New Messages" class="badge bg-success">3</span>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle"><i class="fas fa-comments"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body"><!-- Conversations are loaded here -->
                <div class="direct-chat-messages"><!-- Message. Default to the left -->
                  <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-left">Alexander Pierce</span>
                      <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                    </div><!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="Message User Image"><!-- /.direct-chat-img -->
                    <div class="direct-chat-text">Is this template really for free? That's unbelievable!</div><!-- /.direct-chat-text -->
                  </div><!-- /.direct-chat-msg -->                  
                  <div class="direct-chat-msg right"><!-- Message to the right -->
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-right">Sarah Bullock</span>
                      <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                    </div><!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="Message User Image"><!-- /.direct-chat-img -->
                    <div class="direct-chat-text">You better believe it!</div><!-- /.direct-chat-text -->
                  </div><!-- /.direct-chat-msg -->
                </div><!--/.direct-chat-messages-->                
                <div class="direct-chat-contacts"><!-- Contacts are loaded here -->
                  <ul class="contacts-list">
                    <li>
                      <a href="#"><img class="contacts-list-img" src="dist/img/user1-128x128.jpg" alt="User Avatar">
                        <div class="contacts-list-info">
                          <span class="contacts-list-name">Count Dracula<small class="contacts-list-date float-right">2/28/2015</small></span>
                          <span class="contacts-list-msg">How have you been? I was...</span>
                        </div><!-- /.contacts-list-info -->
                      </a>
                    </li><!-- End Contact Item -->
                  </ul><!-- /.contatcts-list -->
                </div><!-- /.direct-chat-pane -->
              </div><!-- /.card-body -->
              <div class="card-footer">
                <form action="#" method="post">
                  <div class="input-group">
                    <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                    <span class="input-group-append"><button type="submit" class="btn btn-success">Send</button></span>
                  </div>
                </form>
              </div><!-- /.card-footer-->
            </div><!--/.direct-chat -->
          </div><!-- /.col -->
          <div class="col-md-3"><!-- DIRECT CHAT WARNING -->
            <div class="card card-warning direct-chat direct-chat-warning">
              <div class="card-header">
                <h3 class="card-title">Direct Chat</h3>
                <div class="card-tools">
                  <span title="3 New Messages" class="badge bg-danger">3</span>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle"><i class="fas fa-comments"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body"><!-- Conversations are loaded here -->
                <div class="direct-chat-messages"><!-- Message. Default to the left -->
                  <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-left">Alexander Pierce</span>
                      <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                    </div><!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="Message User Image"><!-- /.direct-chat-img -->
                    <div class="direct-chat-text">Is this template really for free? That's unbelievable!</div><!-- /.direct-chat-text -->
                  </div><!-- /.direct-chat-msg -->                  
                  <div class="direct-chat-msg right"><!-- Message to the right -->
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-right">Sarah Bullock</span>
                      <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                    </div><!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="Message User Image"><!-- /.direct-chat-img -->
                    <div class="direct-chat-text">You better believe it!</div><!-- /.direct-chat-text -->
                  </div><!-- /.direct-chat-msg -->
                </div><!--/.direct-chat-messages-->                
                <div class="direct-chat-contacts"><!-- Contacts are loaded here -->
                  <ul class="contacts-list">
                    <li>
                      <a href="#"><img class="contacts-list-img" src="dist/img/user1-128x128.jpg" alt="User Avatar">
                        <div class="contacts-list-info">
                          <span class="contacts-list-name">Count Dracula<small class="contacts-list-date float-right">2/28/2015</small></span>
                          <span class="contacts-list-msg">How have you been? I was...</span>
                        </div><!-- /.contacts-list-info -->
                      </a>
                    </li><!-- End Contact Item -->
                  </ul><!-- /.contacts-list -->
                </div><!-- /.direct-chat-pane -->
              </div><!-- /.card-body -->
              <div class="card-footer">
                <form action="#" method="post">
                  <div class="input-group">
                    <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                    <span class="input-group-append"><button type="submit" class="btn btn-warning">Send</button></span>
                  </div>
                </form>
              </div><!-- /.card-footer-->
            </div><!--/.direct-chat -->
          </div><!-- /.col -->
          <div class="col-md-3"><!-- DIRECT CHAT DANGER -->
            <div class="card card-danger direct-chat direct-chat-danger">
              <div class="card-header">
                <h3 class="card-title">Direct Chat</h3>
                <div class="card-tools">
                  <span title="3 New Messages" class="badge">3</span>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle"><i class="fas fa-comments"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body"><!-- Conversations are loaded here -->
                <div class="direct-chat-messages"><!-- Message. Default to the left -->
                  <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-left">Alexander Pierce</span>
                      <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                    </div><!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="Message User Image"><!-- /.direct-chat-img -->
                    <div class="direct-chat-text">Is this template really for free? That's unbelievable!</div><!-- /.direct-chat-text -->
                  </div><!-- /.direct-chat-msg -->                  
                  <div class="direct-chat-msg right"><!-- Message to the right -->
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-right">Sarah Bullock</span>
                      <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                    </div><!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="Message User Image"><!-- /.direct-chat-img -->
                    <div class="direct-chat-text">You better believe it!</div><!-- /.direct-chat-text -->
                  </div><!-- /.direct-chat-msg -->
                </div><!--/.direct-chat-messages-->                
                <div class="direct-chat-contacts"><!-- Contacts are loaded here -->
                  <ul class="contacts-list">
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user1-128x128.jpg" alt="User Avatar">
                        <div class="contacts-list-info">
                          <span class="contacts-list-name">Count Dracula<small class="contacts-list-date float-right">2/28/2015</small></span>
                          <span class="contacts-list-msg">How have you been? I was...</span>
                        </div><!-- /.contacts-list-info -->
                      </a>
                    </li><!-- End Contact Item -->
                  </ul><!-- /.contacts-list -->
                </div><!-- /.direct-chat-pane -->
              </div><!-- /.card-body -->
              <div class="card-footer">
                <form action="#" method="post">
                  <div class="input-group">
                    <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                    <span class="input-group-append"><button type="submit" class="btn btn-danger">Send</button></span>
                  </div>
                </form>
              </div><!-- /.card-footer-->
            </div><!--/.direct-chat -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section><!-- /.content -->
    <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>
  </div><!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block"><b>Version</b> 3.2.0</div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer><!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark"></aside><!-- Control sidebar content goes here -->  
  <!-- /.control-sidebar -->
</div><!-- ./wrapper -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
