<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Table de multiplication</title>
    <style>
        table {
            border-collapse:collapse;
            border-style:ridge;
        }
        td,th {
            border: 5px solid black;
            border-style:ridge;
            padding:10px;
            text-align:center;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th></th>
            
            <?php
            // les têtes des colonnes
            for ($i = 1; $i <= 9; $i++) {
                echo "<th>$i</th>";
            }
            ?>
        </tr>
        
        <?php
        // Contenu du tableau
        for ($i = 1; $i <= 9; $i++) {
            echo "<tr>";
            echo "<th>$i</th>";
            for ($j = 1; $j <= 9; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>