<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="main_menu">
            <a href="/dwp/index" class="nav_logo">
                <img class="logo" src="img/blomsterbikslogo.png" alt="blomsterbiksens logo">
            </a>
        <div class="nav_menu">
            <div class="nav_item">
                <a href="/dwp/index.php">Forside</a>
            </div>

            <div class="nav_item">
                <a href="/dwp/flowers.php">Blomster</a>
            </div>

            <div class="nav_item">
                <a href="/dwp/wine.php">Vin</a>
            </div>

            <div class="nav_item">
                <a href="/dwp/snacks.php">Snacks</a>
            </div>

            <div class="nav_item">
                <a href="/dwp/contact.php">Kontakt</a>
            </div>
        </div>
        <div class="ikoner">
            <a class="cart" href="/dwp/cart.php">kurv</a>
            <a href="/dwp/login" class="login">login</a>
        </div>
    </nav>
</body>
</html>
   
   



<style>
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

.main_menu {
    width: 100vw;
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.4);
}

.nav_menu{
  display: flex;
}

.nav_menu a{
  color: #141D0A;
  text-decoration: none;
  letter-spacing: 3px;
  font-weight: bold;
  font-size: 20px;
  position: relative;
  font-family:sans-serif;
}


.nav_menu a::before {
  content: "";
  position: absolute;
  display: block;
  width: 100%;
  height: 2px;
  bottom: 0;
  top: 25px;
  left: 0;
  background-color: #5B0025;
  transform: scaleX(0);
  transition: transform 0.4s ease;
}

.nav_menu a:hover::before {
  transform: scaleX(1);
}

.nav_menu a:hover {
  text-decoration: none;
  color: #5B0025;
}


.main_menu {

    display: flex;
    justify-content: center;
    height: 15vh;
    background-color: #FFF9FC;
}

.nav_logo {
    width: 25%;
    display: flex;
    align-items: center;
}

.logo{ 
    height: 90%;
    width: auto;
    display: flex;
    justify-content: flex-start;
    padding-left: 20px;
}

.nav_menu {
    width: 50%;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    justify-content: space-between;
}
    
a {
    color:#435019;
    text-decoration: none;
    font-size: 20px;
    font-weight: bold;
}

.ikoner {
    width: 25%;
    height: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    gap:10px;
    padding-right: 20px;
}

.cart {
    height: 100px;
    width: 100px;
    background: url("/img/kurv.png") no-repeat center center;
    background-size: contain;
}

.login .cart {
    height: 25%;
    width: auto;
    background-image: url("img/kurv.png");
}


@media screen and (max-width: 1000px){
  .menu {
    display: none;
  }
}



</style>
