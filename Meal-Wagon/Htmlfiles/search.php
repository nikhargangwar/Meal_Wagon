<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/search.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Flip/1.1.2/jquery.flip.min.js" ></script>
    <title>Meal Wagon</title>
</head>
<body>
    <section class="content">
        <nav class="container-nav">
            <img src="..Images/logo (1).png" alt="">
            <div class="right-nav">
                <div class="search-bar">
                    <input type="text" placeholder="search meals">
                    <a></button><i class="fas fa-search"></i></a>
                </div>
                <a href="preferences.php">Preferences</a>
                <a href="mealplan.php"  class="active">My Meal</a>
                <h2>Hello <br> First Name</h2>
            </div>
        </nav>front
        <div class="top-img">
            <div class="txt">
                <p>Search Recipes</p>  
                <p id="sml">Explore world class dishes and include<br>them in your daily meal plan</p>
             </div>
            <img src="../Images/image 28.png" alt="">
            
        </div>

        <div class="drop-down">
            <select name="ingredients" id="ingr">
                <option value="" disabled selected>Select Your Ingredients</option>
                <option value="Salt">Salt</option>
                <option value="Sugar">Sugar</option>
            </select>
        </div>

        <section class="items">
            <div class="card">
                <div class="front-1">
                    <img src="../Images/image 22.png" alt="">
                    <div class="text">
                        <div class="name">
                            <h2>Chilli Potato</h2>
                            <div class="cal">
                                Calories 100
                            </div>
                        </div>
                        <div class="details">
                            The recipe Chicken Bbq could satisfy your American craving in about 1 hour.
                        </div>

                        <div class="btns">
                            <a href="../Htmlfiles/recipe.php" class="recipe">RECIPE</a>
                            <button class="add-1">ADD</button>
                        </div>
                        
                    </div>
                </div>
                
                <div class="add-meal-1">
                    <button id="close-1">X</button>
                    <div class="inputs">
                        <div>
                            <input type="radio" id="breakfast" name="meal" value="breakfast">
                            <label for="breakfast">Breakfast</label>
                        </div>
                        <div>
                            <input type="radio" id="lunch" name="meal" value="lunch">
                            <label for="breakfast">Lunch</label>
                        </div>
                        <div>
                            <input type="radio" id="dinner" name="meal" value="dinner">
                            <label for="breakfast">Dinner</label>
                        </div>  
                        
                    </div>
                    <div class="save">
                        <button class="save-1">Save</button>
                    </div>
                    
                    
                </div>
            
            </div>
            <div class="card">
                <div class="front-2">
                    <img src="../Images/image 22.png" alt="">
                    <div class="text">
                        <div class="name">
                            <h2>Chilli Potato</h2>
                            <div class="cal">
                                Calories 100
                            </div>
                        </div>
                        <div class="details">
                            The recipe Chicken Bbq could satisfy your American craving in about 1 hour.
                        </div>

                        <div class="btns">
                            <a href="../Htmlfiles/recipe.php" class="recipe">RECIPE</a>
                            <button class="add-2">ADD</button>
                        </div>
                        
                    </div>
                </div>
                
                <div class="add-meal-2">
                    <button id="close-2">X</button>
                    <div class="inputs">
                        <div>
                            <input type="radio" id="breakfast" name="meal" value="breakfast">
                            <label for="breakfast">Breakfast</label>
                        </div>
                        <div>
                            <input type="radio" id="lunch" name="meal" value="lunch">
                            <label for="breakfast">Lunch</label>
                        </div>
                        <div>
                            <input type="radio" id="dinner" name="meal" value="dinner">
                            <label for="breakfast">Dinner</label>
                        </div>
                        
                    </div>
                    <div class="save">
                        <button class="save-2">Save</button>
                    </div>
                    
                    
                    
                </div>
            
            </div>
            <div class="card">
                <div class="front-3">
                    <img src="../Images/image 22.png" alt="">
                    <div class="text">
                        <div class="name">
                            <h2>Chilli Potato</h2>
                            <div class="cal">
                                Calories 100
                            </div>
                        </div>
                        <div class="details">
                            The recipe Chicken Bbq could satisfy your American craving in about 1 hour.
                        </div>

                        <div class="btns">
                            <a href="../Htmlfiles/recipe.php" class="recipe">RECIPE</a>
                            <button class="add-3">ADD</button>
                        </div>
                        
                    </div>
                </div>
                
                <div class="add-meal-3">
                    <button id="close-3">X</button>
                    <div class="inputs">
                        <div>
                            <input type="radio" id="breakfast" name="meal" value="breakfast">
                            <label for="breakfast">Breakfast</label>
                        </div>
                        <div>
                            <input type="radio" id="lunch" name="meal" value="lunch">
                            <label for="breakfast">Lunch</label>
                        </div>
                        <div>
                            <input type="radio" id="dinner" name="meal" value="dinner">
                            <label for="breakfast">Dinner</label>
                        </div>
                        
                    </div>
                    <div class="save">
                        <button class="save-3">Save</button>
                    </div>
                        
                    
                    
                </div>
            
            </div>
            
        </section>
    </section>
    <script type="text/javascript" src="../Javascript/search.js"></script>
</body>

</html>