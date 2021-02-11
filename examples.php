<?php // Documentation: https://www.php.net/manual/en/function.uniqid.php#94959

require_once 'Uuid.php';

$uuid = new Uuid();

// Usage

// Named-based UUID.
$v3uuid = UUID::v3('1546058f-5a25-4334-85ae-e68f2a44bbaf', 'SomeRandomString');
print("<b>v3 uuid:</b> ".$v3uuid.'<br/>');

$v5uuid = UUID::v5('1546058f-5a25-4334-85ae-e68f2a44bbaf', 'SomeRandomString');
print("<b>v5 uuid:</b> ".$v5uuid.'<br/>');

// Pseudo-random UUID
$v4uuid = UUID::v4();
print("<b>v4 uuid:</b> ".$v4uuid);