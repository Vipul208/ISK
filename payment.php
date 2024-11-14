<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Tooplate">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>ISKCON GORAKHPUR</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" type="text/css" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/tooplate-artxibition.css">
    <script>
    function validateForm(){
        let amount = document.getElementById("amount").value; // number check, empty check
        let name = document.getElementById("name").value;  // can not be empty
        let pincode = document.getElementById("pincode").value; // number check 6 digit 
        let mobile = document.getElementById("mobile").value; // number check 10 digit
        let email = document.getElementById("email").value; // email check
        if (amount == ""){
            alert ("please enter amount in Rupees.");
            return false; 
        }
        if (name == ""){
            alert ("Name must be filled out.");
            return false; 
        }
        if (mobile == ""){
            alert ("Please enter mobile number.");
            return false; 
        }
        if (isNaN(amount)){
            alert ("Please enter a  valid amount.");
            return false; 
        }
        if (isNaN(mobile)){
            alert ("Please enter a  valid mobile number.");
            return false; 
        }
        if (isNaN(pincode)){
            alert ("Please enter a  valid pincode.");
            return false; 
        }        
        

    }
    </script>

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo"><img src="assets/images/logo.jpg"</a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
							<li><div class="btn-group">
                              <a href=""  class=" btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Courses <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="./bg.html">Bhagavad gita</a></li>
                                <li><a href="./dys.html">DYS</a></li>
                                <li><a href="/page.html">Gita in action</a></li>
                              </ul>
                            </div></li>
                            <li><div class="btn-group">
                              <a href=""  class=" btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Activities <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu" style="width: 200px" >
                                <li><a href="./activities.html">Festivals</a></li>
                                <li ><a href="./ffl.html">Food for life</a></li>
                                <li><a href="./pfk.html">Program for kids</a></li>
                                <li><a href="./gallary.html">Gallery </a></li>
                              </ul>
                            </div></a></li>
                            <li><a href="donate.html">Donate Us</a></li> 
                            <li><a href="contact.html">Contact Us</a></li> 
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <!-- ***** Review form starts here  ***** -->
<div class="contact-form">
     <form method="post" name="customerData" action="ccavRequestHandler.php" onsubmit="return validateForm()">
		<table width="55%" height="100" border='1' align="center"><caption><font size="4" color="blue"><b>Review Your Payment Details</b></font></caption></table>
			<table width="55%" height="100" align="center">
			    <?php
                $date = new DateTimeImmutable();
                $milli = (int)$date->format('Uv')-1506431100599;
                $oid = $milli - 200000100599;
                echo  "<tr>	<td><input type='hidden' name='tid' value={$milli} /></td></tr>";
                echo  "<tr>	<td><input type='hidden' name='order_id' value={$oid} /></td></tr>";
                ?>
				<tr>
					<td><input type="hidden" name="merchant_id" value="3124952"/></td>
				</tr>
				<tr>
					<td>Amount(In Rs)*	:</td><td><input type="text" name="amount" value="500" id="amount"/></td>
				</tr>
				<tr>
					<td><input type="hidden" name="currency" value="INR"/></td>
				</tr>
				<tr>
					<td><input type="hidden" name="redirect_url" value="https://www.iskcongorakhpur.com/success.php"/></td>
				</tr>
			 	<tr>
			 		<td><input type="hidden" name="cancel_url" value="https://www.iskcongorakhpur.com/success.php"/></td>
			 	</tr>
			 	<tr>
					<td><input type="hidden" name="language" value="EN"/></td>
				</tr>
		     	<tr>
		     		<td colspan="2">Billing information:</td>
		     	</tr>
		        <tr>
		        	<td>Name*	:</td><td><input type="text" name="billing_name" value="" id="name"/></td>
		        </tr>
                <tr>
		        	<td>Mobile Number*(+91)	:</td><td><input type="text" name="billing_tel" value="" id="mobile"/></td>
		        </tr>
		        <tr>
		        	<td>Address	:</td><td><input type="text" name="billing_address" value=""/></td>
		        </tr>
		        <tr>
		        	<td>City	:</td><td><input type="text" name="billing_city" value=""/></td>
		        </tr>
		        <tr>
		        	<td>State	:</td><td><input type="text" name="billing_state" value=""/></td>
		        </tr>
		        <tr>
		        	<td>Pincode	:</td><td><input type="text" name="billing_zip" value="" id="pincode"/></td>
		        </tr>
		        <tr>
		        	<td>Country	:</td><td><input type="text" name="billing_country" value="India"/></td>
		        </tr>
		        <tr>
		        	<td>Email	:</td><td><input type="text" name="billing_email" value="" id="email"/></td>
		        </tr>
		        <!--<tr>
		        	<td colspan="2">Shipping information(optional)</td>
		        </tr>
		        <tr>
		        	<td>Shipping Name	:</td><td><input type="text" name="delivery_name" value="Chaplin"/></td>
		        </tr>
		        <tr>
		        	<td>Shipping Address	:</td><td><input type="text" name="delivery_address" value="room no.701 near bus stand"/></td>
		        </tr>
		        <tr>
		        	<td>shipping City	:</td><td><input type="text" name="delivery_city" value="Hyderabad"/></td>
		        </tr>
		        <tr>
		        	<td>shipping State	:</td><td><input type="text" name="delivery_state" value="Andhra"/></td>
		        </tr>
		        <tr>
		        	<td>shipping Zip	:</td><td><input type="text" name="delivery_zip" value="425001"/></td>
		        </tr>
		        <tr>
		        	<td>shipping Country	:</td><td><input type="text" name="delivery_country" value="India"/></td>
		        </tr>
		        <tr>
		        	<td>Shipping Tel	:</td><td><input type="text" name="delivery_tel" value="9876543210"/></td>
		        </tr>
		        <tr>
		        	<td>Merchant Param1	:</td><td><input type="text" name="merchant_param1" value="additional Info."/></td>
		        </tr>
		        <tr>
		        	<td>Merchant Param2	:</td><td><input type="text" name="merchant_param2" value="additional Info."/></td>
		        </tr>
				<tr>
					<td>Merchant Param3	:</td><td><input type="text" name="merchant_param3" value="additional Info."/></td>
				</tr>
				<tr>
					<td>Merchant Param4	:</td><td><input type="text" name="merchant_param4" value="additional Info."/></td>
				</tr>
				<tr>
					<td>Merchant Param5	:</td><td><input type="text" name="merchant_param5" value="additional Info."/></td>
				</tr>
				<tr>
					<td>Promo Code	:</td><td><input type="text" name="promo_code" value=""/></td>
				</tr>
				<tr>
					<td>Vault Info.	:</td><td><input type="text" name="customer_identifier" value=""/></td>
				</tr>-->
		        <tr>
		        	<td></td><td><INPUT TYPE="submit" value="CheckOut"></td>
		        </tr>
	      	</table>
	      </form>
        </div>


    <!-- *** Subscribe *** -->
    <div class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h4>Subscribe Our Newsletter:</h4>
                </div>
                <div class="col-lg-8">
                    <form id="subscribe" action="" method="get">
                        <div class="row">
                          <div class="col-lg-9">
                            <fieldset>
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-3">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-dark-button">Submit</button>
                            </fieldset>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- *** Footer *** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="address">
                        <h4>Sri Krishna Janmastmi Festival Address</h4>
                        <span>Hotel Clarks Grand, <br>Basement Hall,Golghar <br>Gorakhpur</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="#">Info</a></li>
                            <li><a href="#">Venues</a></li>
                            <li><a href="#">Guides</a></li>
                            <li><a href="#">Videos</a></li>
                            <li><a href="#">Outreach</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="hours">
                        <h4>Open Hours</h4>
                        <ul>
                            <li>Daily Darshan : 4:00 AM to 9:00 PM</li>
                            <li>Sunday love feast: 5:00 PM to 8:30 PM</li>
                            <li>Daily Darshan Arati: 7:30 AM</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <p>.</p>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <p class="copyright">Copyright 2023 Iskcon 
                    
                    			
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="sub-footer">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="logo"><span>ISK<em>CON</em></span></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="menu">
                                    <ul>
                                        <li><a href="index.html" class="active">Home</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="activities.html">Activities</a></li>
                                        <li><a href="donate.html">Donate Us</a></li> 
                                        <li><a href="contact.html">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>