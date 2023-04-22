<?php
$incomeUrl = 'https://finance.yahoo.com/quote/' . $tickerRu . '.ME/financials?p=' . $tickerRu . '.ME';
$incomeContent = contentDownload($incomeUrl);

// Выручка за последний календарный год
$revenueLastStart = 'Total Revenue</span>';
$revenueLastEnd = '</span></div><div class="Ta(c) Py(6px) Bxz(bb) BdB Bdc($seperatorColor) Miw(120px) Miw(100px)--pnclg D(tbc)" data-test="fin-col" data-reactid=';
$revenueLastStr = parse($incomeContent, $revenueLastStart, $revenueLastEnd);
$revenueLastRaw = cut($revenueLastStr, 13, 20);
$revenueLast = str_replace(",", "", $revenueLastRaw);


?>