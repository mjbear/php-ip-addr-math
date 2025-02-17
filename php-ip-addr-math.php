<?php
/*
     Given an IP address and subnet mask,
     determine the subnet address, broadcast address, and wildcard mask
     by using bitwise operators

     ref:  http://php.net/manual/en/language.operators.bitwise.php
*/

$ip = '10.10.10.7';
$mask = '255.255.255.0';

$wcmask = long2ip( ~ip2long($mask) );
$subnet = long2ip( ip2long($ip) & ip2long($mask) );
$bcast = long2ip( ip2long($ip) | ip2long($wcmask) );

echo "Given address $ip and mask $mask, \n" .
     "the subnet is $subnet and broadcast is $bcast \n" .
     "with a wildcard mask of $wcmask\n";

/*
Given address 10.10.10.7 and mask 255.255.255.0,
the subnet is 10.10.10.0 and broadcast is 10.10.10.255
with a wildcard mask of 0.0.0.255
*/

?>
