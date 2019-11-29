<HTML>
<HEAD>
    <STYLE type="text/css">
        h1 {
            font-weight: bold;
            text-decoration: underline;
            text-align: center
        }

        td {
            width: 50px;
            height: 50px;
            border: 1px solid black;
        }

        table {
            border-collapse: collapse;
        }
    </STYLE>
    <TITLE>Puissance 4</TITLE>
</HEAD>
<BODY style='background-color:#F0E0D0'>
<h1>Puissance 4</h1>
<table>
<?php
$comp=0;
for ($tr = 0; $tr < 8; $tr++) {
    echo "<tr>";
    for ($td = 0; $td < 8; $td++) {
        $comp++;
        if($comp==57){
            echo"<td><img src='rouge.JPG'></td>";
        }
        elseif ($comp==64){
            echo"<td><img src='bleu.jpg'</td>";
        }else{
            echo "<td></td>";
        }


    }
    echo "</tr>";
}


?>
</table>
</BODY>
</HTML>


