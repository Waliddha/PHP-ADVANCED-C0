<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $leeftijd = "0";

        while($leeftijd <= 18) {
            echo "<li> Je bent $leeftijd jaar oud en mag nog niet stemmen! <li>";
            $leeftijd++;
        }

        if($leeftijd = 18) {
            echo "Je bent 18 en mag stemmen!";
        }
    ?>
</body>
</html>