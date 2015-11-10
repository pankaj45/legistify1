<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=320, height=device-height, target-densitydpi=medium-dpi" /> -->

    <meta name="description" content="">
    <meta name="author" content="">
    <base href="<?php echo base_url(); ?>"></base>

    <title><?php echo $title; ?> | Legistify</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- icons CSS -->
    <link href="assets/css/socialIcons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/about.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css"> -->
    <!-- <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<!--Login  Modal  -->
<div class="modal fade bs-example-modal-sm" tabindex="-1" id="login-overlay" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog ">
    <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Login to Legistify</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-6">
                      <div class="well" >
                          <form id="loginForm" method="POST" action="/login/" novalidate="novalidate">
                              <div class="form-group">
                                  <label for="username" class="control-label">Username/Email</label>
                                  <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="example@gmail.com">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">Password</label>
                                  <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
                                  <span class="help-block"></span>
                              </div>
                              <button type="submit" class="btn btn-dark " style="width:100%">Login</button>
                              <div id="loginErrorMsg" class="alert alert-error hide">Wrong username or password</div>
                              <div align="right" style="margin-top:2px"><a style="color:black;cursor:pointer;font-size:12px">Forget Password?</a></div>
                              <div align="center" style="margin-top:5px"><b>OR</b></div>
                              <a href="#" class="btn btn-social-dark azm-facebook" ><i class="fa fa-facebook"></i> &nbsp;&nbsp;Log in with Facebook</a>
                              <div align="center" style="margin-top:5px"><b>OR</b></div>
                              <a href="#" class="btn btn-social-dark azm-google-plus"><i class="fa fa-google-plus"></i>&nbsp;&nbsp; Sign in with Google+</a>
                          </form>
                      </div>                      
                  </div>
                  <div class="col-xs-6">
                      <p class="lead">Register now for <span class="text-success">FREE</span></p>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check "></span> Affordable & Quick Legal Docs</li>
                          <li><span class="fa fa-check "></span> Free Legal Resources.</li>
                          <li><span class="fa fa-check "></span> Exhaustive Lawyer Listings.</li>
                          <li><span class="fa fa-check "></span> One Stop Legal Solution.</li>
                          <li><a href="about.html"><u>Read more</u></a></li>
                      </ul>
                      <p><a href="#signup-overlay" data-toggle="modal" data-target="#signup-overlay" class="btn btn-dark" data-dismiss="modal">Yes please, register now!</a></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>    
<!-- Login modal over -->


<!--Sign Up Modal  -->
<div class="modal fade bs-example-modal-sm" tabindex="-1" id="signup-overlay" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Sign Up here</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-12">
                      <div class="well">
                          <form id="loginForm" method="POST" action="/signup/" novalidate="novalidate">
                              <div class="form-group">
                                  <label for="firstname" class="control-label">First Name</label>
                                  <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you name" placeholder="Varun">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="lastname" class="control-label">Last Name</label>
                                  <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you last name" placeholder="Bansal">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="username" class="control-label">Username</label>
                                  <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="bansalvarun">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="username" class="control-label">Email</label>
                                  <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you email" placeholder="varunbansal@gmail.com">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">Password</label>
                                  <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
                                  <span class="help-block"></span>
                              </div>
                            <div class="radio" style="text-align:left">
                              <label style="font-weight:bold;padding-left:0px">I am a &nbsp;</label>
                              <label><input type="radio" name="optradio">User</label>
                              <label><input type="radio" name="optradio">Lawyer</label>
                              <label><input type="radio" name="optradio">Law Student</label>
                            </div>

                              <div id="loginErrorMsg" class="alert alert-error hide">Wrong username or password</div>
                              <button type="submit" class="btn btn-dark ">Sign Up</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>    
<!-- Sign Up modal over -->

