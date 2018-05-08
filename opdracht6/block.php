<?php
print "<form method='post'>    <input type='submit' name='test' id='test' value='RUN' /><br/> </form>";

if (array_key_exists('test',$_POST)){
for ($i = 0;$i <= 6; $i++) {
 $RandomCube = rand(1,7);
//  $RandomTriangle = rand(1,7);

//  create_Triangle($RandomTriangle);
  create_image($RandomCube);

//print "<img src=$RandomTriangle.png?".date("U").">";
print "<img src=$RandomCube.png?".date("U").">";

}
}
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


function  create_image($RandomCube){
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


      if (($RandomCube == 6) || ($RandomCube == 7))
      {
        imagefilledellipse($im1, 50, 100, 40, 40, $Circle1);
        imagefilledellipse($im1, 150, 100, 40, 40, $Circle1);
      }
      if (($RandomCube == 1) || ($RandomCube == 3) || ($RandomCube == 5) || ($RandomCube == 7))
      {
        imagefilledellipse($im1, 100, 100, 40, 40, $Circle1);
      }
      if (($RandomCube == 2) || ($RandomCube == 3) || ($RandomCube == 4) || ($RandomCube == 5) || ($RandomCube == 6) || ($RandomCube == 7))
      {
        imagefilledellipse($im1, 50, 50, 40, 40, $Circle1);
        imagefilledellipse($im1, 150, 150, 40, 40, $Circle1);
      }
      if (($RandomCube == 4) || ($RandomCube == 5) || ($RandomCube == 6) || ($RandomCube == 7))
      {
        imagefilledellipse($im1, 50, 150, 40, 40, $Circle1);
        imagefilledellipse($im1, 150, 50, 40, 40, $Circle1);
      }

        imagepng($im1,"$RandomCube.png");
        imagedestroy($im1);
}

?>
