<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Animago</title>
</head>
<body>
    <section class="main">
        <nav>
            <a href="" class="logo">
                <h1>Animago</h1>
            </a>

            <ul class="menu">
                <li><a href="" class="active">Home</a></li>
                <li><a href="">Loja</a></li>
                <li><a href="">Banho</a></li>
                <li><a href="">Sobre</a></li>
                <li><a href="">Contato</a></li> 
            </ul>
        </nav>
        <div class="main-heading">
            <h1>Uma nova visão sobre Petcommerce</h1>
            <p>Seja bem vindo a uma nova versão!</p>
            <a href="" class="main-btn">Acessar</a>
        </div>
    </section>

    <section class="features">
        <h1>Serviços animago!</h1>
        <div class="feature-container">

            <div class="feature-box">
                <div class="f-img">
                    <img src="./imagens/banho.png" alt="">
                </div>
                <div class="f-text">
                    <h4>Banho e tosa</h4>
                    <p>Agende online o banho dos seus pequenos!</p>
                    <a href="" class="main-btn">Agendar</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="./imagens/vet.png" alt="">
                </div>
                <div class="f-text">
                    <h4>Veterinario</h4>
                    <p>Agende a consulta do seu Pet!</p>
                    <a href="" class="main-btn">Agendar</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="./imagens/sacola.png" alt="">
                </div>
                <div class="f-text">
                    <h4>Shop</h4>
                    <p>Va as compras e garanta o desconto AmigoAnimago</p>
                    <a href="" class="main-btn">Agendar</a>
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="about-img">
            <img src="./imagens/moeda.png" alt="">
        </div>
        <div class="about-text">
            <h2>Suas compras convertidas!</h2>
            <p>Aqui no Animago, suas comprar e doações são convertidos em <b>% Descontos % </b> suas proximas compras!</p>
            <p>Tudo isso com a AnimagoCoin</p>
            <a href="" class="main-btn">Conhecer</a>
        </div>
    </section>
    <section class="contact">
        <div class="contact-heading">
            <h1>Contato</h1>
            <p>Nos mande uma mansagem!</p>
        </div>
        <form action="">
            <input type="text" name="user" placeholder="Seu nome completo"/>
            <input type="text" name="email" placeholder="Seu e-mail"/>
            <textarea name="message" placeholder="Sua mensagem.."></textarea>
            <button class="main-btn contact-btn">Enviar</button>
        </form>
    </section>
</body>
</html>