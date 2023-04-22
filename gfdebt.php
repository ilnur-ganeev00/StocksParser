<?php
$debtEbitdaUrl = 'https://www.gurufocus.com/term/debt2ebitda/' . $tickerUs . '/Debt-to-EBITDA';
$debtEbitdaContent = contentDownload($debtEbitdaUrl);

$debtEbitdaStart = '<font style="font-size: 24px; font-weight: 700; color: #337ab7">';
$debtEbitdaEnd = '</font>';

$debtEbitdaStr = parse($debtEbitdaContent, $debtEbitdaStart, $debtEbitdaEnd);
$debtEbitda = cut($debtEbitdaStr, 3, 5);
?>