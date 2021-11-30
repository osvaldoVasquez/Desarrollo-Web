<html>
<head>
	<meta charset="utf-8">
	<title>OPCIONES</title>
    <meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<link href="Estilo.css" rel="stylesheet" type="text/css">
</head>

<body>

	<?php if (isset($_POST['btn_Ejercicio 1'])): ?>
	<center>
		<h2>Presione el Botón para Avanzar</h2>
		</center>
		<center>
       <form action="COVID-19.html" method="POST" >
       <input  type="submit" value="Seguir" > 
       </form></center>
	
	<?php endif ?>

	<?php if (isset($_POST['btn_Ejercicio 2'])): ?>
	<CENTER>
		<h2>Presione el Botón para Avanzar</h2>
		
		<center>
       <form action="Ejercicio2.php" method="POST" >
       <input  type="submit" value="Seguir" > 
       </form></center>
	
	<?php endif ?>

	

	<?php if (isset($_POST['btn_Ejercicio 3'])): ?>

<CENTER>
		<h2>Presione el Botón para Avanzar</h2>
		
		<center>
       <form action="Ejercicio3.html" method="POST" >
       <input  type="submit" value="Seguir" > 
       </form></center>
	
	<?php endif ?>

	<?php if (isset($_POST['btn_proveedores'])): ?>
		
		<h2>Presione el Botón para Avanzar</h2>
		</CENTER>
		<center>
       <form action="FProveedor.php" method="POST" >
       <input  type="submit" value="Seguir" > 
       </form></center>
	
	<?php endif ?>

	

	<?php if (isset($_POST['btn_venta'])): ?>

		<CENTER>
		<h2>Presione el Botón para Avanzar</h2>
		</CENTER>
		
		<center>
       <form action="FVentas.php" method="POST" >
       <input  type="submit" value="Seguir" > 
       </form></center>
	
	<?php endif ?>

	<?php if (isset($_POST['btn_entrega'])): ?>

		<CENTER>
		<h2>Presione el Botón para Avanzar</h2>
		</CENTER>
		
		<center>
       <form action="FEntrega.php" method="POST" >
       <input  type="submit" value="Seguir" > 
       </form></center>
	
	<?php endif ?>

	
	
</head>
<body>

</body>
</html>