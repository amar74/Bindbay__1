<!doctype html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Bindbay</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css"> -->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />
        <link rel="stylesheet" href="assets/css/roboto-webfont.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

	
	<style type="text/css">
            .row-centered {
                text-align:center;
            }
            .col-centered {
                display:inline-block;
                float:none;
                text-align:left;
                margin-right:-4px;
            }
            .pos{
                position: relative;
                top: 240px;
            } 
            </style>
    <style>
    @media (max-width: 1150px)
    {
        #myModal
        {
            overflow: scroll;
        }
    }
#nav {
    list-style:none inside;
    margin:0;
    padding:0;
    text-align:center;
    }
#result
{
    background: #59ba41;
    padding: 0 14px;
    font-size: 16px;
    height: 28px;
    line-height: 28px;
    color: #fff;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    border: none;
    text-shadow: 1px 1px 1px rgba(0,0,0,.2);
}
#nav li {
    display:block;
    position:relative;
    float:left;; /* menu background color */
    }

#nav li a {
    display:block;
    padding:0;
    text-decoration:none;
    width:100px; /* this is the width of the menu items */
    line-height:30px; /* this is the hieght of the menu items */
    color:#000000; /* list item font color */
    }

#nav li li a {font-size:90%;} /* smaller font size for sub menu items */

#nav li:hover {background:;} /* highlights current hovered list item and the parent list items when hovering over sub menues */


/*--- Sublist Styles ---*/
#nav ul {
    position:absolute;
    padding:0;
    left:0;
    display:none; /* hides sublists */
    }

#nav li:hover ul ul {display:none;} /* hides sub-sublists */

#nav li:hover ul {display:block;} /* shows sublist on hover */

#nav li li:hover ul {
    display:block; /* shows sub-sublist on hover */
    margin-left:200px; /* this should be the same width as the parent list item */
    margin-top:-35px; /* aligns top of sub menu with top of list item */
    }
</style>

	
	<style>
video {
    max-width: 100%;
    height: 400;
}

</style> 
	</head>
    <body>
	<!--	<div class='preloader'><div class='loaded'>&nbsp;</div></div> -->
        <!-- Sections -->
        <section id="social" class="social">
            <div class="container">
                <!-- Example row of columns -->
                <div class="row">
                    <div class="social-wrapper">
                        <div class="col-md-6">
                            <div class="social-icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="social-contact">
								<a href="#"><i class="fa fa-phone"></i>+91-9555443344</a>
                                <a href="#"><i class="fa fa-envelope"></i>info@bindbay.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /container -->       
        </section>

        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="assets/images/logo.png" alt="" height="30px;" width="199px;" /></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul id= "nav" class="nav navbar-nav navbar-right" >
                        <li><a href="index.php">Home</a></li>
                        <li style="color:#82ca9c"><a href="service.php">Service</a>
						   						   <ul>
						   <li><a href="hardbind.php"><strong>HARDBINDING</strong></a> </li>
						   <li><a href="softcopy.php"><strong>SOFTCOPY</strong></a> </li>
						   
						   </ul></li>
                        <li><a href="price.php">Booking</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="https://play.google.com/store/apps/details?id=com.bindbay.www.bindbay">GET APP</a></li>
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!--Home page style-->
        
