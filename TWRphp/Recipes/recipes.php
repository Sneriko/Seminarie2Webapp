<?php
include '../dbh.inc.php';
session_start();
$_SESSION['recipe'] = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="RecipeStyle.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty Web Recipes</title>


</head>

<body>

<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Calendar/calendar.php">Calendar</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Recipes
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="recipes.php?id=0">Swedish meatballs</a>
                        <a class="dropdown-item" href="recipes.php?id=1">Swedish pancakes</a>
                    </div>
                </li>
            </ul>
        </div>
        <form class="form-inline my-2 my-lg-0" action="login.inc.php" method="post">
            <input class="form-control mr-sm-2" type="text" name="username" placeholder="Username">
            <input class="form-control mr-sm-2" type="password" name="pwd" placeholder="Password">
            <button class="btn  my-2 my-sm-0" type="submit" name="login-submit">Login</button>
            <!--<button class="btn  my-2 my-sm-0" type="submit" name="signup-submit">Sign up</button>-->
        </form>
        <button class="btn  my-2 my-sm-0"><a href="signup.php">Sign up</a></button>
        <form class="form-inline my-2 my-lg-0" action="includes/logout.inc.php" method="post">
            <button class="btn  my-2 my-sm-0" type="submit" name="logout-submit">Logout</button>
        </form>
    </nav>
</div>

<?php

$var = $_GET["id"];
switch ($var) {
    case 0:
        $recipe = simplexml_load_file("meatballs.xml") or die("Error: Cannot create object");
        break;
    case 1;
        $recipe = simplexml_load_file("pancakes.xml") or die("Error: Cannot create object");
        break;
}

echo    "<h1>".$recipe->title."</h1>
        
        <img src='".$recipe->imagepath."'>
        
        <div id='preps'>Preparations: ".$recipe->preptime.", Cooktime: ".$recipe->cooktime.", Total time: ".$recipe->totaltime."</div>
        <h2>Ingredients</h2>
        <ul>";
foreach ($recipe->ingredient->li as $value){
    echo "<li>".$value."</li>";
}
echo    "</ul>
        <h2>Method</h2>
        <div id='method'>
        <ol>";
foreach ($recipe->recipetext->li as $value){
    echo "<li>".$value."</li>";
}
echo "</ol>
    </div>";

if($_SESSION['active'] == '1') {

    echo "<form action='store-entry.php' method='post'>
        <div>
            <label for='entry'>" . $_SESSION['username'] . "</label>
        </div>
        <div>
            <textarea id= 'entry' rows = 5 cols = 50 name='comment' placeholder='Write your comment here.'></textarea>    
        </div>
        <div>
            <input type='submit' value='Send'/>
        </div>
    </form>";
}

$sql = "SELECT * FROM comments";
$result = mysqli_query($conn, $sql);
echo "<h2>Comments</h2>";

$i = 0;
while($row = mysqli_fetch_assoc($result)){

    $idcomment = $row['id'];
    if ($_SESSION['recipe'] == $row['recipe']) {
        $comment = nl2br($row['comment']);
        echo "<div style='color: blue'>".$row['username']."</div>";
        echo "<div style='border: 1px solid black; width: 50%; height: auto'>" . $comment . "</div>";
        if ($_SESSION['username'] == $row['username']) {
            echo "<a  style='color: beige' href='delete-entry.php?id=$idcomment'><button style='background-color: beige'>Delete</button></a>";
        }


    }
}
echo $row['comment'];

?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>