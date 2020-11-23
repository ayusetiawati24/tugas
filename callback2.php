<?php

$minimal = "65kg";
$data_berat_badan = [
    ["nama"=> "Yunita", "berat badan"=>"58kg"],
    ["nama"=> "Karina", "berat badan"=>"60kg"],
    ["nama"=> "Mila", "berat badan"=>"65kg"],
    ["nama"=> "Laras", "berat badan"=>"75kg"],
    ["nama"=> "Saras", "berat badan"=>"80kg"],
    ["nama"=> "Dewi", "berat badan"=>"77kg"],
];

array_walk($data_berat_badan, function($nama) use ($minimal){
    echo "nama : " . $nama["nama"] . "\n";
    echo "berat badan : " . $nama["berat badan"] . "\n";
    echo "Keterangan : ";
        if ($nama['berat badan'] >=$minimal) {
            echo "Gemuk\n\n";
        } else {
            echo "Sedang\n\n";
        }
});

?>