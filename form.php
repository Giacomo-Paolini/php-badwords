<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>PHP Badwords</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <form action="badword.php" method="GET" class="p-4">
                <div class="col-12 gap-4">
                    <div class="d-flex flex-column">
                        <h4>TEXT AREA</h4>
                        <textarea placeholder="Text area" name="textArea"></textarea>
                    </div>
                    <div class="d-flex flex-column mt-4">
                        <h4>BADWORD</h4>
                        <input type="text" name="badword" placeholder="Inserisci una parola che si trova nella text area">
                    </div>
                </div>
                <div class="col-4 offset-4 text-center mt-2">
                    <button class="col-2" type="submit">Send</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>