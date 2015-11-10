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

    <title>Legistify</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/grayscale.css" rel="stylesheet">

    <!-- icons CSS -->
    <link href="assets/css/socialIcons.css" rel="stylesheet">

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
  <div class="modal-dialog loginForm" >
    <div class="modal-content ">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Login to Legistify</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-sm-6">
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
                              <!-- <div align="center" style="margin-top:5px"><b>OR</b></div> -->
                              <a href="#" class="btn btn-social-dark azm-google-plus"><i class="fa fa-google-plus"></i>&nbsp;&nbsp; Sign in with Google+</a>
                          </form>
                      </div>                      
                  </div>
                  <div class="col-sm-6">
                      <p class="lead">Register now for <span class="text-success">FREE</span></p>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check "></span> Affordable & Quick Legal Docs</li>
                          <li><span class="fa fa-check "></span> Free Legal Resources.</li>
                          <li><span class="fa fa-check "></span> Exhaustive Lawyer Listings.</li>
                          <li><span class="fa fa-check "></span> One Stop Legal Solution.</li>
                          <li><a href="about.html"><u>Read more</u></a></li>
                      </ul>
                      <!-- <p><a href="#signup-overlay" data-toggle="modal" data-target="#signup-overlay" class="btn btn-dark" data-dismiss="modal">Yes please, register now!</a></p> -->
                      <p><a class="btn btn-dark openSignUp" >Yes please, register now!</a></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
<!-- </div>     -->

<!-- Login modal over -->
<!--Sign Up Modal  -->
<!-- <div class="modal fade bs-example-modal-sm" tabindex="-1" id="signup-overlay" role="dialog" aria-labelledby="mySmallModalLabel"> -->
  <div class="modal-dialog modal-lg signupForm" style="display:none">
    <div class="modal-content ">
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
</div>
<!-- modalover -->
  
    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Intro Header -->
    <header class="intro" >

    <!-- Navigation -->
    <nav class="navbar navbar-custom  " role="navigation" >
        <div class="container ">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="Legal/index">
                    <span class="light">legistify</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li class="hidden">     
-                        <a href="#page-top"></a>       
-                    </li>
                    <li>
                        <a class="page-scroll" href="Legal/about">ABOUT</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="Legal/categories">DOCUMENTS</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="Legal/search">RESEARCH</a>
                    </li>
                    <li>
                        <a class="page-scroll"  href="#login-overlay" data-toggle="modal" data-target="#login-overlay">LOGIN</a>
                    </li>
                    <li >
                        <button class="btn btn-default forlawyers" style="margin-top:5px; margin-left:18px">For lawyers</button>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
    <div class="introContent" align="center">
            <!-- /.container -->
        <div class="intro-body " >
        
            
            <div class="container" style="text-align:left;">
                        <h1 style="font-size:55px;">
                        Online Legal Facilitators
                        </h1>
                        
                        <h4 style="font-size:25px;">
                        Nation’s first Online Automated Agreement Creator
                        </h4>
                        <br/>
                        <button class="btn btn-default btn-lg" >Explore More</button>
                        <br/><br/>
            </div>
        </div>


    </div>



    </header>
    <!-- Services Section -->
     <section id="services" class="container content-section text-center" >
