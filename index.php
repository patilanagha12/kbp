<?php
session_start();
  
if(isset($_SESSION['adminid'])) 
    {
      
      
    //echo "<br />Welcome ".$_SESSION['userid']."!";//session is used to store data in var and send perticular data over multiple webpages.
   echo $_SESSION['adminid'];
    }
?> 
<!--<?php //include 'auth.php';?>-->
<!DOCTYPE html>
<html lang="en">
<style type="text/css">
  #j{
    margin-left: 100px;background-color: white;
  }
  #i{
    background-color: white;
  }
</style>
  <?php include 'css.php';?>
  <body class="nav-md" >
      <div class="container body" id="i">
          <div class="main_container" id="i">
                  <?php include 'header.php';?>

        <!-- page content -->
                    <div class="right_col" id="i">
                  <!-- top tiles -->
                
                    
                  <!-- /top tiles -->

        		        <div class="col-md-9 col-lg-10 main" id="j">

                    <!--toggle sidebar button
                    <p class="hidden-md-up">
                        <button type="button" class="btn btn-primary-outline btn-sm" data-toggle="offcanvas"><i class="fa fa-chevron-left"></i> Menu</button>
                    </p>-->

                    <center>
                      <h1 class="display-4 d-none d-sm-block" id="i">
                          Welcome to KBP College
                      </h1>
                    </center>

                    <center>
                        <img src="img/61195-1024-500.png" alt="Mountain View" align="middle" style="width:90px;height:70px;">
                        <hr><hr>
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="http://www.couponscop.com/blog/wp-content/uploads/2015/10/10.jpg" alt="Los Angeles" style="width:800px;height:400px;">
    </div>

    <div class="item">
      <img src="https://www.du.edu/professional/media/images/educationbanner1-charlie.jpg" alt="Chicago" style="width:800px;height:400px;">
    </div>

    <div class="item">
      <img src="https://millshighschoolclubs.github.io/education%20banner.jpg" alt="New York" style="width:800px;height:400px;">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                       <!-- <frame>
                           <img src="http://www.universalef.org/images/educational-banner.jpg" alt="Mountain View" align="middle" style="width:1000px;height:400px;">
                        </frame>-->
                    </center>
                    <!--<div class="row mb-3">
                        <div class="col-xl-3 col-sm-6">
                            <div class="card bg-success text-white h-100">
                                <div class="card-body bg-success">
                                    <div class="rotate">
                                        <i class="fa fa fa-3x"></i>
                                    </div>
                                    <h1 class="text-uppercase">New Admission</h1><hr>
                                    <h3 class="display-4">10453</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="card text-white bg-danger h-100">
                                <div class="card-body bg-danger">
                                    <div class="rotate">
                                        <i class="fa fa fa-3x"></i>
                                    </div>
                                    <h1 class="text-uppercase">Total Students</h1><hr>
                                    <h3 class="display-4">870000</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="card text-white bg-info h-100">
                                <div class="card-body bg-info">
                                    <div class="rotate">
                                        <i class="fa fa fa-3x"></i>
                                    </div>
                                    <h1 class="text-uppercase">Boys</h1><hr>
                                    <h3 class="display-4">423000</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="card text-white bg-warning h-100">
                                <div class="card-body bg-warning">
                                    <div class="rotate">
                                        <i class="fa fa fa-3x"></i>
                                    </div>
                                    <h1 class="text-uppercase">Girls</h1><hr>
                                    <h3 class="display-4">423410</h3>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <!--/row-->

                    <hr>
                
              
                <!-- /page content -->



        <!--////////////////////////////////////////////////////////////////////-->


                  
                  
                

                   
                    </div><!--/row-->




        <!--////////////////////////////////////////////////////////////////////-->
                <!-- footer content -->
                <footer>
                  <div class="pull-right">
                   
                  </div>
                  <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
              </div>
            </div>
            </div>
        <?php include 'footer.php' ?>	
  </body>
</html>
