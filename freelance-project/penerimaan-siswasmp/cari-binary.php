<?php

include "koneksi.php";
$cari = $_POST('cari');
            

function binary_search($data, $keyword)
{
    $MIN = 0;
    $MID = 0;
    $MAX = (int)(count($data) - 1);

    if($MAX < 0) return false;

    while ($MIN <= $MAX)  
    {
        $MID = $MIN + (int)(($MAX - $MIN) / 2);
        if ($data[$MID] == $keyword)
        {
        return $MID;
        }else{
        if ($keyword < $data[$MID])
        {
            $MAX = $MID - 1;  
        }else{
            $MIN = $MID + 1;
        }
        }
    }
    return false;
}

sort($array);
$result = binary_search($array, $keyword);

if ($result) 
{
    echo "Data ditemukan! => " . $array[$result];
    }else{
    echo "Data tidak ditemukan!";
}