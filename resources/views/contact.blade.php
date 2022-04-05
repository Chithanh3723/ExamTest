<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
        <form action="">
            <h1>Contact</h1>
        <div class="info">
            <input type="text" id="username" placeholder="username">
            <small></small>
            <span></span>
        </div>

        <div class="info">
            <input type="email" id="email" placeholder="Email">
            <small></small>
            <span></span>
        </div>

        <div class="info">
            <input type="password" id="password" placeholder="Password">
            <small></small>
            <span></span>
        </div>

        <div class="info">
            <input type="password" id="confirm-password" placeholder="Confirm Password">
            <small></small>
            <span></span>
        </div>
        <button type="submit">Send</button>
        <div class="sign-up">
            Don't have information? <a href="#">More</a>
        </div>
        </form>
    </div>


    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
:root{
    --mau-xanh: #2691d9;
    --mau-do: #e74c3c;
}
body{
    height: 100vh;
    background: linear-gradient(120deg, #aff1da,#f9ea8f);
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}
.container{
    width: 400px;
    background: white;
    border-radius: 10px;
    border: none;
    padding: 40px;
}
.container h1{
    text-align: center;
}
.info{
    width: 100%;
    position: relative;
    margin-top: 40px;
}
.info input{
    width: 100%;
    height: 40px;
    border: none;
    font-size: 16px;
    outline: unset;
    border-bottom: 2px solid #adadad;
}
.info span{
    border-bottom: 4px solid var(--mau-xanh);
    position: absolute;
    width: 0%;
    left: 0;
    top: 38px;
    transition: 0.3s;
}
.info input:focus ~ span {
    width: 100%;
}

.info.error small{
    color: var(--mau-do);
}
.info.error input{
    border-bottom: 2px solid var(--mau-do);

}

.container button{
    width: 100%;
    height: 50px;
    border-radius: 25px;
    border: none;
    outline: unset;
    background: var(--mau-xanh);
    color: white;
    font-size: 18px;
    font-weight: bold;
    margin: 25px 0px;
    transition: 0.25s;
}

.container button:hover{
    background: #08609a;
}

.sign-up{
    text-align: center;
    font-weight: 300;
}
.sign-up a{
    color: var(--mau-xanh);
    text-decoration: none;
}

.sign-up a:hover{
    text-decoration: underline;
}

    </style>
</body>
</html>