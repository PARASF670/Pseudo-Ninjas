<!--<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
-->
<!--gead-->
<!--
<?php 	
  /*  session_start();
    if(isset($_GET['wrong'])){
        if($_GET['wrong']==112)
            {
                session_destroy();
            }
    }elseif(isset($_SESSION['I_remember'])){
        $id=$_SESSION['I_remember'];
		header("Location: includes/addinto.inc.php?xb=".$id."&report=run");
	}*/
	
?>

</head>
<body class="bg-dark">
<div class="container-fluid">
                        <div class="row">
                                <div id="header">   
                                    <div class="title1">     
                                        <div class="col-md-12 float-right mx-auto  p-0 mt-0 bg-warning" >
                                        <img class="  float-left mt-0 ml-4" src="logo.png" alt=""/>      
                                <h4 class="mr-5 float-right font-weight-bold"><br>Atal Bihari Vajpayee Govt Institute of 
                                                    Engineering & Technology</h4><br><br><br>
                                        
                                <h6 class="mr-5 p-1 float-right">Pragatinagar, Shimla (H.P) - 171202</h6> 
                            
                        </div>
                </div>
                                </div>
                        </div><button class="btn btn-success float-right mt-2 ml-3"><a style="text-decoration: none; " class="text-dark" href="adminwars/">Admin</a></button>
                        <button class="btn btn-danger float-right mt-2"><a class="text-dark" href="teacher_time/">Teacher</a></button>
<div class="row">
<div class="col-md-6 p-5 bg-light mx-auto mt-5 ">
<h1 class="text-center">Login</h1>
<hr/>
<form action = "includes/addinto.inc.php" method="POST">
<label for="">Roll Number</label>
<input type="text" name="rollno" class="form-control" />
<label for="">Password</label>
<input  type="password" name="lpassword" class="form-control" />
<?php
	/*
    if(isset($_GET['wrong'])){
        if($_GET['wrong']=="empty"){
        	echo '<p style="color : red;">Column are empty!! </p>';
        }elseif($_GET['wrong']=="not"){
        	echo '<p style="color : red;">*The Roll Number or Password is incorrect. </p>';
    }
    }else{
        echo '<br>';
    }*/
?>
<input type="checkbox" name="remember_me" /> Remember me
<br>
<input type="submit" name="submit" value="Login" class="float-left btn btn-success mt-3" />
</form>
<a href="signup.php" class="float-right btn btn-success mt-3">Signup</a>
</a>
</form>
</div>
</div>

</body>
</html>
-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
<link rel="stylesheet" href="mainframe/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--gead-->
<?php   
   session_start();
    if(isset($_GET['wrong'])){
        if($_GET['wrong']==112)
            {
                session_destroy();
            }
    }elseif(isset($_SESSION['I_remember'])){
        $id=$_SESSION['I_remember'];
        header("Location: includes/addinto.inc.php?xb=".$id."&report=run");
    }
    
?>
</head>
<body class="bg-dark">
<div class="container-fluid">
                        <div class="row">
                                <div id="header">   
                                    <div class="title1">     
                                        <div class="col-md-12 float-right mx-auto  p-0 mt-0 bg-warning" >
                                        <img class="  float-left mt-0 ml-4" src="logo.png" alt=""/>  
                    <!--    <button class="navbar-toggler bg-danger" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon">Teacher Signin</span>
                        </button>
                        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                                <a href="" class="nav-link">Home</a>
                            </li>
                        <li class="nav-item Teacher">
                                <a href="" class="nav-link ">Teacher</a>
                            </li>
                        </ul>
                    </div>
                    </nav>
                    <!- NAV END -->            
                                <h4 class="mr-5 float-right font-weight-bold"><br>Atal Bihari Vajpayee Govt Institute of 
                                                    Engineering & Technology</h4><br><br><br>
                                        
                                <h6 class="mr-5 p-1 float-right">Pragatinagar, Shimla (H.P) - 171202</h6> 
                            
                        </div>
                </div>
                                </div>
                        </div><a href="adminwars.php" class="btn btn-success float-right mt-2 ml-3">Admin</a>
                        <a href="teacher_time/" class="btn btn-danger float-right mt-2">Teacher</a>
                        <br>
        <div class="row">
        <div class="col-md-4 p-4 bg-light mx-auto float-left mt-5 ">
                                    <div class="head1 mt-0 p-2">Please Login</div>
                                    <hr/>
                                    <a href="Guideline.pdf"class="text-Primary">Guidelines for students regarding Notes</h1></a>
                                    <hr/>
                                    <form action = "includes/addinto.inc.php" method="POST">
                                    <label for="">Roll Number</label>
                                    <input type="text" name="rollno" class="form-control" />
                                    <label for="">Password</label>
                                    <input type="password" name="lpassword" class="form-control" />
           
<?php
    if(isset($_GET['wrong'])){
        if($_GET['wrong']=="empty"){
            echo '<p style="color : red;">Column are empty!! </p>';
        }else{
            echo '<p style="color : red;">*The Roll Number or Password is incorrect. </p>';
    }
    }else{
        echo '<br>';
    }
?>
<input type="checkbox" name="remember_me" /> Remember me
<br>
<input type="submit" name="submit" value="Login" class="float-left btn btn-success mt-3" />
</form>
<a href="signup.php" class="float-right btn btn-danger mt-3">Signup</a>
</a>
</form>
</div>
</div><br/><br/><br/>
<hr width="85%" class="border border-danger" /> 
       <div class="row"><br/><br/>
        <div class=" col-lg-12 font-weight-bold  text-right bg-light text-secondary"><br><br/><br/> Designed and Developed by Moksh,Nishant,Riya,Sakshi
                 <br><br>
        </div>
    </div>
</div>

</body>
</html>