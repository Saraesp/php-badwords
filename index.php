<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <form action="./censura.php" method="POST" class="p-4">
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Scrivi Paragrafo</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" id="paragrafo" name="paragrafo"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Parola da Censurare</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" id="censura" name="censura">
        </div>
        <button class="btn btn-primary" type="submit">Invia</button>

    </form>
</body>
</html>