<!--        <div class="row" align="right">

            <div class = "col-md-3 col-sm-2" align="left" style="display:block" id="ourServices">
                <h3><span class="make2" >OUR SERVICES</span></h3>
                <img src="img/dark.png"  width="80px" height="3px" style="margin-top:-20px;" >
                <p>Kuch likhdo yahah bhi </p>
            </div>

            <div class =" col-md-3 col-sm-2" align="left" style="display:none" id="makeDocuments">
                <h3><span class="make2" >MAKE DOCUMENTS</span></h3>
                <img src="img/dark.png"  width="80px" height="3px" style="margin-top:-20px;" >
                <p>Kuch likhdo yahah bhi  </p>
            </div>
            <div class = "col-md-3 col-sm-2" align="left" style="display:none" id="startResearch">
                <h3><span class="make2" >START RESEARCH</span></h3>
                <img src="img/dark.png"  width="80px" height="3px" style="margin-top:-20px;" >
                <p>Kuch likhdo yahah bhi  </p>
            </div>
            <div class =" col-md-3 col-sm-2" align="left" style="display:none" id="findLawyers">
                <h3><span class="make2" >FIND LAWYERS</span></h3>
                <img src="img/dark.png"  width="80px" height="3px" style="margin-top:-20px;" >
                <p>Kuch likhdo yahah bhi  </p>
            </div>

            <div class = "col-md-1" style="float:center" ></div>
            <div class = "col-md-2  floatCenterOnMobileAll" style="float:left" id="makeDocumentsBlock">
                <div id="makeDocumentsBlock1" style="display:block">
                    <img src="img/docs.png" width="100%" height="100%">
                    <p><span class="make" >Make</span><br/><span class="superdark">DOCUMENTS</span></p>
                </div>
                <div id="makeDocumentsBlock2" style="display:none">
                	<button class="btn btn-default getstarted" >Get started</button>
                    <img src="img/getstarted.png" width="100%" height="100%">
                    <p style="background:#232C3C"><span class="make" ></span><br/><span class="superdark" style="visibility:hidden">afaf</span></p>
                </div>
            </div>

            <div class = "col-md-1" style="float:center" ></div>        
            <div class = "col-md-2  floatCenterOnMobileAll" style="float:left" id="startResearchBlock">
	            <div id="startResearchBlock1" style="display:block">
	                <img src="img/research.png"  width="100%" height="100%">
	                <p><span class="make">Start</span><br/><span class="superdark">RESEARCH</span></p>
	            </div>
	            <div id="startResearchBlock2" style="display:none">
                	<button class="btn btn-default getstarted">Get started</button>
                    <img src="img/getstarted.png" width="100%" height="100%">
                    <p style="background:#232C3C"><span class="make" ></span><br/><span class="superdark" style="visibility:hidden">afaf</span></p>
	            </div>
            </div>
            <div class = "col-md-1" style="float:center" ></div>
            <div class = "col-md-2  floatCenterOnMobileLawyers floatCenterOnMobileAll" style="float:left;" id="findLawyersBlock">
                <div id="findLawyersBlock1" style="display:block">
                    <img src="img/lawyers.png" width="100%" height="100%">
                    <p><span class="make">Find</span><br/><span class="superdark">LAWYERS</span></p>
                </div>
                <div id="findLawyersBlock2" style="display:none" align="middle">
                	<button class="btn btn-default getstarted">Get started</button>
                    <img src="img/getstarted.png" width="100%" height="100%">
                    <p style="background:#232C3C"><span class="make" ></span><br/><span class="superdark" style="visibility:hidden">afaf</span></p>
                </div>
            </div> -->


