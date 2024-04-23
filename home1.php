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

// Check if search term is provided
$searchTerm = isset($_GET['search']) ? $_GET['search'] : '';

// Query to fetch recipes based on search term
$sql = "SELECT * FROM recipes WHERE dishName LIKE '%$searchTerm%' ORDER BY recipe_id DESC";
$result = mysqli_query($conn, $sql);

// Loop through the results and display each recipe
while ($rows = $result->fetch_assoc()) {
    print('<div class="card card-shadow">');
    print('<div class="card-header card-image">');
    print("<img src='../img/" . $rows['file1'] . "' alt='Recipe Image'>");
    print('</div>');
    print('<div class="card-body">');
    print('<h3>' . $rows['dishName'] . '</h3>');
    print('</div>');
    print('<div class="card-footer">');
    // Pass recipe_id to the JavaScript function getRecipe01()
    print('<button class="btn" onclick="getRecipe01(' . $rows['recipe_id'] . ')">Get Recipe</button>');
    print('</div>');
    print("</div>");
}

// Close database connection
mysqli_close($conn);
?>

        </div> 

    </div>

    <!-- Recipe Details Container -->
    <div class="recipe-details" id="recipe-details">
        <!-- Recipe Details -->
    </div>

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
<script src="../js/in
