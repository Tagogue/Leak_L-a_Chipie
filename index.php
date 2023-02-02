<?php
    require_once "config.php";

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer async src="./js.js"></script>
    <title>Leak Léa Chipie</title>
</head>
<body>
    <style>
        *{
            margin: 0;
            padding: 0;
            list-style: none;
            text-decoration: none;
            box-sizing: border-box;
        }
        body{
            width: 100%;
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            flex-direction: column;
            background: #333;
        }
        h1{
            width: 100%;
            text-align: center;
            margin-top: 70px;
            font-size: 45px;
            color: white;
        }
        h2{
            color: white;
            text-align: center;
            width: 100%;
        }
        .img{
            width: 100%;
            display: flex;
            margin-top: 50px;
            justify-content: flex-start;
            flex-wrap: wrap;
            margin-bottom: 30px;
        }
        
        img{
            flex: 1 300px;
            width: 100px;
            max-height: 550px;
            max-width: 640px;
            height: 350px;
            margin-left: 10px;
            margin-right: 10px;
            margin-top: 25px;
            border-radius: 10px;
        }

        footer{
            width: 100%;
            height: 80px;
            background: red;
        }

        @media screen and (max-width: 430px) {
            h1{
                font-size: 38px;
            }
            h2{
                font-size: 19px;
            }
            .img{
                margin-top: 20px;
            }
        }
        @media screen and (max-width: 340px) {
            h1{
                font-size: 34px;
                margin-top: 50px;
            }
            h2{
                font-size: 16px;
            }
            .img{
                margin-top: 15px;
            }
        }
        @media screen and (max-width: 300px) {
            body{
                display: none;
            }
        }
    </style>

    <h1>Leak Léa Lichie</h1>
    <h2>D'autres leaks arrivent !!</h2>
    <div class="img">
        <img src="./img/1.png" alt="">
        <img src="./img/2.png" alt="">
        <img src="./img/3.png" alt="">
        <img src="./img/4.png" alt="">
        <img src="./img/5.png" alt="">
        <img src="./img/6.png" alt="">
    </div>
</body>
</html>