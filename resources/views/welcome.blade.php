<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="./app.js">
    <!-- <link rel="stylesheet" href="<?php echo asset('assets/css/style.css')?>" type="text/css"> -->
</head>
<body>

    <div class="header">
        <img src="https://www.freepnglogos.com/uploads/cars-logo-brands-png-images-30.png" alt="">
        <div class="container-text">
           Chí Thành Company
        </div>
    </div>


    <div class="nav">
        <a href="http://127.0.0.1:8000/home">Home</a>
        <a href="http://127.0.0.1:8000/product">Product</a>
        <a href="http://127.0.0.1:8000/contact">Contact</a>
    </div>

    <div class="content">
       <img src="https://images.pexels.com/photos/3136673/pexels-photo-3136673.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
    </div>

    <div class="footer">
        <img class="sign" src="./signature.png" alt="">
        
        <i>Made By Chí Thành</i>

    </div>



<style>


*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


@keyframes filling {
    from{
      background-position: center 25%;
    }
    to {
      background-position: center 50%;
    }
  }
  
  .container-text {
    background-image:  url(https://wallpapercave.com/dwp1x/wp4676613.png);
    -webkit-text-fill-color: transparent;
    -webkit-background-clip: text;
    color:  #FFFFFF;
    font-size: 100px;
    animation: filling 3s ease forwards;
    margin-right: 25rem;
  }


body{
    height: 100vh;
    background-image: url(https://wallpapercave.com/wp/wp4676581.jpg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}
.header{
    height: 9rem;
    background-color: rgba(153, 172, 121, 0.4);
    display: flex;
    align-items: center;
   justify-content: space-around;
}
.header img{
    width: 100px;

}

.header .sign{
    width: 450px;

} 

.nav{
    height: 5rem;
    background-color: rgba(255,255,0, 0.2);
    color: black;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
}

.nav a {
    list-style: none;
    text-decoration: double;
    color: black;
    font-size: 40px;
    box-shadow: 0px 8px 5px -4px yellow;
    font-weight: bold;
    transition: 0.4s;
}
.nav a:hover{
    color: yellow;
}

.content{
    /* height: 100vh; */
    display: flex;
    align-items: center;
    justify-content: center;
}
.content img{
    width: 60.5rem;
    border: 1px solid white;
    border-radius: 10px;
    margin-top: 100px;
    margin-bottom: 50px;
}

.footer{
    height: 400px;
    background-image: url(https://wallpapercave.com/wp/wp8432913.jpg);
    margin-top: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}
.footer .sign{
    height: 250px;
}
.footer i{
    font-size: 25px;
}


  
</style>






</body>
</html>