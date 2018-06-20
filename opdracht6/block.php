<?php
print "<form method='post'>    <input type='submit' name='test' id='test' value='Dobbel!' /><br/> </form>";

if (array_key_exists('test',$_POST)){
for ($i = 0;$i <= 4; $i++) {

$RandomCube = rand(1,6);
create_image($RandomCube, $i);

$aWorp[$i] = $RandomCube;
print "<img src=$RandomCube.png?" . date("U") . ">";

/*
$RandomTriangle = rand(1,7);
create_Triangle($RandomTriangle);
print "<img src=$RandomTriangle.png?".date("U").">";
*/

}}

/*
function  create_Triangle($RandomTriangle){
  $ImageTriangle = @imagecreate(200, 200) or die("Cannot Initialize new GD image stream");
  $x = 50;
  $y = 50;
  $radius = 20;
  $points = array(
              $x-$radius, $y+$radius,
              $x+$radius, $y+$radius,
              $x, $y- $radius
            );
  $color = imagecolorallocate($ImageTriangle, 0, 0, 0);
  $color_background = imagecolorallocate($ImageTriangle, 255, 0, 255);
  imagefilledrectangle($ImageTriangle, 0 , 0 , 249, 249, $color);
  imagefilledpolygon($ImageTriangle, $points, 3, $color_background);



  if (($RandomTriangle == 6) || ($RandomTriangle == 7))
  {

  }
  if (($RandomTriangle == 1) || ($RandomTriangle == 3) || ($RandomTriangle == 5) || ($RandomTriangle == 7))
  {

  }

  if (($RandomTriangle == 2) || ($RandomTriangle == 3) || ($RandomTriangle == 4) || ($RandomTriangle == 5) || ($RandomTriangle == 6) || ($RandomTriangle == 7))
  {

  }
  if (($RandomTriangle == 4) || ($RandomTriangle == 5) || ($RandomTriangle == 6) || ($RandomTriangle == 7))
  {

  }



  imagepng($ImageTriangle,"$RandomTriangle.png");
  imagedestroy($ImageTriangle);
}
*/

function  create_image($RandomCube, $Number){
        $im1 = @imagecreate(200, 200) or die("Cannot Initialize new GD image stream");
        $background_color = imagecolorallocate($im1, 0, 0, 0);
        $Circle1 = imagecolorallocate($im1, 255, 255, 255);


/*
        switch ($RandomCube) {
        case 6: case 7;
        imagefilledellipse($im1, 50, 100, 40, 40, $Circle1);
        imagefilledellipse($im1, 150, 100, 40, 40, $Circle1);


        case 1: case 3: case 5: case 7:
        imagefilledellipse($im1, 100, 100, 40, 40, $Circle1);


        case 2: case 3: case 4: case 5: case 6: case 7:
        imagefilledellipse($im1, 50, 50, 40, 40, $Circle1);
        imagefilledellipse($im1, 150, 150, 40, 40, $Circle1);

        case 4: case 5: case 6: case 7;
        imagefilledellipse($im1, 50, 150, 40, 40, $Circle1);
        imagefilledellipse($im1, 150, 50, 40, 40, $Circle1);


      }
*/

      if (($RandomCube == 6))
      {
        imagefilledellipse($im1, 50, 100, 40, 40, $Circle1);
        imagefilledellipse($im1, 150, 100, 40, 40, $Circle1);
      }
      if (($RandomCube == 1) || ($RandomCube == 3) || ($RandomCube == 5))
      {
        imagefilledellipse($im1, 100, 100, 40, 40, $Circle1);
      }
      if (($RandomCube == 2) || ($RandomCube == 3) || ($RandomCube == 4) || ($RandomCube == 5) || ($RandomCube == 6))
      {
        imagefilledellipse($im1, 50, 50, 40, 40, $Circle1);
        imagefilledellipse($im1, 150, 150, 40, 40, $Circle1);
      }
      if (($RandomCube == 4) || ($RandomCube == 5) || ($RandomCube == 6))
      {
        imagefilledellipse($im1, 50, 150, 40, 40, $Circle1);
        imagefilledellipse($im1, 150, 50, 40, 40, $Circle1);
      }

        imagepng($im1,"$RandomCube.png");
        imagedestroy($im1);
}

function analyse($aWorp) {
  $aScore = array (0,0,0,0,0,0,0,0);
  for ($i = 1 ; $i <= 6 ; $i++) {
    for ($j = 0 ; $j <5 ; $j++) {
      if ($aWorp[$j] == $i) {
        $aScore[$i]++;
      }}}
      return $aScore;
      return $aWorp;


}

