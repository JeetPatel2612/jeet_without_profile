<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../wp_project/flavour-fusion-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../wp_project/css/hca_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Flavour Fusion</title>
    <script></script>
</head>
<body>

    <!-- Navigation Bar -->
    <div class="header">
        <nav class="nav-bar">
        <div style="text-align: left;display:flex ;">
                <img src="../wp_project/flavour-fusion-logo.png" class="brand-name">
                <div style="margin-top: 15px; margin-left: 10px; font-size: 3rem;  color: var(--bg);
            margin-bottom: 10px;
            font-family: 'Lobster',sans-serif;">Flavour Fusion</div>
            </div>
            <div class="menu-bar">
                <ul>
                <li><a href="../wp_project/html/home.html">Home</a></li>
                    <li><a href="../wp_project/html/about.html">About</a></li>
                    <li><a href="../wp_project/html/contact.html">Contact</a></li>
                    <li><a href="../wp_project/html/login.html">Logout</a></li>
                </ul>
            </div>
        </nav>

        <!-- Search Bar -->
        <br>
        <div class="title" style="margin-bottom: -20px;">Find a Recipe</div>
        <div class="search-wrapper">
            <div class="fa fa-search"></div>
            <input type="text" name=""  id="search" placeholder="What do you want to eat?" onkeyup="searchRecipe(this.value)">
            <div class="fa fa-times" onclick="clearInput()" ></div>
        </div>
    </div>

    <!-- Search Results -->
    <div class="result" style="height: fit-content;">
        <br>
    </div>

    <!-- Main Content -->
    <div class="card-grid" >
        <div class="food-list" id="food-list">
        <?php
        // Database connection code here
        $conn = mysqli_connect("localhost", "root", "", "wp");
        $searchTerm = isset($_GET['search']) ? $_GET['search'] : '';
        $sql = " SELECT * FROM recipes WHERE dishName LIKE '%$searchTerm%' ORDER BY recipe_id DESC ";
        $result = mysqli_query($conn, $sql);
            while($rows=$result->fetch_assoc()){
                print('<div class="card card-shadow">');
                    print('<div class="card-header card-image">');
                    print("<img src='../img/" . $rows['file1'] . "' alt='Recipe Image'>");
                    print('</div>');
                    print('<div class="card-body" >');
                    print('<h2>' . $rows['dishName'] . '</h2>');
                    print('</div>');
                    print('<div class="card-footer">');
                    print('<button class="btn" onclick="showRecipeDetails(' . $rows['recipe_id'] . ')">Get Recipe</button>');
                    print('</div>');
                print("</div>");
            }
	
	// Close database connection
	mysqli_close($conn);
	?>
            <div class="card card-shadow">
                <div class="card-header card-image">
                    <img style="max-height: 200px; object-fit:cover;" src="../img/red_dish.jpg">
                </div>
                <div class="card-body">
                    <h3> About Recipe </h3>
                </div>
                <div class="card-footer">
                    <button class="btn" onclick="get5thRecipe()">Add</button>
                    <button class="btn" onclick="get5thRecipe()">Update</button>
                    <button class="btn" onclick="get5thRecipe()">Delete</button>
                </div>
            </div>

        </div>

        <!--Ending of Main Content-->

        <!--Recipe Details-->

            
    <div class="meal-detail" id="meal-detail" style="display: none;">
        <!-- recipe close btn -->
        <button type="button" class="btn recipe-close-btn" id="recipe-close-btn" onclick="closeRecipeDetails()">
            <i class="fas fa-times"></i>
        </button>

        <!-- recipe details -->
        <div class="meal-content">
            <?php
            if (isset($_GET['recipe_id'])) {
                $recipeId = $_GET['recipe_id'];

                // Database connection code here
                $conn = mysqli_connect("localhost", "root", "", "wp");

                // Fetch the recipe details from the database
                $sql = "SELECT * FROM recipes WHERE recipe_id = $recipeId";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);

                if ($row) {
                    // Display the recipe details
                    print('<h2 class="meal-name">' . $row['dishName'] . '</h2>');
                    print('<div class="meal-about">');
                    print('<h3 class="meal-title-about">About Meal</h3>');
                    print('<p class="meal-descript-about">' . $row['description'] . '</p>');
                    print('</div>');
                    print('<div class="meal-instruct">');
                    print('<h3>Ingredients:</h3>');
                    print('<p>' . $row['ingredients'] . '</p>');
                    print('<h3>Instructions:</h3>');
                    print('<p>' . $row['instructions'] . '</p>');
                    print('</div>');
                    print('<div class="meal-img">');
                    print("<img src='../img/" . $row['file1'] . "' alt='Recipe Image'>");
                    print('</div>');
                } else {
                    print('Recipe not found.');
                }

                // Close database connection
                mysqli_close($conn);
            }
            ?>
        </div>
    </div>
    <!--Ending of Recipe Details-->

    <!--Footer-->
    <div class="footer">
        <div class="social-btn">
            <a href="https://www.facebook.com/Cmedsss" target="_blank" ><i class=" fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/tiaanmeds/" target="_blank" ><i class=" fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/tianmeds/" target="_blank"><i class=" fab fa-linkedin"></i></a>
            <a href="https://github.com/TianMeds" target="_blank" "><i class=" fab fa-github"></i></a>
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
    <script>
        function showRecipeDetails(recipeId) {
            document.getElementById("meal-detail").style.display = "block";
            window.location.href = "home.php?recipe_id=" + recipeId;
        }

        function closeRecipeDetails() {
            document.getElementById("meal-detail").style.display = "none";
            window.location.href = "home.php";
        }

        function searchRecipe() {
            var input = document.getElementById("search").value.toLowerCase();
            var cards = document.getElementsByClassName("card");

            for (var i = 0; i < cards.length; i++) {
                var dishName = cards[i].getElementsByTagName("h2")[0].textContent.toLowerCase();
                if (dishName.includes(input)) {
                    cards[i].style.display = "block";
                } else {
                    cards[i].style.display = "none";
                }
            }
        }
    </script>
</body>

</html>
