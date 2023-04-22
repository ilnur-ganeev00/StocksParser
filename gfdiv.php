<?php
$divGrowthUrl = 'https://www.gurufocus.com/term/dividend_growth_5y/' . $tickerUs . '/5-Year-Dividend-Growth-Rate';
$divGrowthContent = contentDownload($divGrowthUrl);

$divGrowthStart = '<font style="font-size: 24px; font-weight: 700; color: #337ab7">';
$divGrowthEnd = '</font>';

$divGrowthStr = parse($divGrowthContent, $divGrowthStart, $divGrowthEnd);
$divGrowth = cut($divGrowthStr, 2, 6);
?>