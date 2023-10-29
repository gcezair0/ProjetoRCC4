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
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
    rel="stylesheet">
  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- CSS -->
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/cart.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
    integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
  <!-- fontawesom cdn link -->
  <link href="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/favicon.ico" rel="shortcut icon"
    type="image/x-icon">
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
  <br>
  <div class="container" id="card">
    <div class="row">
      <div class="col-md-8">
        <div class="card p-4" id="cards">
          <h5 class="text-dark">Carrinho (1)</h5>

          <div class="row mt-4">
            <div class="col-md-3">
              <div class="overlay">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"
                  class="zoom-in figure-img img-fluid">
              </div>

            </div>

            <div class="col-md-7">
              <h5 class="pt-2">Adidas camisa</h5>
              <p class="text-uppercase">Camiseta - azul</p>
              <div class="linespace mb-4">
                <p class=" mt-4">Cor : azul</p>
                <p class="">Tamanho : M</p>
              </div>
              <button class="btn mt-2 text-uppercase"><i class="fas fa-trash-alt pr-2"></i>Remover
                item</button>
              &nbsp;
              <button class="btn mt-2 text-uppercase"><i class="fas fa-heart pr-2"></i>Adicionar aos
                favoritos</button>

            </div>

            <div class="col-md-2">
              <div class="input-group input-group-sm">
                <div class="input-group-prepend" onclick="add2()">
                  <span class="input-group-text"><i class="fas fa-plus"></i></span>
                </div>

                <input type="text" class="numberbox2 form-control" value="1">
                <div class="input-group-append" onclick="subtract2()">
                  <span class="input-group-text"><i class="fas fa-minus"></i></span>
                </div>
              </div>
            </div>
          </div>
          <hr>

        </div>
      </div>

      <div class="col-md-4">
        <div class="card p-3" id="card-cost">
          <h5 class="text-primary pl-2">Total</h5>
          <table class="table table-borderless pt-2">
            <tbody>
              <tr>
                <th scope="row" class="font-weight-light">Total do Produto</th>
                <td>R$179.00</td>
              </tr>
              <tr>
                <th scope="row" class="font-weight-light">Frete</th>
                <td>R$100.00</td>
              </tr>
            </tbody>
          </table>
          <hr>
          <h6 class="pl-2 pt-1">Valor Total <span class="float-right">$279.00</span></h6>
          <hr>
          <button class="btn mt-2"><a href="checkout.html" class="text-white"><i
                class="fas fa-shopping-bag pr-2"></i>Continuar para o Pagamento</a></button>
        </div>
      </div>

    </div>
    <div class="row mt-5 mb-5">
      <div class="col-md-8">
        <div class="card p-3">
          <h5 class="text-dark">Expectativa de Entrega</h5>
          <p class="text-muted">Terça., 12.03. - Segunda., 16.03.</p>

        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8">
        <div class="card p-3">
          <h5 class="text-dark">Nós aceitamos</h5>
          <div class="text-wrap mt-3">
            <div class="footer-bottom-payments">
              <i class="fab fa-cc-mastercard"></i>
              <i class="fab fa-cc-visa"></i>
              <i class="fab fa-cc-diners-club"></i>
              <i class="fab fa-cc-amazon-pay"></i>
              <i class="fab fa-cc-apple-pay"></i>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="footer-bottom">

    </div>
    <p>Copyright &copy; 2023 - Electrum</p>
  </div>
  </footer>
  <script src="js/carrosel.js"></script>
  <script src="js/cart.js"></script>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
  integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
  integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="js/carrinho.js"></script>

</html>