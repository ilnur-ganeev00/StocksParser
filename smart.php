<?php
$tickerRuUp = mb_strtoupper($tickerRu);
$smartlabUrl = 'https://smart-lab.ru/forum/' . $tickerRuUp;
$smartlabContent = contentDownload($smartlabUrl);

// Capitalization
$capStart = 'Капит-я</a></td>';
$capEnd = '</tr>';
$capStr = parse($smartlabContent, $capStart, $capEnd);
$marketCapRu = cutCapRu($capStr, 8, 30);
$marketCapUs = round($marketCapRu/$usdrub, 2);
$marketCap = str_replace(".", ",", $marketCapUs);

// P/E
$peStart = 'P/E</a></td>';
$peEnd = '</tr>';
$peStr = parse($smartlabContent, $peStart, $peEnd);
$pe = cut($peStr, 3, 20);

// P/S
$psStart = 'P/S</a></td>';
$psEnd = '</tr>';
$psStr = parse($smartlabContent, $psStart, $psEnd);
$ps = cut($psStr, 3, 20);

// P/B
$pbStart = 'P/BV</a></td>';
$pbEnd = '</tr>';
$pbStr = parse($smartlabContent, $pbStart, $pbEnd);
$pb = cut($pbStr, 4, 20);

// Income (TTM)
$incomeStart = 'Прибыль</a></td>';
$incomeEnd = '</tr>';
$incomeStr = parse($smartlabContent, $incomeStart, $incomeEnd);
$incomeRu = cutCapRu($incomeStr, 7, 30);
$incomeUs = round($incomeRu/$usdrub, 2);
$incomeTtm = str_replace(".", ",", $incomeUs);

// Dividend Yield annual
$divYieldStart = 'Див.доход ао</a></td>';
$divYieldEnd = '</tr>';
$divYieldStr = parse($smartlabContent, $divYieldStart, $divYieldEnd);
$divYield = cut($divYieldStr, 12, 20);
?>