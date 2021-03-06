<?php
	
session_start();

if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == '')) {
		header("location: index.html.php");
		exit();
	}

?>

<script src="vendor/bootstrap/css/bootstrap.min.css">

        BootstrapDialog.show({
            message: 'Hi Apple!'
        });
        </script>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body background="img/portfolio/rr.jpg" >

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="mymod2">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">DJ ROCKERS</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-4">STATUS: Starts in two days</div>
          <div class="col-md-4">START DATE:27.09.16</div>
        </div>
        <div class="row">
          <div class="col-md-3 col-md-offset-3"></div>
          <div class="col-md-2 col-md-offset-4"></div>
        </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3"></div>
        </div>
        <div class="row">
          <div class="col-sm-9">
            Level 1: .col-sm-9
            <div class="row">
              <div class="col-xs-8 col-sm-6">
                Level 2: .col-xs-8 .col-sm-6
              </div>
              <div class="col-xs-4 col-sm-6">
                Level 2: .col-xs-4 .col-sm-6
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="section-heading">Football Tourneys</h1>
                    <h3 class="section-subheading text-muted">Schedule</h3>
                </div>
            </div>
<table class="table table-hover" style="background-color: #b3d9ff">
  <thead>
  
   <tr>
      <td style="color: #000000"><a data-toggle="modal" href="#mymod2" style="color: #808080">#</a></td>
      <td style="color: #000000">Tournement Name</td>
      <td style="color: #000000">Status</td>
      <td style="color: #000000">Start Date</td>
      <td style="color: #000000">End Date</td>
      <td style="color: #000000">Results</td>
    </tr>
  </thead>
  <tbody>
   <tr>
      <th scope="row">1</th>
      <td><a data-toggle="modal" href="#mymod2" style="color: #808080">D.J.Rockers</a></td>
      <td><a data-toggle="modal" href="#mymod2" style="color: #808080">Starts in 2 days</a></td>
      <td><a data-toggle="modal" href="#mymod2" style="color: #808080">27.09.16</a></td>
      <td><a data-toggle="modal" href="#mymod2" style="color: #808080">29.09.16</a></td>
      <td ><a data-toggle="modal" href="#mymod2" style="color: #808080">Awaiting</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><a data-toggle="modal" href="#mymod2" style="color: #808080">Georgia Racers</a></td>
      <td><a data-toggle="modal" href="#mymod2" style="color: #808080">Ended</a></td>
      <td><a data-toggle="modal" href="#mymod2" style="color: #808080">---</a></td>
      <td><a data-toggle="modal" href="#mymod2" style="color: #808080">---</a></td>
      <td><a data-toggle="modal" href="#mymod2" style="color: #808080">Announced</a></td>
    </tr>
     <tr>
      <th scope="row">3</th>
      <td><a data-toggle="modal" href="#mymod2" style="color: #808080">Columbia Force</a></td>
      <td><a data-toggle="modal" href="#mymod2" style="color: #808080">Starts in 3 days</a></td>
      <td><a data-toggle="modal" href="#mymod2" style="color: #808080">28.10.16</a></td>
      <td><a data-toggle="modal" href="#mymod2" style="color: #808080">29.10.16</a></td>
      <td ><a data-toggle="modal" href="#mymod2" style="color: #808080">Awaiting</a></td>
    </tr>
 <tr>
      <th scope="row">4</th>
      <td><a data-toggle="modal" href="#mymod2" style="color: #808080">Manchester Barca</a></td>
      <td><a data-toggle="modal" href="#mymod2" style="color: #808080">Starts in 4 days</a></td>
      <td><a data-toggle="modal" href="#mymod2" style="color: #808080">12.11.16</a></td>
      <td><a data-toggle="modal" href="#mymod2" style="color: #808080">09.11.16</a></td>
      <td ><a data-toggle="modal" href="#mymod2" style="color: #808080">Awaiting</a></td>
    </tr>

  
  </tbody>
</table>



</html>