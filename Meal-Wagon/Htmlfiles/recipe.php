<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/recipe.css">
    <script
        src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
    <title>Meal Wagon</title>
</head>
<body onload="myFunction()">
    <section>
        <nav class="container-nav">
            <img src="../Images/logo (1).png" alt="">
            <div class="right-nav">
                <div class="search-bar">
                    <input type="text" placeholder="search meals">
                    <a href="../Htmlfiles/search.php"><i class="fas fa-search"></i></a>
                </div>
                <a href="preferences.php">Preferences</a>
                <a href="mealplan.php"  class="active">My Meal</a>
                <h2>Hello, <br> First Name </h2>
            </div>
        </nav>

        <section class="main">
            <div class="dish">
                <img src="../Images/image 31.png" alt="">
                <div class="recipe">
                    <h1>Chilli Lemone Rice <hr></h1>
                    <div class="front">
                        
                        <h2><b>CALORIES - 200</b> </h2>
                        <h3>Protiens - 34</h3>
                        <h3>Fat - 23</h3>
                        <h3>Saturated Fat - 3</h3>
                        <h3>Carbohydrate - 23</h3>
                        <h3>Sugar - 2.6</h3>
                        <h3>Sodium - 5</h3>

                        <button class="add">ADD TO MEAL</button>
                    </div>
                    
                    
                </div>

            </div>

            <div class="details">
                <div class="navbar">
                    <button id="ing">INGREDIENTS</button>
                    <button id="step">STEP</button>
                    <button id="equip">EQUIPMENT</button>
                </div>
                <div class="content">

                    <div class="ing">
                        <div>
                            Flour <br><br> Granulated Sugar <br><br> Fresh Lemon Juice <br><br>Flour <br><br> Fresh Lemon Juice
                        </div>
                        <div>
                            2 TbSpn <br><br> 2 TbSpn <br><br> 2 TbSpn <br><br> 2 TbSpn <br><br> 2 TbSpn
                        </div>
                    </div>

                    <div class="steps">

                        1. Put the garlic in a pan and then add the onion. <br>
                        2. Add some salt and oregano. <br>
                        3. Combine the borboun and sugar in a small saucepan and cook over high flame. <br>
                        4. Add some salt and oregano. <br>
                    </div>

                    <div class="equip">
                        <div>
                            1. <br> 2. <br> 3. <br>4.
                        </div>
                        <div>
                            Pie Pan <br> Oven <br> Bow <br> Pan
                        </div>
                    </div>
                </div>

            </div>
        </section>
        

    </section>
</body>

<script src="../Javascript/recipe.js"></script>
</html>