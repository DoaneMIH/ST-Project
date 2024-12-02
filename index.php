<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>GoMart</title>
  
  <!-- SweetAlert2 Library -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
  <?php 
    require 'navbar.php';
  ?>

  <div class="landingpage">
    <h1 class="gomart">GoMart</h1>
    <p>Your one-stop online shopping destination! Discover a world of convenience as you browse, 
      shop, and buy your favorite products—all in one place. With GoMart, enjoy seamless shopping 
      experiences, exclusive deals, and a wide range of items to suit every need. Shop smarter, 
      faster, and better with GoMart today!</p>
  </div>

  <div class="background"></div>

  <div class="beauty-section">
    <h2>Beauty Essentials</h2>
    <p>Indulge in the world of beauty with GoMart! From skincare saviors to makeup must-haves, we bring you the finest products to enhance your natural glow. Discover top brands, trending collections, and irresistible deals—all curated for your beauty needs. Transform your routine and redefine your style with GoMart's Beauty Essentials.</p>
  
    <div class="beauty-scroll-wrapper">
      <button class="scroll-btn left-btn">←</button>
      <div class="beauty-scroll-container">
        <div class="beauty-images">
          <img src="images/makeup.jpg" alt="Makeup Products">
          <img src="images/makeup1.jpg" alt="Makeup Products">
          <img src="images/makeup2.jpg" alt="Makeup Products">
          <img src="images/fragrance.jpg" alt="Fragrances">
          <img src="images/fragrance1.jpg" alt="Fragrances">
          <img src="images/fragrance2.jpg" alt="Fragrances">
        </div>
      </div>
      <button class="scroll-btn right-btn">→</button>
    </div>
  
    <button class="beautybutton" onclick="window.location.href='shop.php';">Go to Shopping Section </button>

  </div>

  <!---jewelry ini-->

  <div class="jewelry-section">
    <h2>Jewelry Essentials</h2>
    <p>Transform your living space with GoMart! From elegant designs to modern essentials, 
      we bring you the finest furniture to elevate your home. Discover cozy sofas, stylish tables, 
      functional storage, and everything in between, crafted for comfort and durability. With GoMart, 
      enjoy exclusive collections, unbeatable deals, and the ease of finding the perfect pieces to 
      complement your style. Redefine your home and create the ambiance you’ve always dreamed of with 
      our Furniture Essentials!</p>
  
    <div class="jewelry-scroll-wrapper">
      <button class="jewelry-scroll-btn left-btn">←</button>
      <div class="jewelry-scroll-container">
        <div class="jewelry-images">
          <img src="images/jewelry.jpg" alt="Jewelry">
          <img src="images/jewelry1.jpg" alt="Jewelry">
          <img src="images/jewelry2.jpg" alt="Jewelry">
          <img src="images/jewelry3.jpg" alt="Jewelry">
          <img src="images/jewelry4.jpg" alt="Jewelry">
          <img src="images/jewelry5.jpg" alt="Jewelry">
        </div>
      </div>
      <button class="jewelry-scroll-btn right-btn">→</button>
    </div>
  
    <button class="jewelrybutton" onclick="window.location.href='shop.php';">Go to Shopping Section </button>

  </div>
  
  <!---clothes ini-->

  <div class="clothes-section">
    <h2>Men and Women Clothes Essentials</h2>
    <p>Step into style with GoMart! From timeless classics to trendy must-haves, 
      we bring you the best in fashion to elevate your wardrobe. Discover comfortable casuals, 
      chic formals, and everything in between, designed to suit every occasion. With GoMart, enjoy 
      exclusive collections, unbeatable deals, and the convenience of finding your perfect fit. 
      Redefine your style and express yourself effortlessly with our Clothes Essentials!</p>
  
    <div class="clothes-scroll-wrapper">
      <button class="clothes-scroll-btn left-btn">←</button>
      <div class="clothes-scroll-container">
        <div class="clothes-images">
          <img src="images/women.jpg" alt="Women Clothes">
          <img src="images/women1.jpg" alt="Women Clothes">
          <img src="images/women2.jpg" alt="Women Clothes">
          <img src="images/men.jpg" alt="Men Clothes">
          <img src="images/men1.jpg" alt="Men Clothes">
          <img src="images/men2.jpg" alt="Men Clothes">
        </div>
      </div>
      <button class="clothes-scroll-btn right-btn">→</button>
    </div>
  
    <button class="clothesbutton" onclick="window.location.href='shop.php';">Go to Shopping Section </button>

  </div>

  <!---furniture ini-->

  <div class="furniture-section">
    <h2>Furniture Section</h2>
    <p>Transform your living space with GoMart! From elegant designs to modern essentials, 
      we bring you the finest furniture to elevate your home. Discover cozy sofas, stylish tables, 
      functional storage, and everything in between, crafted for comfort and durability. With GoMart, 
      enjoy exclusive collections, unbeatable deals, and the ease of finding the perfect pieces to 
      complement your style. Redefine your home and create the ambiance you’ve always dreamed of with 
      our Furniture Essentials!</p>
  
    <div class="furniture-scroll-wrapper">
      <button class="furniture-scroll-btn left-btn">←</button>
      <div class="furniture-scroll-container">
        <div class="furniture-images">
          <img src="images/furniture.jpg" alt="Furniture">
          <img src="images/furniture1.jpg" alt="Furniture">
          <img src="images/furniture2.jpg" alt="Furniture">
          <img src="images/furniture3.jpg" alt="Furniture">
          <img src="images/furniture4.jpg" alt="Furniture">
          <img src="images/furniture5.jpg" alt="Furniture">
        </div>
      </div>
      <button class="furniture-scroll-btn right-btn">→</button>
    </div>
  
    <button class="furniturebutton" onclick="window.location.href='shop.php';">Go to Shopping Section </button>

  </div>

  <!---gadgets ini-->

  <div class="gadgets-section">
    <h2>Gadgets Section</h2>
    <p>Stay ahead in the tech game with GoMart! From cutting-edge devices to everyday tech essentials, 
      we bring you the best in innovation and functionality. Discover smartphones, smartwatches, 
      headphones, and gadgets that simplify your life and keep you connected. With GoMart, enjoy 
      the latest releases, unbeatable deals, and the convenience of finding tech that fits your needs. 
      Redefine your digital experience and upgrade your world with our Gadgets Essentials!</p>
  
    <div class="gadgets-scroll-wrapper">
      <button class="gadgets-scroll-btn left-btn">←</button>
      <div class="gadgets-scroll-container">
        <div class="gadgets-images">
          <img src="images/gadgets.jpg" alt="Gadgets">
          <img src="images/gadgets1.jpg" alt="Gadgets">
          <img src="images/gadgets2.jpg" alt="Gadgets">
          <img src="images/gadgets3.jpg" alt="Gadgets">
          <img src="images/gadgets4.jpg" alt="Gadgets">
          <img src="images/gadgets5.jpg" alt="Gadgets">
        </div>
      </div>
      <button class="gadgets-scroll-btn right-btn">→</button>
    </div>
    <button class="gadgetsbutton" onclick="window.location.href='shop.php';">Go to Shopping Section </button>


  </div>

  <!---grocery ini-->

  <div class="grocery-section">
    <h2>Grocery Section</h2>
    <p>Stock up on all your essentials with GoMart! From fresh produce to pantry staples, 
      we bring you the finest selection of groceries to keep your kitchen well-equipped. 
      Discover high-quality ingredients, everyday necessities, and specialty items, all at unbeatable prices. 
      With GoMart, enjoy the convenience of finding everything you need for your meals and more in one place. 
      Redefine your shopping experience and make every bite count with our Grocery Essentials!</p>
  
    <div class="grocery-scroll-wrapper">
      <button class="grocery-scroll-btn left-btn">←</button>
      <div class="grocery-scroll-container">
        <div class="grocery-images">
          <img src="images/grocery.jpg" alt="Groceries">
          <img src="images/grocery1.jpg" alt="Groceries">
          <img src="images/grocery2.jpg" alt="Groceries">
          <img src="images/grocery3.jpg" alt="Groceries">
          <img src="images/grocery4.jpg" alt="Groceries">
          <img src="images/grocery5.jpg" alt="Groceries">
        </div>
      </div>
      <button class="grocery-scroll-btn right-btn">→</button>
    </div>
    <button class="grocerybutton" onclick="window.location.href='shop.php';">Go to Shopping Section </button>

  </div>

  <img src="images/LOGO1.png" alt="GoMart Image" class="GoMartLogo">

  <div class="about-us">
  <div class="about-us-content">
    <div class="about-us-image">
      <img src="images/about.png" alt="About Us Image">
    </div>
    <div class="about-us-text">
      <h2>About Us</h2>
      <p>Welcome to GoMart! We are your ultimate online shopping destination, offering a vast range of products from beauty essentials to the latest gadgets, home decor, and groceries. Our goal is to provide a seamless, convenient shopping experience for our customers, ensuring quality, affordability, and a wide variety of items.</p>
      <p>At GoMart, we believe in making shopping fun and easy. Whether you're shopping for everyday essentials or looking for something special, we have it all, delivered straight to your doorstep. Join us in redefining the way you shop!</p>
    </div>
  </div>
