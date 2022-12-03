<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!--LINKS UTEIS-->
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <title>ProjE-comerce</title>

</head>

<body id="MODEDARK" class="background-full">
    <div id="MODEDARK1" class="text-color container">
        <div class="btn2">
            <img class="light-mode fixed" src="{{ asset('images/light.png') }}">
            <img class="mode-dark fixed" src="{{ asset('images/dark-mode.png') }}">
        </div>
        <header class="p-3 position-relative fixed-top">
            <p></p>
            @if ($message = Session::get('success'))
            @endif
            <p></p>
            <div class="text-end carrinho">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 ">
                        <li class="{{ (Route::current()->getName() === 'site.home' ? ' active' : '') }}">
                            @if (Route::has('login'))
                            @auth
                            <a class="nav-link px-2 text-white" href="{{ route('site.carrinho') }}">
                                <img src="{{ asset('images/carrinho-de-compras.png') }}" width="40rem">
                                <span class="bg-danger border border-light rounded-circle">
                                </span>
                            </a>

                            @else
                            @if (Route::has('login'))
                            <a class="nav-link px-2 text-white" href="{{ route('login') }}">
                                <img src="{{ asset('images/carrinho-de-compras.png') }}" width="40rem">
                            </a>
                            @endif
                            @endauth
                            @endif
                        </li>

                        <li>
                            @if (Route::has('login'))
                            <div class="dropdown text-dark">
                                <a class="btn dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">
                                    <i style="font-size: 1.5rem;" class="bi bi-person-circle"></i>
                                    @auth
                                    {{ Auth::user()->name }}
                                    @endauth
                                </a>
                                @if (Route::has('login'))
                                <div class="dropdown-menu text-dark" style="margin-left: -50px;">
                                    @auth
                                    <a class="dropdown-item text-dark" href="{{ route('profile.edit') }}">Perfil</a>
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <a class="dropdown-item text-dark" href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            {{ __('Sair') }}
                                        </a>
                                    </form>
                                    @else
                                    <a class="dropdown-item text-dark" href="{{ route('login') }}">Acessar</a>
                                    @endauth
                                </div>
                                @endif
                            </div>
                            @endif

                        </li>
                    </ul>
                </div>
            </div>
            <div class="nav">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <img src="{{ asset('images/Logo.png') }}" width="200px" height="100px">
                </a>
            </div>
            <div class="FiltrosDIV">
                <div class="Filtros">
                    <div class="InputPesquisaDIV">
                        <div class="InputPesquisaDIV">
                            <form action="{{ route('site.produtos') }}" method="get">
                                <input typt="search" name="search" max="50" />
                                <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="text-color">
                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 ">
                        <li class="{{ (Route::current()->getName() === 'site.home' ? ' active' : '') }}">
                            <a class="text-color nav-link px-2 " href="{{ route('site.home') }}">
                                Inicio
                            </a>
                        </li>
                        <li class="{{ (Route::current()->getName() === 'produto.index' ? ' active' : '') }}">
                            <a class="text-color nav-link px-2 " href="{{ route('site.produtos') }}">
                                Produtos
                            </a>
                        </li>
                        <li class="{{ (Route::current()->getName() === 'site.sobre' ? ' active' : '') }}">
                            <a class="text-color nav-link px-2 " href="{{route('site.sobre')}}">
                                Sobre
                            </a>
                        </li>
                        @can('admin')
                        <div class="dropdown">
                            <a class="btn dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">
                                Area Administrativa
                            </a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('produto.index') }}">
                                    Gerenciar Produtos
                                </a>
                                <a class="dropdown-item" href="{{ route('categoria.index') }}">
                                    Gerenciar Categorias
                                </a>
                                <a class="dropdown-item" href="{{ route('fornecedor.index') }}">
                                    Gerenciar Fornecedores
                                </a>
                            </div>
                        </div>
                        @endcan
                    </ul>
                </div>
        </header>


        <main class="" style="padding-top: 0; padding-bottom: 900px; width: 100%">

            @yield('content')

        </main>

        <footer class="py-5 text-muted">
            <div class="container">
                <div class="row">

                    <div class="col-2">
                        <h5 class="">Secção</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Inicio</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Produtos</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Sobre</a></li>
                        </ul>
                    </div>

                    <div class="col-2">
                        <h5>Desenvolvedores</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2">
                                <a href="https://github.com/BellaLima" class="nav-link p-0 text-muted" target="_blank">
                                    Isabella
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="https://github.com/MarcosRangelRZanoni" class="nav-link p-0 text-muted" target="_blank">
                                    Marcos Rangel
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="https://github.com/natanael986" class="nav-link p-0 text-muted" target="_blank">
                                    Natanael
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-4 offset-4">
                        <form>
                            <h5>Inscreva-se</h5>
                            <p>Para receber nossas promoções e descontos.</p>
                            <div class="w-100 gap-2">
                                <label for="email" class="visually-hidden">Email</label>
                                <input id="email" type="text" class="form-control mb-3" placeholder="Email">
                                <div style="margin: 10px 50px 10px 50px;">
                                    <a class="btn btn-primary" style="width: 100%;" type="button">Inscreva-se</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="d-flex justify-content-between py-4 my-4 border-top">
                    <p>&copy;
                        <!--<?= date('Y'); ?>--> {{ date ('Y') }} Sem nome, Empresa. Todos os direitos reservados.
                    </p>
                    <ul class="list-unstyled d-flex">
                        <li class="ms-3"><a class="link-light" href="#"><i style="font-size: 2rem" class="bi bi-twitter"></i></a></li>
                        <li class="ms-3"><a class="link-light" href="#"><i style="font-size: 2rem" class="bi bi-instagram"></i></a></li>
                        <li class="ms-3"><a class="link-light" href="#"><i style="font-size: 2rem" class="bi bi-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>

    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>


</html>