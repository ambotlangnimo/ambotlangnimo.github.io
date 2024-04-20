<?php
session_start();
require 'db-connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="Roblox_Logo_2022.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Robux Giveaway</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            background-image: url('bg.jpg');
         background-repeat: no-repeat;
             background-size: cover;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        h1, h2 {
            text-align: center;
        }
        p {
            line-height: 1.6;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            
        }
        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Free Robux Giveaway!</h1>
        <p>Welcome to our free Robux giveaway! We're excited to offer you a chance to get some free Robux for your Roblox adventures.</p>
        <h2>How to Participate:</h2>
        <ol>
            <p>1. Click the button below to claim your free Robux.</p>
            <p>2. Complete the given form and the amount of robux you desire.</p>
            <p>3. Enjoy your free Robux and use them in Roblox!</p>
        </ol>
        <p>Don't miss this opportunity! Claim your free Robux now!</p>
        <a href="index.html" class="button">Claim Free Robux</a>
    </div>
</body>
</html>
