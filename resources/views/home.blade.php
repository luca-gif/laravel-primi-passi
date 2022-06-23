<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
</head>

<body>

    <div class="wrapper home">

        <header>
            <nav>
                <a href="/">HOME</a>
                <a href="/about">ABOUT</a>
                <a href="/contact">CONTACT</a>
            </nav>
        </header>



        <h1>Hello world!</h1>

        <ul>
            <li>{{ $nome }}</li>
            <li>{{ $cognome }}</li>
            <li>{{ $email }}</li>


            <li>Lingue parlate:</li>
            @foreach ($lingue_parlate as $lingua)
                <ul>
                    <li>{{ $lingua }}</li>
                </ul>
            @endforeach
        </ul>

    </div>



</body>

</html>
