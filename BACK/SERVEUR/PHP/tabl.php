<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Table de multiplication</title>
    <style>
        table {
            border-collapse: collapse;

        }

        td,
        th {
            border: 6px;
            border-style: groove;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>

<body>
    <table>

        <th></th>
        <?php
        // têtes des colons
        for ($i = 2; $i <= 70; $i++) {
            echo " <th>$i</th>";

        }
        ?>
        <?php
        //contnue de tableau
        for ($i = 2; $i <= 100; $i++) {
            echo "<tr>";
            echo " <th>$i</th>";
            for ($j = 2; $j <= 70; $j++) {
                echo " <td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>