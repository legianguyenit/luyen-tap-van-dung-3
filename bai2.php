<?php
    function daoNguocMang($mang) {
        $mangDaoNguoc = [];
        $n = count($mang);
        for ($i = $n - 1; $i >= 0; $i--) {
            $mangDaoNguoc[] = $mang[$i];
        }
        return $mangDaoNguoc;
    }

    $numbers = [1, 2, 3, 4, 5];
    $mangDaoNguoc = daoNguocMang($numbers);
    echo "<pre>";
    print_r($mangDaoNguoc);
?>