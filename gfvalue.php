<?php
$gfvalueUrl = 'https://www.gurufocus.com/term/gf_value/' . $tickerUs . '/GF-Value';
$gfvalueContent = contentDownload($gfvalueUrl);

$gfvalueStart = '<strong style="font-size: 18px;">';
$gfvalueEnd = '</font>';

$gfValue = parse($gfvalueContent, $gfvalueStart, $gfvalueEnd);
?>