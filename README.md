# PHP IP Address Math

A small piece of PHP code I put together as a proof-of-concept for a work
colleague.

By using [`ip2long`](https://www.php.net/manual/en/function.ip2long.php)
and [`long2ip`](https://www.php.net/manual/en/function.long2ip.php) functions
along with [bitwise operators](https://www.php.net/manual/en/language.operators.bitwise.php)
it was possible to eliminate an extra input field from the HTML form since the
the IPv4 gateway was supposed to always be the first address.

_(The joys of custom configuration templating before other frameworks were
wildly popular... :sweat_smile:)_
