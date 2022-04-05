<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
</head>
<body>
<div class="container-text">
           Chí Thành Company
        </div>
    
    <div class="wrapper ">
        <div class="image">
            <img src="https://wallpapercave.com/dwp1x/wp2707503.jpg" alt="">
        </div>
        <!-- item image -->
        
        <div class="image ">
            <img src="https://wallpapercave.com/dwp1x/wp1847737.jpg" alt="">
        </div>
        <!-- item image -->
        
        <div class="image">
            <img src="https://wallpapercave.com/dwp1x/wp2707508.jpg" alt="">
        </div>
        <!-- item image -->
        
        <div class="image">
            <img src="https://wallpapercave.com/dwp1x/wp2707512.jpg" alt="">
        </div>
        <!-- item image -->
        
        <div class="image">
            <img src="https://wallpapercave.com/dwp1x/wc1754678.jpg" alt="">
        </div>
        <!-- item image -->
        
        <div class="image">
            <img src="https://wallpapercave.com/dwp1x/wp2659902.jpg" alt="">
        </div>
        <!-- item image -->
        
        <div class="image">
            <img src="https://wallpapercave.com/dwp1x/wp2707526.jpg" alt="">
        </div>
        <!-- item image -->
        
        <div class="image">
            <img src="https://wallpapercave.com/dwp1x/wp2707557.jpg" alt="">
        </div>
        <!-- item image -->
    </div>
    <div class="gallery">
        <i class="fa-solid fa-xmark close"></i>
        <div class="gallery_inner">
            <img src="/image_1.jpeg" alt="">
        </div>
        <div class="control_left"><i class="fa-solid fa-arrow-left"></i></div>
        <div class="control_right"><i class="fa-solid fa-arrow-right"></i></div>
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
    margin-right: 3rem;
  }
body{
    height: 100vh;
    background: linear-gradient(120deg, #aff1da,#f9ea8f);
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
}
.wrapper{
    width: 1200px;
    display: flex;
    flex-wrap: wrap;
    margin: auto;
    justify-content: space-between;
}
.image img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    transition: 0.5s;
    cursor: pointer;

}
.image{
    overflow: hidden;
    height: 200px;
    width: 22%;
    border-radius: 4px;
    margin: 20px 0px;
}
.image:hover img {
    transform: scale(1.2);
}
.gallery{
    position: fixed;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    display: flex;
    color: white;
    justify-content: center;
    align-items: center;
    opacity: 0;
    pointer-events: none;
    transform: scale(0.8);
    transition: 0.5s;
}
.fa-xmark {
    display: flex;
    position: fixed;
    right: 25px;
    top: 15px;
}
.fa-solid{
    font-size: 40px;
    color: rgba(255, 255, 255, 0.8);
    position: absolute;
}
.fa-arrow-left{
left: 35px;
}
.fa-arrow-right{
right: 35px;
}
.gallery_inner{
display: flex;
align-items: center;
}

.show{
    opacity: 1;
    pointer-events: auto;
    transform: scale(1);
    cursor: pointer;
}
    </style>
    <script src="/app.js"></script>
</body>
</html>