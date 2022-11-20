<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="LoginButton">
        <div class="LoginVoltar">
            <a href="{{ route('site.home')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                </svg>
                Voltar
            </a>
        </div>
    </div>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form action="\login" method="post" enctype="multipart/form-data">
                <label for="chk" aria-hidden="true">Cadastrar-se</label>
                <input type="text" name="nome" placeholder="nome" required="">
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="senha" placeholder="Senha" required="">
                <button type="submit">Cadastrar</button>
            </form>
        </div>

        <div class="login">
            <form>
                <label for="chk" aria-hidden="true">Entrar</label>
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="senha" placeholder="Senha" required="">
                <button type="submit">Entrar</button>
            </form>
        </div>
    </div>
</body>

</html>