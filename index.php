<?php
    #$x1 = rand(1,500);
    #$y1 = rand(1,500);
    #$x2 = rand(1,500);
    #$y2 = rand(1,500);

    $x1 = 10; //63
    $y1 = 10; //111

    $x2 = 5; //-67
    $y2 = 2; //53

    echo "Alt x: " . $x1 . " y: " . $y1 .PHP_EOL;
    echo "Neu x: " . $x2 . " y: " . $y2 .PHP_EOL.PHP_EOL;

    $delta_x = 0;
    $delta_y = 0;


    if($x2 > $x1) {
        $ix = 1; $delta_x = ($x2 - $x1)<< 1;
        echo $str_delta_x = "(x2 > x1) (x2 größer x1) daher ix = 1 | DELTA x = 2*(x2 - x1)  = ".$delta_x." = 2*(".$x2." - ".$x1.")".PHP_EOL;
    } else {
        $ix = -1; $delta_x = ($x1 - $x2) << 1;
        echo $str_delta_x = "(x2 < x1) (x2 kleiner x1) daher ix = -1 | DELTA x = 2*(x1 - x2)  = ".$delta_x." = 2*(".$x1." - ".$x2.")".PHP_EOL;
    }


    if($y2 > $y1) {
        $iy = 1; $delta_y = ($y2 - $y1) << 1;
        echo $str_delta_y = "(y2 > y1) (y2 größer y1) daher iy = 1 | DELTA y = 2*(y2 - y1)  = ".$delta_y." = 2*(".$y2." - ".$y1.")".PHP_EOL;
    } else {
        $iy = -1; $delta_y = ($y1 - $y2) << 1;
        echo $str_delta_y = "(y2 < y1) (y2 kleiner y1) daher iy = -1 | DELTA y = 2*(y1 - y2)  = ".$delta_y." = 2*(".$y1." - ".$y2.")".PHP_EOL;
    }

    echo "Start-Punkt x: " . $x1 . " y: " . $y1 . PHP_EOL;

    echo "DELTA X:".$delta_x. " DELTA Y:".$delta_y.' | Schnelle Richtung: '.(($delta_x >= $delta_y)?'x':'y').PHP_EOL;

    $line = 2;
    if ($delta_x >= $delta_y) {
        $error = $delta_y - ($delta_x >> 1);
        while ($x1 != $x2) {
            if ($error >= 0) {
                if ($error || ($ix > 0)) {
                    $y1 += $iy;
                    $error -= $delta_x;
                }
            }
        $x1 += $ix;
        $error += $delta_y;
    echo $line++." ~ (DELTA X größerGleich DELTA Y) x: " . $x1 . " y: " . $y1 ." ERROR:".($error*-1).PHP_EOL;
        }
    } else {
        $error = $delta_x - ($delta_y >> 1);
        while ($y1 != $y2) {
            if ($error >= 0) {
                if ($error || ($iy > 0)) {
                    $x1 += $ix;
                    $error -= $delta_y;
                }
            }
            $y1 += $iy;
            $error += $delta_x;
            echo $line++." ~ (DELTA X kleiner DELTA Y) x: " . $x1 . " y: " . $y1 ." ERROR:".($error*-1).PHP_EOL;
        }
    }
