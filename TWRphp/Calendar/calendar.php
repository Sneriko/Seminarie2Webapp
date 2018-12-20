<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Tasty Recipes Webpage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="mystyle.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

</head>

<body>

<div class="container-fluid header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Calendar/calendar.html">Calendar</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Recipes
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Swedish meatballs</a>
                        <a class="dropdown-item" href="#">Swedish pancakes</a>
                    </div>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
            </ul>
        </div>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn  my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col weekday">Mun</div>
        <div class="col weekday">Tue</div>
        <div class="col weekday">Wed</div>
        <div class="col weekday">Thu</div>
        <div class="col weekday">Fri</div>
        <div class="col weekday">Sat</div>
        <div class="col weekday">Sun</div>
    </div>
    <div class="row">
        <div class="col previous">28</div>
        <div class="col previous">29</div>
        <div class="col previous">30</div>
        <div class="col previous">31</div>
        <div class="col">1<br><a><img src="../Images/meatballs.jpg"></a></div>
        <div class="col">2</div>
        <div class="col">3</div>
    </div>
    <div class="row">
        <div class="col">4</div>
        <div class="col">5</div>
        <div class="col">6</div>
        <div class="col">7</div>
        <div class="col">8</div>
        <div class="col">9</div>
        <div class="col">10</div>
    </div>
    <div class="row">
        <div class="col">11</div>
        <div class="col">12</div>
        <div class="col">13</div>
        <div class="col">14</div>
        <div class="col">15</div>
        <div class="col">16</div>
        <div class="col">17</div>
    </div>
    <div class="row">
        <div class="col">18</div>
        <div class="col">19</div>
        <div class="col">20</div>
        <div class="col">21</div>
        <div class="col">22</div>
        <div class="col">23</div>
        <div class="col">24</div>
    </div>
    <div class="row">
        <div class="col">25</div>
        <div class="col">26</div>
        <div class="col">27</div>
        <div class="col">28</div>
        <div class="col">29</div>
        <div class="col">30</div>
        <div class="col previous">1</div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>