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

    /* .card-container{
      max-width: 100%;
      margin: 160px;
        display: grid;
        grid-template-columns: repeat(4,1fr);
        align-items: centers;
        justify-items: center;
        justify-content: space-between;
    } */
    .category{
        justify-content: center;
       }
        .card-container{
            display: flex;
            margin-top: 160px;
            justify-content: space-between;
            justify-content: space-around;
            display: grid;
        grid-template-columns: repeat(4,1fr);
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
<div><h1 class="row"> Just For You </h1></div>
<div class="card-container">
<div class="card" style="width: 18rem;">
<div class="discount">20% OFF</div>
<img src="img/men solid laptop backpack.webp" class="card-img-top" alt="...">
<div class="card-body">
<h1 class="product-name">laptop back</h1>
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<div class="product-rating">
  <span>⭐⭐⭐⭐⭐</span>
</div>
<div class="price">
  <span class="old-price">$320.00</span>
  <span class="new-price">$266.00</span><br>
  <div class="btn"><button><a href="delivery.php">Buy Now</a></button>
</div>
</div>
</div>
</div>
<div class="card" style="width: 18rem;">
<div class="discount">10% OFF</div>
<img src="img/pants.jpg" class="card-img-top" alt="...">
<div class="card-body">
<h1 class="product-name">Pant</h1>
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
<img src="img/Boxers.jpg" class="card-img-top" alt="...">
<div class="card-body">
<h1 class="product-name">Boxers</h1>
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
  <div class="discount">30% OFF</div>
  <img src="img/poloo t-shirt.webp" class="card-img-top" alt="...">
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
<img src="img/Pen Pertegaz PE99010 Black Silver.jpg" class="card-img-top" alt="...">
<div class="card-body">
<h1 class="product-name">Pen</h1>
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<div class="product-rating">
  <span>⭐⭐⭐⭐⭐</span>
</div>
<div class="price">
  <span class="old-price">$10.00</span>
  <span class="new-price">$9.00</span><br>
  <div class="btn"><button><a href="delivery.php">Buy Now</a></button>
  </div>
</div>
</div>
</div>
<div class="card" style="width: 18rem;">
  <div class="discount">10% OFF</div>
  <img src="img/cannon_eos.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h1 class="product-name">Cannon_eos</h1>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <div class="product-rating">
    <span>⭐⭐⭐⭐⭐</span>
</div>
  <div class="price">
    <span class="old-price">$1000.00</span>
    <span class="new-price">$900.00</span><br>
    <div class="btn"><button><a href="delivery.php">Buy Now</a></button>
  </div>
  </div>
  </div>
  </div>
  <div class="card" style="width: 18rem;">
  <div class="discount">30% OFF</div>
  <img src="img/Printed Shirt.webp" class="card-img-top" alt="...">
  <div class="card-body">
  <h1 class="product-name">Printed Shirt</h1>
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
  <img src="img/camera.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h1 class="product-name">Camera</h1>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <div class="product-rating">
    <span>⭐⭐⭐⭐⭐</span>
</div>
  <div class="price">
    <span class="old-price">$1200.00</span>
    <span class="new-price">$1080.00</span><br>
    <div class="btn"><button><a href="delivery.php">Buy Now</a></button>
  </div>
  </div>
  </div>
  </div>
</div>
<?php include 'footer.php' ?>
    </body>
    </head>
</html>