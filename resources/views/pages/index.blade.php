@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />


  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Header Example</title>
  <link rel="stylesheet" href="/styles/index.css" />
  <link rel="icon" href="https://www.Square1.io/favicon.svg" />
</head>

<body>
  <header class="header">
    <div class="logo">
      <div class="header-logo-box">
        <button class="menu-btn">
          <!-- Menu Hamburguesa -->
          <svg class="header-icon icons-hambur" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>

        <a href="/index.html">
          <img src="assets/images/icon/SQ1 Academy (1) 1.jpg" class="img-logo" alt="Square1 Academy Store Logo"
            width="120" height="37" />
        </a>
      </div>
      <div class="header-icons">
        <!--Icono Search-->
        <a href="a" class="header-icon icons-search">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="icon">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
          </svg>
        </a>
        <!--Icono Login-->
        <a href="a" class="header-icon icons-login">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="icon">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
          </svg>
        </a>
        <!--Icono Car-->
        <a href="a" class="header-icon icons-car">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="icon">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
          </svg>
        </a>
      </div>
    </div>
    <nav class="navbar">
      <a href="#" class="nav-item">WOMEN</a>
      <a href="#" class="nav-item">MEN</a>
      <a href="#" class="nav-item">KIDS</a>
      <a href="#" class="nav-item">ACCESSORIES</a>
      <a href="#" class="nav-item">ABOUT US</a>
      <a href="#" class="nav-item">NEWS</a>
      <a href="#" class="nav-item">CONTACT US</a>
    </nav>
  </header>
  <main class="main-content">
    <section class="banner">
      <div class="banner-image">
        <img src="/assets/images/index/Modelo index.png" alt="Fashion Model" class="img-modelo" />
      </div>
      <div class="banner-text">
        <p>HOT DEALS THIS WEEK</p>
        <h2>SALE UP 50%<br />MODERN FURNITURE</h2>
        <button class="btn">View now</button>
      </div>
    </section>
    <section class="brands">
      <div class="brand-logos">
        <img src="assets/images/index/chanel-logo.svg" alt="Chanel" class="brand-logo" />
        <img src="assets/images/index/louis-vuitton-logo.svg" alt="Louis Vuitton" class="brand-logo" />
        <img src="assets/images/index/prada-logo.svg" alt="Prada" class="brand-logo" />
        <img src="assets/images/index/calvin-klein-logo.svg" alt="Calvin Klein" class="brand-logo" />
        <img src="assets/images/index/denim-logo.svg" alt="Denim" class="brand-logo" />
      </div>
    </section>
  </main>
  <section class="catalog">
    <div class="catalog-container">
      <!-- Título y descripción -->
      <div class="catalog-header">
        <h1>New Arrivals</h1>
        <p>Discover our exciting new arrivals, featuring the latest trends and styles to <br> refresh your wardrobe this
          season.</p>
      </div>

      <!-- Categorías -->
      <div class="categories">
        <button class="category">Men’s Fashion</button>
        <button class="category selected">Women’s Fashion</button>
        <button class="category">Women Accessories</button>
        <button class="category">Men Accessories</button>
        <button class="category">Discount Deals</button>
      </div>

      <!-- Productos -->
      <div class="products">
        <!-- Fila 1 -->
        <div class="product">
          <img src="/assets/images/index/catalog/chaqueta.png" alt="Chaqueta de lana">
          <h3>Chaqueta de lana</h3>
          <p>Gucci</p>
          <div class="product-price">
            <span class="current-price">$95.50</span>
            <span class="original-price">$95.50</span>
          </div>
          <div class="color-options">
            <button class="color-option" style="background-color: #e5e7eb;"></button>
            <button class="color-option" style="background-color: #f97316;"></button>
          </div>
          <button class="buy-btn">Comprar</button>
        </div>
        <div class="product">
          <img src="/assets/images/index/catalog/chaqueta.png" alt="Chaqueta de lana">
          <h3>Chaqueta de lana</h3>
          <p>Gucci</p>
          <div class="product-price">
            <span class="current-price">$95.50</span>
            <span class="original-price">$95.50</span>
          </div>
          <div class="color-options">
            <button class="color-option" style="background-color: #e5e7eb;"></button>
            <button class="color-option" style="background-color: #f97316;"></button>
          </div>
          <button class="buy-btn">Comprar</button>
        </div>
        <div class="product">
          <img src="/assets/images/index/catalog/chaqueta.png" alt="Chaqueta de lana">
          <h3>Chaqueta de lana</h3>
          <p>Gucci</p>
          <div class="product-price">
            <span class="current-price">$95.50</span>
            <span class="original-price">$95.50</span>
          </div>
          <div class="color-options">
            <button class="color-option" style="background-color: #e5e7eb;"></button>
            <button class="color-option" style="background-color: #f97316;"></button>
          </div>
          <button class="buy-btn">Comprar</button>
        </div>
        <div class="product">
          <img src="/assets/images/index/catalog/chaqueta.png" alt="Chaqueta de lana">
          <h3>Chaqueta de lana</h3>
          <p>Gucci</p>
          <div class="product-price">
            <span class="current-price">$95.50</span>
            <span class="original-price">$95.50</span>
          </div>
          <div class="color-options">
            <button class="color-option" style="background-color: #e5e7eb;"></button>
            <button class="color-option" style="background-color: #f97316;"></button>
          </div>
          <button class="buy-btn">Comprar</button>
        </div>
        <!-- Fila 2 -->
        <div class="product">
          <img src="/assets/images/index/catalog/chaqueta.png" alt="Chaqueta de lana">
          <h3>Chaqueta de lana</h3>
          <p>Gucci</p>
          <div class="product-price">
            <span class="current-price">$95.50</span>
            <span class="original-price">$95.50</span>
          </div>
          <div class="color-options">
            <button class="color-option" style="background-color: #e5e7eb;"></button>
            <button class="color-option" style="background-color: #f97316;"></button>
          </div>
          <button class="buy-btn">Comprar</button>
        </div>
        <div class="product">
          <img src="/assets/images/index/catalog/chaqueta.png" alt="Chaqueta de lana">
          <h3>Chaqueta de lana</h3>
          <p>Gucci</p>
          <div class="product-price">
            <span class="current-price">$95.50</span>
            <span class="original-price">$95.50</span>
          </div>
          <div class="color-options">
            <button class="color-option" style="background-color: #e5e7eb;"></button>
            <button class="color-option" style="background-color: #f97316;"></button>
          </div>
          <button class="buy-btn">Comprar</button>
        </div>
        <div class="product">
          <img src="/assets/images/index/catalog/chaqueta.png" alt="Chaqueta de lana">
          <h3>Chaqueta de lana</h3>
          <p>Gucci</p>
          <div class="product-price">
            <span class="current-price">$95.50</span>
            <span class="original-price">$95.50</span>
          </div>
          <div class="color-options">
            <button class="color-option" style="background-color: #e5e7eb;"></button>
            <button class="color-option" style="background-color: #f97316;"></button>
          </div>
          <button class="buy-btn">Comprar</button>
        </div>
        <div class="product">
          <img src="/assets/images/index/catalog/chaqueta.png" alt="Chaqueta de lana">
          <h3>Chaqueta de lana</h3>
          <p>Gucci</p>
          <div class="product-price">
            <span class="current-price">$95.50</span>
            <span class="original-price">$95.50</span>
          </div>
          <div class="color-options">
            <button class="color-option" style="background-color: #e5e7eb;"></button>
            <button class="color-option" style="background-color: #f97316;"></button>
          </div>
          <button class="buy-btn">Comprar</button>
        </div>
      </div>

      <!-- Botón Ver Más -->
      <div class="view-more">
        <button>View More</button>
      </div>
    </div>
  </section>
  <div class="banner2">
    <div class="banner-content2">
      <p class="banner-subtitle2">Extra 30% Off Online</p>
      <h1 class="banner-title2">Summer Season Sale</h1>
      <p class="banner-description2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel dolor <br>
        pellentesque, varius elit quis, malesuada niem.</p>
      <a href="#" class="shop-now-btn">Shop Now</a>
    </div>
  </div>

  <div class="features">
    <div class="feature">
      <img src="/assets/images/feature/high-quality-icon.png" alt="" class="feature-icon">
      <div class="feature-text">
        <span class="feature-title">High Quality</span>
        <span class="feature-description">crafted from top materials</span>
      </div>
    </div>
    <div class="feature">
      <img src="/assets/images/feature/warranty-icon.png" alt="" class="feature-icon">
      <div class="feature-text">
        <span class="feature-title">Warranty Protection</span>
        <span class="feature-description">Over 2 years</span>
      </div>
    </div>
    <div class="feature">
      <img src="/assets/images/feature/shipping-icon.png" alt="" class="feature-icon">
      <div class="feature-text">
        <span class="feature-title">Free Shipping</span>
        <span class="feature-description">Order over 50 $</span>
      </div>
    </div>
    <div class="feature">
      <img src="/assets/images/feature/support-icon.png" alt="" class="feature-icon">
      <div class="feature-text">
        <span class="feature-title">24 / 7 Support</span>
        <span class="feature-description">Dedicated support</span>
      </div>
    </div>
  </div>

  <footer class="footer">
    <div class="footer-content">
      <a href="/index.html">
        <img src="assets/images/icon/SQ1 Academy (1) 1.jpg" class="img-logo" alt="Square1 Academy Store Logo" width="90"
          height="28" />
      </a>
      <nav class="footer-nav">

        <a href="a" class="nav-item">Support Center</a>
        <a href="a" class="nav-item">Invoicing</a>
        <a href="a" class="nav-item">Contract</a>
        <a href="a" class="nav-item">Careers</a>
        <a href="a" class="nav-item">Blog</a>
        <a href="a" class="nav-item">FAQs</a>
      </nav>
    </div>
  </footer>
</body>

</html>
    <div class="hero-section">
        <!-- Tu contenido HTML existente -->
    </div>
@endsection