<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Titel</title>
    <?php
    function zufzahl($max, $anzahl, $stellen)
    {
        echo "<table><tr><th>Zufallszahl</th>";
        for($j=1; $j<=$stellen; $j++)
        {
            echo "<th>ersten $j Stellen</th>";
        }
        for($i=1; $i<=$anzahl; $i++)
        {
            echo "</tr>";
            $zzahl = rand(1,$max);
            if($zzahl>=100000)      {   echo "<tr style='background-color:grey'>";}
            elseif($zzahl>=10000)   {   echo "<tr style='background-color:green'>";}
            elseif($zzahl>=1000)    {   echo "<tr style='background-color:yellow'>";}
            else                    {   echo "<tr style='background-color:white'>";}
            for($k=0; $k<=$stellen; $k++)
            {
                $gerundet = abschneiden($zzahl, $k);
                echo "<td> $gerundet </td>";
            }
        }
        echo "</tr></table>";
    }
    function abschneiden($zahl, $stellen=2)
    {
        $base = pow(10, $stellen);
        return $zahl - ($zahl % $base);
    }
    ?>
</head>
<body>
    <h1>Zufallszahl</h1>
    <div>
     <?php 
	 zufzahl(2000000, 20, 4); 
	 ?>
    </div>
</body>
</html>
