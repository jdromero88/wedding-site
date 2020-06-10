<?php
	error_reporting(E_ALL);
	ini_set('display_errors', '1'); 	
	require_once("sesion.class.php");

	$sesion = new sesion();
	
	if( isset($_POST["iniciar"]) )
	{
		
		$usuario = $_POST["usuario"];
		$password = $_POST["contrasenia"];
		
		if(validarUsuario($usuario,$password) == true)
		{			
			$sesion->set("usuario",$usuario);
			
			header("location: invitados.php");
		}
		else 
		{
			echo "Verifica tu nombre de usuario y contraseña";
		}
	}
	
	function validarUsuario($usuario, $password)
	{
		require_once("conexion.php");
		$consulta = "SELECT contrasenia FROM usuario WHERE nick = '$usuario';";
		$result = $conexion->query($consulta);	
		if($result->num_rows > 0)
		{
			$fila = $result->fetch_assoc();
			if( strcmp($password,$fila["contrasenia"]) == 0 )
				return true;						
			else					
				return false;
		}
		else
				return false;
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="Kelley and José Wedding, boda.">
<meta name="keywords" content="Kelley, Matney, José, Daniel, Romero, Vega, wedding, boda, familia, Paraguay, PY, USA, EEUU, EUA, iTec">
<meta name="author" content="José Daniel Romero Vega - Kelley H. Matney - iTec">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>..:: Kelley and José ::..</title>
<link rel="alternate" hreflang="en" href="http://kelleyandjose.com/" >
<link rel="alternate" hreflang="es" href="http://kelleyandjose.com/sp/" />


<link rel="icon" href="../images/favicon.png" type="image/x-icon"/>
<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="../css/accordion.css"/>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
	<script type="text/javascript" src="../js/jquery-2.1.1.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/jquery.timelinr-0.9.54.js"></script>
<style type="text/css">
form.login {

    background: none repeat scroll 0 0 #F1F1F1;

    border: 1px solid #DDDDDD;

    font-family: sans-serif;

    margin: 0 auto;

    padding: 20px;

    width: 278px;

    box-shadow:0px 0px 20px black;

    border-radius:10px;

}

form.login div {

    margin-bottom: 15px;

    overflow: hidden;

}

form.login div label {

    display: block;

    float: left;

    line-height: 25px;

}

form.login div input[type="text"], form.login div input[type="password"] {

    border: 1px solid #DCDCDC;

    float: right;

    padding: 4px;

}

form.login div input[type="submit"] {

    background: none repeat scroll 0 0 #DEDEDE;

    border: 1px solid #C6C6C6;

    float: right;

    font-weight: bold;

    padding: 4px 20px;

}

.error{

    color: red;

    font-weight: bold;

    margin: 10px;

    text-align: center;

}

</style>
</head>
<body>
    <header class="panel-heading">
        <nav class="navbar navbar-default" role="navigation">
          <div class="container-fluid" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" stry>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">
              </a>
            </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="http://www.kelleyandjose.com"><img alt="Kelley and José" src="../images/k-and-j.png" alt="Kelley and José" title="Kelley and José"></a></li>
                <li><a id="irArriba" href="index.php">HOME</a></li>
                <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">OUR WEDDING <span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="ourstory.php">OUR STORY</a></li>
                            <li><a href="ourwedding.php">OUR WEDDING</a></li>
                          </ul>
                </li>
                <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">DETAILS <span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="accommodations.php">ACCOMMODATIONS</a></li>
                            <li><a href="travelandtransportation.php">TRAVEL AND TRANSPORTATION</a></li>
                            <li><a href="thingstodo.php">THINGS TO DO</a></li>
                          </ul>
                </li>
                <li><a id="irServicios" href="photos.php">PHOTOS</a></li> 
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="sp/">ESPAÑOL</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>    
    </header>
    <!-- <div style="background:none; height:42px;"></div>separador-->
    <!--<div class="container" style="background-color:#fa9d8e; border-radius:9px 9px 9px 9px; -moz-border-radius:9px 9px 9px 9px; -webkit-border-radius:9px 9px 9px 9px;" >  --> <!-- Empieza Contenedor -->
	<div class="container"> <!-- Empieza Contenedor -->
        <section id="inicio">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div align="center">
                            <form name="frmLogin" class="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                              <div>
                               <div> <label>Usuario: </label> <input type="text" name = "usuario"/></div>
                                <div><label>Contraseña: </label> <input type="password" name = "contrasenia" /></div>
                                <div><input type="submit" name ="iniciar" value="Iniciar Sesion"/></div>
                              </div>
                            </form>
                        </div>
                    </div>          
                </div>            
            </div>

        </section>
    </div> <!-- Termina Contenedor -->
<!--    <div style="background:none; height:42px;"></div>separador-->
    <footer class="bs-docs-footer" role="contentinfo">
    	<div class="container">
			<p align="center">Kelley & José © 2015</p>
            <p align="center">Developed by <a href="http://www.itecparaguay.com" target="_blank"> <img class="img-responsive" src="../images/logo-developed-by-itec.png"/></a></p>   
        </div>
    </footer>  
</body>
</html>