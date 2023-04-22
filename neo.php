<?php
$tickerRuLow = mb_strtolower($tickerRu);
$neoUrl = 'https://neo.putinomics.ru/dashboard/'. $tickerRuLow .'/moex/';
$neoContent = contentDownload($neoUrl);

// Fair Value
$fairValueStart = 'Справедливая цена: </div>';
$fairValueEnd = '<span';
$fairValueStr = parse($neoContent, $fairValueStart, $fairValueEnd);
$fairValue = floatval(mb_strimwidth($fairValueStr, 19, 10));

// Fair Value/Current price
$fairToCurrent = (round($fairValue/$curPrice, 3)-1)*100;

// Neo Fair Value Result
$neoValue = $fairValue . ' (' . $fairToCurrent . '%)';

?>