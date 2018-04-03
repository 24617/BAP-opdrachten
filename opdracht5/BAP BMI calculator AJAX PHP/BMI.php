<?php
  $gewicht = $_GET["gewicht"];
  $lengte = $_GET["lengte_cm"];
  BMIcalc($gewicht,$lengte);


  function BMIcalc($gewicht,$lengte){
    $lengteM = $lengte * 0.1;
    $response = ($gewicht / ($lengteM * $lengteM) * 10);
    $response = round($response, 1);


    switch (true) {
      case ($response <= 18.5):
      echo "BMI: " . $response . "<br> Under 18.5 <br> Category: Underweight";
      break;

      case ($response >= 18.5 && $response <= 25):
      echo "BMI: " . $response . "<br> Between 18.5 / 25 <br> Category: Normal/Healthy";
      break;

      case ($response >= 25 && $response <= 27):
      echo "BMI: " . $response . "<br> Between 25 / 27 <br> Category: Light Overweight";
      break;

      case ($response >= 27 && $response <= 30):
      echo "BMI: " . $response . "<br> Between 27 / 30 <br> Category: Overweight";
      break;

      case ($response >= 30 && $response <= 40):
      echo "BMI: " . $response . "<br> Between 27 / 30 <br> Category: Obesity";
      break;

      case ($response >= 40):
      echo "BMI: " . $response . "<br> Between 27 / 30 <br> Category: Morbid Obesity";
      break;

      default:
      echo "BMI NOT FOUND <br> TRY AGAIN";
      break;
  }
}


/*
EERST MET IF STATEMENTS:
if ($response <= 18.5) {
  echo "BMI: " . $response . "<br> Under 18.5 <br> Category: Underweight";
}
elseif ($response >= 18.5 && $response <= 25) {
  echo "BMI: " . $response . "<br> Between 18.5 / 25 <br> Category: Normal/Healthy";
}
elseif ($response >= 25 && $response <= 27) {
  echo "BMI: " . $response . "<br> Between 25 / 27 <br> Category: Light Overweight";
}
elseif ($response >= 27 && $response <= 30) {
  echo "BMI: " . $response . "<br> Between 27 / 30 <br> Category: Overweight";
}
elseif ($response >= 30 && $response <= 40) {
  echo "BMI: " . $response . "<br> Between 27 / 30 <br> Category: Obesity";
}
elseif ($response >=40) {
  echo "BMI: " . $response . "<br> Between 27 / 30 <br> Category: Morbid Obesity";
}
*/

  ?>
