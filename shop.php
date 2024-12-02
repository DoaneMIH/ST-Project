<?php
session_start(); //start session
require 'database.php';

if (isset($_SESSION['user_email'])) {
  $user_email = $_SESSION['user_email'];

    // Check database connection
    if (!$conn) {
        die("<script>console.error('Database connection failed');</script>");
    }
    //Select user id from email nga naka login
    $stmt = $conn->prepare("SELECT user_id FROM user WHERE user_email = ?");
    if (!$stmt) {
        die("<script>console.error('Prepare statement failed');</script>");
    }
    $stmt->bind_param("s", $user_email);
    $stmt->execute();
    $stmt->bind_result($user_id);
    $stmt->fetch();
    $stmt->close();

    if ($user_id) {
        // Pass user_id to JavaScript
        echo "<script>var userId = '$user_id';</script>";
    } else {
        echo "<script>console.error('User ID not found for email: $user_email');</script>";
    }
} else {
    echo "<script>console.error('User email not set in session');</script>";
}
?>

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
  <p>Your one-stop online shopping destination! Discover a world of convenience...</p>
</div>

<!-- Here ma store ang mga data from API -->
<div class="background"></div>
<div id="product-container" class="products"></div>   

<div class="cart">
  <h2>Your Cart</h2>
  <ul id="cart-items"></ul>
  <p id="total-amount">Total: $0.00</p>
  <button id="checkout-button" class="checkout-button">Checkout</button>
</div>

<?php include 'footer.php'; ?>

