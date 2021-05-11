<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadatak_3</title>
    </head>
<body>
    <?php
    $a=mt_rand(1,10);
    $b=mt_rand(1,10);
    $c=mt_rand(1,10);
    $aa=$a**2;
    $bb=$b**2;
    $cc=$c**2;
    ?>
    <style>
    table,td{
    border:solid black 1px;
    border-spacing:0;
    border: margin 0;;
    }
    </style>
    <table class="squared">
    <tr>
    <td><?=$a?></td>
    <td><?=$aa?></td>
    </tr>
    <tr>
    <td><?=$b?></td>
    <td><?=$bb?></td>
    </tr>
    <tr>
    <td><?=$c?></td>
    <td><?=$cc?></td>
    </tr>
    </table>
</body>
</html>