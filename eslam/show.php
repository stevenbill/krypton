<?php
date_default_timezone_set("Africa/Cairo");
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
	                 <h1><a href="index.html">Bootstrap Admin Theme</a></h1>
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


  		<div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">Bootstrap dataTables</div>
				</div>
  				<div class="panel-body">
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
						          <th>id</th>
                <th>firstname</th>
                <th>lastname</th>
                <th>phone</th>
                <th>email</th>
                <th>address1</th>
                <th>address2</th>
                <th>city</th>
                <th>country </th>
                <th>postcode </th>
                <th>Notes</th>
                <th>location</th>
                <th>Edit</th>
                <th>Delete</th>
							</tr>
						</thead>
						<tbody>
						    	                    <?php
                                             
$localhost="localhost";
$user_db="estasm5_yousry";
$pass_db="4562008";
$db="estasm5_sales";


$connect=mysql_connect("$localhost","$user_db","$pass_db");
mysql_set_charset('utf8');


mysql_select_db($db) ;
$sql="SELECT * FROM `testtable`";
$q=mysql_query($sql) ;          
          ?>
               <?php while($row3=mysql_fetch_array($q)){ ?>   
							<tr class="odd gradeX">
						             <?php
						             $id=$row3['id'];
			                 
			            echo "<td>". $row3['id']."</td>" ;
  echo "<td>". $row3['firstname']."</td>" ;
 echo "<td>". $row3['lastname']."</td>" ;
  echo "<td>". $row3['phone']."</td>" ;
  echo "<td>". $row3['email']."</td>" ;
  echo "<td>". $add=$row3['address1']."</td>" ;
  echo "<td>". $row3['address2']."</td>" ;
   echo "<td>". $row3['city']."</td>" ;
    echo "<td>". $row3['country']."</td>" ;
      echo "<td>". $row3['postcode']."</td>" ;
            echo "<td>". $row3['Notes']."</td>" ;
            
            
            
             //echo "<td>". $row3['country']."</td>" ;
 
     echo "<td>".
"<a  href=' https://www.google.com/maps/place/sanstafino/$add' target='_blank'> location </a> "
."</td>" ;

    
    echo "<td>".
"<a  href='edit-index.php?id=$id' target='_blank'> edit </a> "
."</td>" ;

      echo "<td>"."<a  href='Delete.php?id=$id'    target='_blank' >  delete</a> "."</td>" ;
           
            
			                
			              } 
			             ?>
							</tr>
						
					
						</tbody>
					</table>
  				</div>
  			</div>



		  </div>
		</div>
    </div>

  
      <link href="vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="vendors/datatables/js/jquery.dataTables.min.js"></script>

    <script src="vendors/datatables/dataTables.bootstrap.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/tables.js"></script>
  </body>
</html>