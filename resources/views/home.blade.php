@extends('layouts.app')

@section('home')
<section class="sobre">
    <div class="container">
        <h2 class="sobre__titulo">Sobre</h2>
        <div class="sobre__conteudo">
            <div class="sobre__conteudo__texto">
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nisl orci, dictum ac est dapibus, egestas feugiat ipsum. Donec dignissim nibh ut lacus aliquet ullamcorper id in lorem. Sed mi libero, vulputate consequat molestie vel, suscipit a urna. Quisque ante mauris, suscipit sed efficitur ut, pharetra ac ante. In leo quam, egestas sed est nec, interdum pretium tellus. Morbi vulputate, dui in mattis condimentum, massa tortor volutpat dolor, ut posuere ipsum nibh mollis ante. Fusce efficitur scelerisque purus, nec malesuada elit imperdiet et. Mauris viverra elit enim, quis blandit dolor tristique nec. Mauris vel turpis pulvinar, scelerisque nulla eget, varius leo. Sed condimentum porta augue eu accumsan. Etiam libero neque, dapibus eget ligula eget, consectetur hendrerit massa.</p>
            </div>
            <div class="sobre__conteudo__img">
                <img src="img/Foto.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="produtos">
    <div class="container">
        <h2 class="produtos__titulo">Produtos</h2>
        <div class="produtos__itens">
            <img src="img/Foto.png" alt="">
            <img src="img/Foto.png" alt="">
            <img src="img/Foto.png" alt="">
        </div>
    </div>
    <div class="produtos__btn">
        <a href="produtos.html">Veja todos</a>
    </div>
</section>

<section class="voluntario">
    <div class="container">
        <h2 class="voluntario__titulo">Seja um voluntário!</h2>
        <div class="voluntario__forms">
            <div class="voluntario__forms__text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nisl orci, dictum ac est dapibus, egestas feugiat ipsum. Donec dignissim nibh ut lacus aliquet ullamcorper id in lorem. Sed mi libero, vulputate consequat molestie vel, suscipit a urna. Quisque ante mauris, suscipit sed efficitur ut, pharetra ac ante. In leo quam, egestas sed est nec, interdum pretium tellus. </p>
            </div>
            <div class="voluntario__forms__form">
                <form action="">
                    <input type="text" placeholder="Nome">
                    <input type="email" placeholder="Email">
                    <input class="msg" type="text" placeholder="Mensagem">
                    <button><a href="#">Enviar</a></button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
