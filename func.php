<?php

// Функция загрузки контента с сайта
function contentDownload($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $content = curl_exec($ch);
    curl_close($ch);
    return $content;
}

// Функция парсинга необходимого значения
function parse ($p1, $p2, $p3) {
    $num1 = strpos($p1, $p2);
    if ($num1 === false) return 0;
    $num2 = substr($p1, $num1);
    return strip_tags(substr($num2, 0, strpos($num2, $p3)));
}

// Функция выделения итогового значения
function cut ($str, $from, $to){
    $first = mb_strimwidth($str, $from, $to);
    $second = str_replace(".", ",", $first);
    return $second;
};

// Функция выделения итогового значения - отдельно для Капитализации в долларах
function cutCap ($str, $from, $to){
    $first = mb_strimwidth($str, $from, $to);
    $search1 = ".";
    $replace1 = ",";
    $second = str_replace($search1, $replace1, $first);

    $search2 = "B";
    $replace2 = "";
    $third = str_replace($search2, $replace2, $second);
    return $third;
};

// Функция выделения итогового значения - отдельно для Капитализации в рублях
function cutCapRu ($str, $from, $to){
    $first = mb_strimwidth($str, $from, $to);
    $search1 = ",";
    $replace1 = ".";
    $second = str_replace($search1, $replace1, $first);

    $search2 = "млрд";
    $replace2 = "";
    $third = str_replace($search2, $replace2, $second);
    
    $search3 = " ";
    $replace3 = "";
    $fourth = floatval(str_replace($search3, $replace3, $third));

    return $fourth;
};

// Функция выделения итогового значения - отдельно для Чистой прибыли и Капитализации
function cutInc ($str, $from, $to){
    $first = mb_strimwidth($str, $from, $to);

    if (stripos($first, "M") !== false) {
        $mil = floatval(str_replace("M", "", $first));
        $bil = $mil / 1000;
        $second = str_replace(".", ",", $bil);
        return $second;
    } else {
        $first = mb_strimwidth($str, $from, $to);
        $second = str_replace(".", ",", $first);
        $third = str_replace("B", "", $second);
        return $third;
    }
    
};
?>