<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wowFood</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- HEADER -->
    <section class="header">
        <div class="container">
            <div class="logo">
                <img src="images/logo.png" alt="Restaurant Logo" class="img-res">
            </div>
            <div class="menu text-right">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Categories</a></li>
                    <li><a href="">Foods</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>  
        </div>

    <!-- ORDER FORM -->
    <div class="order">
        <h1>Fill this form to confirm your order.</h1>
    <form action="" class="selected">
        <fieldset>
            <legend>Selected Food</legend>
                <img src="images/menu-pizza.jpg" alt="Pizza" class="img-res img-curve">
                <div>
                    <h3>Food Title</h3>
                    <h4>$2.3</h4>
                    <label>Quantity</label>
                    <input type= "number" value="1" min="1" max="99" placeholder="1">
                </div>
        </fieldset>
    </form>
    <form action="" class="delivery">
        <fieldset>
            <legend>Delivery Details</legend>
            <div>
                <label for="" class="order-text">Full Name</label>
                <input type="text" name="text" placeholder="E.g. Doan Thi Hoang Anh">
                <label for="" class="order-text">Phone Number</label>
                <input type="text" name="text" placeholder="E.g. 98452xxxxx">
                <label for="" class="order-text">Email</label>
                <input type="text" name="text" placeholder="E.g. hoanganhh@gmail.com">
                <label for="" class="order-text">Address</label>
                <textarea rows="10" cols="30" name="description" placeholder="E.g. Street, City, Country"></textarea>
                <input type="submit" value="Confirm Oder" class="btn btn-primary"> 
            </div> 
        </fieldset>
    </form>
</div>

    <!-- FOOTER -->
  <section class="footer">
        <div class="container">
        <div class="container icon text-center">
            <div class="icon">
                <ul>
                    <li><a href=""><img src="https://img.icons8.com/color/48/000000/facebook-new.png" alt="Facebook" class="img-icon"></a></li>
                    <li><a href=""><img src="https://img.icons8.com/fluency/48/000000/instagram-new.png" alt="Instagram" class="img-icon"></a></li>
                    <li><a href=""><img src="https://img.icons8.com/color/48/000000/twitter--v1.png" alt="Twitter" class="img-icon"></a></li>
                </ul>
            </div>
            <p class="text-center">All rights reserved. Designed By <a href="">HoangAnhh</a></p>
        </div>
        
    </section>
    
</body>
</html>