<?php
require "connect.php"


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Revoshop</title>
  <!-- FONT OPEN SANS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- CSS -->
  <link rel="stylesheet" href="css/app.css">
  <style>
    /* Estilos para a tela de carrinho */
    #cart {
      display: none;
      border: 1px solid #ccc;
      padding: 10px;
      position: absolute;
      top: 50px;
      right: 10px;
      background-color: #fff;
      z-index: 1;
    }

    /* Estilos para os itens do carrinho */
    #cart-items {
      list-style-type: none;
      padding: 0;
    }
  </style>
</head>

<body>
  <!-- Header -->
  <header class="header">
    <div class="header-top">
      <div class="header-top-container">
        <div class="store-info-container">
          <span><i class="fas fa-phone"></i> (84)98740-3639</span>
          <span><i class="far fa-envelope"></i> revotech@suporte.com</span>
          <span><i class="fas fa-map-marker-alt"></i> Rua Teste, 1234</span>
        </div>
        <div class="header-user-top-menu">
          <span><i class="fas fa-dollar sign"></i> <a href="#">BRL</a></span>
          <span><i class="fas fa-user"></i> <a href="#">Minha Conta</a></span>
        </div>
      </div>
    </div>
    <div class="main-header">
      <div class="main-header-container">
        <a href="#" id="brand">Revoshop <i class="fas fa-bolt"></i></a>
        <form action="" id="search-form">
          <input type="text" id="search" placeholder="Busque aqui">
          <input type="submit" class="btn btn-half" value="Pesquisar">
        </form>
        <div class="header-actions-menu">
          <div class="wishlist-container">
            <span class="qty">4</span>
            <i class="far fa-heart"></i>
            <a href="#">Favoritos</a>
          </div>
          <div class="header-cart-container">
            <span class="qty">1</span>
            <i class="fas fa-shopping-cart"></i>
            <a href="#">Carrinho</a>
          </div>
          <div id="cart" class="hidden">
            <h2>Seu Carrinho</h2>
            <ul id="cart-items">
          </div>
        </div>
      </div>
      <div class="header-bottom">
        <nav>
          <ul>
            <li>
              <a href="#">Home</a>
            </li>
            <li>
              <a href="#">Promoções</a>
            </li>
            <li>
              <a href="#">Notebooks</a>
            </li>
            <li>
              <a href="#">Celulares</a>
            </li>
            <li>
              <a href="#">Câmeras</a>
            </li>
            <li>
              <a href="#">Acessórios</a>
            </li>
          </ul>
        </nav>
      </div>
  </header>
  <!-- Banners -->
  <div class="banners">
    <div class="banner" id="banner-1">
      <div class="banner-cover"></div>
      <div class="banner-content">
        <h2>Promoção de Notebooks</h2>
        <a href="#">Ver Mais <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="banner" id="banner-2">
      <div class="banner-cover"></div>
      <div class="banner-content">
        <h2>Lançamento de Acessórios</h2>
        <a href="#">Ver Mais <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="banner" id="banner-3">
      <div class="banner-cover"></div>
      <div class="banner-content">
        <h2>Câmeras Potentes</h2>
        <a href="#">Ver Mais <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>
  <!-- Products -->
  <div class="products-grid">
    <h2>Produtos Novos</h2>
    <div class="products-grid-container">
      <div class="products-grid-card">
        <span class="label new">New</span>
        <img src="/electrum-master/imgs/prod-1.jpg" alt="Produto 1">
        <p class="category">Categoria</p>
        <h3 class="product-name">Nome do Produto</h3>
        <p class="product-price">R$ 124,90</p>
        <div class="rating-box">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <button class="btn">Comprar</button>
      </div>
      <div class="products-grid-card">
        <span class="label new">New</span>
        <img src="/electrum-master/imgs/prod-2.jpg" alt="Produto 2">
        <p class="category">Categoria</p>
        <h3 class="product-name">Nome do Produto</h3>
        <p class="product-price">R$ 124,90</p>
        <div class="rating-box">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <button class="btn">Comprar</button>
      </div>
      <div class="products-grid-card">
        <span class="label new">New</span>
        <img src="/electrum-master/imgs/prod-3.jpg" alt="Produto 3">
        <p class="category">Categoria</p>
        <h3 class="product-name">Nome do Produto</h3>
        <p class="product-price">R$ 124,90</p>
        <div class="rating-box">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <button class="btn">Comprar</button>
      </div>
      <div class="products-grid-card">
        <span class="label new">New</span>
        <img src="/electrum-master/imgs/prod-4.jpg" alt="Produto 4">
        <p class="category">Categoria</p>
        <h3 class="product-name">Nome do Produto</h3>
        <p class="product-price">R$ 124,90</p>
        <div class="rating-box">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <button class="btn">Comprar</button>
      </div>
    </div>
  </div>

  <button class="btn-prev" onclick="prevSlide()">❮</button>
  <button class="btn-next" onclick="nextSlide()">❯</button>

  <!-- Deal -->
  <div class="deal-container">
    <div class="deal-container-content">
      <div class="deal-container-content-timer">
        <div id="days" class="deal-container-timer">
          <span class="deal-container-timer-time"></span>
          <span class="deal-container-timer-word">Dias</span>
        </div>
        <div id="hours" class="deal-container-timer">
          <span class="deal-container-timer-time"></span>
          <span class="deal-container-timer-word">Horas</span>
        </div>
        <div id="minutes" class="deal-container-timer">
          <span class="deal-container-timer-time"></span>
          <span class="deal-container-timer-word">Minutos</span>
        </div>
        <div id="seconds" class="deal-container-timer">
          <span class="deal-container-timer-time"></span>
          <span class="deal-container-timer-word">Segundos</span>
        </div>
      </div>
      <h2 class="deal-container-content-title">Promoção de Fone Gamer</h2>
      <p class="deal-container-content-subtitle">Toda a linha gamer com 50% de desconto</p>
      <button class="btn">Comprar Agora</button>
    </div>
  </div>

  <!-- Mais Vendidos -->
  <div class="products-grid">
    <h2>Mais Vendidos</h2>
    <div class="products-grid-container">
      <div class="products-grid-card">
        <span class="label hot">Hot</span>
        <img src="/electrum-master/imgs/prod-5.jpg" alt="Produto 5">
        <p class="category">Categoria</p>
        <h3 class="product-name">Nome do Produto</h3>
        <p class="product-price">R$ 124,90</p>
        <div class="rating-box">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <button class="btn">Comprar</button>
      </div>
      <div class="products-grid-card">
        <span class="label hot">Hot</span>
        <img src="/electrum-master/imgs/prod-6.jpg" alt="Produto 6">
        <p class="category">Categoria</p>
        <h3 class="product-name">Nome do Produto</h3>
        <p class="product-price">R$ 124,90</p>
        <div class="rating-box">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <button class="btn">Comprar</button>
      </div>
      <div class="products-grid-card">
        <span class="label hot">Hot</span>
        <img src="/electrum-master/imgs/prod-7.jpg" alt="Produto 7">
        <p class="category">Categoria</p>
        <h3 class="product-name">Nome do Produto</h3>
        <p class="product-price">R$ 124,90</p>
        <div class="rating-box">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <button class="btn">Comprar</button>
      </div>
      <div class="products-grid-card">
        <span class="label hot">Hot</span>
        <img src="/electrum-master/imgs/prod-8.jpg" alt="Produto 8">
        <p class="category">Categoria</p>
        <h3 class="product-name">Nome do Produto</h3>
        <p class="product-price">R$ 124,90</p>
        <div class="rating-box">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <button class="btn">Comprar</button>
      </div>
    </div>
  </div>
  <!-- Newsletter -->
  <div class="newsletter-container">
    <h2>Assine a nossa <span>Newsletter</span></h2>
    <form action="">
      <input type="email" name="email" id="email" placeholder="Digite o seu e-mail">
      <input type="submit" class="btn btn-half" value="Assinar">
    </form>
    <div class="social-media">
      <i class="fab fa-facebook-f"></i>
      <i class="fab fa-instagram"></i>
      <i class="fab fa-twitter"></i>
      <i class="fab fa-pinterest-p"></i>
    </div>
  </div>
  <!-- Footer -->
  <footer class="footer">
    <div class="footer-top">
      <div class="footer-top-about">
        <h3>Sobre Nós</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum repellat nesciunt eius dolores nulla, atque suscipit rem voluptate dignissimos accusamus sit quo non architecto ducimus culpa, numquam sunt odit aspernatur?</p>
        <p><i class="fas fa-location-arrow"></i> <a href="#">Rua Teste, 1234</a></p>
        <p><i class="fas fa-phone"></i> <a href="#">(48)99999-0000</a></p>
        <p><i class="far fa-envelope"></i> <a href="#">electrum@email.com</a></p>
      </div>
      <div class="footer-top-categories">
        <h3>Categorias</h3>
        <ul>
          <li>
            <a href="#">Promoções</a>
          </li>
          <li>
            <a href="#">Headsets</a>
          </li>
          <li>
            <a href="#">PC Gamer</a>
          </li>
          <li>
            <a href="#">Câmeras</a>
          </li>
          <li>
            <a href="#">Mouse e teclado</a>
          </li>
        </ul>
      </div>
      <div class="footer-top-information">
        <h3>Informações</h3>
        <ul>
          <li>
            <a href="#">Sobre nós</a>
          </li>
          <li>
            <a href="#">Entre em contato</a>
          </li>
          <li>
            <a href="#">Política de privacidade</a>
          </li>
          <li>
            <a href="#">Pedidos e devoluções</a>
          </li>
          <li>
            <a href="#">Termos e condições</a>
          </li>
        </ul>
      </div>
      <div class="footer-top-menu">
        <h3>Menu</h3>
        <ul>
          <li>
            <a href="#">Minha Conta</a>
          </li>
          <li>
            <a href="#">Carrinho</a>
          </li>
          <li>
            <a href="#">Lista de Desejos</a>
          </li>
          <li>
            <a href="#">Rastrear Pedido</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="footer-bottom-payments">
        <i class="fab fa-cc-mastercard"></i>
        <i class="fab fa-cc-visa"></i>
        <i class="fab fa-cc-diners-club"></i>
        <i class="fab fa-cc-amazon-pay"></i>
        <i class="fab fa-cc-apple-pay"></i>
      </div>
      <p>Copyright &copy; 2023 - Electrum</p>
    </div>
  </footer>
  <script src="js/carrosel.js"></script>
  <script src="js/cart.js"></script>
  <script src="js/contador.js"></script>
</body>

</html>