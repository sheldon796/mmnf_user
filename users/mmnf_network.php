<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="images/logo.png" rel="icon">
    <title>MMNF</title> <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <style>
        /*----------------genealogy-scroll----------*/
        
        .genealogy-scroll::-webkit-scrollbar {
          width: 5px;
          height: 8px;
        }
        .genealogy-scroll::-webkit-scrollbar-track {
          border-radius: 10px;
          background-color: #e4e4e4;
        }
        .genealogy-scroll::-webkit-scrollbar-thumb {
          background: #212121;
          border-radius: 10px;
          transition: 0.5s;
        }
        .genealogy-scroll::-webkit-scrollbar-thumb:hover {
          background: #d5b14c;
          transition: 0.5s;
        }
        
        
        /*----------------genealogy-tree----------*/
        .genealogy-body{
          white-space: nowrap;
          overflow-y: hidden;
          padding: 50px;
          min-height: 500px;
          padding-top: 10px;
          text-align: center;
        }
        .genealogy-tree{
        display: inline-block;
        }
        .genealogy-tree ul {
          padding-top: 20px; 
          position: relative;
          padding-left: 0px;
          display: flex;
          justify-content: center;
        }
        .genealogy-tree li {
          float: left; text-align: center;
          list-style-type: none;
          position: relative;
          padding: 20px 5px 0 5px;
        }
        .genealogy-tree li::before, .genealogy-tree li::after{
          content: '';
          position: absolute; 
        top: 0; 
        right: 50%;
          border-top: 2px solid #ccc;
          width: 50%; 
        height: 18px;
        }
        .genealogy-tree li::after{
          right: auto; left: 50%;
          border-left: 2px solid #ccc;
        }
        .genealogy-tree li:only-child::after, .genealogy-tree li:only-child::before {
          display: none;
        }
        .genealogy-tree li:only-child{ 
          padding-top: 0;
        }
        .genealogy-tree li:first-child::before, .genealogy-tree li:last-child::after{
          border: 0 none;
        }
        .genealogy-tree li:last-child::before{
          border-right: 2px solid #ccc;
          border-radius: 0 5px 0 0;
          -webkit-border-radius: 0 5px 0 0;
          -moz-border-radius: 0 5px 0 0;
        }
        .genealogy-tree li:first-child::after{
          border-radius: 5px 0 0 0;
          -webkit-border-radius: 5px 0 0 0;
          -moz-border-radius: 5px 0 0 0;
        }
        .genealogy-tree ul ul::before{
          content: '';
          position: absolute; top: 0; left: 50%;
          border-left: 2px solid #ccc;
          width: 0; height: 20px;
        }
        .genealogy-tree li a{
          text-decoration: none;
          color: #666;
          font-family: arial, verdana, tahoma;
          font-size: 11px;
          display: inline-block;
          border-radius: 5px;
          -webkit-border-radius: 5px;
          -moz-border-radius: 5px;
        }
        
        .genealogy-tree li a:hover+ul li::after, 
        .genealogy-tree li a:hover+ul li::before, 
        .genealogy-tree li a:hover+ul::before, 
        .genealogy-tree li a:hover+ul ul::before{
          border-color:  #fbba00;
        }
        
        /*--------------memeber-card-design----------*/
        .member-view-box{
          padding:0px 20px;
          text-align: center;
          border-radius: 4px;
          position: relative;
        }
        .member-image{
          width: 60px;
          position: relative;
        }
        .member-image img{
          width: 60px;
          height: 60px;
          border-radius: 6px;
        background-color :#000;
        z-index: 1;
        }
        
    </style>
    <script>
        $(function () {
           $('.genealogy-tree ul').hide();
           $('.genealogy-tree>ul').show();
           $('.genealogy-tree ul.active').show();
           $('.genealogy-tree li').on('click', function (e) {
               var children = $(this).find('> ul');
               if (children.is(":visible")) children.hide('fast').removeClass('active');
               else children.show('fast').addClass('active');
               e.stopPropagation();
           });
        });
    </script>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar --> <?php include "navbar.php" ; ?> <?php include "aside.php" ; ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Registration Form</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Registration Form</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section> <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <div class="body genealogy-body genealogy-scroll">
                                <div class="genealogy-tree">
                                    <ul>
                                        <li> <a href="javascript:void(0);">
                                                <div class="member-view-box">
                                                    <div class="member-image"> <img src="images/icons8-man-96.png" alt="Member">
                                                        <div class="member-details">
                                                            <h3>John Doe</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <ul class="active">
                                                <li> <a href="javascript:void(0);">
                                                        <div class="member-view-box">
                                                            <div class="member-image"> <img src="images/icons8-man-96.png" alt="Member">
                                                                <div class="member-details">
                                                                    <h3>Member 1</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <ul>
                                                        <li> <a href="javascript:void(0);">
                                                                <div class="member-view-box">
                                                                    <div class="member-image"> <img src="images/icons8-man-96.png" alt="Member">
                                                                        <div class="member-details">
                                                                            <h3>Member<br>1-1</h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a> </li>
                                                        <li> <a href="javascript:void(0);">
                                                                <div class="member-view-box">
                                                                    <div class="member-image"> <img src="images/icons8-man-96.png" alt="Member">
                                                                        <div class="member-details">
                                                                            <h3>Member<br>1-2</h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a> </li>
                                                        <li> <a href="javascript:void(0);">
                                                                <div class="member-view-box">
                                                                    <div class="member-image"> <img src="images/icons8-man-96.png" alt="Member">
                                                                        <div class="member-details">
                                                                            <h3>Member<br>1-3</h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <ul>
                                                                <li> <a href="javascript:void(0);">
                                                                        <div class="member-view-box">
                                                                            <div class="member-image"> <img src="images/icons8-man-96.png" alt="Member">
                                                                                <div class="member-details">
                                                                                    <h3>Member<br>1-3-1</h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a> </li>
                                                                <li> <a href="javascript:void(0);">
                                                                        <div class="member-view-box">
                                                                            <div class="member-image"> <img src="images/icons8-man-96.png" alt="Member">
                                                                                <div class="member-details">
                                                                                    <h3>Member<br>1-3-2</h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a> </li>
                                                                <li> <a href="javascript:void(0);">
                                                                        <div class="member-view-box">
                                                                            <div class="member-image"> <img src="images/icons8-man-96.png" alt="Member">
                                                                                <div class="member-details">
                                                                                    <h3>Member<br>1-3-3</h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a> </li>
                                                            </ul>
                                                        </li>
                                                        <li> <a href="javascript:void(0);">
                                                                <div class="member-view-box">
                                                                    <div class="member-image"> <img src="images/icons8-man-96.png" alt="Member">
                                                                        <div class="member-details">
                                                                            <h3>Member<br>1-4</h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a> </li>
                                                        <li> <a href="javascript:void(0);">
                                                                <div class="member-view-box">
                                                                    <div class="member-image"> <img src="images/icons8-man-96.png" alt="Member">
                                                                        <div class="member-details">
                                                                            <h3>Member<br>1-5</h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a> </li>
                                                        <li> <a href="javascript:void(0);">
                                                                <div class="member-view-box">
                                                                    <div class="member-image"> <img src="images/icons8-man-96.png" alt="Member">
                                                                        <div class="member-details">
                                                                            <h3>Member<br>1-6</h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a> </li>
                                                        <li> <a href="javascript:void(0);">
                                                                <div class="member-view-box">
                                                                    <div class="member-image"> <img src="images/icons8-man-96.png" alt="Member">
                                                                        <div class="member-details">
                                                                            <h3>Member<br>1-7</h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <ul>
                                                                <li> <a href="javascript:void(0);">
                                                                        <div class="member-view-box">
                                                                            <div class="member-image"> <img src="images/icons8-man-96.png" alt="Member">
                                                                                <div class="member-details">
                                                                                    <h3>Member<br>1-7-1</h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a> </li>
                                                                <li> <a href="javascript:void(0);">
                                                                        <div class="member-view-box">
                                                                            <div class="member-image"> <img src="images/icons8-man-96.png" alt="Member">
                                                                                <div class="member-details">
                                                                                    <h3>Member<br>1-7-2</h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                    <ul>
                                                                        <li> <a href="javascript:void(0);">
                                                                                <div class="member-view-box">
                                                                                    <div class="member-image"> <img src="images/icons8-man-96.png" alt="Member">
                                                                                        <div class="member-details">
                                                                                            <h3>Member<br>1-7-2-1</h3>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a> </li>
                                                                        <li> <a href="javascript:void(0);">
                                                                                <div class="member-view-box">
                                                                                    <div class="member-image"> <img src="images/icons8-man-96.png" alt="Member">
                                                                                        <div class="member-details">
                                                                                            <h3>Member<br>1-7-2-2</h3>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a> </li>
                                                                        <li> <a href="javascript:void(0);">
                                                                                <div class="member-view-box">
                                                                                    <div class="member-image"> <img src="images/icons8-man-96.png" alt="Member">
                                                                                        <div class="member-details">
                                                                                            <h3>Member<br>1-7-2-3</h3>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a> </li>
                                                                    </ul>
                                                                </li>
                                                                <li> <a href="javascript:void(0);">
                                                                        <div class="member-view-box">
                                                                            <div class="member-image"> <img src="images/icons8-man-96.png" alt="Member">
                                                                                <div class="member-details">
                                                                                    <h3>Member<br>1-7-3</h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a> </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li> <a href="javascript:void(0);">
                                                        <div class="member-view-box">
                                                            <div class="member-image"> <img src="images/icons8-man-96.png" alt="Member">
                                                                <div class="member-details">
                                                                    <h3>Member 2</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <ul>
                                                        <li> <a href="javascript:void(0);">
                                                                <div class="member-view-box">
                                                                    <div class="member-image"> <img src="images/icons8-man-96.png" alt="Member">
                                                                        <div class="member-details">
                                                                            <h3>John<br>Doe</h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <ul>
                                                                <li> <a href="javascript:void(0);">
                                                                        <div class="member-view-box">
                                                                            <div class="member-image"> <img src="images/icons8-man-96.png" alt="Member">
                                                                                <div class="member-details">
                                                                                    <h3>John<br>Doe</h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a> </li>
                                                                <li> <a href="javascript:void(0);">
                                                                        <div class="member-view-box">
                                                                            <div class="member-image"> <img src="images/icons8-man-96.png" alt="Member">
                                                                                <div class="member-details">
                                                                                    <h3>John<br>Doe</h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a> </li>
                                                                <li> <a href="javascript:void(0);">
                                                                        <div class="member-view-box">
                                                                            <div class="member-image"> <img src="images/icons8-man-96.png" alt="Member">
                                                                                <div class="member-details">
                                                                                    <h3>John<br>Doe</h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a> </li>
                                                            </ul>
                                                        </li>
                                                        <li> <a href="javascript:void(0);">
                                                                <div class="member-view-box">
                                                                    <div class="member-image"> <img src="images/icons8-man-96.png" alt="Member">
                                                                        <div class="member-details">
                                                                            <h3>John<br>Doe</h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <ul>
                                                                <li> <a href="javascript:void(0);">
                                                                        <div class="member-view-box">
                                                                            <div class="member-image"> <img src="images/icons8-man-96.png" alt="Member">
                                                                                <div class="member-details">
                                                                                    <h3>John<br>Doe</h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a> </li>
                                                                <li> <a href="javascript:void(0);">
                                                                        <div class="member-view-box">
                                                                            <div class="member-image"> <img src="images/icons8-man-96.png" alt="Member">
                                                                                <div class="member-details">
                                                                                    <h3>John<br>Doe</h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a> </li>
                                                                <li> <a href="javascript:void(0);">
                                                                        <div class="member-view-box">
                                                                            <div class="member-image"> <img src="images/icons8-man-96.png" alt="Member">
                                                                                <div class="member-details">
                                                                                    <h3>John<br>Doe</h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a> </li>
                                                            </ul>
                                                        </li>
                                                        <li> <a href="javascript:void(0);">
                                                                <div class="member-view-box">
                                                                    <div class="member-image"> <img src="images/icons8-man-96.png" alt="Member">
                                                                        <div class="member-details">
                                                                            <h3>John<br>Doe</h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <ul>
                                                                <li> <a href="javascript:void(0);">
                                                                        <div class="member-view-box">
                                                                            <div class="member-image"> <img src="images/icons8-man-96.png" alt="Member">
                                                                                <div class="member-details">
                                                                                    <h3>John<br>Doe</h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a> </li>
                                                                <li> <a href="javascript:void(0);">
                                                                        <div class="member-view-box">
                                                                            <div class="member-image"> <img src="images/icons8-man-96.png" alt="Member">
                                                                                <div class="member-details">
                                                                                    <h3>John<br>Doe</h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a> </li>
                                                                <li> <a href="javascript:void(0);">
                                                                        <div class="member-view-box">
                                                                            <div class="member-image"> <img src="images/icons8-man-96.png" alt="Member">
                                                                                <div class="member-details">
                                                                                    <h3>John<br>Doe</h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a> </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section> <!-- /.content -->
        </div> <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block"> <b>Version</b> 3.2.0 </div> <strong>© 2023-25. All rights reserved MMNF | Designed and build in India by <a href="hudastechnologies.com/" target="_blank">Huda's Technologies</a> </strong>
        </footer> <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside> <!-- /.control-sidebar -->
    </div> <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script> <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> <!-- bs-custom-file-input -->
    <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script> <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script> <!-- AdminLTE for demo purposes -->
    
    <script>
        $(function () {
          bsCustomFileInput.init();
        });
    </script>
</body>

</html>