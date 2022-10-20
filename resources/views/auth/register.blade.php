<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ClubDev - Cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC" rel="stylesheet">
    <script>
        document.documentElement.className += ' js';
    </script>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
<header>
    <div class="container">
        <div class="header">
            <div class="header__logo">
                <a href="{{url('/login')}}">ClubDev</a>
            </div>
        </div>
    </div>
</header>
<main>
    <section class="cadastro">
        <div class="container">
            <div class="cadastro__titulo">
                <h2>
                    Crie seu cadastro
                </h2>
            </div>
            <div class="cadastro__forms">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="cadastro__forms__form">
                        <input id="name" placeholder="Nome" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="cadastro__forms__form">
                        <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="cadastro__forms__form">
                        <input id="password" placeholder="Senha" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="cadastro__forms__form">
                        <div>
                            <input id="password-confirm" placeholder="Confirmar Senha" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="cadastro__forms__btn">
                        <div>
                            <button type="submit">
                                Cadastrar
                            </button>
                            <div>
                                Se já tiver acesso <a class="cadastro" href="{{url('login')}}">clique aqui</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

<footer>
    <div class="container">
        <div class="footer">
            <div class="footer__logo">
                <a href="{{url('/login')}}">ClubDev</a>
            </div>
            <div class="footer__copy">
                <p>Copyright Empresa 2022</p>
            </div>
        </div>
    </div>
</footer>

<!--<script src="js/script-aula.js"></script> -->
<script src="main.js"></script>
</body>

</html>
