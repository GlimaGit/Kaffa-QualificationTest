<?php

$r1 = array('MapX1' => 3, 'MapX2' => 5, 'MapY1' => 11, 'MapY2' => 11);
$r2 = array( 'MapX1' => 7, 'MapX2' => 2, 'MapY1' => 13, 'MapY2' => 7);
$r3 = array( 'MapX1' => 11, 'MapX2' => 11, 'MapY1' => 15, 'MapY2' => 13);

function intersecRectang($r1, $r2, $r3) {
    /*
    left: x1,
    right: x2,
    top: y1,
    bottom: y2,
  */

    $a = array('left' => $r1['MapX1'], 'right' => $r1['MapX2'], 'top' => $r1['MapY1'],
        'bottom' => $r1['MapY2']);
    $b = array('left' => $r2['MapX1'], 'right' => $r2['MapX2'], 'top' => $r2['MapY1'],
        'bottom' => $r2['MapY2']);
    $c = array('left' => $r3['MapX1'], 'right' => $r3['MapX2'], 'top' => $r3['MapY1'],
        'bottom' => $r3['MapY2']);
    if(
        $a['right'] < $b['left'] ||
        $a['left'] > $b['right'] ||
        $a['bottom'] < $b['top'] ||
        $a['top'] > $b['bottom']
    ){
        return 0;
    } else {
        return 1;
    }
}

echo intersecRectang($r1, $r2, $r3);