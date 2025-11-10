<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Furniture Shop</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- HEADER -->
  <!--<header class="header">
    <div class="container nav">
      
      <nav>
        <ul class="menu">
          <li><a href="#">Home</a></li>
          <li><a href="#">Shop</a></li>
          <li><a href="#">Category</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
      <div class="icons">
        <span>🔍</span>
        <span>🛒</span>
        <span>👤</span>
      </div>
    </div>
  </header>-->
  
  <header class="top-header">
	  <div class="checkpoint-bar">
		<span>33 Checkpoints: quality printing at the speed you need.</span>
	  </div>

	  <div class="header-main">
		<h2 class="logo">Furniture</h2>

		<div class="contact-info">
		  <img class="icon-header" src="ima/icon-phone.jpg" />
		  <span>855-898-9870</span>
		</div>

		<div class="search-container">
		  <input type="text" placeholder="Search (ex. boxes, stickers, labels, etc.)">
		  <button type="submit">🔍</button>
		</div>

		<div class="user-links">
		  <a href="#">Hello! | Log In</a>
		  <a href="#">My Account</a>
		</div>

		<div class="cart-icon">
		  🛒
		</div>
	  </div>

	  <!-- Navigation Bar -->
	  <!--<nav>
        <ul class="menu">
          <li><a href="#">Home</a></li>
          <li><a href="#">Shop</a></li>
          <li><a href="#">Category</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>-->
	  <nav class="nav-bar">
		<div class="menu-toggle">☰</div>
		<ul class="nav-links">
		  <li><a href="#">Home</a></li>
          <li><a href="#">Shop</a></li>
          <li><a href="#">Category</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Contact</a></li>
		</ul>
	  </nav>
	</header>

	<!-- Banner Section -->
	<!--<section class="banner">
	  <div class="banner-text">
		<h1>Custom Printing.<br>Delivered Fast.</h1>
		<p>High-quality flyers, postcards, and more.</p>
		<div class="banner-buttons">
		  <button class="btn-green">Shop Flyers</button>
		  <button class="btn-green">Shop Postcards</button>
		</div>
	  </div>
	</section>-->


  <!-- HERO -->
  <section class="hero">
    <div class="container hero-content">
      <div class="hero-text">
        <h1>Explore Our Modern <br> Furniture Collection</h1>
        <p>Find stylish and contemporary furniture for your home.</p>
        <button class="btnPrimary">Shop Now</button>
      </div>

      <div class="hero-images">
        <img src="ima/home_sofas.png" alt="Living room">        
      </div>
    </div>
  </section>

  <!-- FEATURES -->
  <section class="features">
    <div class="container features-row">
      <div class="feature-box"><img class="icon" src="ima/shipping-box-mi.svg" /> <h4>Free Shipping</h4></div>
      <div class="feature-box"><img class="icon" src="ima/chat-question-mi.svg" /> <h4>Flexible Payment</h4></div>
      <div class="feature-box"><img class="icon" src="ima/lock-on-mi.svg" /> <h4>24/7 Support</h4></div>
    </div>
  </section>  
  
  
  <section class="shop-container">
    <!-- ✅ SIDEBAR -->
    <aside class="sidebar">
        <div class="filter-block">
            <h3>Shop By Categories</h3>
            <ul class="checkbox-group">
                <li><label><input type="checkbox"> Chairs</label></li>
                <li><label><input type="checkbox"> Sofa</label></li>
                <li><label><input type="checkbox"> Tables</label></li>
                <li><label><input type="checkbox"> Lamps</label></li>
                <li><label><input type="checkbox"> Decor</label></li>
            </ul>
        </div>

        <div class="filter-block">
            <h3>Highlight</h3>
            <ul>
                <li><a href="#">All Products</a></li>
                <li><a href="#">Best Seller</a></li>
                <li><a href="#">New Arrivals</a></li>
                <li><a href="#">Hot Items</a></li>
            </ul>
        </div>
    </aside>

    <!-- ✅ PRODUCT GRID -->
    <div class="products-wrapper">
        <div class="results-count">
            Showing 1–20 of 24 results
        </div>

        <div class="product-grid">

            <!-- ✅ PRODUCT CARD -->
            <div class="product-card">
                <div class="product-badge">-4%</div>
                <img src="ima/sofa_marron.jpg" alt="">
				<p class="cate">Sofa</p>
                <h4>Nordic Lounge Chair</h4>				
                <div class="rating">★★★★☆</div>
                <p class="price">$120</p>
                <button class="btn-green">VIEW PRODUCTS</button>
            </div>

            <div class="product-card">
                <div class="product-badge">-3%</div>
                <img src="ima/chair-min.png" alt="">
				<p class="cate">Chair</p>
                <h4>Minimalist Accent Chair</h4>
                <div class="rating">★★★★★</div>
                <p class="price">$140</p>
                <button class="btn-green">ADD TO CART</button>
            </div>

            <div class="product-card">
                <div class="product-badge">-2%</div>
                <img src="ima/sofa_3.jpg" alt="">
				<p class="cate">Sofa</p>
                <h4>Urbana 3-Seater Sofa</h4>
                <div class="rating">★★★★☆</div>
                <p class="price">$319</p>
                <button class="btn-green">SELECT OPTIONS</button>
            </div>
			
			<div class="product-card">
                <div class="product-badge">-4%</div>
                <img src="ima/sofa_compact.jpg" alt="">
				<p class="cate">Sofa</p>
                <h4>Compact Living Sofa</h4>
                <div class="rating">★★★★☆</div>
                <p class="price">$450</p>
                <button class="btn-green">VIEW PRODUCTS</button>
            </div>

            <div class="product-card">
                <div class="product-badge">-3%</div>
                <img src="ima/lamp_rosa.jpg" alt="">
				<p class="cate">Lamp</p>
                <h4>Modern Dome Lamp</h4>
                <div class="rating">★★★★★</div>
                <p class="price">$95</p>
                <button class="btn-green">ADD TO CART</button>
            </div>

            <div class="product-card">
                <div class="product-badge">-2%</div>
                <img src="ima/vintage.jpg" alt="">
				<p class="cate">Deco</p>
                <h4>Vintage Copper Pendantl</h4>
                <div class="rating">★★★★☆</div>
                <p class="price">$115</p>
                <button class="btn-green">SELECT OPTIONS</button>
            </div>

        </div>
    </div>
  </section>
  
  
  <!-- CATEGORIES -->
  <section class="categories">
    <div class="container">
      <h2 class="section-title">Our Products Collections</h2>

      <div class="grid">
        <div class="category-card">
          <img src="ima/chair.png" alt="">
          <h3>Chairs</h3>
        </div>

        <div class="category-card">
          <img src="ima/sofa.png" alt="">
          <h3>Sofas</h3>
        </div>

        <div class="category-card">
          <img src="ima/lamp.png" alt="">
          <h3>Lighting</h3>
        </div>
      </div>
    </div>
  </section>
  
	<div class="product-slider-container">
	  <button class="slider-btn prev">&#10094;</button>

	  <div class="product-slider" id="productSlider">

		<!-- PRODUCT 1 -->
		<div class="slide-card">
		  <img src="ima/sofa_marron.jpg" alt="">
		  <h4>Nordic Lounge Chair</h4>
		  <p class="price">$120</p>
		</div>

		<!-- PRODUCT 2 -->
		<div class="slide-card">
		  <img src="ima/chair-min.png" alt="">
		  <h4>Minimalist Accent Chair</h4>
		  <p class="price">$140</p>
		</div>

		<!-- PRODUCT 3 -->
		<div class="slide-card">
		  <img src="ima/sofa_3.jpg" alt="">
		  <h4>Urbana 3-Seater Sofa</h4>
		  <p class="price">$399</p>
		</div>

		<!-- PRODUCT 4 -->
		<div class="slide-card">
		  <img src="ima/sofa_compact.jpg" alt="">
		  <h4>Compact Living Sofa</h4>
		  <p class="price">$450</p>
		</div>

		<!-- PRODUCT 5 -->
		<div class="slide-card">
		  <img src="ima/lamp_rosa.jpg" alt="">
		  <h4>Modern Dome Lamp</h4>
		  <p class="price">$95</p>
		</div>

		<!-- PRODUCT 6 -->
		<div class="slide-card">
		  <img src="ima/vintage.jpg" alt="">
		  <h4>Vintage Copper Pendant</h4>
		  <p class="price">$115</p>
		</div>

	  </div>

	  <button class="slider-btn next">&#10095;</button>
	</div>

  
	<script>
	(function(){
	  const slider = document.getElementById("productSlider");
	  const btnPrev = document.querySelector(".slider-btn.prev");
	  const btnNext = document.querySelector(".slider-btn.next");

	  let speed = 1.0;
	  let isPaused = false;
	  let isDown = false;
	  let startX;
	  let scrollLeft;

	  // duplicar contenido para loop infinito
	  function duplicateSlides() {
		const slides = slider.innerHTML;
		slider.innerHTML += slides;
	  }
	  duplicateSlides();

	  // autoplay continuo
	  function autoScroll() {
		if (!isPaused) {
		  slider.scrollLeft += speed;

		  if (slider.scrollLeft >= slider.scrollWidth / 2) {
			slider.scrollLeft = 0;
		  }
		}
		requestAnimationFrame(autoScroll);
	  }
	  autoScroll();

	  // pausa al hover
	  slider.addEventListener("mouseenter", () => isPaused = true);
	  slider.addEventListener("mouseleave", () => isPaused = false);

	  // flechas
	  btnNext.addEventListener("click", () => {
		slider.scrollLeft += 250;
	  });

	  btnPrev.addEventListener("click", () => {
		slider.scrollLeft -= 250;
	  });

	  // Drag / Touch
	  slider.addEventListener("mousedown", e => {
		isPaused = true;
		isDown = true;
		startX = e.pageX - slider.offsetLeft;
		scrollLeft = slider.scrollLeft;
	  });

	  slider.addEventListener("mouseleave", () => {
		isDown = false;
		isPaused = false;
	  });

	  slider.addEventListener("mouseup", () => {
		isDown = false;
		isPaused = false;
	  });

	  slider.addEventListener("mousemove", e => {
		if (!isDown) return;
		e.preventDefault();
		const x = e.pageX - slider.offsetLeft;
		const walk = (x - startX) * 1.3;
		slider.scrollLeft = scrollLeft - walk;
	  });

	  // touch
	  slider.addEventListener("touchstart", e => {
		isPaused = true;
		isDown = true;
		startX = e.touches[0].pageX - slider.offsetLeft;
		scrollLeft = slider.scrollLeft;
	  });

	  slider.addEventListener("touchend", () => {
		isDown = false;
		isPaused = false;
	  });

	  slider.addEventListener("touchmove", e => {
		if (!isDown) return;
		const x = e.touches[0].pageX - slider.offsetLeft;
		const walk = (x - startX) * 1.3;
		slider.scrollLeft = scrollLeft - walk;
	  });

	})();
	</script>
	
	
	<section class="categories-wrapper">
	  <div class="categories-grid">

		<!-- LEFT: big card that spans 2 rows -->
		<article class="category-card large">
		  <div class="card-inner">
			<div class="info">
			  <span class="badge"><span class="yellow">630+</span> Products</span>
			  <h2>Chairs</h2>
			  <ul>
				<li>Kitchen Chairs, Dining Room Chairs</li>
				<li>Office Chairs, Computer Chairs</li>
				<li>Bar Stools</li>
				<li>Garden Chairs</li>
				<li>Visitor's Chairs</li>
				<li>Rocking Chairs</li>
			  </ul>
			</div>

			<div class="visual">
			  <!-- Replace this with your large chair image -->
			  <img src="ima/chair_redonda.webp" alt="Chair" />
			</div>
		  </div>
		</article>

		<!-- RIGHT TOP -->
		<article class="category-card">
		  <div class="card-inner">
			<div class="info">
			  <span class="badge alt">280+ Products</span>
			  <h3>Beds and Sofas</h3>
			  <ul>
				<li>Beds</li>
				<li>Sofas</li>
				<li>Corner Sofas</li>
				<li>Garden Sofas</li>
				<li>Garden Rocking Sofas</li>
			  </ul>
			</div>

			<div class="visual">
			  <!-- Replace with sofa image -->
			  <img src="ima/sofa_gris.png" alt="Sofa" />
			</div>
		  </div>
		</article>

		<!-- RIGHT BOTTOM -->
		<article class="category-card">
		  <div class="card-inner">
			<div class="info">
			  <span class="badge alt-2">290+ Products</span>
			  <h3>Office</h3>
			  <ul>
				<li>Height Adjustable Tables (Sit-Stand Tables)</li>
				<li>Office Chairs, Computer Chairs</li>
				<li>Desks, Computer Desks</li>
				<li>Visitor's Chairs</li>
			  </ul>
			</div>

			<div class="visual">
			  <!-- Replace with office image -->
			  <img src="ima/chair_beige.png" alt="Office" />
			</div>
		  </div>
		</article>

	  </div>
	</section>




  <!-- FOOTER -->
  <footer class="footer">
	  <div class="footer-container">

		<div class="footer-section logo-section">
		  <h2 class="logo">Furniture</h2>
		</div>

		<div class="footer-section w12">
		  <h4>Resources</h4>
		  <ul>
			<li><a href="#">Help Center</a></li>
			<li><a href="#">Turnaround Time Options</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">Articles</a></li>
			<li><a href="#">Templates</a></li>
			<li><a href="#">Customer Reviews</a></li>
		  </ul>
		</div>

		<div class="footer-section w15">
		  <h4>Support</h4>
		  <ul>
			<li><a href="#">Contact Us</a></li>
			<li><a href="#">Request a Sample Pack</a></li>
			<li><a href="#">Quality Checkpoints</a></li>
		  </ul>
		</div>

		<div class="footer-section w15">
		  <h4>Company Info</h4>
		  <ul>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Locations</a></li>
			<li><a href="#">Privacy Policy</a></li>
			<li><a href="#">Accessibility</a></li>
			<li><a href="#">Terms & Conditions</a></li>
			<li><a href="#">CA Transparency Act</a></li>
			<li><a href="#">Legal Matters</a></li>
			<li><a href="#">Site Map</a></li>
		  </ul>
		</div>

		<div class="footer-section contact w25">
			<h4>Contact Info</h4>
			<div class="flex">
				<div class="d1">
					<img class="icon-footer" src="ima/phone-icon.png" />
				</div>
				<div class="d2">
					<p>855-898-9870</p>
				</div>
			</div>
			<div class="flex">
				<div class="d1">
					<img class="icon-footer" src="ima/mail-icon.png" />
				</div>
				<div class="d2">
					<p>M–F, 24 Hours a Day<br>Sat–Sun 6:00am to 5:00pm Pacific</p>
					<p>24/7 Customer Support</p>
					<a href="#">customercare@nextdayflyers.com</a>
				</div>
			</div>		  		  		
		  
		</div>

		<div class="footer-section newsletter w27">
		  <h4>Newsletter</h4>
		  <p>Sign up to receive special marketing tips & promotions.</p>
		  <input type="email" placeholder="Enter your email">
		  <button>Sign Up</button>
		</div>

	  </div>

	  <div class="footer-bottom">
		<p>Privacy Policy | Terms & Conditions | CA Transparency Act | Cookies Settings | &copy; 2025 Rights Reserved</p>

		<div class="social">
		  <a href="#">🌐</a>
		  <a href="#">📘</a>
		  <a href="#">📸</a>
		  <a href="#">🔗</a>
		</div>
	  </div>
	</footer>


</body>
</html>
