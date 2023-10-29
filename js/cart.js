      // Variável para rastrear a quantidade de itens no carrinho
      let cartCount = 0;

      const cartButton = document.querySelector(".header-cart-container");
      const cart = document.getElementById("cart");
      const cartItems = document.getElementById("cart-items");

      // Função para adicionar itens ao carrinho
      function addToCart(item) {
          const li = document.createElement("li");
          li.textContent = item;
          cartItems.appendChild(li);

          // Atualizar o contador de quantidade
          cartCount++;
          updateCartCount();
      }

      // Função para atualizar o contador de quantidade
      function updateCartCount() {
          const qtySpan = document.querySelector(".header-cart-container .qty");
          qtySpan.textContent = cartCount;
      }

      // Mostrar/ocultar o carrinho quando o botão é clicado
      cartButton.addEventListener("click", () => {
          cart.classList.toggle("hidden");
      });

      // Exemplo de uso: Adicione itens ao carrinho ao clicar em "Comprar"
      const buyButtons = document.querySelectorAll(".products-grid-card button.btn");
      buyButtons.forEach((button) => {
          button.addEventListener("click", () => {
              const productName = button.parentNode.querySelector(".product-name").textContent;
              addToCart(productName);
          });
      });