<?php 

$finvizUrl = 'https://finviz.com/quote.ashx?t=' . $tickerUs;
$finvizContent = contentDownload($finvizUrl);

// Capitalization
$capStart = 'Market Cap</td>';
$capEnd = '</b>';
$capStr = parse($finvizContent, $capStart, $capEnd);
$marketCap = cutInc($capStr, 10, 10);

// P/E
$peStart = 'P/E</td>';
$peEnd = '</b>';
$peStr = parse($finvizContent, $peStart, $peEnd);
$pe = cut($peStr, 3, 5);

// Forward P/E
$forwardPeStart = 'Forward P/E</td>';
$forwardPeEnd = '</b>';
$forwardPeStr = parse($finvizContent, $forwardPeStart, $forwardPeEnd);
$forwardPe = cut($forwardPeStr, 11, 5);

// P/S
$psStart = 'P/S</td>';
$psEnd = '</b>';
$psStr = parse($finvizContent, $psStart, $psEnd);
$ps = cut($psStr, 3, 5);

// P/B
$pbStart = 'P/B</td>';
$pbEnd = '</b>';
$pbStr = parse($finvizContent, $pbStart, $pbEnd);
$pb = cut($pbStr, 3, 5);

// Net Margin
$netMarginStart = 'Profit Margin</td>';
$netMarginEnd = '</b>';
$netMarginStr = parse($finvizContent, $netMarginStart, $netMarginEnd);
$netMargin = cut($netMarginStr, 13, 10);

// ROE
$roeStart = 'ROE</td>';
$roeEnd = '</b>';
$roeStr = parse($finvizContent, $roeStart, $roeEnd);
$roe = cut($roeStr, 3, 10);

// Sector
$sectorStart = '<a href="screener.ashx?v=111&f=sec';
$sectorEnd = '</a>';
$sectorStr = parse($finvizContent, $sectorStart, $sectorEnd);

// Industry
$industryStart = '<a href="screener.ashx?v=111&f=ind';
$industryEnd = '</a>';
$industryStr = parse($finvizContent, $industryStart, $industryEnd);

// Country
$countryStart = '<a href="screener.ashx?v=111&f=geo';
$countryEnd = '</a>';
$countryStr = parse($finvizContent, $countryStart, $countryEnd);

// Sales annual growth past 5 years
$sales5yStart = 'Sales past 5Y</td>';
$sales5yEnd = '</b>';
$sales5yStr = parse($finvizContent, $sales5yStart, $sales5yEnd);
$sales5y = cut($sales5yStr, 13, 10);

// EPS annual growth past 5 years
$eps5yStart = 'EPS past 5Y</td>';
$eps5yEnd = '</b>';
$eps5yStr = parse($finvizContent, $eps5yStart, $eps5yEnd);
$eps5y = cut($eps5yStr, 11, 10);

// Income (TTM)
$incomeStart = 'Income</td>';
$incomeEnd = '</b>';
$incomeStr = parse($finvizContent, $incomeStart, $incomeEnd);
// $incomeTtm = cutCap($incomeStr, 6, 10);
$incomeTtm = cutInc($incomeStr, 6, 10);

// Relative Strength Index 14 daily (RSI 14) 
$rsiStart = 'RSI (14)</td>';
$rsiEnd = '</b>';
$rsiStr = parse($finvizContent, $rsiStart, $rsiEnd);
$rsi = cut($rsiStr, 8, 10);

// EPS annual growth estimate next 5 years
$epsEstStart = 'EPS next 5Y</td>';
$epsEstEnd = '</b>';
$epsEstStr = parse($finvizContent, $epsEstStart, $epsEstEnd);
$epsEst = cut($epsEstStr, 11, 10);

// Dividend Yield annual
$divYieldStart = 'Dividend %</td>';
$divYieldEnd = '</b>';
$divYieldStr = parse($finvizContent, $divYieldStart, $divYieldEnd);
$divYield = cut($divYieldStr, 10, 10);

// Current Ratio
$curRatioStart = 'Current Ratio</td>';
$curRatioEnd = '</b>';
$curRatioStr = parse($finvizContent, $curRatioStart, $curRatioEnd);
$curRatio = cut($curRatioStr, 13, 5);
?>