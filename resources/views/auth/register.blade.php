<link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">

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
<div class="loginBox"> <img class="user" src="https://i.ibb.co/yVGxFPR/2.png" height="100px" width="100px">
    <h3>Entrar</h3>
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="inputBox">

            <input id="name" placeholder="Nome" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />

            <input id="email" placeholder="Email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />

            <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" placeholder="Senha">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />

            <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required placeholder="Senha">
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

        </div>
        <input type="submit" value="{{ __('Cadastrar') }}">
    </form>
    <a href="{{ route('login') }}">Ja tem conta?<br> </a>

</div>
<link rel="stylesheet" type="text/css" href="{{ asset('js/Login.js') }}">