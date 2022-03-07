<!DOCTYPE html>

<html>
    <head>
        <title>Tableau de multiplication</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="CSS.css" rel="stylesheet" type="text/css"/>
    </head>



    <body>
        <table> <!-- début de la table -->
            <thead> <!--en-tête des colonnes-->
                <tr> <!-- ligne -->
                    <td colspan="1"></td> <!-- cellules -->
                    <?php
                    for ($a = 1; $a <= 12; $a++) {
                        echo "<th scope='col' align='right'>", $a, "</th>";
                    }
                    ?>
                </tr>
            </thead>
            <tbody> <!--corps du tableau-->
                <?php
                for ($b=1;$b<=12;$b++){
                    echo "<tr> <th scope='row'>",$b,"</th>";
                    for ($a=1;$a<=12;$a++){
                        echo "<td align='right'>",$a*$b,"</td>";
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table> <!-- fin de la table -->
    </body>

</html>