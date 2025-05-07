<?php
/**
 * Base14½ encoding and decoding
 */

function base15_encode($data) {$charset = '0123456789ABCX-';$base = 15;$num = '0';for ($i = 0; $i < strlen($data); $i++) {$num = bcadd(bcmul($num, '256'), ord($data[$i]));}$encoded = '';if (bccomp($num, '0') == 0) {return $charset[0];}while (bccomp($num, '0') > 0) {$remainder = bcmod($num, $base);$encoded = $charset[(int)$remainder] . $encoded;$num = bcdiv($num, $base, 0);}return $encoded;}

function base15_decode($encoded) {$charset = '0123456789ABCX-';$base = 15;$lookup = [];for ($i = 0; $i < $base; $i++) {$lookup[$charset[$i]] = $i;}$num = '0';for ($i = 0; $i < strlen($encoded); $i++) {$char = strtoupper($encoded[$i]);if (!isset($lookup[$char])) {throw new Exception("Invalid Base15 character: " . $encoded[$i]);}$num = bcadd(bcmul($num, $base), $lookup[$char]);}$decoded = '';while (bccomp($num, '0') > 0) {$remainder = bcmod($num, '256');$decoded = chr((int)$remainder) . $decoded;$num = bcdiv($num, '256', 0);}return $decoded;}
?>
