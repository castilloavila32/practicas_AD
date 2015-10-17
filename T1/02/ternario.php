
    
    
<?php 
		
	$permisos=$_GET['permisos'];
	$logueado = false;
	
	const login = 1;
	const acceso_empresariales = 1;
	const acceso_facturacion = 1;
	const escritura_empresariales = 1;
	const escritura_facturacion = 1;
	const administracion_permisos = 1;
	
	$permisos[0] == login?  $logeado=true: $logeado=false;
	
	if ($logeado)
	echo "Bienvenido pepe<br><br>";
	else
	echo "No estas registrado, puedes hacerlo en www.google.com<br><br>";
	
	
	if ($permisos[0] == login)
		echo "Tienes permiso pa loguearte<br><br>";
	else
		echo "No tienes permiso pa loguearte<br><br>";

		
	if ($permisos[1] == acceso_empresariales)
		echo "Tienes permiso pa acceder a datos empresariales<br><br>";
	else
		echo "No tienes permiso pa acceder a datos empresariales<br><br>";
			
		
	if ($permisos[2] == acceso_facturacion)
		echo "Tienes permiso pa acceder a datos de facturacion<br><br>";
	else
		echo "No tienes permiso pa acceder a datos de facturacion<br><br>";
		
	if ($permisos[3] == escritura_empresariales)
		echo "Tienes permiso pa escribir en datos empresariales<br><br>";
	else
		echo "No tienes permiso pa escribir en datos empresariales<br><br>";
		
	if ($permisos[4] == escritura_facturacion)
		echo "Tienes permiso pa escribir en datos de facturacion<br><br>";
	else
		echo "No tienes permiso pa escribir en datos de facturacion<br><br>";
		
	if ($permisos[5] == administracion_permisos)
		echo "Tienes permiso pa administrar permisos<br><br>";
	else
		echo "No tienes permiso pa administrar permisos<br><br>";				
		
		
		
		
	 ?>
    		
    
     
    

    
