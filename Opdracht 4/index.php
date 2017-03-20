<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dobbelsteen</title>
  </head>
  <body>
    <?php

    $pos = array(200*0.3, 200*0.5, 200*0.7);
    $posX = array($pos[0],$pos[2],$pos[0],$pos[1],$pos[2],$pos[0],$pos[2]);
    $posY = array($pos[0],$pos[0],$pos[1],$pos[1],$pos[1],$pos[2],$pos[2]);

    for ($i = 0; $i < 5; $i++) {
        $worp = rand(1,6);
        create_image($posX, $posY, $worp);
        print "<img src=image" . $worp . ".png?>";
    }
      function  create_image($posX, $posY, $worp){
              $im = @imagecreate(200,200) or die("Cannot Initialize new GD image stream");
              imagecolorallocate($im, 0, 0, 0);  // yellow
              $mid = 40;
              $stip = imagecolorallocate($im , 255, 255, 255);
              switch ($worp) {
                case '1':
                  imagefilledellipse($im,$posX[3],$posY[3],$mid,$mid,$stip);
                  break;
                case '2':
                  imagefilledellipse($im,$posX[1],$posY[1],$mid,$mid,$stip);
                  imagefilledellipse($im,$posX[5],$posY[5],$mid,$mid,$stip);
                  break;

                case '3':
                  imagefilledellipse($im,$posX[5],$posY[5],$mid,$mid,$stip);
                  imagefilledellipse($im,$posX[3],$posY[3],$mid,$mid,$stip);
                  imagefilledellipse($im,$posX[1],$posY[1],$mid,$mid,$stip);
                  break;

                case '4':
                  imagefilledellipse($im,$posX[0],$posY[0],$mid,$mid,$stip);
                  imagefilledellipse($im,$posX[1],$posY[1],$mid,$mid,$stip);
                  imagefilledellipse($im,$posX[5],$posY[5],$mid,$mid,$stip);
                  imagefilledellipse($im,$posX[6],$posY[6],$mid,$mid,$stip);
                  break;

                case '5':
                  imagefilledellipse($im,$posX[0],$posY[0],$mid,$mid,$stip);
                  imagefilledellipse($im,$posX[1],$posY[1],$mid,$mid,$stip);
                  imagefilledellipse($im,$posX[3],$posY[3],$mid,$mid,$stip);
                  imagefilledellipse($im,$posX[5],$posY[5],$mid,$mid,$stip);
                  imagefilledellipse($im,$posX[6],$posY[6],$mid,$mid,$stip);
                  break;

                case '6':
                  imagefilledellipse($im,$posX[0],$posY[0],$mid,$mid,$stip);
                  imagefilledellipse($im,$posX[1],$posY[1],$mid,$mid,$stip);
                  imagefilledellipse($im,$posX[2],$posY[2],$mid,$mid,$stip);
                  imagefilledellipse($im,$posX[4],$posY[4],$mid,$mid,$stip);
                  imagefilledellipse($im,$posX[5],$posY[5],$mid,$mid,$stip);
                  imagefilledellipse($im,$posX[6],$posY[6],$mid,$mid,$stip);
                  break;

                default:
                  echo "can't draw any dots";
                  break;
              }
              imagepng($im,"image".$worp.".png");
              imagedestroy($im);
              echo "Je hebt ". $worp ."gegooid";
      }
    ?>

  </body>
</html>
