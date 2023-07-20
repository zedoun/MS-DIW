<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Table de multiplication</title>
    <style>
        table{border-collapse: collapse;

        }
        td,th{border: 8px;
        border-style: groove;
        padding: 15px;
text-align: center;
        }
    </style>
</head>

<body>
    <table>
        <tr>
        <th></th>
      <?php
// têtes des colons
for($i =2; $i<=25; $i++){
    echo" <th>$i</th>";

}
      ?>

</tr>      

<?php
//contnue de tableau
for($i =2; $i<=30; $i++){
    echo"<tr>";
    echo" <th>$i</th>";
    for($j =2; $j<=25; $j++){
        echo" <td>" .($i*$j). "</td>";
        
    
    }
    echo "</tr>";
}
     ?>
    </table>
</body>

</html>