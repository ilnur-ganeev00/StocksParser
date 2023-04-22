<?php
$usdrubUrl = 'https://finance.yahoo.com/quote/USDRUB.ME?p=USDRUB.ME&.tsrc=fin-srch';
$usdrubContent = contentDownload($usdrubUrl);

$usdrubStart = 'Add to watchlist</span>';
$usdrubEnd = '</fin-streamer>';

$usdrubStr = parse($usdrubContent, $usdrubStart, $usdrubEnd);
$usdrub = mb_strimwidth($usdrubStr, 16, 6);
return $usdrub;
?>