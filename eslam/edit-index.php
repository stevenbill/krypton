<?php
date_default_timezone_set("Africa/Cairo");
$localhost="localhost";
$user_db="estasm5_yousry";
$pass_db="4562008";
$db="estasm5_sales";


$connect=mysql_connect("$localhost","$user_db","$pass_db");
mysql_set_charset('utf8');
if ($connect) {

mysql_select_db($db) or die("db selction error ");
}




$id=$_GET["id"];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address1=$_POST['address1'];
$address2=$_POST['address2'];
$city=$_POST['city'];
$country=$_POST['country'];
$Postcode=$_POST['Postcode'];
$notes=$_POST['notes'];

if($_POST['send']){
    

echo $sql="UPDATE `testtable` SET `firstname`='$firstname',`lastname`='$lastname',`phone`='$phone',`email`='$email',`address1`='$address1',`address2`='$address1',`city`='$city',`country`='$country',`postcode`='$Postcode',`Notes`='$notes' WHERE id='$id' "; 

mysql_query($sql);

echo "<script type='text/javascript'>alert('Your update been sent successfully! ');</script>";

}

/**********************************************************************************/
$id=$_GET["id"];

$sql4="SELECT * FROM testtable where id='$id' " ;
$q4=mysql_query($sql4) ;

    while($row3=mysql_fetch_array($q4)){
    $firstname= $row3['firstname'] ;
$lastname= $row3['lastname'] ;
 $phone=$row3['phone'] ;
 $email=$row3['email'] ;
  $address1=$row3['address1'] ;
$address2=$row3['address2'];
  $city=$row3['city'] ;
  $country=$row3['country'] ;
      $Postcode= $row3['postcode'] ;
    echo $notes= $row3['Notes'] ;
            

    }

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link href="vendors/select/bootstrap-select.min.css" rel="stylesheet">
    <link href="vendors/tags/css/bootstrap-tags.css" rel="stylesheet">

    <link href="css/forms.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="header">
       <div class="container">
          <div class="row">
             <div class="col-md-5">
                <!-- Logo -->
                <div class="logo">
                   <h1><a href="show.php">Welcom to edit  </a></h1>
                </div>
             </div>
             <div class="col-md-5">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="input-group form">
                         <input type="text" class="form-control" placeholder="Search...">
                         <span class="input-group-btn">
                           <button class="btn btn-primary" type="button">Search</button>
                         </span>
                    </div>
                  </div>
                </div>
             </div>
             <div class="col-md-2">
                <div class="navbar navbar-inverse" role="banner">
                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                      <ul class="nav navbar-nav">
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
                          <ul class="dropdown-menu animated fadeInUp">
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="login.html">Logout</a></li>
                          </ul>
                        </li>
                      </ul>
                    </nav>
                </div>
             </div>
          </div>
       </div>
  </div>

    <div class="page-content">
      <div class="row">
      <div class="col-md-2">
        <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                 
                    <li><a href="show.php"><i class="glyphicon glyphicon-list"></i> show data</a></li>
                  
                    <li class="submenu">
                        
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="signup.html">Signup</a></li>
                        </ul>
                    </li>
                </ul>
             </div>
      </div>
      <div class="col-md-10">

          <div class="row">
            <div class="col-md-6">
              <div class="content-box-large">
                <div class="panel-heading">
                      <div class="panel-title">Enter your information </div>
                    
                      <div class="panel-options">
                        <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                      </div>
                  </div>
                <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST" action="edit-index.php?id=<?php echo $id;?>">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">First Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="<?php echo $firstname ?>" name="firstname" placeholder="First Name" pattern="[a-zA-ZS]+">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label"> Last Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" value="<?php echo $lastname ?>" name="lastname" placeholder="Last Name"  pattern="[a-zA-ZS]+">
                    </div>
                  </div>


                       <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label"> Phone</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="phone" id="inputPassword3" value="<?php echo $phone ?>" placeholder="Phone"  pattern="^0[23]{1}[\s]{0,1}[\-]{0,1}[\s]{0,1}[1-9]{1}[0-9]{6}$">
                    </div>
                  </div>

                       <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label"> Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputPassword3" name="email" value="<?php echo $email ?>" placeholder="Email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                    </div>
                  </div>

                       <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Address 1</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" name="address1" value="<?php echo $address1 ?>"  placeholder="Address1">
                    </div>
                  </div>

            

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Address 2</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" name="address2" value="<?php echo $address2 ?>" placeholder="Address 2">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">city</label>
                    <div class="col-sm-10">
                  <select class="form-control" id="select-1" name="city" >
                      
                         <option value="<?php echo $city ?>"><?php echo $city ?>  </option>
                         
                          <option>Amsterdam</option>
                          <option>Atlanta</option>
                          <option>Baltimore</option>
                          <option>Boston</option>
                          <option>Buenos Aires</option>
                          <option>Calgary</option>
                          <option>Chicago</option>
                          <option>Denver</option>
                          <option>Dubai</option>
                          <option>Frankfurt</option>
                          <option>Hong Kong</option>
                          <option>Honolulu</option>
                          <option>Houston</option>
                          <option>Kuala Lumpur</option>
                          <option>London</option>
                          <option>Los Angeles</option>
                          <option>Melbourne</option>
                          <option>Mexico City</option>
                          <option>Miami</option>
                          <option>Minneapolis</option>
                        </select> 
                    </div>

                  </div>
                   <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">country</label>
                    <div class="col-sm-10">
               <select class="form-control" id="select-1" name="country" >
                   
                      <option value="<?php echo $country ?>"><?php echo $country ?>  </option>
                      
                          <option>Amsterdam</option>
                          <option>Atlanta</option>
                          <option>Baltimore</option>
                          <option>Boston</option>
                          <option>Buenos Aires</option>
                          <option>Calgary</option>
                          <option>Chicago</option>
                          <option>Denver</option>
                          <option>Dubai</option>
                          <option>Frankfurt</option>
                          <option>Hong Kong</option>
                          <option>Honolulu</option>
                          <option>Houston</option>
                          <option>Kuala Lumpur</option>
                          <option>London</option>
                          <option>Los Angeles</option>
                          <option>Melbourne</option>
                          <option>Mexico City</option>
                          <option>Miami</option>
                          <option>Minneapolis</option>
                        </select> 
                    </div>
                  </div> 

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Postcode</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" value="<?php echo $Postcode ?>" name="postcode" placeholder="Postcode" pattern="[0-9]{5}" >
                    </div>
                  </div>



                  <div class="form-group">
                    <label class="col-sm-2 control-label">Notes</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" name="
                      notes" placeholder="Notes" rows="3"  >
                          <?php echo $notes ?>
                      </textarea>
                    </div>
                  </div>
                 
                
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <input type="submit" name="send" class="btn btn-primary" value="Save">
                    </div>
                  </div>

                </form>
                </div>
              </div>
            </div>
      
     

        <!--  Page content -->
      </div>
    </div>
    </div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2014 <a href='#'>Website</a>
            </div>
            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="vendors/form-helpers/js/bootstrap-formhelpers.min.js"></script>

    <script src="vendors/select/bootstrap-select.min.js"></script>

    <script src="vendors/tags/js/bootstrap-tags.min.js"></script>

    <script src="vendors/mask/jquery.maskedinput.min.js"></script>

    <script src="vendors/moment/moment.min.js"></script>

    <script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

     <!-- bootstrap-datetimepicker -->
     <link href="vendors/bootstrap-datetimepicker/datetimepicker.css" rel="stylesheet">
     <script src="vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script> 


    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
  <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/forms.js"></script>
  </body>
</html>
