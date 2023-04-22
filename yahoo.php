<?php
$yahooUrl = 'https://finance.yahoo.com/quote/' . $tickerRu . '.ME/key-statistics?p=' . $tickerRu . '.ME';
$yahooContent = contentDownload($yahooUrl);

// Net Margin
$netMarginStart = 'Profit Margin</span>';
$netMarginEnd = '</td></tr>';
$netMarginStr = parse($yahooContent, $netMarginStart, $netMarginEnd);
$netMargin = cut($netMarginStr, 14, 10);

// ROE
$roeStart = 'Return on Equity</span>';
$roeEnd = '</td></tr>';
$roeStr = parse($yahooContent, $roeStart, $roeEnd);
$roe = cut($roeStr, 22, 10);

// Total Debt
$debtStart = 'Total Debt</span>';
$debtEnd = '</td></tr>';
$debtStr = parse($yahooContent, $debtStart, $debtEnd);
// $debtB = mb_strimwidth($debtStr, 16, 10);
// $debt = str_replace("B", "", $debtB);
$debtComma = cutInc($debtStr, 16, 10);
$debt = str_replace(",", ".", $debtComma);


// EBITDA
$ebitdaStart = '>EBITDA</span>';
$ebitdaEnd = '</td></tr>';
$ebitdaStr = parse($yahooContent, $ebitdaStart, $ebitdaEnd);
$ebitdaB = mb_strimwidth($ebitdaStr, 8, 10);
$ebitda = str_replace("B", "", $ebitdaB);

// Total Debt/EBITDA
$debtEbitdaDot = round($debt/$ebitda, 2);
$debtEbitda = str_replace(".", ",", $debtEbitdaDot);

// Current price
// $curPriceStart = 'Add to watchlist</span>';
// $curPriceEnd = '</fin-streamer>';
// $curPriceStr = parse($yahooContent, $curPriceStart, $curPriceEnd);
// $curPriceComma = mb_strimwidth($curPriceStr, 16, 10);
// $curPrice = floatval(str_replace(",", "", $curPriceComma));

// Current Ratio
$curRatioStart = 'Current Ratio</span>';
$curRatioEnd = '</td></tr>';
$curRatioStr = parse($yahooContent, $curRatioStart, $curRatioEnd);
$curRatio = cut($curRatioStr, 19, 10);

// Income (TTM)
// $incomeStart = 'Net Income Avi to Common</span>';
// $incomeEnd = '</td></tr>';
// $incomeStr = parse($yahooContent, $incomeStart, $incomeEnd);
// $incomeTtm = cutInc($incomeStr, 30, 10);

?>