<!--             <div class="col-md-3 col-sm-6 col-xs-6" style="max-height:200px;overflow:hidden;" id="ourServices">
                <div align="left">
                <h3><span class="make2" >OUR SERVICES</span></h3>
                <img src="img/dark.png"  width="80px" height="3px" style="margin-top:-20px;margin-left:0px" >
                </div>
                <p></p>                
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6" style="max-height:200px;overflow:hidden;display:none" id="makeDocuments">
                <div align="left">
                <h3><span class="make2" >MAKE DOCUMENTS</span></h3>
                <img src="img/dark.png"  width="80px" height="3px" style="margin-top:-20px;margin-left:0px" >
                </div>
                <p>Create your own legal agreements without hassle. Use our automated legal document making platform.”</p>                
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6" style="max-height:200px;overflow:hidden;display:none" id="startResearch">
                <div align="left">
                <h3><span class="make2" >START RESEARCH</span></h3>
                <img src="img/dark.png"  width="80px" height="3px" style="margin-top:-20px;margin-left:0px" >
                </div>
                <p>Learn what makes or breaks your case. Browse through our legal resource section and get informed about a legal issue.” </p>                
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6" style="max-height:200px;overflow:hidden;display:none" id="findLawyers">
                <div align="left">
                <h3><span class="make2" >FIND LAWYERS</span></h3>
                <img src="img/dark.png"  width="80px" height="3px" style="margin-top:-20px;margin-left:0px" >
                </div>
                <p>Hiring the right lawyer is no more a problem. Search, meet and hire experienced professionals on our platform.”</p>                

            </div>
 -->
            <div class="col-md-12" align="center">
                <h2><span class="make2" >OUR SERVICES</span></h2>
                <img src="assets/img/dark.png"  width="80px" height="3px" style="margin-top:-20px;" >
            </div>
            <div class="col-md-12">            
              <div class="col-md-2"></div>
              <div class="col-md-2 col-sm-4 col-xs-6 makeDocumentsBlock" style="height:200px;margin-top:50px;" >
                  <img src="assets/img/docs.png">
                  <p><span class="make">Make</span><br/><span class="superdark">DOCUMENTS</span></p>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-2 col-sm-4 col-xs-6 makeDocumentsBlock" style="height:200px;margin-top:50px" id="startResearchBlock">
                  <img src="assets/img/research.png" >
                  <p><span class="make">Start</span><br/><span class="superdark">RESEARCH</span></p>
              </div>
              <div class="col-md-1 col-xs-3"></div>
              <div class="col-md-2 col-sm-4 col-xs-6 makeDocumentsBlock" style="height:200px;margin-top:50px"id="findLawyersBlock">
                  <img src="assets/img/lawyers.png" >
                  <p><span class="make">Find</span><br/><span class="superdark">LAWYERS</span></p>
              </div>
              <div class="col-md-2 col-xs-3"></div>
            </div>


        
    </section>

    <!-- Download Section -->
    <section id="documents" class="content-section text-center">
        <div class="download-section" style="padding-bottom:0px">
            <div class="container" style="padding:0px;width:100%">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Create Your Own Legal Documents</h2>
                    <div class="row" style="margin-top:90px;margin-bottom:0px">
                        <div class="col-md-6 floatCenterOnMobile" style="float:right">
                            <img src="assets/img/document2.png" height="100%" width="100%">
                            <a class="btn btn-default btn-lg">Get Started</a>
                            <br/>
                            <br/>
                            <br/>
                            <br/>
                        </div>
                        <div class="col-md-6 hideMeOnTablet" style="float:left;">
                            <img src="assets/img/Screenshot.png" height="100%" width="100%">
                        </div>

<!--                         <div class="col-md-4" style="float:center;" >
                            <div >
                                <div class="col-sm-6" style="float:left;max-width:120px" >
                                	<div class="row" style="margin-top:10px">
                                    <img src="" style="float:left;background-color:white;" height="100px" width="100px">
                                    <span style="float:left;vertical-align:top; text-align:left;margin-left:10px" >Expert<br/>Reviewed</span> 
                                	</div>
                                </div>
                                <div class="col-sm-6" style="float:right;max-width:120px">
                                	<div class="row" style="margin-top:10px" >
                                    <img src="" style="float:left;background-color:white;" height="100px" width="100px">
                                    <span style="float:left;vertical-align:top; text-align:left; margin-left:10px" >Affordable<br/>Price </span> 
                                	</div>
                                </div>
                            </div>
                            <div >
                                <div class="col-sm-6" style="float:left;max-width:120px">
                                	<div class="row"style="margin-top:10px">
                                    <img src="" style="float:left;background-color:white;" height="100px" width="100px">
                                    <span style="float:left;vertical-align:top; text-align:left;margin-left:10px" >Instant<br/>Download </span> 
                                	</div>
                                </div>
                                <div class="col-sm-6" style="float:right;max-width:120px">
                                    <div class="row"style="margin-top:10px">
                                    <img src="" style="background-color:white;float:left" height="100px" width="100px">
                                    <span style="float:left;vertical-align:top; text-align:left;margin-left:10px" >Custom <br/>Made</span> 
                                	</div>
                                </div>
                            </div>
                    </div> -->

                    </div>
<!--                     <div class="row" style="margin-top:50px">
                        <a class="btn btn-default btn-lg">Get Started</a>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="testinomials" class="container content-section text-center">
            <div class="col-md-6 " style="text-align:left;padding-left:0px"> 
                <h3 class="make2" style="padding-left:15px;">PRESS MENTIONS</h3>
                <img src="assets/img/dark.png"  width="80px" height="3px" style="margin-top:-20px;padding-left:15px" >
                <br/>
                <div class="row" style="margin-left:0px;padding-left:0px;text-align:center">
                    <div class="col-md-5 col-sm-6 col-xs-12" style="margin-top:30px">
                        <img src="assets/img/yourstory.jpg"  style="height:150px">
                        <img src="assets/img/bg.png"  width="100%" height="2px" >
                        <p class="press">Legistify, aiming to accelerate the legal sphere for startups<br/>
                        <a>Read More</a></p>                
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-5 col-sm-6 col-xs-12 "  style="margin-top:30px">
                        <img src="assets/img/inc42.jpg" style="height:150px;width:100%">
                        <img src="assets/img/bg.png"  width="100%" height="2px">
                        <p class="press">Legal Issues might spring up from within business or external business.<br/>
                        <a>Read More</a></p>                
                    </div>
                    <div class="col-md-1"></div>
                </div>
