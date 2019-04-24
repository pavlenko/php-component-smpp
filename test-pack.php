<?php

$chunk0 = pack('N', 100);
$chunk1 = pack('N', 200);

$string = pack('NN', 100, 200);

var_dump($chunk0 . $chunk1, $string, implode([$chunk0, $chunk1]) === $string);