function PokerOrNot($aScore, $aWorp) {

      print("<br>" . "de worp ");
      for ($i = 0;$i <= 4; $i++) { print($aWorp[$i]); }
      print("<br>" . "de worp gestorteed ");
      for ($i = 0;$i <= 4; $i++) { sort($aWorp); print($aWorp[$i]); }
      print("<br>" . "aantal keren dat het getal voorkomt niet gestorteerd ");
      for ($i = 1;$i <= 6; $i++) { print($aScore[$i]); }
      print("<br>" . "aantal keren dat het getal voorkomt gesorteerd ");
      for ($i = 0;$i <= 5; $i++) { rsort($aScore); print($aScore[$i]); }
      print("<br>");

      if (($aScore[0] == 5)) {
        print("POKER!"); } else
      if (($aScore[0] == 4) && ($aScore[1] == 1 || $aScore[2] == 2 ))  {
        print("4 OF A KIND!"); } else
      if (($aScore[0] == 3) && ($aScore[1] == 2))  {
        print("FULL HOUSE!"); } else
      if (($aScore[0] == 3) && ($aScore[1] == 1))  {
        print("3 OF A KIND!"); } else
      if (($aScore[0] == 2) && ($aScore[1] == 2))  {
        print("2 PAIR!"); } else
      if (($aScore[0] == 2) && ($aScore[1] == 1))  {
        print("1 PAIR!"); } else


      if ((($aWorp[0] == 1) && ($aWorp[1] == 2) && ($aWorp[2] == 3) && ($aWorp[3] == 4) && ($aWorp[3] == 6)) ||
         (($aWorp[0] == 1) && ($aWorp[1] == 1) && ($aWorp[2] == 2) && ($aWorp[3] == 3) && ($aWorp[4] == 4)) ||
         (($aWorp[0] == 1) && ($aWorp[1] == 2) && ($aWorp[2] == 2) && ($aWorp[3] == 3) && ($aWorp[4] == 4)) ||
         (($aWorp[0] == 1) && ($aWorp[1] == 2) && ($aWorp[2] == 3) && ($aWorp[3] == 3) && ($aWorp[4] == 4)) ||
         (($aWorp[0] == 1) && ($aWorp[1] == 2) && ($aWorp[2] == 3) && ($aWorp[3] == 4) && ($aWorp[4] == 4)) ||
         (($aWorp[0] == 2) && ($aWorp[1] == 2) && ($aWorp[2] == 3) && ($aWorp[3] == 4) && ($aWorp[4] == 5)) ||
         (($aWorp[0] == 2) && ($aWorp[1] == 3) && ($aWorp[2] == 3) && ($aWorp[3] == 5) && ($aWorp[4] == 6)) ||
         (($aWorp[0] == 2) && ($aWorp[1] == 3) && ($aWorp[2] == 4) && ($aWorp[3] == 4) && ($aWorp[4] == 5)) ||
         (($aWorp[0] == 2) && ($aWorp[1] == 3) && ($aWorp[2] == 4) && ($aWorp[3] == 5) && ($aWorp[4] == 5)) ||
         (($aWorp[0] == 3) && ($aWorp[1] == 3) && ($aWorp[2] == 4) && ($aWorp[3] == 5) && ($aWorp[4] == 6)) ||
         (($aWorp[0] == 3) && ($aWorp[1] == 4) && ($aWorp[2] == 4) && ($aWorp[3] == 5) && ($aWorp[4] == 6)) ||
         (($aWorp[0] == 3) && ($aWorp[1] == 4) && ($aWorp[2] == 5) && ($aWorp[3] == 5) && ($aWorp[4] == 6)) ||
         (($aWorp[0] == 3) && ($aWorp[1] == 4) && ($aWorp[2] == 5) && ($aWorp[3] == 6) && ($aWorp[4] == 6)) ||
         (($aWorp[0] == 1) && ($aWorp[1] == 3) && ($aWorp[2] == 4) && ($aWorp[3] == 5) && ($aWorp[3] == 6))) {
        print(" & STRAIGHT SMALL!"); } else

      if ((($aWorp[0] == 1) && ($aWorp[1] == 2) && ($aWorp[2] == 3) && ($aWorp[3] == 4) && ($aWorp[4] == 5)) ||
         (($aWorp[0] == 2) && ($aWorp[1] == 3) && ($aWorp[2] == 4) && ($aWorp[3] == 5) && ($aWorp[4] == 6))) {
           print("STRAIGHT LARGE!"); } else {
             print("YOU GOT NOTHING!");
           }






}


$aScore = analyse($aWorp);
PokerOrNot($aScore, $aWorp);

?>
