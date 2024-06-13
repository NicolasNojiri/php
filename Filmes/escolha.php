<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>escolha</title>
    <style>
        a{
            text-decoration: none;
        }

        .fw{
            width: 100%;
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .title{
            margin: 3rem;
            font-size: 3rem;
        }

        button{
            width: 8rem;
            height: 2rem;
            cursor: pointer;
            border-radius: 0.25rem;
        }
    </style>
</head>
<body>
    <div class="fw">
        <div class="title">CADASTROS</div>
        <a href="/Filmes/filme/index.php"><button>Filmes</button></a>
        <br>
        <a href="/Filmes/genero/index.php"><button>Gêneros</button></a>
    </div>
    
</body>
</html>