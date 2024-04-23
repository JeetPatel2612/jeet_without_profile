<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "wp";
$con = mysqli_connect($host, $user, $password,$dbname);

//<!-- $rows = mysqli_query($con, "SELECT * FROM recipes ORDER BY recipe_id DESC"); -->
if ($con->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 
// SQL query to select data from database
$sql = " SELECT * FROM recipes ORDER BY recipe_id DESC ";
$result = $con->query($sql);
$con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../wp_project/img/flavour-fusion-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../wp_project/css/hca_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Express Eat</title>
</head>
<body>

    <!--- Navigation Bar -->
    <div class="header">
        <nav class="nav-bar">
            <img src="../img/Logo.png" class="brand-name">
            <a href="#" class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </a>
            <div class="menu-bar">
                <ul>
                    <li><a href="home.html">Home</a></li>
                    <li><a href="insert_recipe.html">Modify</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </nav>
        <!-- Search Bar -->
        <br>
        <div class="title" style="margin-bottom: -20px;">Find a Recipe</div>
        <div class="search-wrapper">
            <div class="fa fa-search"></div>
            <input type="text" name=""  id="search" placeholder="What do you want to eat?" onkeyup="search()">
            <div class="fa fa-times" onclick="clearInput()" ></div>
        </div>
    </div>

    <!-- Search Results -->
        <div class="result" style="height: fit-content;">
            <br>
            <h1>Your Search Result: </h1>
        </div>
        <?php 
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
        ?>
        <!-- Main Content -->
        <div class="card-grid" >
            <div class="food-list" id="food-list">
                    <p id="none" style="display: none;">Sorry, the food you were looking for was not available.</p>
                    <div class="card card-shadow">
                        <div class="card-header card-image">
                            <img scr="img/ <?php echo $result[file1]; ?>" >
                        </div>
                        <div class="card-body" >
                        <h3> <?php echo $result["dishName"]; ?> </h3>
                        </div>
                        <div class="card-footer">
                            <button class="btn" onclick="getRecipeDetails1()">Get Recipe</button>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                    <div class="card card-shadow">
                        <div class="card-header card-image">
                            <img src="../img/Sisig.webp">
                        </div>
                        <div class="card-body" >
                        <h3> Sisig </h3>
                        </div>
                        <div class="card-footer">
                            <button class="btn" onclick="getRecipeDetails()">Get Recipe</button>
                        </div>
                    </div>
                    <div class="card card-shadow">
                        <div class="card-header card-image">
                            <img src="../img/Adobo.webp">
                        </div>
                        <div class="card-body" >
                        <h3> Adobo </h3>
                        </div>
                        <div class="card-footer">
                            <button class="btn" onclick="get2ndRecipe()">Get Recipe</button>
                        </div>
                    </div>
                    <div class="card card-shadow">
                        <div class="card-header card-image">
                            <img src="../img/Porkchop.webp">
                        </div>
                        <div class="card-body">
                            <h3>Sizzling Porkchop</h3>
                        </div>
                        <div class="card-footer">
                            <button class="btn" onclick="get3rdRecipe()">Get Recipe</button>
                        </div>
                    </div>
                    <div class="card card-shadow">
                        <div class="card-header card-image">
                            <img src="../img/Omelette.webp">
                        </div>
                        <div class="card-body" >
                            <h3>Omelette</h3>
                        </div>
                        <div class="card-footer">
                            <button class="btn" onclick="get4thRecipe()">Get Recipe</button>
                        </div>
                    </div>
                    <div class="card card-shadow">
                        <div class="card-header card-image">
                            <img style="max-height: 200px; object-position: center;" src="../img/red_dish.jpg">
                        </div>
                        <div class="card-body" >
                        <h3> Add new Recipe </h3>
                        </div>
                        <div class="card-footer">
                            <button class="btn" onclick="get5thRecipe()">Add Recipe</button>
                        </div>
                    </div>
                    
            </div> 

            <!--Ending of Main Content-->

            <!--Recipe Details-->
            <div class = "meal-detail" id="meal-detail">
                <!-- recipe close btn -->
                <button type = "button" class = "btn recipe-close-btn" id = "recipe-close-btn" onclick="closeBtn()">
                    <i class ="fas fa-times"></i>
                </button>

                <!-- recipe details -->
                <div class="meal-content">
                    <h2 class="meal-name">Sisig</h2>
                    <div class="meal-about">
                        <h3 class="meal-title-about">About Meal</h3>
                        <p class="meal-descript-about">Sisig is a Filipino dish made from parts of a pig's face and belly, and chicken liver which is usually seasoned with calamansi, onions, and chili peppers. It originates from the Pampanga region in Luzon. Sisig is a staple of Kapampangan cuisine. </p>
                    </div>
                    <div class = "meal-instruct">
                        <h3>Ingridients:</h3>
                        <p><br>1 lb. pig ears
                            <br>1 1/2 lb pork belly
                            <br>1 piece onion minced
                            <br>3 tablespoons soy sauce
                            <br>1/4 teaspoon ground black pepper
                            <br>1 knob ginger minced (optional)
                            <br>3 tablespoons chili flakes
                            <br>1/2 teaspoon garlic powder
                            <br>1 piece lemon or 3 to 5 pieces calamansi
                            <br>½ cup butter or margarine
                            <br>¼ lb chicken liver
                            <br>6 cups water
                            <br> 3 tablespoons mayonnaise
                            <br>1/2 teaspoon salt
                            <br> 1 piece egg (optional)
                        </p>
                        <h3>Instruction:</h3>
                        <p><br>Pour the water in a pan and bring to a boil Add salt and pepper.
                            <br>Put-in the pig’s ears and pork belly then simmer for 40 minutes to 1 hour (or until tender).
                            <br>Remove the boiled ingredients from the pot then drain excess water
                            <br>Grill the boiled pig ears and pork belly until done
                            <br>Chop the pig ears and pork belly into fine pieces
                            <br>In a wide pan, melt the butter or margarine. Add the onions. Cook until onions are soft.
                            <br>Put-in the ginger and cook for 2 minutes
                            <br>Add the chicken liver. Crush the chicken liver while cooking it in the pan.
                            <br>Add the chopped pig ears and pork belly. Cook for 10 to 12 minutes
                            <br>Put-in the soy sauce, garlic powder, and chili. Mix well
                            <br>Add salt and pepper to taste
                            <br>Put-in the mayonnaise and mix with the other ingredients
                            <br>Transfer to a serving plate. Top with chopped green onions and raw egg.
                            <br>Serve hot. Share and Enjoy (add the lemon or calamansi before eating)</p>
                
                    </div>
                    <div class = "meal-img">
                        <img src = "../img/Sisig.webp" alt = "">
                      </div>
                      <div class = "meal-link">
                        <a href="https://tinyurl.com/mryx6ezu" class="meal-link-btn">Watch Video</a>
                    </div>
                </div>
            </div>
            <div class = "second-meal-detail" id="second-meal-detail">
                <!-- recipe close btn -->
                <button type = "button" class = "btn recipe-close-btn" id = "recipe-close-btn" onclick="closeBtn()">
                    <i class ="fas fa-times"></i>
                </button>

                <!-- recipe details -->
                <div class="meal-content">
                    <h2 class="meal-name">Adobo</h2>
                    <div class="meal-about">
                        <h3 class="meal-title-about">About Meal</h3>
                        <p class="meal-descript-about">Philippine adobo is a popular Filipino dish and cooking process in Philippine cuisine that involves meat, seafood, or vegetables marinated in vinegar, soy sauce, garlic, bay leaves, and black peppercorns, which is browned in oil, and simmered in the marinade. </p>
                    </div>
                    <div class = "meal-instruct">
                        <h3>Ingridients:</h3>
                        <p><br>2 lbs pork belly
                            <br>2 tablespoons garlic minced or crushed
                            <br>5 dried bay leaves
                            <br>4 tablespoons vinegar
                            <br>1/2 cup soy sauce
                            <br>1 tablespoon peppercorn
                            <br>2 cups water
                            <br>Salt to taste
                        </p>
                        <h3>Instruction:</h3>
                        <p><br>1. Combine the pork belly, soy sauce, and garlic then marinade for at least 1 hour
                            <br>2. Heat the pot and put-in the marinated pork belly then cook for a few minutes
                            <br>3. Pour remaining marinade including garlic.
                            <br>4. Add water, whole pepper corn, and dried bay leaves then bring to a boil. Simmer for 40 minutes to 1 hour
                            <br>5. Put-in the vinegar and simmer for 12 to 15 minutes
                            <br>6. Add salt to taste
                            <br>7. Serve hot. Share and enjoy!
                            </p>
                
                    </div>
                    <div class = "meal-img">
                        <img src = "/img/Adobo.webp" alt = "">
                      </div>
                      <div class = "meal-link">
                        <a href="https://tinyurl.com/23pr9c5j" class="meal-link-btn" >Watch Video</a>
                    </div>
                </div>
            </div>  
            <div class = "third-meal-detail" id="third-meal-detail">
                <!-- recipe close btn -->
                <button type = "button" class = "btn recipe-close-btn" id = "recipe-close-btn" onclick="closeBtn()">
                    <i class ="fas fa-times"></i>
                </button>

                <!-- recipe details -->
                <div class="meal-content">
                    <h2 class="meal-name">Sizzling Porkchop</h2>
                    <div class="meal-about">
                        <h3 class="meal-title-about">About Meal</h3>
                        <p class="meal-descript-about">Sizzling Pork Chop tastes excellent and is simple to make. The sizzling effect adds to the pleasure of this dish. Aside from the pork chop, this dish requires mixed veggies, yellow rice, and gravy. I used fresh frozen mixed vegetables for the vegetables. 
                        </p>
                    </div>
                    <div class = "meal-instruct">
                        <h3>Ingridients:</h3>
                        <p><br>1 piece 8 oz pork loin chop
                            <br>1 cup beef broth
                            <br>1/4 teaspoon salt
                            <br>1/4 teaspoon ground black pepper
                            <br>1/4 teaspoon garlic powder
                            <br>3/4 cup mixed vegetables cooked
                            <br>3 tablespoons all-purpose flour
                            <br>4 tablespoons butter
                            <br>1 cup yellow rice
                        </p>
                        <h3>Instruction:</h3>
                        <p><br>1. Rub salt, ground black pepper, and garlic powder on the pork tenderloin chop. Let it stay for at least 30 minutes.
                            2. Make the gravy by melting 1 tablespoon butter in a saucepan. When the butter melts, gradually add the flour and whisk until the color turns light brown. Pour-in the beef broth and stir. Add salt and pepper according to taste. Continue cooking until the texture becomes thick. Set aside.
                            3. Heat a skillet of frying pan then put-in 2 tablespoons of butter and let melt.
                            4. Pan-fry the pork loin chop in medium heat until the color of each side turns light brown (approximately 7 to 8 minutes per side). Set aside.
                            5. Heat a sizzling plate or fajita plate then put-in 1 tablespoon butter.
                            6. Distribute the butter around the plate then arrange rice, mixed vegetables, and pork loin chop.
                            7. Pour gravy over the pork loin chop then turn-off heat.
                            8. Serve. Share and enjoy!
                            </p>
                
                    </div>
                    <div class = "meal-img">
                        <img src = "/img/Porkchop.webp" alt = "">
                      </div>
                      <div class = "meal-link">
                        <a href="https://tinyurl.com/yckbt76x" class="meal-link-btn" >Watch Video</a>
                    </div>
                </div>
            </div>  
            <div class = "four-meal-detail" id="four-meal-detail">
                <!-- recipe close btn -->
                <button type = "button" class = "btn recipe-close-btn" id = "recipe-close-btn" onclick="closeBtn()">
                    <i class ="fas fa-times"></i>
                </button>

                <!-- recipe details -->
                <div class="meal-content">
                    <h2 class="meal-name">Omelette</h2>
                    <div class="meal-about">
                        <h3 class="meal-title-about">About Meal</h3>
                        <p class="meal-descript-about">In cuisine, an omelette is a dish made from beaten eggs, fried with butter or oil in a frying pan. It is quite common for the omelette to be folded around fillings such as chives, vegetables, mushrooms, meat, cheese, onions or some combination of the above. 
                        </p>
                    </div>
                    <div class = "meal-instruct">
                        <h3>Ingridients:</h3>
                        <p><br>3 eggs, beaten
                            <br>1 tsp sunflower oil
                            <br>1 tsp butter
                        </p>
                        <h3>Instruction:</h3>
                        <p><br>1. Beat the eggs: Use two or three eggs per omelette, depending on how hungry you are. Beat the eggs lightly with a fork.
                            2. Melt the butter: Use an 8-inch nonstick skillet for a 2-egg omelette, a 9-inch skillet for 3 eggs. Melt the butter over medium-low heat, and keep the temperature low and slow when cooking the eggs so the bottom doesn’t get too brown or overcooked.
                            3. Add the eggs: Let the eggs sit for a minute, then use a heatproof silicone spatula to gently lift the cooked eggs from the edges of the pan. Tilt the pan to allow the uncooked eggs to flow to the edge of the pan.
                            4. Fill the omelette: Add the filling—but don’t overstuff the omelette—when the eggs begin to set. Cook for a few more seconds
                            5. Fold and serve: Fold the omelette in half. Slide it onto a plate with the help of a silicone spatula.
                        </p>
                
                    </div>
                    <div class = "meal-img">
                        <img src = "/img/Omelette.webp" alt = "">
                      </div>
                      <div class = "meal-link">
                        <a href="https://tinyurl.com/bde4yd4u" class="meal-link-btn" >Watch Video</a>
                    </div>
                </div>
            </div>  
            <div class = "five-meal-detail" id="five-meal-detail">
                <!-- recipe close btn -->
                <button type = "button" class = "btn recipe-close-btn" id = "recipe-close-btn" onclick="closeBtn()">
                    <i class ="fas fa-times"></i>
                </button>

                <!-- recipe details -->
                <div class="meal-content">
                    <h2 class="meal-name">Sinigang</h2>
                    <div class="meal-about">
                        <h3 class="meal-title-about">About Meal</h3>
                        <p class="meal-descript-about">Sinigang is a Filipino soup or stew characterized by its sour and savory taste. It is most often associated with tamarind, although it can use other sour fruits and leaves as the souring agent. It is one of the more popular dishes in Filipino cuisine.
                        </p>
                    </div>
                    <div class = "meal-instruct">
                        <h3>Ingridients:</h3>
                        <p><br>2 lbs pork belly or buto-buto
                            <br>1 bunch spinach or kang-kong
                            <br>3 tablespoons fish sauce
                            <br>12 pieces string beans sitaw, cut in 2 inch length
                            <br>2 pieces tomato quartered
                            <br>3 pieces chili or banana pepper
                            <br>1 tablespoons cooking oil
                            <br>2 quarts water
                            <br>1 piece onion sliced
                            <br>2 pieces taro gabi, quartered
                            <br>1 pack sinigang mix good for 2 liters water
                        </p>
                        <h3>Instruction:</h3>
                        <p><br>1. Heat the pot and put-in the cooking oil
                            <br>2. Sauté the onion until its layers separate from each other
                            <br>3.Add the pork belly and cook until outer part turns light brown
                            <br>4. Put-in the fish sauce and mix with the ingredients
                            <br>5. Pour the water and bring to a boil
                            <br>6. Add the taro and tomatoes then simmer for 40 minutes or until pork is tender
                            <br>7. Put-in the sinigang mix and chili
                            <br>8. Add the string beans (and other vegetables if there are any) and simmer for 5 to 8 minutes
                            <br>9. Put-in the spinach, turn off the heat, and cover the pot. Let the spinach cook using the remaining heat in the pot.
                            <br>10. Serve hot. Share and enjoy!
                        </p>
                
                    </div>
                    <div class = "meal-img">
                        <img src = "/img/Sinigang.webp" alt = "">
                      </div>
                      <div class = "meal-link">
                        <a href="https://tinyurl.com/ywbcrx4f" class="meal-link-btn" >Watch Video</a>
                    </div>
                </div>
            </div> 
            <div class = "six-meal-detail" id="six-meal-detail">
                <!-- recipe close btn -->
                <button type = "button" class = "btn recipe-close-btn" id = "recipe-close-btn" onclick="closeBtn()">
                    <i class ="fas fa-times"></i>
                </button>

                <!-- recipe details -->
                <div class="meal-content">
                    <h2 class="meal-name">Lumpia</h2>
                    <div class="meal-about">
                        <h3 class="meal-title-about">About Meal</h3>
                        <p class="meal-descript-about">Different spring rolls known as "lumpia" are popular in the Philippines and Indonesia. Lumpia are formed of a thin pastry skin, also known as a "lumpia wrapper," that encloses either savory or sweet fillings. It may be either fresh or deep-fried and is frequently served as an appetizer or snack.
                        </p>
                    </div>
                    <div class = "meal-instruct">
                        <h3>Ingridients:</h3>
                        <p><br>50 pieces lumpia wrapper (Up to you how many pieces)
                            <br>3 cups cooking oil
                            <br>1 1/2 lbs ground pork
                            <br>2 pieces onion minced
                            <br>2 pieces carrots minced
                            <br>1 1/2 teaspoons garlic powder
                            <br>1/2 teaspoon ground black pepper
                            <br>1/2 cup parsley chopped
                            <br>1 1/2 teaspoons salt
                            <br>1 tablespoon sesame oil
                            <br>2 eggs
                        </p>
                        <h3>Instruction:</h3>
                        <p><br>1. Combine all filling ingredients in a bowl. Mix well.
                            <br>2. Scoop around 1 to 1 1/2 tablespoons of filling and place over a piece of lumpia wrapper. Spread the filling and then fold both sides of the wrapper. Fold the bottom. Brush beaten egg mixture on the top end of the wrapper. Roll-up until completely wrapped. Perform the same step until all mixture are consumed.
                            <br>3. Heat oil in a cooking pot. Deep fry lumpia in medium heat until it floats.
                            <br>4. Remove from the pot. Let excess oil drip. Serve. Share and enjoy
                        </p>
                
                    </div>
                    <div class = "meal-img">
                        <img src = "/img/Lumpia.webp" alt = "">
                      </div>
                      <div class = "meal-link">
                        <a href="https://tinyurl.com/2yp63vne" class="meal-link-btn" >Watch Video</a>
                    </div>
                </div>
            </div> 
            <div class = "seven-meal-detail" id="seven-meal-detail">
                <!-- recipe close btn -->
                <button type = "button" class = "btn recipe-close-btn" id = "recipe-close-btn" onclick="closeBtn()">
                    <i class ="fas fa-times"></i>
                </button>

                <!-- recipe details -->
                <div class="meal-content">
                    <h2 class="meal-name">Longaniza</h2>
                    <div class="meal-about">
                        <h3 class="meal-title-about">About Meal</h3>
                        <p class="meal-descript-about">A chorizo-like Spanish sausage known as longaniza is also closely related to the Portuguese linguiça. Its distinctive qualities are viewed differently in each locale.
                        </p>
                    </div>
                    <div class = "meal-instruct">
                        <h3>Ingridients:</h3>
                        <p><br>1 ¾ lbs. ground pork
                            <br>9 tablespoons dark brown sugar
                            <br>1 tablespoon smoked paprika
                            <br>3 tablespoons vegetable oil
                            <br>1 ¼ tablespoons coarse salt
                            <br>1 teaspoon ground black pepper
                            <br>2 head garlic
                        </p>
                        <h3>Instruction:</h3>
                        <p><br>1. Peel the skin off the garlic cloves. Crush thoroughly using mortar and pestle. Mince the crushed garlic. Set aside.
                            <br>2. In a large mixing bowl, combine ground pork along with all of the ingredients. Mix well.
                            <br>3. Cover the bowl. Refrigerate for 2 hours.
                            <br>4. Shape the longganisa by laying a sheet of wax paper on a flat surface. Scoop around 3 tablespoons of mixture and put over the wax paper. Fold the wax paper from top to down until the mixture covered. Hold the edge of the paper with your fingers and then slide the card towards the mixture. Push a bit more until a sausage shape is formed. Do this step until the entire mixture is consumed.
                            <br>5. Refrigerate overnight.
                            <br>6. Cook and serve for breakfast. Share and enjoy!
                        </p>
                
                    </div>
                    <div class = "meal-img">
                        <img src = "/img/Longanisa.webp" alt = "">
                      </div>
                      <div class = "meal-link">
                        <a href="https://tinyurl.com/uxpfxkb4" class="meal-link-btn" >Watch Video</a>
                    </div>
                </div>
            </div> 
            <div class = "eight-meal-detail" id="eight-meal-detail">
                <!-- recipe close btn -->
                <button type = "button" class = "btn recipe-close-btn" id = "recipe-close-btn" onclick="closeBtn()">
                    <i class ="fas fa-times"></i>
                </button>

                <!-- recipe details -->
                <div class="meal-content">
                    <h2 class="meal-name">Chicken Burger</h2>
                    <div class="meal-about">
                        <h3 class="meal-title-about">About Meal</h3>
                        <p class="meal-descript-about">Prepare the buns! For the ideal stuffing for juicy burgers, coat or marinate chicken thighs and breast. Dig it after adding toppings like slaw and sauce along with your selected side dishes.
                        </p>
                    </div>
                    <div class = "meal-instruct">
                        <h3>Ingridients:</h3>
                        <p><br>3 boneless chicken breasts (around half a kg)
                            <br>1 tspn of pepper
                            <br>1 tspn of salt
                            <br>2 tblspns of worcestershire sauce
                            <br>1 tspn of Mustard powder or all spice powder
                            <br>2 tblspns of Flour
                            <br>1 Egg
                            <br>1 1/2 cups of Breadcrumbs
                            <br>Soft seeded burger buns
                            <br>Mayonnaise or KFC Zinger Sauce
                        </p>
                        <h3>Instruction:</h3>
                        <p><br>1. If your chicken breasts are too big, slice them before cooking. Then, marinade the chicken breasts in the Worcestershire sauce, pepper, salt, mustard, or all-spice powder. Leave the chicken for at least four hours or over night.
                            <br>2. An egg and two tablespoons of water should be beaten together to make the batter, which should then be set aside.
                            <br>3. Chicken breasts that have been marinated should be heavily dusted in flour. They should be well coated after being dipped in both the egg and the breadcrumbs.
                            <br>4. The coated chicken breasts should be deep-fried in heated oil over a medium-high heat until they are crisp and golden brown.
                            <br>5. The finished burger should be stacked with the lettuce on top, followed by the chicken, and then the mayonnaise or KFC zinger sauce. The buns should be cut in half and lightly toasted. If you'd like a cheesy kick, add some sliced American cheese.
                        </p>
                
                    </div>
                    <div class = "meal-img">
                        <img src = "/img/Burger.webp" alt = "">
                      </div>
                      <div class = "meal-link">
                        <a href="https://tinyurl.com/td757uct" class="meal-link-btn" >Watch Video</a>
                    </div>
                </div>
            </div> 
            <div class = "nine-meal-detail" id="nine-meal-detail">
                <!-- recipe close btn -->
                <button type = "button" class = "btn recipe-close-btn" id = "recipe-close-btn" onclick="closeBtn()">
                    <i class ="fas fa-times"></i>
                </button>

                <!-- recipe details -->
                <div class="meal-content">
                    <h2 class="meal-name">Menudo</h2>
                    <div class="meal-about">
                        <h3 class="meal-title-about">About Meal</h3>
                        <p class="meal-descript-about">Popular pork dish in the Philippines is menudo. It is frequently served during events like fiestas. There are many ways to make menudo; some people add hotdog pieces, raisins, pickle bits, and even other seasonings to boost the umami flavors of this stew made of pork and tomatoes. There may be a unique variant in every house, town, or province!
                        </p>
                    </div>
                    <div class = "meal-instruct">
                        <h3>Ingridients:</h3>
                        <p><br>1/4 cup cooking oil
                            <br>2 pcs potatoes, medium sized, cut in cubes
                            <br>1 pc carrot, medium sized, cut in cubes
                            <br>6 cloves garlic, minced
                            <br>1 pc onion, minced
                            <br>250 grams pork kasim, cut into small cubes
                            <br>250 grams pork liempo, cut into small cubes
                            <br>250 grams pork liver, cut in small cubes
                            <br>1 (250 g) pack tomato sauce
                            <br>2 pcs Knorr Pork Broth Cube
                            <br>1 1/2 cups water
                            <br>1 tsp sugar
                            <br>ground black pepper to taste
                            <br>2 tbsp raisins
                            <br>1 cup cubed red and green bell pepper
                            <br>Optional: 2 bunches Bok-choi, sliced
                        </p>
                        <h3>Instruction:</h3>
                        <p><br>Let’s begin by sautéing the onion and garlic in hot oil until lightly browned.
                           <br>Add the pork kasim and liempo next and fry until slightly brown in color before adding the liver. Cook for 2 minutes.
                           <br>Drop in the Knorr Pork Broth Cubes and give this a nice stir to dissolve completely before adding the tomato sauce, water, sugar and black pepper. Mix this well.
                           <br>Now, gently place the potatoes and carrots in the pan. Continue to cook over low heat until meat and potatoes are cooked through and the sauce has thickened.
                           <br>Finally, add raisins and bell peppers and just allow to cook for 2 minutes longer. If you're adding Bok-Choi, add at this point. Here’s a dish that will bring the entire family together. Pork Menudo, just like home, is always close to your heart.
                        </p>
                
                    </div>
                    <div class = "meal-img">
                        <img src = "/img/Menudo.webp" alt = "">
                      </div>
                      <div class = "meal-link">
                        <a href="https://tinyurl.com/5f558f59" class="meal-link-btn" >Watch Video</a>
                    </div>
                </div>
            </div> 
            <div class = "ten-meal-detail" id="ten-meal-detail">
                <!-- recipe close btn -->
                <button type = "button" class = "btn recipe-close-btn" id = "recipe-close-btn" onclick="closeBtn()">
                    <i class ="fas fa-times"></i>
                </button>

                <!-- recipe details -->
                <div class="meal-content">
                    <h2 class="meal-name">Tapsilog</h2>
                    <div class="meal-about">
                        <h3 class="meal-title-about">About Meal</h3>
                        <p class="meal-descript-about">If there's one thing that could make a non-morning person scramble out of their bed before noon (your delivery rider calling you doesn't count, by the way), it's the intoxicating smell of sinangag (fried garlic rice), fried egg, and of course, tapa wafting through the air from the kitchen and into your room.
                        </p>
                    </div>
                    <div class = "meal-instruct">
                        <h3>Ingridients:</h3>
                        <p><br>1 lb. beef sirloin sliced thinly
                            <br>3 pieces eggs
                            <br>6 tablespoons cooking oil
                            <br><b>Tapa marinade</b>
                            <br>3 tablespoons Knorr Liquid Seasoning
                            <br>6 cloves crushed garlic
                            <br>¾ cups pineapple juice
                            <br>2 tablespoons brown sugar
                            <br>¼ teaspoon ground white pepper
                            <br><b>Sinangag</b>
                            <br>5 cups leftover rice
                            <br>1 teaspoon salt
                            <br>5 cloves garlic crushed
                        </p>
                        <h3>Instruction:</h3>
                        <p><br>1. Prepare the tapa by placing the beef in a large bowl. Combine with all the tapa marinade ingredients. Mix well and cover the bowl. Place inside the fridge and marinate overnight.
                            <br>2. Cook the garlic fried rice (sinangag na kanin) by heating 3 tablespoons cooking oil in a pan. Add crushed garlic. Cook until garlic turns light brown. Add the leftover rice. Stir-fry for 3 minutes.
                            <br>3. Season with salt. Continue to stir-fry for 3 to 5 minutes. Set aside.
                            <br>4. Start to cook the tapa. Heat a pan and pour the marinated beef into it, including the marinade. Add ¾ cups water. Let the mixture boil. Cover the pan and continue to cook until the liquid reduces to half. Add 3 tablespoons cooking oil into the mixture. Continue to cook until the liquid completely evaporates. Fry the beef tapa in remaining oil until medium brown. Set aside.
                            <br>5. Fry the egg by pouring 1 tablespoon oil on a pan. Crack a piece of egg and sprinkle enough salt on top. Cook for 30 seconds. Pour 2 tablespoons water on the side of the pan. Cover and let the water boil. Continue to cook until the egg yolks gets completely cooked by the steam.
                            <br>6. Arrange the beef tapa, sinangag, and fried egg on a large plate to form Tapsilog. Serve with vinegar as dipping sauce for tapa.
                        </p>
                
                    </div>
                    <div class = "meal-img">
                        <img src = "/img/Tapsilog.webp" alt = "">
                      </div>
                      <div class = "meal-link">
                        <a href="https://tinyurl.com/5xh9wjtw" class="meal-link-btn" >Watch Video</a>
                    </div>
                </div>
            </div> 
            <div class = "eleven-meal-detail" id="four-meal-detail">
                <!-- recipe close btn -->
                <button type = "button" class = "btn recipe-close-btn" id = "recipe-close-btn" onclick="closeBtn()">
                    <i class ="fas fa-times"></i>
                </button>

                <!-- recipe details -->
                <div class="meal-content">
                    <h2 class="meal-name">Potato Egg Skillet</h2>
                    <div class="meal-about">
                        <h3 class="meal-title-about">About Meal</h3>
                        <p class="meal-descript-about">In cuisine, an omelette is a dish made from beaten eggs, fried with butter or oil in a frying pan. It is quite common for the omelette to be folded around fillings such as chives, vegetables, mushrooms, meat, cheese, onions or some combination of the above. 
                        </p>
                    </div>
                    <div class = "meal-instruct">
                        <h3>Ingridients:</h3>
                        <p><br>8 strips raw bacon
                            <br>1 lbs Yukon gold potatoes, diced into bite sized pieces
                            <br>1 small yellow onion, diced
                            <br>½ red bell pepper, diced
                            <br>½ green bell pepper, diced
                            <br>3 cloves garlic, minced
                            <br>1 teaspoon cumin
                            <br>¼ teaspoon chili powder
                            <br>¼ teaspoon paprika
                            <br>½ teaspoon black pepper
                            <br>½ teaspoon coarse salt
                            <br>4 eggs
                            <br>¼ cup mozzarella cheese, grated
                            <br>¼ cup cheddar cheese, grated
                            <br>Extra virgin olive oil for extra drizzling
                            <br>Fresh cilantro roughly chopped, thinly sliced chives for garnish
                        </p>
                        <h3>Instruction:</h3>
                        <p><br>1. Preheat oven to 400˚F. Place strips of bacon in a large (at least 10 inch), oven safe skillet. Cook over medium low heat on both sides until cooked through but not yet crispy, about 10 minutes. Remove from heat to a paper towel lined plate and set aside, leaving the bacon grease in the pan. When the bacon is cool enough to handle, roughly dice.
                            <br>Increase the heat to medium high, add the potatoes, bell pepper, and onion and cook for 7- 8 minutes, stirring frequently, until starting to soften and can be pierced with a fork
                            <br>Add garlic, cumin, chili powder, paprika, black pepper, and salt. Cook for 1-2 minutes, until garlic is fragrant.
                            <br>Using a spoon, create 4 to 6 holes (depending on how many eggs you want) in the hash mixture for the eggs. Distribute the cheeses evenly into each hole, and then crack one egg into each hole.
                            <br>Place in the preheat oven and cook for 8-10 minutes, until egg white is set but the yolk is still runny.
                            <br>Remove from heat. Sprinkle with cooked bacon. Garnish with fresh ground black pepper, cilantro and chives.
                        </p>
                
                    </div>
                    <div class = "meal-img">
                        <img src = "/img/Potato-Breakfast-Skillet.webp " alt = "">
                      </div>
                      <div class = "meal-link">
                        <a href="https://tinyurl.com/yz55k3bv" class="meal-link-btn" >Watch Video</a>
                    </div>
                </div>
            </div> 
            
            
        </div>
            <!--Ending of Recipe Details-->

            <!--Footer-->
    <div class="footer">
        <div class="social-btn">
            <a href="https://www.facebook.com/Cmedsss" target="_blank" ><i class="	fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/tiaanmeds/" target="_blank" ><i class="	fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/tianmeds/" target="_blank"><i class="	fab fa-linkedin"></i></a>
            <a href="https://github.com/TianMeds" target="_blank" "><i class="	fab fa-github"></i></a>
        </div>
            <div class="quick-bar">
                <a href="home.html">Home</a>
                <a href="/insert_recipe.html">Modify</a>
                <a href="about.html">About</a>
                <a href="contact.html">Contact</a>
            </div>
        <p>Copyright &copy; 2022 Christian Medallada. All right reserved</p>  
    </div>

    <!--Ending of Footer-->

<!--Script for Javascript-->
<script src="../js/index.js"></script>
</body>
</html>
