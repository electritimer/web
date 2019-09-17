<?php
$busqueda = $_GET["busqueda"]; 
?>
<?php
$palabraclave = $_GET["palabraclave"]; 
?>

<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)


Diseñado por José Manuel Lourido
http://www.atycocene.com

-->


<html>
	<head>
		<title>Blog Energyatyco. El control horario de la energía. Enchufe Discriminador horario inteligente. Atycodomo )))</title>
		<meta charset="charset=ISO-8859-1" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	<link href="imagenes/favicon.ico" rel="shortcut icon" type="image/x-icon">

</head>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44958413-1', 'atycocene.com');
  ga('send', 'pageview');

</script>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53e74d8d5979d8da"></script>


<script src="cookie.js"></script>
<div id="cookieatyco" style="text-align:center;display:none;position:fixed;left:0px;right:0px;bottom:0px;width:100%;min-height:10%;background: #333333;color:#dddddd;z-index: 99999;">
Esta web utiliza cookies propias y de terceros para mejorar su experiencia en la navegación.
<br>
Al utilizar nuestros servicios, aceptas el uso que hacemos de las cookies.
 <a href="javascript:void(0);" style="padding:4px;background:#4682B4;text-decoration:none;color:#fff;" onclick="PonerCookie();"><b>OK</b></a>
 <a href="cookiesatycocene.pdf" target="_blank" style="padding-left:5px;text-decoration:none;color:#ffffff;">Más información</a>
</div>


<script>
function getCookie(c_name){
 var c_value = document.cookie;
 var c_start = c_value.indexOf(" " + c_name + "=");
 if (c_start == -1){
  c_start = c_value.indexOf(c_name + "=");
 }
 if (c_start == -1){
  c_value = null;
 }else{
  c_start = c_value.indexOf("=", c_start) + 1;
  var c_end = c_value.indexOf(";", c_start);
  if (c_end == -1){
   c_end = c_value.length;
  }
  c_value = unescape(c_value.substring(c_start,c_end));
 }
 return c_value;
}
function setCookie(c_name,value,exdays){
 var exdate=new Date();
 exdate.setDate(exdate.getDate() + exdays);
 var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
 document.cookie=c_name + "=" + c_value;
}
if(geoip_country_code()=="ES" && getCookie('aviso')!="1"){
 document.getElementById("cookieatyco").style.display="block";
}
function PonerCookie(){
 setCookie('aviso','1',365);
 document.getElementById("cookieatyco").style.display="none";
}
</script>


	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
	

<h1 id="logo"><a href="energyatyco.html"><img src="imagenes/energyatyco.png" width=100 height=92 alt="energyatyco" /></a></h1>


<nav id="nav">
						<ul>

							<li>
								<a href="energyatyco.html">energyatyco</a>
								<ul>
									<li><a href="http://www.atycocene.com/blog.php?palabraclave=&submit=Buscar&busqueda=Dom%F3tica">Blog</a></li>
									<li><a href="http://www.atycocene.com/forum/portal.php">Foro</a></li>
									<li><a href="atycodomo.html">Atycodomo )))</a></li>
									<li>
										<a href="#">Usuarios</a>
										<ul>
											<li><a href="http://www.atycocene.com:3000">Api</a></li>
											<li><a href="http://www.atycocene.com/avisosordenes.php">Avisos y órdenes</a></li>
											<li><a href="http://www.atycocene.com/panel.php">Panel de control</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="registroenergyatyco.html">Registrarse</a></li>
							<li><a href="energyatycomovil.php" class="button special">Acceder</a></li>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
			<div class="content">
		<header>





<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<form action="dejacomentariosadmin.php" method="post">
<?php
include "conexion.php";


mysql_select_db('clientes', $conexion); // selecciona la base de datos

//$_pagi_sql = mysql_query("SELECT usuario, titulo, comentario, fecha, imagen, categoria FROM comentarios ORDER BY fecha DESC"); // selecciono todos los registros de la tabla usuarios, ordenado por nombre

$_pagi_sql = "SELECT * FROM comentarios WHERE categoria LIKE '%$busqueda%' and (titulo LIKE '%$palabraclave%' or comentario LIKE '%$palabraclave%') ORDER BY fecha DESC"; 