<script>
  document.addEventListener("DOMContentLoaded", () => {   
    const productContainer = document.getElementById("product-container");  //placeholder for the product
    const cartContainer = document.querySelector(".cart");
    const openShopping = document.querySelector(".shopping img");
    const cartCounter = document.querySelector(".shopping .quantity");
    let cart = [];  // ARRAY TO STORE THE ITEM IN THE CART

    openShopping.addEventListener("click", () => {
      cartContainer.classList.toggle("active");
    });

    // FETCH PRODUCTS FROM THE API
    async function fetchProducts() {
      try {
        const dummyJsonResponse = await fetch("https://dummyjson.com/products");  // FETCH from 1st API
        const dummyJsonData = await dummyJsonResponse.json();

        const fakestoreResponse = await fetch("https://fakestoreapi.com/products");   // FETCH from 2nd API
        const fakestoreData = await fakestoreResponse.json();

        const combinedProducts = [  // Combine products from both APIs
          ...dummyJsonData.products,  // Get all the products from 1st API
          ...fakestoreData.slice(0, 30), // Limit the 2nd API to 30 products
        ];
        
        // Render products 
        renderProducts(combinedProducts);

        //Handling error momints
      } catch (error) {
        console.error("Failed to fetch products:", error);
        productContainer.innerHTML = "<p>Error loading products. Try again later.</p>";
      }
    }

    //Function renderProducts sang API
    function renderProducts(products) {
      productContainer.innerHTML = "";  //eh Clear and container
      products.forEach((product) => {   //for everyproduct
        const productCard = document.createElement("div");  //ga create new div nga ang
        productCard.classList.add("card");  //class name is card

        //gina kuha ang insakto nga image URL base sa availability kay iban nga api ang image sa sulod sulod pagid
        const imageUrl = product.thumbnail || product.image || product.images?.[0] || "placeholder.jpg";

        //what is inside the CLASS 'card'
        productCard.innerHTML = `
          <img class="card-image" src="${imageUrl}" alt="${product.title}">
          <div class="card-content">
            <h3 class="card-title">${product.title}</h3>
            <p class="card-description">${product.description || "No description available"}</p>
            <p class="price">$${product.price}</p>
            <button class="card-button" data-title="${product.title}" data-price="${product.price}" data-image="${imageUrl}">Add to Cart</button>
          </div>
        `;

        //gina dugang sa sulod kang productContainer and tanan nga card
        productContainer.appendChild(productCard);
      });

      // Add Event Listeners for Buttons
      document.querySelectorAll(".card-button").forEach((button) => {
        button.addEventListener("click", (event) => {
          const { title, price, image } = event.target.dataset; //gina kuha ang TITLE kag PRICE nga halin sa DATASET or sa API
          addToCart(title, parseFloat(price), image); //Calling the addToCart function
        });
      });
    }

    // Add to Cart  FUNCTION
    function addToCart(title, price, image) {   //para ma lantaw kung ara na sa cart
      const existingItem = cart.find((item) => item.title === title);
      if (existingItem) {
        existingItem.quantity++;    //kung ara na ang item dugangan lang ang quatity
      } else {
        cart.push({ image, title, price, quantity: 1 });  //kung wala pa eh dugangan ang cart
      }
      updateCartCounter();  //update anf cart counter
      renderCart();   //calling the function rendercart

       // SweetAlert kung mag add to cart ang user kag makadto sa cart
      Swal.fire({
        title: 'Product Added to Cart!',
        text: `${title} has been added to your cart.`,
        icon: 'success',
        confirmButtonText: 'Go to Cart'
      });
    }
    //Render Cart or eh LOAD ANG CART
    function renderCart() {
      const cartItems = document.getElementById("cart-items");  //Placeholder para sa listahan sa cart items
      const totalAmount = document.getElementById("total-amount");  //for the totalAmount kang ara sa Cart

      cartItems.innerHTML = "";   //Clear cart items
      let total = 0;

      cart.forEach((item, index) => {
        const cartItem = document.createElement("li");  //nag ubra bag o nga list NOTE WAAY NI SIYA "ID" or "CLASS". "<li>" lang gid
        //diri ga multiply products and ga remove product through button
        cartItem.innerHTML = `
          <img class="img-cart" src="${item.image}" alt="${item.title}" style="width: 50px; height: 50px; object-fit: cover; margin-right: 10px;">
          ${item.title} - ₱${item.price.toFixed(2)} X 
          <button class="quantity-btn minus-btn" onclick="updateQuantity(${index}, -1)"> - </button> 
          ${item.quantity} <button class="quantity-btn plus-btn" onclick="updateQuantity(${index}, 1)"> + </button>
          <button class="remove-btn" onclick="removeFromCart(${index})">Remove</button>
        `;
        cartItems.appendChild(cartItem);  //add the item in the cart
        total += item.price * item.quantity;  //Total
      });

      totalAmount.textContent = `Total: $${total.toFixed(2)}`;  //Namean kang Fixed(2) is duha lang ka decimal
    }

    // Checkout button functionality
    document.getElementById("checkout-button").addEventListener("click", () => {
      const userId = window.userId;  // Use the userId passed from PHP to JS

      //kung wala ang id 
      if (!userId) {
        alert("User ID is not available. Please log in first.");
        return;
      }

      //first nga ara sa array nga cart lang 
      const firstProduct = cart[0];
      const total = cart.reduce((acc, item) => acc + item.price * item.quantity, 0);

      fetch("saveReceipt.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({  //eh sulod ang User ID sa JSON para ma fetch
          user_id: userId,
          receipt_product: firstProduct.title,
          receipt_total: total,
        }),
      })
      .then((response) => response.json())
      .then((data) => {
        if (data.success) {
          Swal.fire({
            title: "Checkout Successful!",
            text: "Your receipt has been saved.",
            icon: "success",
          });
          cart = [];
          renderCart();
          updateCartCounter();

        } else {
          Swal.fire({
            title: "Checkout Failed!",
            text: data.message || "An error occurred.",
            icon: "error",
          });
        }
      })
      .catch((error) => {
        console.error("Checkout error:", error);
        Swal.fire({
          title: "Checkout Failed!",
          text: "Please try again later.",
          icon: "error",
        });
      });
    });

    //REMOVE THE PRODUCT FROM THE CART
    window.updateQuantity = function(index, delta) {
      if (cart[index].quantity + delta > 0) {
        cart[index].quantity += delta;
        renderCart();
      }
    };

    //REMOVE THE PRODUCT FROM THE CART
    window.removeFromCart = function(index) {
      cart.splice(index, 1);
      renderCart();
    };

    // Update cart counter
    function updateCartCounter() {
      cartCounter.textContent = cart.length;
    }

    fetchProducts();
  });
</script>
</body>
</html>
