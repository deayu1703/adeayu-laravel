<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayyra Stationery - Stationery Lucu & Estetik</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Quicksand:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            /* Palette warna maroon dan pendukung */
            --maroon-dark: #6B1E23;
            --maroon-medium: #8C2B30;
            --maroon-light: #B9545A;
            --cream: #F7F0E6;
            --off-white: #FFFBF5;
            --dusty-pink: #E8C4C4;
            --beige: #EAD8C2;
            --text-dark: #3A1C1E;
            --text-light: #FFF9F5;
            --shadow: rgba(107, 30, 35, 0.1);

            /* Spacing */
            --section-padding: 5rem 1.5rem;
            --container-width: 1200px;

            /* Border radius */
            --radius-sm: 8px;
            --radius-md: 12px;
            --radius-lg: 20px;
            --radius-xl: 30px;

            /* Transition */
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-dark);
            background-color: var(--off-white);
            line-height: 1.6;
        }

        h1, h2, h3, h4 {
            font-family: 'Quicksand', sans-serif;
            font-weight: 600;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        ul {
            list-style: none;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        button, .btn {
            cursor: pointer;
            border: none;
            font-family: inherit;
            transition: var(--transition);
        }

        .container {
            max-width: var(--container-width);
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        .section-title {
            font-size: 2rem;
            text-align: center;
            margin-bottom: 2.5rem;
            color: var(--maroon-dark);
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--maroon-light);
            border-radius: 2px;
        }

        /* ================= NAVBAR ================= */
        .navbar {
            background-color: var(--off-white);
            box-shadow: 0 2px 15px var(--shadow);
            position: sticky;
            top: 0;
            z-index: 1000;
            padding: 1rem 0;
        }

        .navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-family: 'Quicksand', sans-serif;
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--maroon-dark);
            display: flex;
            align-items: center;
        }

        .logo i {
            color: var(--maroon-light);
            margin-right: 8px;
        }

        .nav-menu {
            display: flex;
            gap: 2rem;
        }

        .nav-menu a {
            font-weight: 500;
            color: var(--maroon-dark);
            padding: 0.5rem 0;
            position: relative;
        }

        .nav-menu a:hover {
            color: var(--maroon-light);
        }

        .nav-menu a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--maroon-light);
            transition: var(--transition);
        }

        .nav-menu a:hover::after {
            width: 100%;
        }

        .nav-icons {
            display: flex;
            gap: 1.2rem;
            align-items: center;
        }

        .nav-icons a {
            font-size: 1.2rem;
            color: var(--maroon-dark);
            position: relative;
        }

        .cart-icon {
            position: relative;
        }

        .cart-badge {
            position: absolute;
            top: -8px;
            right: -8px;
            background-color: var(--maroon-light);
            color: white;
            font-size: 0.7rem;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .mobile-menu-btn {
            display: none;
            font-size: 1.5rem;
            color: var(--maroon-dark);
            background: none;
        }

        /* ================= HERO SECTION ================= */
        .hero {
            background-color: var(--maroon-medium);
            color: var(--text-light);
            padding: var(--section-padding);
            position: relative;
            overflow: hidden;
        }

        .hero .container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .hero-content h1 {
            font-size: 3.2rem;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .hero-content p {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            color: var(--dusty-pink);
            max-width: 90%;
        }

        .hero-btns {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }

        .btn-primary {
            background-color: var(--cream);
            color: var(--maroon-dark);
            padding: 0.9rem 2rem;
            border-radius: var(--radius-lg);
            font-weight: 600;
            font-size: 1rem;
        }

        .btn-primary:hover {
            background-color: var(--beige);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .btn-secondary {
            background-color: transparent;
            color: var(--cream);
            border: 2px solid var(--cream);
            padding: 0.9rem 2rem;
            border-radius: var(--radius-lg);
            font-weight: 600;
            font-size: 1rem;
        }

        .btn-secondary:hover {
            background-color: var(--cream);
            color: var(--maroon-dark);
        }

        .hero-image {
            position: relative;
            display: flex;
            justify-content: center;
        }

        .hero-image img {
            border-radius: var(--radius-xl);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            max-width: 100%;
            height: auto;
        }

        .hero-decoration {
            position: absolute;
            top: -20px;
            right: -20px;
            width: 120px;
            height: 120px;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Cpath fill='%23E8C4C4' fill-opacity='0.3' d='M50,10 C70,10 90,30 90,50 C90,70 70,90 50,90 C30,90 10,70 10,50 C10,30 30,10 50,10 Z' /%3E%3C/svg%3E");
            background-size: contain;
            background-repeat: no-repeat;
            z-index: 0;
        }

        /* ================= PRODUCT SECTIONS ================= */
        .section-padding {
            padding: var(--section-padding);
        }

        .bg-cream {
            background-color: var(--cream);
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .product-card {
            background-color: white;
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: 0 5px 15px var(--shadow);
            transition: var(--transition);
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px var(--shadow);
        }

        .product-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background-color: var(--maroon-light);
            color: white;
            font-size: 0.8rem;
            padding: 0.3rem 0.8rem;
            border-radius: var(--radius-sm);
            font-weight: 500;
            z-index: 2;
        }

        .product-badge.out-of-stock {
            background-color: #888;
        }

        .product-img {
            height: 200px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--off-white);
        }

        .product-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .product-card:hover .product-img img {
            transform: scale(1.05);
        }

        .product-info {
            padding: 1.5rem;
        }

        .product-name {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--maroon-dark);
        }

        .product-price {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--maroon-medium);
            margin-bottom: 1rem;
        }

        .product-price .original {
            font-size: 0.9rem;
            color: #999;
            text-decoration: line-through;
            margin-left: 0.5rem;
        }

        .product-rating {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            color: #FFB800;
        }

        .btn-add-to-cart {
            width: 100%;
            background-color: var(--maroon-light);
            color: white;
            padding: 0.8rem;
            border-radius: var(--radius-md);
            font-weight: 500;
            font-size: 0.95rem;
        }

        .btn-add-to-cart:hover {
            background-color: var(--maroon-dark);
        }

        .btn-add-to-cart i {
            margin-right: 8px;
        }

        .view-all {
            display: flex;
            justify-content: center;
            margin-top: 3rem;
        }

        .btn-view-all {
            background-color: transparent;
            color: var(--maroon-medium);
            border: 2px solid var(--maroon-light);
            padding: 0.8rem 2rem;
            border-radius: var(--radius-lg);
            font-weight: 500;
        }

        .btn-view-all:hover {
            background-color: var(--maroon-light);
            color: white;
        }

        /* ================= CATEGORIES ================= */
        .categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .category-card {
            background-color: white;
            border-radius: var(--radius-lg);
            padding: 2rem 1rem;
            text-align: center;
            box-shadow: 0 5px 15px var(--shadow);
            transition: var(--transition);
        }

        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px var(--shadow);
        }

        .category-icon {
            width: 80px;
            height: 80px;
            background-color: var(--dusty-pink);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            color: var(--maroon-dark);
            font-size: 2rem;
        }

        .category-name {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--maroon-dark);
        }

        /* ================= BRANDS ================= */
        .brands {
            background-color: white;
        }

        .brands-grid {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 3rem;
            margin-top: 2rem;
        }

        .brand-logo {
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            filter: grayscale(1);
            opacity: 0.7;
            transition: var(--transition);
        }

        .brand-logo:hover {
            filter: grayscale(0);
            opacity: 1;
        }

        /* ================= TESTIMONIAL ================= */
        .testimonial-placeholder {
            text-align: center;
            padding: 3rem 1rem;
            background-color: var(--beige);
            border-radius: var(--radius-lg);
            color: var(--maroon-dark);
        }

        .testimonial-placeholder i {
            font-size: 3rem;
            color: var(--maroon-light);
            margin-bottom: 1.5rem;
        }

        /* ================= FOOTER ================= */
        .footer {
            background-color: var(--maroon-dark);
            color: var(--text-light);
            padding: 4rem 1.5rem 2rem;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-logo {
            font-family: 'Quicksand', sans-serif;
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--cream);
        }

        .footer-tagline {
            color: var(--dusty-pink);
            margin-bottom: 1.5rem;
            max-width: 300px;
        }

        .footer-links h3 {
            font-size: 1.2rem;
            margin-bottom: 1.2rem;
            color: var(--cream);
        }

        .footer-links ul li {
            margin-bottom: 0.8rem;
        }

        .footer-links ul li a:hover {
            color: var(--dusty-pink);
        }

        .copyright {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--dusty-pink);
            font-size: 0.9rem;
        }

        /* ================= CART MODAL ================= */
        .cart-modal {
            display: none;
            position: fixed;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 2000;
            justify-content: flex-end;
        }

        .cart-modal.active {
            display: flex;
        }

        .cart-content {
            width: 100%;
            max-width: 450px;
            background-color: white;
            height: 100%;
            overflow-y: auto;
            padding: 2rem;
            position: relative;
        }

        .cart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #eee;
        }

        .cart-title {
            font-size: 1.5rem;
            color: var(--maroon-dark);
        }

        .close-cart {
            font-size: 1.5rem;
            background: none;
            color: var(--maroon-dark);
        }

        .cart-items {
            margin-bottom: 2rem;
        }

        .cart-item {
            display: flex;
            gap: 1rem;
            margin-bottom: 1.5rem;
            padding-bottom: 1.5rem;
            border-bottom: 1px solid #eee;
        }

        .cart-item-img {
            width: 80px;
            height: 80px;
            border-radius: var(--radius-md);
            overflow: hidden;
            background-color: var(--off-white);
        }

        .cart-item-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .cart-item-details {
            flex: 1;
        }

        .cart-item-name {
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--maroon-dark);
        }

        .cart-item-price {
            color: var(--maroon-medium);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .cart-item-quantity {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .quantity-btn {
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background-color: var(--beige);
            color: var(--maroon-dark);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
        }

        .cart-item-total {
            font-weight: 700;
            color: var(--maroon-dark);
        }

        .remove-item {
            background: none;
            color: #999;
            font-size: 1.2rem;
            margin-left: auto;
            align-self: flex-start;
        }

        .remove-item:hover {
            color: var(--maroon-light);
        }

        .cart-summary {
            background-color: var(--cream);
            padding: 1.5rem;
            border-radius: var(--radius-lg);
            margin-bottom: 1.5rem;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1rem;
        }

        .summary-total {
            font-weight: 700;
            font-size: 1.2rem;
            color: var(--maroon-dark);
            border-top: 1px solid #ddd;
            padding-top: 1rem;
            margin-top: 1rem;
        }

        .cart-empty {
            text-align: center;
            padding: 3rem 1rem;
            color: #777;
        }

        .cart-empty i {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #ccc;
        }

        /* ================= RESPONSIVE ================= */
        @media (max-width: 992px) {
            .hero .container {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .hero-content p {
                max-width: 100%;
            }

            .hero-btns {
                justify-content: center;
            }
        }

        @media (max-width: 768px) {
            .section-title {
                font-size: 1.8rem;
            }

            .hero-content h1 {
                font-size: 2.5rem;
            }

            .nav-menu {
                position: fixed;
                top: 70px;
                left: 0;
                width: 100%;
                background-color: var(--off-white);
                flex-direction: column;
                align-items: center;
                padding: 2rem 0;
                box-shadow: 0 5px 10px var(--shadow);
                transform: translateY(-100%);
                opacity: 0;
                visibility: hidden;
                transition: var(--transition);
                z-index: 999;
            }

            .nav-menu.active {
                transform: translateY(0);
                opacity: 1;
                visibility: visible;
            }

            .mobile-menu-btn {
                display: block;
            }

            .cart-content {
                max-width: 100%;
            }
        }

        @media (max-width: 576px) {
            .hero-btns {
                flex-direction: column;
                width: 100%;
            }

            .btn-primary, .btn-secondary {
                width: 100%;
                text-align: center;
            }

            .products-grid {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            }
        }
    </style>
</head>
<body>
    <!-- ================= NAVBAR ================= -->
    <nav class="navbar">
        <div class="container">
            <a href="#" class="logo">
                <i class="fas fa-pencil-alt"></i>
                Ayyra Stationery
            </a>

            <button class="mobile-menu-btn" id="mobileMenuBtn">
                <i class="fas fa-bars"></i>
            </button>

            <ul class="nav-menu" id="navMenu">
                <li><a href="#home">Home</a></li>
                <li><a href="#shop">Shop</a></li>
                <li><a href="#products">Products</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#page">Page</a></li>
            </ul>

            <div class="nav-icons">
                <a href="#search"><i class="fas fa-search"></i></a>
                <a href="#" class="cart-icon" id="cartIcon">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="cart-badge" id="cartBadge">0</span>
                </a>
            </div>
        </div>
    </nav>

    <!-- ================= HERO SECTION ================= -->
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
                <h1>Ayyra Stationery</h1>
                <p>Stationery lucu dan estetik untuk menemani setiap catatan dan cerita</p>
                <div class="hero-btns">
                    <a href="#best-sellers" class="btn-primary">Belanja Sekarang</a>
                    <a href="#new-arrival" class="btn-secondary">Lihat Koleksi</a>
                </div>
            </div>

            <div class="hero-image">
                <div class="hero-decoration"></div>
                <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="Stationery Collection">
            </div>
        </div>
    </section>

    <!-- ================= BEST SELLERS ================= -->
    <section class="section-padding" id="best-sellers">
        <div class="container">
            <h2 class="section-title">Best Sellers</h2>

            <div class="products-grid">
                <!-- Produk 1 -->
                <div class="product-card">
                    <div class="product-badge">Best Seller</div>
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1544717305-99670f9c28f7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="Stapler Set">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Stapler Set Aesthetic</h3>
                        <div class="product-price">Rp 110.000</div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <button class="btn-add-to-cart" data-id="1" data-name="Stapler Set Aesthetic" data-price="110000" data-img="https://images.unsplash.com/photo-1544717305-99670f9c28f7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80">
                            <i class="fas fa-cart-plus"></i> Tambah ke Keranjang
                        </button>
                    </div>
                </div>

                <!-- Produk 2 -->
                <div class="product-card">
                    <div class="product-badge">Best Seller</div>
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1629198720836-0f7d2d6e7652?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="Zipper Pen Pouch">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Zipper Pen Pouch</h3>
                        <div class="product-price">Rp 110.000 <span class="original">Rp 150.000</span></div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <button class="btn-add-to-cart" data-id="2" data-name="Zipper Pen Pouch" data-price="110000" data-img="https://images.unsplash.com/photo-1629198720836-0f7d2d6e7652?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80">
                            <i class="fas fa-cart-plus"></i> Tambah ke Keranjang
                        </button>
                    </div>
                </div>

                <!-- Produk 3 -->
                <div class="product-card">
                    <div class="product-badge">Best Seller</div>
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1589561454227-60d6c9d5cfd6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="Weekly Planner">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Weekly Planner Floral</h3>
                        <div class="product-price">Rp 150.000</div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <button class="btn-add-to-cart" data-id="3" data-name="Weekly Planner Floral" data-price="150000" data-img="https://images.unsplash.com/photo-1589561454227-60d6c9d5cfd6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80">
                            <i class="fas fa-cart-plus"></i> Tambah ke Keranjang
                        </button>
                    </div>
                </div>

                <!-- Produk 4 -->
                <div class="product-card">
                    <div class="product-badge">Best Seller</div>
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1618166581245-9c5c98e5e61c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="Large Desk Calendar">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Large Desk Calendar</h3>
                        <div class="product-price">Rp 150.000 <span class="original">Rp 180.000</span></div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <button class="btn-add-to-cart" data-id="4" data-name="Large Desk Calendar" data-price="150000" data-img="https://images.unsplash.com/photo-1618166581245-9c5c98e5e61c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80">
                            <i class="fas fa-cart-plus"></i> Tambah ke Keranjang
                        </button>
                    </div>
                </div>
            </div>

            <div class="view-all">
                <a href="#shop" class="btn-view-all">View all</a>
            </div>
        </div>
    </section>

    <!-- ================= CATEGORIES ================= -->
    <section class="section-padding bg-cream" id="categories">
        <div class="container">
            <h2 class="section-title">Kategori Produk</h2>

            <div class="categories-grid">
                <!-- Kategori 1 -->
                <a href="#notebook" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3 class="category-name">Notebook</h3>
                </a>

                <!-- Kategori 2 -->
                <a href="#sticker" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-sticky-note"></i>
                    </div>
                    <h3 class="category-name">Sticker</h3>
                </a>

                <!-- Kategori 3 -->
                <a href="#pencil-pocket" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-pencil-ruler"></i>
                    </div>
                    <h3 class="category-name">Pencil Pocket</h3>
                </a>

                <!-- Kategori 4 -->
                <a href="#pencil" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-pencil-alt"></i>
                    </div>
                    <h3 class="category-name">Pencil</h3>
                </a>
            </div>
        </div>
    </section>

    <!-- ================= NEW ARRIVAL ================= -->
    <section class="section-padding" id="new-arrival">
        <div class="container">
            <h2 class="section-title">New Arrival</h2>

            <div class="products-grid">
                <!-- Produk 1 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1587614382346-4ec70e388b28?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="Campus Key Ring">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Campus Key Ring</h3>
                        <div class="product-price">Rp 200.000</div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <button class="btn-add-to-cart" data-id="5" data-name="Campus Key Ring" data-price="200000" data-img="https://images.unsplash.com/photo-1587614382346-4ec70e388b28?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80">
                            <i class="fas fa-cart-plus"></i> Tambah ke Keranjang
                        </button>
                    </div>
                </div>

                <!-- Produk 2 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1513475382585-d06e58bcb0e0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="Dream Pencil">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">BT2i Dream Pencil</h3>
                        <div class="product-price">Rp 150.000</div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <button class="btn-add-to-cart" data-id="6" data-name="BT2i Dream Pencil" data-price="150000" data-img="https://images.unsplash.com/photo-1513475382585-d06e58bcb0e0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80">
                            <i class="fas fa-cart-plus"></i> Tambah ke Keranjang
                        </button>
                    </div>
                </div>

                <!-- Produk 3 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="Peanuts Schedule Book">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Peanuts Schedule Book</h3>
                        <div class="product-price">Rp 280.000</div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <button class="btn-add-to-cart" data-id="7" data-name="Peanuts Schedule Book" data-price="280000" data-img="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80">
                            <i class="fas fa-cart-plus"></i> Tambah ke Keranjang
                        </button>
                    </div>
                </div>

                <!-- Produk 4 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="Night Sky Planner">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Night Sky Planner</h3>
                        <div class="product-price">Rp 180.000 <span class="original">Rp 200.000</span></div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <button class="btn-add-to-cart" data-id="8" data-name="Night Sky Planner" data-price="180000" data-img="https://images.unsplash.com/photo-1512820790803-83ca734da794?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80">
                            <i class="fas fa-cart-plus"></i> Tambah ke Keranjang
                        </button>
                    </div>
                </div>
            </div>

            <div class="view-all">
                <a href="#new-products" class="btn-view-all">View all</a>
            </div>
        </div>
    </section>

    <!-- ================= SHOP BY BRANDS ================= -->
    <section class="section-padding brands">
        <div class="container">
            <h2 class="section-title">Shop By Brands</h2>

            <div class="brands-grid">
                <div class="brand-logo">
                    <h3 style="color: var(--maroon-dark); font-weight: 700;">BOOK SHOP</h3>
                </div>
                <div class="brand-logo">
                    <h3 style="color: var(--maroon-dark); font-weight: 700;">Education</h3>
                </div>
                <div class="brand-logo">
                    <h3 style="color: var(--maroon-dark); font-weight: 700;">KIDS EDUCATION</h3>
                </div>
                <div class="brand-logo">
                    <h3 style="color: var(--maroon-dark); font-weight: 700;">STATIONERY</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= TESTIMONIAL ================= -->
    <section class="section-padding bg-cream">
        <div class="container">
            <h2 class="section-title">Testimonial</h2>

            <div class="testimonial-placeholder">
                <i class="far fa-comment-dots"></i>
                <h3>Belum ada ulasan pelanggan</h3>
                <p>Jadilah yang pertama memberikan ulasan tentang produk kami!</p>
            </div>
        </div>
    </section>

    <!-- ================= FOOTER ================= -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-about">
                    <div class="footer-logo">Ayyra Stationery</div>
                    <p class="footer-tagline">Teman Setia untuk Setiap Catatan</p>
                    <p>Stationery lucu dan estetik untuk menemani setiap catatan dan cerita Anda.</p>
                </div>

                <div class="footer-links">
                    <h3>Menu</h3>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#shop">Shop</a></li>
                        <li><a href="#products">Products</a></li>
                        <li><a href="#blog">Blog</a></li>
                        <li><a href="#page">Page</a></li>
                    </ul>
                </div>

                <div class="footer-links">
                    <h3>Kategori</h3>
                    <ul>
                        <li><a href="#notebook">Notebook</a></li>
                        <li><a href="#sticker">Sticker</a></li>
                        <li><a href="#pencil-pocket">Pencil Pocket</a></li>
                        <li><a href="#pencil">Pencil</a></li>
                        <li><a href="#planner">Planner</a></li>
                    </ul>
                </div>

                <div class="footer-links">
                    <h3>Kontak</h3>
                    <ul>
                        <li><a href="mailto:info@ayyrastationery.com">info@ayyrastationery.com</a></li>
                        <li><a href="tel:+6281234567890">+62 812 3456 7890</a></li>
                        <li>Jl. Stationery No. 123, Jakarta</li>
                    </ul>
                </div>
            </div>

            <div class="copyright">
                <p>&copy; 2023 Ayyra Stationery. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- ================= CART MODAL ================= -->
    <div class="cart-modal" id="cartModal">
        <div class="cart-content">
            <div class="cart-header">
                <h2 class="cart-title">Keranjang Belanja</h2>
                <button class="close-cart" id="closeCart">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <div class="cart-items" id="cartItems">
                <!-- Item keranjang akan dimasukkan di sini oleh JavaScript -->
                <div class="cart-empty" id="cartEmpty">
                    <i class="fas fa-shopping-cart"></i>
                    <p>Keranjang belanja Anda masih kosong</p>
                </div>
            </div>

            <div class="cart-summary" id="cartSummary" style="display: none;">
                <div class="summary-row">
                    <span>Subtotal</span>
                    <span id="cartSubtotal">Rp 0</span>
                </div>
                <div class="summary-row">
                    <span>Ongkos Kirim</span>
                    <span>Rp 15.000</span>
                </div>
                <div class="summary-row summary-total">
                    <span>Total</span>
                    <span id="cartTotal">Rp 15.000</span>
                </div>
            </div>

            <div class="cart-actions" id="cartActions" style="display: none;">
                <button class="btn-primary" style="width: 100%; margin-bottom: 1rem;" onclick="proceedToCheckout()">
                    Lanjut ke Checkout
                </button>
                <button class="btn-secondary" style="width: 100%;" id="continueShopping">
                    Lanjut Belanja
                </button>
            </div>
        </div>
    </div>

    <!-- ================= CHECKOUT MODAL ================= -->
    <div class="cart-modal" id="checkoutModal" style="display: none;">
        <div class="cart-content">
            <div class="cart-header">
                <h2 class="cart-title">Checkout</h2>
                <button class="close-cart" id="closeCheckout">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <form id="checkoutForm">
                <div style="margin-bottom: 1.5rem;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Nama Lengkap</label>
                    <input type="text" required style="width: 100%; padding: 0.8rem; border: 1px solid #ddd; border-radius: var(--radius-md);">
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Email</label>
                    <input type="email" required style="width: 100%; padding: 0.8rem; border: 1px solid #ddd; border-radius: var(--radius-md);">
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Nomor HP</label>
                    <input type="tel" required style="width: 100%; padding: 0.8rem; border: 1px solid #ddd; border-radius: var(--radius-md);">
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Alamat Lengkap</label>
                    <textarea rows="3" required style="width: 100%; padding: 0.8rem; border: 1px solid #ddd; border-radius: var(--radius-md);"></textarea>
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Metode Pengiriman</label>
                    <select style="width: 100%; padding: 0.8rem; border: 1px solid #ddd; border-radius: var(--radius-md);">
                        <option>JNE Reguler - Rp 15.000</option>
                        <option>J&T Express - Rp 18.000</option>
                        <option>SiCepat - Rp 20.000</option>
                    </select>
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Metode Pembayaran</label>
                    <div style="display: flex; flex-direction: column; gap: 0.5rem;">
                        <label style="display: flex; align-items: center; gap: 0.5rem;">
                            <input type="radio" name="payment" value="bank" checked>
                            Transfer Bank (BCA, Mandiri, BRI)
                        </label>
                        <label style="display: flex; align-items: center; gap: 0.5rem;">
                            <input type="radio" name="payment" value="ewallet">
                            E-Wallet (OVO, Gopay, Dana)
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn-primary" style="width: 100%;">
                    Bayar Sekarang
                </button>
            </form>
        </div>
    </div>

    <script>
        // ================= GLOBAL VARIABLES =================
        let cart = JSON.parse(localStorage.getItem('ayyra_cart')) || [];
        const cartModal = document.getElementById('cartModal');
        const cartIcon = document.getElementById('cartIcon');
        const cartBadge = document.getElementById('cartBadge');
        const closeCart = document.getElementById('closeCart');
        const cartItems = document.getElementById('cartItems');
        const cartEmpty = document.getElementById('cartEmpty');
        const cartSummary = document.getElementById('cartSummary');
        const cartActions = document.getElementById('cartActions');
        const cartSubtotal = document.getElementById('cartSubtotal');
        const cartTotal = document.getElementById('cartTotal');
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const navMenu = document.getElementById('navMenu');
        const checkoutModal = document.getElementById('checkoutModal');
        const closeCheckout = document.getElementById('closeCheckout');
        const checkoutForm = document.getElementById('checkoutForm');
        const continueShopping = document.getElementById('continueShopping');

        // ================= CART FUNCTIONS =================
        function updateCartBadge() {
            const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
            cartBadge.textContent = totalItems;
        }

        function addToCart(productId, productName, productPrice, productImg) {
            const existingItem = cart.find(item => item.id === productId);

            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cart.push({
                    id: productId,
                    name: productName,
                    price: productPrice,
                    img: productImg,
                    quantity: 1
                });
            }

            // Simpan ke localStorage
            localStorage.setItem('ayyra_cart', JSON.stringify(cart));

            // Update badge
            updateCartBadge();

            // Tampilkan notifikasi
            showNotification(`${productName} ditambahkan ke keranjang`);

            // Jika cart modal terbuka, update tampilan
            if (cartModal.classList.contains('active')) {
                renderCartItems();
            }
        }

        function removeFromCart(productId) {
            cart = cart.filter(item => item.id !== productId);
            localStorage.setItem('ayyra_cart', JSON.stringify(cart));
            updateCartBadge();
            renderCartItems();

            // Tampilkan notifikasi
            showNotification('Produk dihapus dari keranjang');
        }

        function updateQuantity(productId, newQuantity) {
            if (newQuantity < 1) {
                removeFromCart(productId);
                return;
            }

            const item = cart.find(item => item.id === productId);
            if (item) {
                item.quantity = newQuantity;
                localStorage.setItem('ayyra_cart', JSON.stringify(cart));
                updateCartBadge();
                renderCartItems();
            }
        }

        function renderCartItems() {
            if (cart.length === 0) {
                cartEmpty.style.display = 'block';
                cartSummary.style.display = 'none';
                cartActions.style.display = 'none';
                return;
            }

            cartEmpty.style.display = 'none';
            cartSummary.style.display = 'block';
            cartActions.style.display = 'block';

            let cartHTML = '';
            let subtotal = 0;

            cart.forEach(item => {
                const itemTotal = item.price * item.quantity;
                subtotal += itemTotal;

                cartHTML += `
                <div class="cart-item">
                    <div class="cart-item-img">
                        <img src="${item.img}" alt="${item.name}">
                    </div>
                    <div class="cart-item-details">
                        <h4 class="cart-item-name">${item.name}</h4>
                        <p class="cart-item-price">Rp ${item.price.toLocaleString()}</p>
                        <div class="cart-item-quantity">
                            <button class="quantity-btn" onclick="updateQuantity(${item.id}, ${item.quantity - 1})">-</button>
                            <span>${item.quantity}</span>
                            <button class="quantity-btn" onclick="updateQuantity(${item.id}, ${item.quantity + 1})">+</button>
                        </div>
                        <p class="cart-item-total">Rp ${itemTotal.toLocaleString()}</p>
                    </div>
                    <button class="remove-item" onclick="removeFromCart(${item.id})">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
                `;
            });

            cartItems.innerHTML = cartHTML;

            // Update summary
            const shipping = 15000;
            const total = subtotal + shipping;

            cartSubtotal.textContent = `Rp ${subtotal.toLocaleString()}`;
            cartTotal.textContent = `Rp ${total.toLocaleString()}`;
        }

        function showNotification(message) {
            // Buat elemen notifikasi
            const notification = document.createElement('div');
            notification.style.cssText = `
                position: fixed;
                top: 100px;
                right: 20px;
                background-color: var(--maroon-light);
                color: white;
                padding: 1rem 1.5rem;
                border-radius: var(--radius-md);
                box-shadow: 0 5px 15px rgba(0,0,0,0.2);
                z-index: 3000;
                font-weight: 500;
                transform: translateX(120%);
                transition: transform 0.3s ease;
            `;
            notification.textContent = message;
            document.body.appendChild(notification);

            // Tampilkan notifikasi
            setTimeout(() => {
                notification.style.transform = 'translateX(0)';
            }, 10);

            // Sembunyikan setelah 3 detik
            setTimeout(() => {
                notification.style.transform = 'translateX(120%)';
                setTimeout(() => {
                    document.body.removeChild(notification);
                }, 300);
            }, 3000);
        }

        function proceedToCheckout() {
            cartModal.classList.remove('active');
            checkoutModal.style.display = 'flex';
        }

        // ================= EVENT LISTENERS =================
        document.addEventListener('DOMContentLoaded', function() {
            // Update cart badge saat halaman dimuat
            updateCartBadge();

            // Event listener untuk tombol "Tambah ke Keranjang"
            document.querySelectorAll('.btn-add-to-cart').forEach(button => {
                button.addEventListener('click', function() {
                    const id = this.getAttribute('data-id');
                    const name = this.getAttribute('data-name');
                    const price = parseInt(this.getAttribute('data-price'));
                    const img = this.getAttribute('data-img');

                    addToCart(id, name, price, img);
                });
            });

            // Event listener untuk ikon keranjang
            cartIcon.addEventListener('click', function(e) {
                e.preventDefault();
                renderCartItems();
                cartModal.classList.add('active');
            });

            // Event listener untuk tombol tutup cart
            closeCart.addEventListener('click', function() {
                cartModal.classList.remove('active');
            });

            // Event listener untuk tombol lanjut belanja
            continueShopping.addEventListener('click', function() {
                cartModal.classList.remove('active');
            });

            // Event listener untuk mobile menu
            mobileMenuBtn.addEventListener('click', function() {
                navMenu.classList.toggle('active');
            });

            // Event listener untuk form checkout
            checkoutForm.addEventListener('submit', function(e) {
                e.preventDefault();

                // Simulasi pembayaran sukses
                cart = [];
                localStorage.setItem('ayyra_cart', JSON.stringify(cart));
                updateCartBadge();

                // Tutup modal checkout
                checkoutModal.style.display = 'none';

                // Tampilkan pesan sukses
                alert('Pembayaran berhasil! Pesanan Anda sedang diproses.');
            });

            // Event listener untuk tombol tutup checkout
            closeCheckout.addEventListener('click', function() {
                checkoutModal.style.display = 'none';
            });

            // Tutup modal saat klik di luar konten
            window.addEventListener('click', function(e) {
                if (e.target === cartModal) {
                    cartModal.classList.remove('active');
                }
                if (e.target === checkoutModal) {
                    checkoutModal.style.display = 'none';
                }
            });
        });

        // ================= MOBILE MENU TOGGLE =================
        function toggleMobileMenu() {
            navMenu.classList.toggle('active');
        }
    </script>
</body>
</html>
