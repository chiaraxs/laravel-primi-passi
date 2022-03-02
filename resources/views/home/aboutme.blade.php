<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <!-- LINK BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <div class="container text-center mt-3">
        <div class="row">
            <div class="col">
                <h1 class="text-warning">Hello World!</h1>
                <h3 class="text-danger">This is my first page with {{$back_end}}!</h3>
                <p>My name is {{$name}} {{$surname}}!</p>
                <p>Let's get in touch! Contact me: {{$mail}}</p>
                <p>Now, i'm learning PHP. But i still prefer {{$front_end}} ( sorry not sorry {{$back_end}} ) &hearts;</p>
            </div>
        </div>
    </div>



</body>

</html>