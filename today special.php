<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
   /* card  */
   /* .row{
  justify-content: center;
  background-color: antiquewhite;
  margin: 110px;
} */
.category{
        justify-content: center;
       }
        .card-container{
            display: flex;
            justify-content: space-between;
            justify-content: space-around;
            margin-top: 160px;
        }
        .card{
          justify-content: center;
          justify-content: space-evenly;
            border: 1px solid wheat;
        }
        .container-fluid{
            display: flex;
            justify-content: center;
          }
            .card img{
              height: 300px;
              width: 285px;
            }
            .discount {
              position: absolute;
              top: 10px;
              left: 10px;
              background-color: #e74c3c;
              color: #fff;
              padding: 5px 10px;
              border-radius: 4px;
              font-size: 14px;
              font-weight: bold;
          }
          .product-name{
            margin: 15px 0;
            font-size: 18px;
            font-weight: bold;
            color: #000;
          }
          .price {
            margin: 10px 0;
            font-size: 16px;
          }
          .old-price {
            color: #888;
            text-decoration: line-through;
            margin-right: 10px;
          }
          
          .new-price {
            color: #e74c3c;
            font-weight: bold;
          }
          .card-text{
            color: #000;
          }
          .btn{
            color: black;
            justify-content: center;
          }
          .btn :hover{
            color: white;
            background-color: black;
          }
          @media (max-width: 768px){
            .row{
              justify-content: center;
            }
            .card-container{
              flex-direction: column;
              align-items: center;
            }
            .card{
              margin-bottom: 35px;
            }
          }
      
</style>
<?php include 'navbar.php' ?>
<div class="card-container">
<!-- first -->
<div class="card" style="width: 18rem;">
<div class="discount">20% OFF</div>
<img src="imag/Umbrella.jpg" class="card-img-top" alt="...">
<div class="card-body">
<h1 class="product-name">Umbrella</h1>
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<div class="product-rating">
  <span>⭐⭐⭐⭐⭐</span>
</div>
<div class="price">
<span class="old-price">$30.00</span>
<span class="new-price">$24.00</span><br>
<div class="btn"><button><a href="delivery.php">Buy Now</a></button>
</div>
</div>
</div>
</div>
<div class="card" style="width: 18rem;">
<div class="discount">30% OFF</div>
<img src="imag/Polo T-Shirt.jpg" class="card-img-top" alt="...">
<div class="card-body">
<h1 class="product-name">T-Shirt</h1>
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<div class="product-rating">
  <span>⭐⭐⭐⭐⭐</span>
</div>
<div class="price">
  <span class="old-price">$100.00</span>
  <span class="new-price">$60.00</span><br>
  <div class="btn"><button><a href="delivery.php">Buy Now</a></button>

</div>
</div>
</div>
</div>
<div class="card" style="width: 18rem;">
<div class="discount">10% OFF</div>
<img src="imag/jhumka.jpg" class="card-img-top" alt="...">
<div class="card-body">
<h1 class="product-name">Jhumka</h1>
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<div class="product-rating">
  <span>⭐⭐⭐⭐⭐</span>
</div>
<div class="price">
      <span class="old-price">$50.00</span>
      <span class="new-price">$45.00</span><br>
      <div class="btn"><button><a href="delivery.php">Buy Now</a></button>

</div>
</div>
</div>
</div>
<div class="card" style="width: 18rem;">
<div class="discount">10% OFF</div>
<img src="imag/Collar Shirt.jpg" class="card-img-top" alt="...">
<div class="card-body">
<h1 class="product-name">Collar Shirt</h1>
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<div class="product-rating">
  <span>⭐⭐⭐⭐⭐</span>
</div>
<div class="price">
  <span class="old-price">$100.00</span>
  <span class="new-price">$90.00</span><br>
  <div class="btn"><button><a href="delivery.php">Buy Now</a></button>
  </div>
</div>
</div>
</div>
</div>
</div>
<!-- second -->
<div class="card-container">
<div class="card" style="width: 18rem;">
<div class="discount">20% OFF</div>
<img src="imag/girls Sports shoes.jpg" class="card-img-top" alt="...">
<div class="card-body">
<h1 class="product-name">Girl Sport Shoes</h1>
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<div class="product-rating">
  <span>⭐⭐⭐⭐⭐</span>
