<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>FIRST LARAVEL</title>
</head>

<body>
    <div class="conatainer">
        <div class="row">
            <div class="col text-center height_">
                <div class="col-12">
                    <div class="col-12">
                        <h1 class="my-3">{{ $Hello }}</h1>
                    </div>
                    <div class="col-12">
                        <a href="/language.hello" class="btn btn-secondary my-3">
                            click to see in other languages
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</body>

</html>