<!--                 <div class="row hideMeOnMobile" style="margin-left:0px;padding-left:0px;text-align:center " align="center">
                    <div class="col-md-3 col-sm-3"></div>
                    <div class="col-md-6 col-sm-6 col-xs-12" style="">
                        <img src="img/yef.jpg"  style="max0-height:150px;width:100%">
                        <img src="img/bg.png"  width="100%" height="2px" >
                        <p class="press">Innovation and automation” are the two major key parameters we have based our business on and we truly believe that these would lead us to great success in the long run.<br/>
                        <a>Read More</a></p>                
                    </div>
                    <div class="col-md-3 col-sm-3"></div>
                </div> -->
            </div>
            <div class="col-md-6 "style="text-align:left" >
                <h3 class="make2">TESTIMONIALS</h3>
                <img src="assets/img/dark.png"  width="80px" height="3px" style="margin-top:-20px;" >

                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="margin-top:30px">
                  <!-- Indicators -->



<!--                   <div class="carousel-indicators">
                      <img src="img/bg.png" class="testimonialImage">
                  </div>
 -->


                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="assets/img/Testi_Bg.png" height="100%" width="100%">
                      <div class="carousel-caption">
                        <p class="testimonial">Kuch achha sa likhdo yaha bi Kuch achha sa likhdo yaha bi</p>
                        <h4 class="testimonialH">"Akshat Singhal"</h4>
                        <p class="testimonial">CEO, Legistify</p>
                      </div>
                    </div>

                    <div class="item">
                      <img src="assets/img/Testi_Bg.png" height="100%" width="100%">
                      <div class="carousel-caption">
                        <p>slide 2</p>
                        <span>"Akshat Singhal"</span><br/>
                        <span>CEO</span>        
                        <p>asfasf</p>
                      </div>
                    </div>
                    <div class="item">
                      <img src="assets/img/Testi_Bg.png" height="100%" width="100%">
                      <div class="carousel-caption">
                        <p>slide 3</p>
                        <span>"Akshat Singhal"</span><br/>
                        <span>CEO</span>        
                        <p>asfasf</p>
                      </div>
                    </div>
                  </div>


                  <!-- Controls -->
<!--                   <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div> -->

<div class="owl-controls clickable" >
    <div class="owl-pagination" >
        <span class="owl-page " onclick="changeActivePag(1)" data-target="#carousel-example-generic" data-slide-to="0" >
                <img id="pag1" src="assets/img/active.png"  width="30px" height="4px" >
        </span>
        <span class="owl-page " onclick="changeActivePag(2)" data-target="#carousel-example-generic" data-slide-to="1">
                <img id="pag2" src="assets/img/inactive.png"   width="30px" height="4px" >
        </span>
        <span class="owl-page" onclick="changeActivePag(3)" data-target="#carousel-example-generic" data-slide-to="2">
                <img id="pag3" src="assets/img/inactive.png"   width="30px" height="4px" >
        </span>
    </div>