</div>
<div class="price">
  <span class="old-price">$50.00</span>
  <span class="new-price">$40.00</span><br>
  <div class="btn"><button><a href="delivery.php">Buy Now</a></button>
</div>
</div>
</div>
</div>
<div class="card" style="width: 18rem;">
<div class="discount">10% OFF</div>
<img src="imag/clock.jpg" class="card-img-top" alt="...">
<div class="card-body">
<h1 class="product-name">clock</h1>
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<div class="product-rating">
  <span>⭐⭐⭐⭐⭐</span>
</div>
<div class="price">
  <span class="old-price">$200.00</span>
  <span class="new-price">$180.00</span><br>
  <div class="btn"><button><a href="delivery.php">Buy Now</a></button>
</div>
</div>
</div>
</div>
<div class="card" style="width: 18rem;">
<div class="discount">5% OFF</div>
<img src="imag/Heat Brush Solac MD7401 53W.jpg" class="card-img-top" alt="...">
<div class="card-body">
<h1 class="product-name">Heat Brush Solac MD7401 53W</h1>
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<div class="product-rating">
  <span>⭐⭐⭐⭐⭐</span>
</div>
<div class="price">
      <span class="old-price">$50.00</span>
      <span class="new-price">$45.00</span><br>
      <div class="btn"><button><a href="delivery.php">Buy Now</a></button>
</div>
</div>
</div>
</div>
<div class="card" style="width: 18rem;">
<div class="discount">10% OFF</div>
<img src="imag/iphone 11.jpeg" class="card-img-top" alt="...">
<div class="card-body">
<h1 class="product-name">Iphone 11</h1>
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<div class="product-rating">
  <span>⭐⭐⭐⭐⭐</span>
</div>
<div class="price">
  <span class="old-price">$200.00</span>
  <span class="new-price">$180.00</span><br>
  <div class="btn"><button><a href="delivery.php">Buy Now</a></button>
  </div>
</div>
</div>
</div>
</div>
</div>
<!-- third -->
<div class="card-container">
<div class="card" style="width: 18rem;">
<div class="discount">20% OFF</div>
<img src="image/girlwatch.webp" class="card-img-top" alt="...">
<div class="card-body">
<h1 class="product-name">Girl Watches</h1>
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<div class="product-rating">
  <span>⭐⭐⭐⭐⭐</span>
</div>
<div class="price">
  <span class="old-price">$3200.00</span>
  <span class="new-price">$2560.00</span><br>
  <div class="btn"><button><a href="delivery.php">Buy Now</a></button>
</div>
</div>
</div>
</div>
<div class="card" style="width: 18rem;">
<div class="discount">30% OFF</div>
<img src="image/nokia 3310.jpeg" class="card-img-top" alt="...">
<div class="card-body">
<h1 class="product-name">Nokia 3310</h1>
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<div class="product-rating">
  <span>⭐⭐⭐⭐⭐</span>
</div>
<div class="price">
  <span class="old-price">$300.00</span>
  <span class="new-price">$240.00</span><br>
  <div class="btn"><button><a href="delivery.php">Buy Now</a></button>
</div>
</div>
</div>
</div>
<div class="card" style="width: 18rem;">
<div class="discount">5% OFF</div>
<img src="image/Vaporesso.jpeg" class="card-img-top" alt="...">
<div class="card-body">
<h1 class="product-name">Vaporesso</h1>
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<div class="product-rating">
  <span>⭐⭐⭐⭐⭐</span>
</div>
<div class="price">
      <span class="old-price">$50.00</span>
      <span class="new-price">$45.00</span><br>
      <div class="btn"><button><a href="delivery.php">Buy Now</a></button>
</div>
</div>
</div>
</div>
<div class="card" style="width: 18rem;">
<div class="discount">10% OFF</div>
<img src="image/boywatch.jpg" class="card-img-top" alt="...">
<div class="card-body">
<h1 class="product-name">Boy Watches</h1>
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<div class="product-rating">
  <span>⭐⭐⭐⭐⭐</span>
</div>
<div class="price">
  <span class="old-price">$200.00</span>
  <span class="new-price">$140.00</span><br>
  <div class="btn"><button><a href="delivery.php">Buy Now</a></button>
  </div>
</div>
</div>
</div>
</div>
</div>
<?php include 'footer.php' ?>
    </body>
    </head>
    </html>