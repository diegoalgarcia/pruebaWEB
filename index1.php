<?php   

  //var_dump(expression)

  require_once ("ClassOperacion.php");

  $operacion1 = new Operacion(10, 2);
  $operacion2 = new Operacion(100, 3);

  $totalSuma = $operacion1->getSuma();
  echo "Total Suma: ".$totalSuma;
  echo "<br>";

  $totalSuma = $operacion1->getResta();
  echo "Total Resta: ".$totalSuma;
  echo "<br>";

  $totalSuma = $operacion1->getMultiplicacion();
  echo "Total Multiplicación: ".$totalSuma;
  echo "<br>";

  $totalSuma = $operacion1->getDivision();
  echo "Total División: ".$totalSuma;
  echo "<br>";

  echo "=================================================== <br>";


  $totalSuma = $operacion2->getSuma();
  echo "Total Suma: ".$totalSuma;
  echo "<br>";

  $totalSuma = $operacion2->getResta();
  echo "Total Resta: ".$totalSuma;
  echo "<br>";

  $totalSuma = $operacion2->getMultiplicacion();
  echo "Total Multiplicación: ".$totalSuma;
  echo "<br>";

  $totalSuma = $operacion2->getDivision();
  echo "Total División: ".$totalSuma;
  echo "<br>";
?>