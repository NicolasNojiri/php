<html>

<head>
    <title>Login</title>
    <style>
        a {
            text-decoration: none;
        }

        .fw {
            width: 100%;
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .title {
            margin: 3rem;
            font-size: 3rem;
        }

        button {
            width: 8rem;
            height: 2rem;
            cursor: pointer;
            border-radius: 0.25rem;
        }
    </style>
</head>

<body>
    <div class="fw">
    <h1>Login</h1>
        <form action="login.php" method="post">
            Usuario: <br>
            <input type="text" name="usuario" id="usuario">
            <br>
            Senha: <br>
            <input type="password" name="senha" id="senha">
            <br>
            <input style="margin-left: 3.5rem; margin-top: 1rem" type="submit" value="enviar">
        </form>
    </div>


</body>

</html>