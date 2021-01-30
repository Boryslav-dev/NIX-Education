
<?php

$text = $_POST['text'];

function mb_strrev($str){
    $r = '';
    for ($i = mb_strlen($str); $i>=0; $i--) {
        $r .= mb_substr($str, $i, 1);
    }
    return $r;
}
echo mb_strrev($text);

?>