</div>

            </div>        
        </div>
    </section>



    <!-- Footer -->
    <footer >
        <div class="myfooter">
        <div class="footer-section container content-section text-left" >
            <div class="row" style="padding-left:0px;margin-top:-50px">
                <div class="col-md-4 vcenter" >
                    <h2 style="text-align:left;margin-bottom:0px">legistify</h2>
                    <!-- <h4>Contact Us</h4> -->
                    <!-- <img src="img/bg.png"  width="80px" height="2px" style="margin-top:-30px;"> -->
                    <ul style="list-style-type:none; text-decoration: none;display:inline">
                        <!-- <li><b>Address: </b></li> -->
                        <li> B-37 Ground floor, Polyplex Tower, Noida- Sector 1</li>
                        <!-- <li><br/></li> -->
                        <li><b>Phone:</b> +919024456014</li>
                        <!-- <li><br/></li> -->
                        <li><b>Email:</b> contact@legistify.com</li>
                        <li><br/></li>
                    </ul>
                    <button href="#" class="btn btn-social azm-facebook" ><i class="fa fa-facebook"></i></button>
                    <button href="#" class="btn btn-social azm-google-plus"><i class="fa fa-google-plus"></i></button>
                    <button href="#" class="btn btn-social azm-twitter"><i class="fa fa-twitter"></i></button>
                    <button href="#" class="btn btn-social azm-linkedin"><i class="fa fa-linkedin"></i></button>
                    <button href="#" class="btn btn-social azm-slideshare"><i class="fa fa-slideshare"></i></button>
                <br/>
                <br/>
                <br/>
                <br/>

                </div>
                <div class="col-md-1 " style="text-align:left;">
                <br/>
                <br/>
                <br/>
                <br/>
                
                </div>
                <div class="col-md-2 col-sm-3 col-xs-5" style="text-align:left;">
                    <h4>Quick Links</h4>
                    <img src="assets/img/bg.png"  width="50px" height="2px" style="margin-top:-30px;">
                    <ul style="list-style-type:none; text-decoration: none;display:inline">
                        <li><a href="Legal/about">About</a></li>
                        <li><a href="Legal/team">Team</a></li>
                        <li><a href="Legal/careers">Careers</a></li>
                        <li><a  href="Legal/categories">Document</a></li>
                        <li><a  href="Legal/search">Research</a></li>
                        <li><a  href="#">Pricing</a></li>
                        <li><a  href="Legal/sitemap">Site Map</a></li>
                        <li><br/></li>
                    </ul>
                </div>

                <div class="col-md-3 col-sm-5 col-xs-7" style="text-align:left; ">
                    <h4>Most Popular</h4>
                    <div class="col-xs-12" style="padding-left:0px;height:2px">
                    <img src="assets/img/bg.png"  width="50px" height="2px" style="margin-top:-30px;">
                    </div>
                    <div class="col-xs-6" style="padding-left:0px">
                      <ul style="list-style-type:none; text-decoration: none;display:inline">
                        <li>Employment Contract</li>
                        <li>Trademark Assignment</li>
                        <li>Copyright Assignment</li>
                        <li>Non-Disclosure</li>
                        <li>Power of attorney</li>
                        <li>Lease</li>
                      </ul>                      
                    </div>
                    <div class="col-xs-6">
                    <ul style="list-style-type:none; text-decoration: none;display:inline">
                        <li>Sale Deed</li>
                        <li>Arbitration Agreement</li>
                        <li>Will</li>
                        <li>Graphic  designer agreement</li>
                        <li>merchant agreement</li>
                      </ul>                      
                    </div>

                 </div>
                <div class="col-md-2 col-sm-4 col-xs-6" style="text-align:left; ">
                    <h4>Legal Topics</h4>
                    <img src="assets/img/bg.png"  width="50px" height="2px" style="margin-top:-30px;">
                </div>

            </div>  
            
            <HR WIDTH="200%" style="margin-left:-50%;border-color:#F2F2F2" >
            <div class="col-md-6" style="margin-left:0px; padding-left:0px;text-align:left;float:left;">
                <div class="col-xs-4 " style="margin-left:0px; padding-left:0px">
                    <p style="font-size:15px">Terms And Condition</p>
                </div>
                <div class="col-xs-4" style="margin-left:0px; padding-left:0px">
                    <p style="font-size:15px">Legal Disclaimer</p>
                </div>
                <div class="col-xs-4" style="margin-left:0px; padding-left:0px">
                    <p style="font-size:15px">Privacy Policy</p>
                </div>
            </div>
            <div class="col-md-6 alignCenterOnMobile" style="text-align:right;float:right">
                <p style="font-size:15px;margin-left:0px">&#169;&nbsp;Legistify 2015</p>
            <br/>
            </div>

        </div>
        </div>
    </footer>







    <!-- jQuery -->
     <script src="assets/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
     <script src="assets/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
     <script src="assets/js/jquery.easing.min.js"></script>
    <!-- Custom Theme JavaScript -->
     <script src="assets/js/grayscale.js"></script>

     <script src="assets/js/services.js"></script>



</body>



</html>
