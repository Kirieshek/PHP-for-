<?php
// 7.

$string = "Hello, World!";
for ($i = 0; $i < strlen($string); $i++) {
    echo $string[$i] . "<br>";
}

// 8.

echo strrev($string) . "<br>";

// 9. 

function isPalindrome($str) {
    $str = strtolower(preg_replace('/[^a-z0-9]/', '', $str));
    return $str === strrev($str);
}

$string2 = "madam";
if(isPalindrome($string2)) {
    echo "Это строка палиндром" . "<br>";
} else {
    echo "Это строка не палиндром" . "<br>";
}

// 10. 

$string3 = "Hello World!";
echo str_replace(" ", "_", $string3) . "<br>";

// 11. 

$words = explode(" ", $string);
$reversed = array_reverse($words);

foreach ($reversed as $word) {
    echo $word . " ";
}
?>