</div>

  
  <?php include 'footer.php'; ?>
  
  <script>
    // Beauty Section Scroll
    const beautyScrollContainer = document.querySelector('.beauty-scroll-container');
    const beautyLeftBtn = document.querySelector('.left-btn');
    const beautyRightBtn = document.querySelector('.right-btn');
  
    beautyLeftBtn.addEventListener('click', () => {
      beautyScrollContainer.scrollBy({ left: -300, behavior: 'smooth' });
    });
  
    beautyRightBtn.addEventListener('click', () => {
      beautyScrollContainer.scrollBy({ left: 300, behavior: 'smooth' });
    });
  
    // Clothes Section Scroll
    const clothesScrollContainer = document.querySelector('.clothes-scroll-container');
    const clothesLeftBtn = document.querySelector('.clothes-scroll-btn.left-btn');
    const clothesRightBtn = document.querySelector('.clothes-scroll-btn.right-btn');
  
    clothesLeftBtn.addEventListener('click', () => {
      clothesScrollContainer.scrollBy({ left: -300, behavior: 'smooth' });
    });
  
    clothesRightBtn.addEventListener('click', () => {
      clothesScrollContainer.scrollBy({ left: 300, behavior: 'smooth' });
    });

    // Furniture Section Scroll
    const furnitureScrollContainer = document.querySelector('.furniture-scroll-container');
    const furnitureLeftBtn = document.querySelector('.furniture-scroll-btn.left-btn');
    const furnitureRightBtn = document.querySelector('.furniture-scroll-btn.right-btn');
  
    furnitureLeftBtn.addEventListener('click', () => {
      furnitureLeftBtn.scrollBy({ left: -300, behavior: 'smooth' });
    });
  
    furnitureRightBtn.addEventListener('click', () => {
      furnitureScrollContainer.scrollBy({ left: 300, behavior: 'smooth' });
    });

    // Jewelry Section Scroll
    const jewelryScrollContainer = document.querySelector('.jewelry-scroll-container');
    const jewelryLeftBtn = document.querySelector('.jewelry-scroll-btn.left-btn');
    const jewelryRightBtn = document.querySelector('.jewelry-scroll-btn.right-btn');
  
    jewelryLeftBtn.addEventListener('click', () => {
      jewelryLeftBtn.scrollBy({ left: -300, behavior: 'smooth' });
    });
  
    jewelryRightBtn.addEventListener('click', () => {
      jewelryScrollContainer.scrollBy({ left: 300, behavior: 'smooth' });
    });

    // Gadgets Section Scroll
    const gadgetsScrollContainer = document.querySelector('.gadgets-scroll-container');
    const gadgetsLeftBtn = document.querySelector('.gadgets-scroll-btn.left-btn');
    const gadgetsRightBtn = document.querySelector('.gadgets-scroll-btn.right-btn');
  
    gadgetsLeftBtn.addEventListener('click', () => {
      gadgetsLeftBtn.scrollBy({ left: -300, behavior: 'smooth' });
    });
  
    gadgetsRightBtn.addEventListener('click', () => {
      gadgetsScrollContainer.scrollBy({ left: 300, behavior: 'smooth' });
    });

     // Groceries Section Scroll
     const groceryScrollContainer = document.querySelector('.grocery-scroll-container');
    const groceryLeftBtn = document.querySelector('.grocery-scroll-btn.left-btn');
    const groceryRightBtn = document.querySelector('.grocery-scroll-btn.right-btn');
  
    groceryLeftBtn.addEventListener('click', () => {
      groceryLeftBtn.scrollBy({ left: -300, behavior: 'smooth' });
    });
  
    groceryRightBtn.addEventListener('click', () => {
      groceryScrollContainer.scrollBy({ left: 300, behavior: 'smooth' });
    });


  </script>

<script>
  
  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible'); 
          observer.unobserve(entry.target); 
        }
      });
    },
    { threshold: 0.1 } 
  );

 
  const sections = document.querySelectorAll(
    '.beauty-section, .jewelry-section, .clothes-section, .furniture-section, .gadgets-section, .grocery-section, .GoMartLogo, .about-us'
  );
  
  sections.forEach(section => {
    section.classList.add('fade-in'); 
    observer.observe(section); 
  });
</script>

  </body>
  </html>
