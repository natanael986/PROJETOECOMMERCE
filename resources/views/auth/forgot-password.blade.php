<link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">

<div class="LoginButton">
    <div class="LoginVoltar">
        <a href="{{ route('login')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
            </svg>
            Voltar
        </a>
    </div>
</div>
<div class="loginBox"> <img class="user" src="https://i.ibb.co/yVGxFPR/2.png" height="100px" width="100px">
    <h3>Esqueceu sua senha</h3>
    <p >Esqueceu sua senha? Sem problemas. Basta nos informar seu endereço de e-mail e enviaremos um e-mail com um link de redefinição de senha que permitirá que você escolha um novo.</p>
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="inputBox">

            <input id="email" placeholder="Insira o Email cadastrado" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />

        </div>
        <input type="submit" value="{{ __('Enviar link de recuperação') }}">
    </form>
    <a href="{{ route('login') }}">Ja tem conta?<br> </a>

</div>