<section>
<div>
</div>
</section>
</br>
</br>
<section id="choose" class="choose" style="margin-top:30px; margin-bottom:30px; margin-left:15px; margin-right:15px;">
    
    <!-- Modal -->
  <!-- <div class="modal fade in" id="myModal" role="dialog" style="display: block; padding-right: 16px;" aria-hidden="false"><div class="modal-backdrop fade in" style="height: 759px;"></div> -->
    
      <!-- Modal content-->
      
           <div class="modal-content"> <!-- style="width:1150px; height:400px; margin-left:210px; margin-top:25px; margin-bottom:10px; margin-right:10px;"> -->
        <form method="post" action="/Registration/registration.php">
        <div class="modal-header">
         <!--  <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          <center><h4 class="modal-title"> <strong style="font-size: 36px;">Calculate Price </strong> </br>Note* (Only Delivery in Greater Noida, Noida and Delhi-NCR in range 70 KM. Delivery Time Minimum 7 Days)   </h4> </center>
        </div>
        <div class="modal-body">
          <div class="row">
              <div class="col-md-3">
                  <div class="form-group">
                      <label><strong>Pages:</strong></label>
                        <input type="number" name="number" id="number" min="1" value="1" class="form-control">
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="form-group">
                      <label><strong>Copies:</strong></label>
                        <input type="number" name="copies" id="copies" min="1" value="1" class="form-control">
                  </div>
                  
            
              </div><div class="col-md-3">
                  <div class="form-group">
                      <label><strong>SELECT PAPER TYPE:</strong></label>
                        <select class="form-control" name="type" id="type">
                        <?php
                        $i=0;
                            $copies=array("75 GSM - Normal Paper","85 Gsm Bond","100 Gsm Bond","100 Silky White D.O Paper");
                            foreach($copies as $copie)
                            {
                                echo "<option value='$i'>$copie</option>";
                                $i++;
                            }
                        ?>
                    </select>
                  </div>
              </div>
          
            <div class="col-md-3">
                  <div class="form-group">
                      <label><strong>Select File color</strong></label>
                        <select class="form-control" name="fcolor" id="fcolor">
                            <?php
                            $covers=array("Mehroon","Black","Green","Blue");   
                            $i=0;
                                foreach($covers as $cover)
                                {   
                                    echo "<option value='$i'>$cover</option>";
                                    $i++;
                                }
                            ?>
                        </select>
                  </div>
              </div>
              </div>
          <div class="row">
               <div class="col-md-3">
                  <div class="form-group">
                      <label><strong>Size:</strong></label>
                        <select class="form-control" name="size" id="size">
                            <?php
                            $sizes=array("A4","A5");
                            $i=0;
                                foreach($sizes as $size)
                                {   
                                    echo "<option value='$i'>$size</option>";
                                    $i++;
                                }
                            ?>
                        </select>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="form-group">
                      <label><strong>Printed Color:</strong></label>
                        <select class="form-control" name="color" id="color">
                            <?php
                            $colors=array("Black & White","Full Color");
                            $i=0;
                                foreach($colors as $color)
                                {   
                                    echo "<option value='$i'>$color</option>";
                                    $i++;
                                }
                            ?>
                        </select>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="form-group">
                      <label><strong>Binding:</strong></label>
                        <select class="form-control" name="binding" id="binding">
                            <?php
                            $covers=array("None","Hard Binding (Rs.110)","Hard Binding With Golden Print (Rs.150)","Soft Binding Without Cover (Rs.25)","Soft Binding With Cover(Rs.45)","Spiral Binding(Rs.30)","Spiral Binding With Cover (Rs.45)");   
                            $i=0;
                                foreach($covers as $cover)
                                {   
                                    echo "<option value='$i'>$cover</option>";
                                    $i++;
                                }
                            ?>
                        </select>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="form-group">
                      <label><strong>Printing Sides:</strong></label>
                        <select class="form-control" name="side" id="side">
                            <?php
                            $sides=array("Single Sided","Double Sided");
                            $i=0;
                                foreach($sides as $side)
                                {  
                                    echo "<option value='$i'>$side</option>";
                                    $i++;
                                }
                            ?>
                        </select>
                  </div>
              </div>
          </div>
          <div  class="row">
              <div class="col-sm-6">
                  <span id="result"></span>
              </div>
          </div>
        </div>
        <div class="modal-footer" style="margin-right:150px;">
                    <button type="button" class="btn btn-default" id="btn-calculate">Calculate Price</button>
                    <button type="submit" class="btn btn-default" id="btn-submit"> Book now </button>
         </div>
         </form>
        </div>
      </div>
      <!--
    </div>
  </div> -->


    
