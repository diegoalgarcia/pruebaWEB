<?php
 
 require_once("../controllers/ClassEmpleado.php");
 require_once("../controllers/ClassCliente.php");
   // require_once("autoload.php");

 $objEmpleado = new Empleado(12345,'Top Model',27);
 $objEmpleado->setPuesto("Administrador");
 $objEmpleado->setMensaje("Bienvenido Empleado");

 echo $objEmpleado->getMensaje();
 echo $objEmpleado->getDatosPersonales();
 echo "Puesto" .$objEmpleado->getPuesto();
/**/
echo "<br>";
 $objCliente = new Cliente(78978,'Elena Castillo',20);
 $objCliente->setCredito(10000);

 echo "<br>";
 $objCliente->setMensaje("Bienvenido Cliente");
 echo $objCliente->getMensaje();
 echo $objCliente->getDatosPersonales();
 echo "Credítos" . $objCliente->getCredito() . "<br>" ;

 




?>