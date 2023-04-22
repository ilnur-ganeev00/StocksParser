<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invest Ratio</title>

    <link href="style.css" rel="stylesheet">
</head>
<body>
    <h1>Value</h1>

    <form action="" method="POST">
        <p>Тикер иностранной акции: 
            <input type="text" name="tickerNameUs"/> 
        </p>
        <button name="startUs" type="submit">Get ratio</button>
    </form>

    <br>
    
    <div class="result">

    <?php
        $today = date("d.m.y");

        if (isset($_POST['startUs'])) {
            
            // тикер иностранной акции
            $tickerUs = $_POST['tickerNameUs'];

            include 'func.php';
            include 'finviz.php';
            include 'gfvalue.php';
            include 'gfdebt.php';
            // include 'yahoobalance.php';
            include 'gfdiv.php';

            echo "$tickerUs ratio:";
            echo "<br/> <br/>";
    
            // echo "$divGrowthStr";
            // echo "<br/>";

            echo
            "<table>
            <tr>
                <th>Date of analysis</th>
                <th>Cap</th>
                <th>P/E</th>
                <th>Forward P/E</th>
                <th>P/S</th>
                <th>P/B</th>
                <th>Net margin</th>
                <th>ROE</th>
                <th>Debt/Ebitda</th>
                <th>GF Value</th>
                <th>Sales growth past 5Y</th>
                <th>EPS growth past 5Y</th>
                <th>Income (TTM)</th>
                <th>Current Ratio</th>
                <th>RSI (14)</th>
                <th>EPS growth estimate</th>
                <th>Div Yield</th>
                <th>Div Growth past 5Y</th>
            </tr>
    
            <tr>
                <td> $today </td>
                <td> $marketCap </td>
                <td> $pe </td>
                <td> $forwardPe </td>
                <td> $ps </td>
                <td> $pb </td>
                <td> $netMargin </td>
                <td> $roe </td>
                <td> $debtEbitda </td>
                <td> $gfValue </td>
                <td> $sales5y </td>
                <td> $eps5y </td>
                <td> $incomeTtm </td>
                <td> $curRatio </td>
                <td> $rsi </td>
                <td> $epsEst </td>
                <td> $divYield </td>
                <td> $divGrowth </td>
            </tr>
            </table>";

            echo 
            "<br/>

            <table>
                <tr>
                    <th>Sector</th>
                    <th>Industry</th>
                    <th>Country</th>
                </tr>
                <tr>
                    <td> $sectorStr </td>
                    <td> $industryStr </td>
                    <td> $countryStr </td>
                </tr>
            </table>";

            // Долги за 4 последних года:
            // echo "<br/>";
            // echo "$debtLastRaw";
            // echo "<br/>";
            // echo "$debt1Raw";
            // echo "<br/>";
            // echo "$debt2Raw";
            // echo "<br/>";
            // echo "$debt3Raw";
            // echo "<br/>";
            

            echo '<br/>
            <h4>GF Value Scale</h4>
            <ul>
                <li class="scale_red">Possible Value Trap, Think Twice</li>
                <li class="scale_red">Significantly Overvalued</li>
                <li class="scale_orange">Modestly Overvalued</li>
                <li class="scale_orange">Fairly Valued</li>
                <li class="scale_green">Modestly Undervalued</li>
                <li class="scale_green">Significantly Undervalued</li>
            </ul>';
        };

    ?>
    </div>

    <br/>

    <form action="" method="POST">
        <p>Тикер акции РФ: 
            <input type="text" name="tickerNameRu"/> 
        </p>
        <button name="startRu" type="submit">Get ratio</button>
    </form>

    <br>

    <div class="result">
    <?php

        if (isset($_POST['startRu'])) {
            
            // тикер акции РФ
            $tickerRu = $_POST['tickerNameRu'];
            
            include 'func.php';
            include 'usdrub.php';
            include 'smart.php';
            include 'yahoo.php';
            // include 'yahooincome.php';
            // include 'neo.php';
            echo "$tickerRu ratio:";
            echo "<br/> <br/>";
            
            // echo "$revenueLastStr";
            // echo "<br/>";
            // echo "$revenueLast";
            // echo "<br/>";

            // Заменить $netMargin, $roe, $debtEbitda, $curRatio

            echo
            "<table>
            <tr>
                <th>Date of analysis</th>
                <th>Cap</th>
                <th>P/E</th>
                <th>Forward P/E</th>
                <th>P/S</th>
                <th>P/B</th>
                <th>Net margin</th>
                <th>ROE</th>
                <th>Debt/Ebitda</th>
                <th>Fair Value</th>
                <th>Sales growth past 5Y</th>
                <th>EPS growth past 5Y</th>
                <th>Income (TTM)</th>
                <th>Current Ratio</th>
                <th>RSI (14)</th>
                <th>EPS growth estimate</th>
                <th>Div Yield</th>
                <th>Div Growth past 5Y</th>
            </tr>
            
            <tr>
                <td> $today </td>
                <td> $marketCap </td>
                <td> $pe </td>
                <td> $pe </td>
                <td> $ps </td>
                <td> $pb </td>
                <td> $netMargin </td>
                <td> $roe </td>
                <td> $debtEbitda </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td> $incomeTtm </td>
                <td> $curRatio </td>
                <td>  </td>
                <td>  </td>
                <td> $divYield </td>
                <td>  </td>
            </tr>
            </table>";
            
        };

    ?>
    </div>

</body>
</html>