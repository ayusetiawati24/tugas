<?php

$title = "kak";
$nama = "Agus";

function keren($nama) {
    echo "$nama, Keren tinggi badannya naik 5cm\n";
}

$nama = function() use ($title, $nama) {
    return $title. " " .$nama;
};

keren($nama());

?>