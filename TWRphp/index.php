<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="TWRstyle.css">
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
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Calendar/calendar.php">Calendar</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Recipes
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="Recipes/recipes.php?id=0">Swedish meatballs</a>
                        <a class="dropdown-item" href="Recipes/recipes.php?id=1">Swedish pancakes</a>
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
        <button class="btn  my-2 my-sm-0" style="color: aliceblue"><a href="signup.php">Sign up</a></button>
        <form class="form-inline my-2 my-lg-0" action="includes/logout.inc.php" method="post">
            <button class="btn  my-2 my-sm-0" type="submit" name="logout-submit">Logout</button>
        </form>
    </nav>
</div>

<script>
    function openForm() {
        document.getElementById("signup-form").style.display = "block";
    }

    function closeForm() {
        document.getElementById("signup-form").style.display = "none";
    }
</script>

<div class="header">
    <h1>Tasty Web Recipes</h1>
</div>

<div class="about">
    <p>Welcome to my world of food. When I'm saying "world" I really mean cold, unwelcoming Scandinaiva,
        or Sweden, to be precise, where winters are harsh and food is... well, pretty damn bland they
        usually say, but I would prefere a description more in line with "subtle", or "discreet", or
        "nuanced". The food doesn't explode in your mouth, or make your eyes pour, or sets off any
        kind of intense sensation really, but it develops slowly and humbly. I wont say it's the most special
        kitchen in the world, or the most innovative, or creative, or any of the sort, but if you give it
        a chance it might just grow on you.
    </p>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>