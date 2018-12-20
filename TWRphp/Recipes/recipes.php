<?php
include '../dbh.inc.php';
session_start();
$_SESSION['recipe'] = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty Web Recipes</title>


</head>

<body>
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
            echo "<a href='delete-entry.php?id=$idcomment'><button>Delete</button></a>";
        }


    }
}
echo $row['comment'];

?>
    </body>
    </html>