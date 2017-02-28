<!DOCTYPE html>
<html lang="en">
  <head>
   		<meta charset="utf-8">
      <title>RG Academy</title>
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
      <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet"/>
   		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
      <script>
          $(function () {
          $('.dropdown-toggle').dropdown();
          }); 
      </script> 
      <script>
        $(document).ready(function(){
        $('.dropdown-submenu a.test').on("click", function(e){
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
        });
        });
      </script>

       <script>
        $(document).ready(function(){
        $("#myBtn").click(function(){
        $("#myModal").modal();
        });
        });
      </script>

  </head>
  
  <body>
  		
      <div class="container">
  		  <img class="img-responsive" src="assets/New Logo for Website.png" class="img-rounded" alt="logo">
  		</div>
      <br>
      
  		<nav class="navbar navbar-inverse">
       
        <div class="container-fluid">
            
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            <a class="navbar-brand" href="#">RG ACADEMY</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav">
                <li><a href="bs.php">Home</a></li>
                
                <li class="dropdown">
                  <a class="dropdown-toggle"data-toggle="dropdown" href="#">About us <span class="caret"> </span> </a>
                  <ul class="dropdown-menu">
                    <li><a href="bs.php">About Academy</a></li>
                    <li><a href="faculty.php">Faculty Team</a></li>
                  </ul>
                </li>

                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Courses <span class="caret"> </span> </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-submenu">
                      <a class="test" tabindex="-1" class="dropdown-toggle" data-toggle="dropdown" class="trigger right-caret" href="#">JEE MAINS+ADVANCED<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                      <li><a tabindex="-1" href="X_Passing_students.php">X to XI Moving Students</a></li>
                      <li><a tabindex="-1" href="XI_Passing_students.php">XI to XII Moving Students</a></li>
                      <li><a tabindex="-1" href="XII_Passing_students.php">XII Pass Students</a></li>
                      </ul>
                    </li>
                    <li><a tabindex="-1" href="#">JEE MAINS</a></li>
                    <li><a tabindex="-1" href="fee_structure.php">Fee Structure</a></li>

                  </ul>
                </li>


               
               <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Exams Info <span class="caret"> </span> </a>
                  <ul class="dropdown-menu"> 
                    <li><a href="jee_m_a.php">JEE MAINS + ADVANCED</a></li>
                    <li><a href="BITSAT.php">BITSAT</a></li>
                    <li><a href="kvpy.php">KVPY</a></li>
                  </ul>
               </li>
               
                              
                <li><a href="#">Enquiry</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                  <li><a href="register.php"><span class="glyphicon glyhicon-user"></span> Register</a></li>
                  <li><a href="#" id="myBtn"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <!-- Modal -->
                  <div class="modal fade" id="myModal" role="dialog">
                      <div class="modal-dialog modal-sm">
    
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header" style="padding:35px 50px;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
                    </div>
                    <div class="modal-body" style="padding:40px 50px;">
                        <form role="form">
                          <div class="form-group">
                              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                               <input type="text" class="form-control" id="usrname" placeholder="Enter username">
                          </div>
            
                          <div class="form-group">
                            <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                            <input type="password" class="form-control" id="psw" placeholder="Enter password">
                          </div>
                          
                          <div class="checkbox">
                            <label><input type="checkbox" value="" checked>Remember me</label>
                          </div>
                          
                           <button type="submit" class="btn btn-success btn-block" style="background-color: #282828"><span class="glyphicon glyphicon-off"></span> Login</button>
                        </form>
                    </div>
        
                   <div class="modal-footer">
                              <p style="color: white">Not a member? <a href="#">Sign Up</a></p>
                              <p style="color: white">Forgot <a href="#">Password?</a></p>
                  </div>
                </div>
      
    </div>
  </div> 


               </ul>  
                   
            </div>
        </div>
        
        
      </nav>