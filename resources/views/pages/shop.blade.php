@extends('layouts.app')

@section('title', 'Tienda')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop Page</title>
  <link rel="stylesheet" href="styles/shop.css">
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

  <main class="main-container">
    <!--Main Content-->
    <aside class="sidebar">
      <h2 class="filters-title">Filters</h2>

      <div class="filter-section">
        <h3 class="filter-title">Size</h3>
        <div class="size-options">
          <div class="size-option">S</div>
          <div class="size-option">M</div>
          <div class="size-option">L</div>
          <div class="size-option">XL</div>
        </div>
      </div>

      <div class="filter-section">
        <h3 class="filter-title">Colors</h3>
        <div class="color-options">
          <div class="color-option" style="background-color: #ff4444;"></div>
          <div class="color-option" style="background-color: #ff8844;"></div>
          <div class="color-option" style="background-color: #FFF06C;"></div>
          <div class="color-option" style="background-color: #9BFF6C;"></div>
          <div class="color-option" style="background-color: #6CFF9E;"></div>
          <div class="color-option" style="background-color: #6CFFDC;"></div>
          <div class="color-option" style="background-color: #6CB9FF;"></div>
          <div class="color-option" style="background-color: #6CF6FF;"></div>
          <div class="color-option" style="background-color: #6CA7FF;"></div>
          <div class="color-option" style="background-color: #6C7BFF;"></div>
          <div class="color-option" style="background-color: #8A6CFF;"></div>
          <div class="color-option" style="background-color: #B66CFF;"></div>
          <div class="color-option" style="background-color: #FC6CFF;"></div>
          <div class="color-option" style="background-color: #FF6C6C;"></div>
        </div>
      </div>

      <div class="filter-section">
        <h3 class="filter-title">Prices</h3>
        <div class="price-ranges">
          <div class="price-range">$0-$50</div>
          <div class="price-range">$50-$100</div>
          <div class="price-range">$100-$150</div>
          <div class="price-range">$150-$200</div>
          <div class="price-range">$200-$400</div>
        </div>
      </div>

      <div class="filter-section">
        <h3 class="filter-title">Brands</h3>
        <div class="brand-options">
          <span class="brand-option">Minimog</span>
          <span class="brand-option">Retrolie</span>
          <span class="brand-option">Brook</span>
          <span class="brand-option">Learts</span>
          <span class="brand-option">Vagabond</span>
          <span class="brand-option">Abby</span>
        </div>
      </div>

      <div class="filter-section">
        <div class="filter-section-header">
          <h3 class="filter-title">Collections</h3>
        </div>
        <div class="collection-options">
          <span class="collection-option">All products</span>
          <span class="collection-option">Best sellers</span>
          <span class="collection-option">New arrivals</span>
          <span class="collection-option">Accessories</span>
        </div>
      </div>

      <div class="filter-section">
        <h3 class="filter-title">Tags</h3>
        <div class="tag-options">
          <div class="tag">Fashion</div>
          <div class="tag">Hats</div>
          <div class="tag">Sandal</div>
          <div class="tag">Belt</div>
          <div class="tag">Bags</div>
          <div class="tag">Snacker</div>
          <div class="tag">Denim</div>
          <div class="tag">Minimog</div>
          <div class="tag">Vagabond</div>
          <div class="tag">Sunglasses</div>
          <div class="tag">Beachwear</div>
        </div>
      </div>
    </aside>

    <div class="content">
      <div class="content-header">
        <div class="sorting">
          Best selling
        </div>
        <div class="view-options">
          <!-- Add 5 view options -->
          <div class="view-option">⋮</div>
          <div class="view-option">⋯</div>
          <!-- Add more view options... -->
        </div>
      </div>

      <div class="product-grid">
        <div class="product-card">
          <img src="assets/images/shop/Models/rounded-red-hat.png" alt="Rounded Red Hat" class="product-image">
          <h3 class="product-name">Rounded Red Hat</h3>
          <div class="product-price">
            <span class="current-price">$8.00</span>
          </div>
          <div class="product-colors">
            <div class="product-color" style="background-color: #FFD700;"></div>
            <div class="product-color-second" style="background-color: #000000;"></div>
          </div>
        </div>

        <div class="product-card">
          <img src="assets/images/shop/Models/linen-blend-shirt.png" alt="Linen-blend Shirt" class="product-image">
          <h3 class="product-name">Linen-blend Shirt</h3>
          <div class="product-price">
            <span class="current-price">$17.00</span>
          </div>
          <div class="product-colors">
            <div class="product-color" style="background-color: #B8C6DB;"></div>
            <div class="product-color-second" style="background-color: #FFB6C1;"></div>
          </div>
        </div>

        <div class="product-card">
          <img src="assets/images/shop/Models/long-sleeve-coat.png" alt="Long-sleeve Coat" class="product-image">
          <h3 class="product-name">Long-sleeve Coat</h3>
          <div class="product-price">
            <span class="current-price">$106.00</span>
          </div>
          <div class="product-colors">
            <div class="product-color" style="background-color: #FFFFFF; border: 1px solid #ddd;"></div>
            <div class="product-color-second" style="background-color: #90EE90;"></div>
          </div>
        </div>

        <div class="product-card">
          <img src="assets/images/shop/Models/boxy-denim-hat.png" alt="Boxy Denim Hat" class="product-image">
          <h3 class="product-name">Boxy Denim Hat</h3>
          <div class="product-price">
            <span class="current-price">$25.00</span>
          </div>
          <div class="product-colors">
            <div class="product-color" style="background-color: #B8C6DB;"></div>
            <div class="product-color-second" style="background-color: #063E66;"></div>
          </div>
        </div>

        <div class="product-card">
          <img src="assets/images/shop/Models/linen-plain-top.png" alt="Linen Plain Top" class="product-image">
          <h3 class="product-name">Linen Plain Top</h3>
          <div class="product-price">
            <span class="current-price">$25.00</span>
          </div>
          <div class="product-colors">
            <div class="product-color" style="background-color: #B8C6DB;"></div>
            <div class="product-color-second"
              style="background-image: linear-gradient(45deg, #000 25%, transparent 25%), linear-gradient(-45deg, #000 25%, transparent 25%), linear-gradient(45deg, transparent 75%, #000 75%), linear-gradient(-45deg, transparent 75%, #000 75%); background-size: 4px 4px;">
            </div>
          </div>
        </div>

        <div class="product-card">
          <img src="assets/images/shop/Models/oversized-tshirt.png" alt="Oversized T-shirt" class="product-image">
          <h3 class="product-name">Oversized T-shirt</h3>
          <div class="product-price">
            <span class="current-price">$11.00</span>
            <span class="original-price">$14.00</span>
          </div>
          <div class="product-colors">
            <div class="product-color" style="background-color: #FFB6C1;"></div>
            <div class="product-color-second" style="background-color: #DDA0DD;"></div>
            <div class="product-color-second" style="background-color: #FFFFFF;"></div>
          </div>
        </div>

        <div class="product-card">
          <img src="assets/images/shop/Models/polarised-sunglasses.png" alt="Polarised Sunglasses"
            class="product-image">
          <h3 class="product-name">Polarised Sunglasses</h3>
          <div class="product-price">
            <span class="current-price">$18.00</span>
            <span class="original-price">$21.00</span>
          </div>
          <div class="product-colors">
            <div class="product-color" style="background-color: #000000;"></div>
            <div class="product-color-second" style="background-color: #836953;"></div>
          </div>
        </div>

        <div class="product-card">
          <img src="assets/images/shop/Models/rockstar-jacket.png" alt="Rockstar Jacket" class="product-image">
          <h3 class="product-name">Rockstar Jacket</h3>
          <div class="product-price">
            <span class="current-price">$22.00</span>
          </div>
          <div class="product-colors">
            <div class="product-color" style="background-color: #C6AEC7;"></div>
            <div class="product-color-second" style="background-color: #BEDCE3;"></div>
          </div>
        </div>

        <div class="product-card">
          <img src="assets/images/shop/Models/dotted-black-dress.png" alt="Dotted Black Dress" class="product-image">
          <h3 class="product-name">Dotted Black Dress</h3>
          <div class="product-price">
            <span class="current-price">$20.00</span>
          </div>
          <div class="product-colors">
            <div class="product-color" style="background-color: #063E66;"></div>
            <div class="product-color-second" style="background-color: #000000"></div>
            <div class="product-color-second" style="background-color: #B1C5D4;"></div>
          </div>
        </div>
      </div>

      <div class="pagination">
        <div class="page-number active">1</div>
        <div class="page-number">2</div>
        <div class="page-number">3</div>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="arrow" width="16" height="16">
          <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
        </svg>        
      </div>
    </div>
  </main>
</body>

</html>
    <div class="shop-container">
        <!-- Tu contenido HTML existente -->
    </div>
@endsection