</section>


      <section id="contact" class="client images">
	<!--	<div class="container">
		<div class="row">
		<marquee>
		<img src="assets/images/logo.png" alt="" height="30px;" width="199px;" />
		</marquee> 
		</div>
</div>
-->
<!-- End of Contact Section -->
<div style="width: 100%"><iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=16A%2CAmrit%20Puram%20Market%20Near%20Jagat%20Farm%20Gol%20Chakkar%20Gamma-1%20Greater%20Noida%2C%20UP%20-%20201308%2C%20India+(Bindbay)&ie=UTF8&t=&z=14&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.mapsdirections.info/en/custom-google-maps/">Bindbay Online Printing & Binding</a> by <a href="https://www.bindbay.com/">Bindbay Online Printing & Binding</a></iframe></div><br />
</section>

        <section id="footer-menu" class="sections footer-menu">
            <div class="container">
                <div class="row">
                    <div class="footer-menu-wrapper">

                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="menu-item">
                                    <h5>Quick Links</h5>
                                    <ul>
                                        <li>HARDBINDING</li>
                                        <li>HARDBINDING WITH GOLDEN PRINT</li>
                                        <li>SOFT BINDING</li>
                                        <li>SPIRAL BINDING</li>
                                        <li>OFFICIAL DOCUMENTS</li>
                                        <li>PRICE CALCULATE</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="menu-item">
                                    <h5>MENU</h5>
                                    <ul>
                                        <li>HOME</li>
                                        <li>SERVICE</li>
                                        <li>PRICE</li>
										<li>CONTACT</LI>
								    </ul>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="menu-item">
                                    <h5>Information</h5>
                                   <p>Established In 2018, At New Delhi, We “Bindbay” Are Known As The Popular Binding Service Provider In Delhi Ncr. In Our Service Range, We Offer Lather Book Binding, Rexine Book Binding, Project Report Binding, Thesis Book Binding, And Spiral Binding, Golden Embossing And Color / Black And White Printing Service....</p>                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="menu-item">
                                <h5>Book Now</h5>
                                <p>For booking Order</p>
                                <div class="input-group">
                                         <div class="center-content">
                                           <a href="Registration/registration.php"> <input type="submit" value="Call Back Request" class="btn btn-default"></a>
                                        </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--Footer-->
        <footer id="footer" class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-wrapper">

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-brand">
                                <img src="assets/images/logo.png" alt="" height="30px;" width="199px;" />
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="copyright">
                                <p class="margin-left-20"><span> Copyright</span> &nbsp© All rights reserved by <a href="http://bindbay.com"> Bindbay </a> &nbsp Developed by <a target="_blank" href="http://amarnath.gq"> Amarnath Rana </a></p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
		
		
		<div class="scrollup">
			<a href="#"><i class="fa fa-chevron-up"></i></a>
		</div>


        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/modernizr.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function()
            {
                $("select option:first-child").attr("selected","true");
                $("#btn-calculate").click(function()
                {
                    var size=$("#size").val();
                    var copies=$("#copies").val();
                    var type=$("#type").val();
                    var number=$("#number").val();
                    var color=$("#color").val();
                    var binding=$("#binding").val();
                    var side=$("#side").val();
                    if(binding!=0)
                    {
                    $.ajax({
                        url:"rateCalculat.php",
                        method:"post",
                        data:"data=asdf&size="+size+"&copies="+copies+"&type="+type+"&number="+number+"&color="+color+"&binding="+binding+"&side="+side,
                        success:function(data)
                        {
                            $("#result").html(data);
                        }
                    });
                    }
                    else
                    {
                        alert("Select Binding Type");
                    }
                });
                $("#btn-submit").click(function()
                {
                    if($("#binding").val()==0)
                    {
                        alert("Select Binding Type");
                        return false;
                    }
                    if(!$('#total').length > 0)
                    {
                        alert("Calculate Price Please");
                        return false;
                    }
                })
            });
        </script>
    </body>
</html>
