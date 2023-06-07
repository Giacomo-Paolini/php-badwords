<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <?php
        $text = $_GET["textArea"];
        $badword = $_GET["badword"];

        $textFixed = str_ireplace($badword, "***", $text,);
    ?>
    <main>
        <h4>TEXT AREA</h4>
        <p><?php echo $text; ?></p>
        <p>Caratteri: <?php echo strlen( $text )?></p>
        <br>
        <h4>BADWORD</h4>
        <p><?php echo $textFixed; ?></p>
    </main>
</body>
</html>