$_pagi_propagar = array("busqueda" => "busqueda", "palabraclave" => "palabraclave");
//cantidad de resultados por página (opcional, por defecto 20) 
$_pagi_cuantos = 5; 
//Incluimos el script de paginación. Éste ya ejecuta la consulta automáticamente 
include("paginator.inc.php"); 
//Leemos y escribimos los registros de la página actual 
while($row = mysql_fetch_array($_pagi_result)){

//while ($registro = mysql_fetch_array($tabla)) { // comienza un bucle que leera todos los registros y ejecutara las ordenes que siguen



$cadena_origen= $row['comentario'] . ' ';
$cadena_resultante=preg_replace("/((http|https|www)[^\s]+)/", '<a target="_blank" href="$1">$0</a>', $cadena_origen);



echo "<div align=center>";

echo '<font color="A52A2A"face="arial" size="6%">';
echo $row['titulo'] . ' ';
echo '</font>';
$titulo= $row['titulo'];
echo "<br>";
echo "<br>";
echo $row['imagen'] . ' ';
$imagen= nl2br($row['imagen']. ' ');
echo "<br>";
echo '<font color="#A4A4A4">';
echo "<br>";
echo '<font color="#848484"face="arial" size="4%">';


echo "<br>";
echo "<td align='justify'>"; 
echo nl2br($cadena_resultante);
echo "</br>";


echo '</font>';
echo "</div>";

echo "<div align=left>";
echo "<br>";
echo '<font color="#848484"face="arial" size="2%">';
echo $row['fecha'] . ' ';
echo '</font>';
$fecha= $row['fecha'];
echo '</font>';
echo "<br>";
echo '<font color="A52A2A">Usuario:</font>';
echo '<font color="#848484"face="arial" size="3%">';
echo $row['usuario'] . ' ';
echo '</font>';
echo "<br>";
echo '<font color="A52A2A">Categoría:</font>';
echo '<font color="#848484"face="arial" size="3%">';
echo $row['categoria'] . ' ';
$categoria= $row['categoria'];
echo '</font>';
echo "</div>";



echo '<a href="#blogg" title="Comentar"> <img src="images/comentario.png" width="50" height="50" alt="comentar"></a>';
$enlacef = "http://www.atycocene.com/blogf.php?palabraclave=".$titulo;
echo '<a target="blank" href="'.$enlacef.'"> <img src="images/comparte.png" width="50" height="50" alt="compartir" title="Compartir o editar"></a>';
echo '<font color="red"> <hr> </font>';


// fin 

}
echo '<font color="A52A2A">';
echo"<p>".$_pagi_navegacion."</p>";
echo '</font>';

mysql_free_result($tabla); // libera los registros de la tabla

include "cerrar_conexion.php";
?>

</form>




<form action="blog.php" method="get">

<br>
Búsqueda: <input type="text" value="<?php echo $_GET['palabraclave']; ?>" size="30" name="palabraclave" id="clave"><input type="submit" value="Buscar" name="submit">Categoría:

<select name="busqueda" id="busque">
<option value=<?php echo $_GET['busqueda']; ?>><?php echo $_GET['busqueda']; ?></option> 
<option value="Fotografía">Fotografía</option>
<option value="Arquitectura">Arquitectura</option>
<option value="Domótica">Domótica</option>
<option value="Informática">Informática</option>  
<option value="Dibujo">Dibujo</option>
<option value="Construcción">Construcción</option>
<option value="Comentarios">Comentarios</option>
<option value=""></option>
</select>

</form>



<script>
function getCookie(c_name){
 var c_value = document.cookie;
 var c_start = c_value.indexOf(" " + c_name + "=");
 if (c_start == -1){
  c_start = c_value.indexOf(c_name + "=");
 }
 if (c_start == -1){
  c_value = null;
 }else{
  c_start = c_value.indexOf("=", c_start) + 1;
  var c_end = c_value.indexOf(";", c_start);
  if (c_end == -1){
   c_end = c_value.length;
  }
  c_value = unescape(c_value.substring(c_start,c_end));
 }
 return c_value;
}
function setCookie(c_name,value,exdays){
 var exdate=new Date();
 exdate.setDate(exdate.getDate() + exdays);
 var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
 document.cookie=c_name + "=" + c_value;
}
if(geoip_country_code()=="ES" && getCookie('aviso')!="1"){
 document.getElementById("cookieatyco").style.display="block";
}
function PonerCookie(){
 setCookie('aviso','1',365);
 document.getElementById("cookieatyco").style.display="none";
}
</script>

<!-- enlace comentarios Google -->
<br>
<br>
<a name="blogg"</a>
<h1>Comentarios sobre los artículos del Blog</h1>
<br>
<script src="https://apis.google.com/js/plusone.js"></script>  

<div class="g-comments"
    data-href="http://www.atycocene.com/comentarios.php"
    data-width="600"
    data-first_party_property="BLOGGER"
    data-view_type="FILTERED_POSTMOD">
</div>





</div>
</div>

<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="https://twitter.com/atycodomo" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://www.facebook.com/Atyco-Cene-SL-158073650900143/" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="https://github.com/atycocene" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="contactoenergyatyco.html" class="icon alt fa-envelope" target="blannk" ><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; energyatyco. All rights reserved.</li>
<li><a href="cookiesatycocene.pdf" target="_blank">Politica de privacidad. Información y política de Cookies</a></li>
<li>Design: <a href="http://www.atycocene.com/cartapresentacion.html" target="blank">José Manuel Lourido</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>

