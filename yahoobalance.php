<?php
$balanceUrl = 'https://finance.yahoo.com/quote/' . $tickerUs .'/balance-sheet?p=' . $tickerUs;
$balanceContent = contentDownload($balanceUrl);

// Долг за последний календарный год
$debtLastStart = 'Total Debt</span>';
$debtLastEnd = '</span></div><div class="Ta(c) Py(6px) Bxz(bb) BdB Bdc($seperatorColor) Miw(120px) Miw(100px)--pnclg Bgc($lv1BgColor) fi-row:h_Bgc($hoverBgColor) D(tbc)" data-test="fin-col" data-reactid=';
$debtLastStr = parse($balanceContent, $debtLastStart, $debtLastEnd);
$debtLastRaw = cut($debtLastStr, 10, 20);
$debtLast = str_replace(",", "", $debtLastRaw);

$debtLastLen = strlen($debtLastStr);

// Долг за последний календарный год - минус один
$debt1Start = 'Total Debt</span>';
$debt1End = '</span></div><div class="Ta(c) Py(6px) Bxz(bb) BdB Bdc($seperatorColor) Miw(120px) Miw(100px)--pnclg D(tbc)" data-test="fin-col" data-reactid=';
$debt1Str = parse($balanceContent, $debt1Start, $debt1End);
$debt1Raw = cut($debt1Str, $debtLastLen, 20);
$debt1 = str_replace(",", "", $debt1Raw);

$debt1Len = strlen($debt1Str);


// Долг за последний календарный год - минус два и три
$debtAllStart = 'Total Debt</span>';
$debtAllEnd = '</span></div></div><div data-reactid=';
$debtAllStr = parse($balanceContent, $debtAllStart, $debtAllEnd);

$debt3Len = (strlen($debtAllStr) - $debt1Len)/2;

$debt2Raw = cut($debtAllStr, $debt1Len, $debt3Len);
$debt2 = str_replace(",", "", $debt2Raw);

$debt3Raw = cut($debtAllStr, $debt1Len + $debt3Len, 20);
$debt3 = str_replace(",", "", $debt3Raw);

// Среднегодовой темп прироста Общего долга (Total Debt) 
$debtGrowthDot = round(pow($debtLast/$debt3, 1/3) - 1, 4) * 100;
$debtGrowth = str_replace(".", ",", $debtGrowthDot) . '%';

?>