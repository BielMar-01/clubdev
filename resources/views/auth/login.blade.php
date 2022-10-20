<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ClubDev - Login</title>
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
                <a href="{{url('/logino')}}">ClubDev</a>
            </div>
        </div>
    </div>
</header>

<main>
    <section class="login">
        <div class="container">
            <div class="login__titulo">
                <h2>
                    Fazer login
                </h2>
            </div>
            <div class="login__forms">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="login__forms__form">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="login__forms__form">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="login__forms__btn">
                        <div>
                            <button class="entrar" type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                            <div>
                                Não tem cadastro?<a class="cadastro" href="{{url('register')}}"> Cadastre-se</a>
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
