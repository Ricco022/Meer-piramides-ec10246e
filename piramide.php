<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Piramide</title>
    <style>table {
    border: 1px solid #CCC;
    border-collapse: collapse;
}

td {
    border: none;
}
        td {
            width: 50px;
            height: 50px;
        }

        .black {
            background-color: black;
        }
    </style>
</head>
<body>
    <table>
        <tbody>
            <?php
                $h = 10;
                for ($i=1; $i <= $h; $i++) { 
                    echo "<tr>";
                    echo str_repeat("<td class='black'></td>" , $i);
                    echo "</tr>";
                }


            ?>
        </tbody>
    </table>
</body>
</html>