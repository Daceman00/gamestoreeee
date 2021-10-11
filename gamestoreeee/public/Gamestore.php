<?php 

include("dp.php");

$upit = "SELECT * FROM korisnik";

$rezultat = mysqli_query($konekcija, $upit);
?> 
 



<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAME STORE</title>
    <link rel="shortcut icon" href='slike/logo.jpg'>
    <link rel="stylesheet" href="css/gamecss.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=sqap" 
    rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <a href="Gamestore.php"></a>
    <a href="games.php"></a>
    <a href="login.php"></a>
    <style>
        
        .nav-link{
            display: inline-block;
            color: white;
            text-decoration: none;
        }
        .nav-link::after {
            content: '';
            display: block;
            width: 0;
            height: 1.5px;
            background: white;
            transition: width .3s;
        }

        .nav-link:hover::after {
            width: 100%;
            transition: width .3s;
        }
        .navbar-toggler-icon{
            color:white;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="Gamestore.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="games.php">GAMES</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link text-light" aria-current="page" href="login.php">LOGIN</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="header">
        <div class="container">
            <br>
            <div class="row">
                <div class="col-6">
                    <h1>Welcome to the <br>GAME STORE</h1>
                    
                    <br>
                    <h5>Vision of GameStore<a href="https://www.sendspace.com/file/102aa0">Here.</a></h5>
                </div>
                
            </div>
        </div>
    </div>

    <br><br><br>

    <!--- TEHNOLOGIJE --->

    <div class="small-container">
        <h2 class="title">TECHNOLOGY</h2>
        <div class="row">
            <div class="col-4">
                <img src="slike/frontend.png">
                <h4>FRONTEND TECHNOLOGY</h4>
                <p> HTML,CSS and JavaScript ,Bootstrap and VueJS</p>
            </div>
            <div class="col-4">
                <img src="slike/backend.jpg">
                <h4>BACKEND TECHNOLOGY</h4>
                <p> JavaScript and framework Laravel, MySQL.</p>
            </div>
        </div>
    </div>
    <!---O NAMA --->
    <div class="onama">
        <h2 class="title">ABOUT</h2>
        <div class="small-container">
            <div class="row">
                <div class="col-4">
                   
                    <h3>Dario Mandić</h3>
                    <p>Student 3. godine Informatika, 21 godina</p>
                    <p> 2014-2018.- Gimnazija fra Dominika Mandića - Široki Brijeg</p>
                    <p>2018.- FPMOZ</p>
                    <br>
                   
                </div>
                <div class="col-4">
                   
                    <h3>Toni Topić</h3>
                    <p>Student 3. godine Informatika, 22 godina</p>
                    <p> 2014-2018.- Gimnazija fra Dominika Mandića - Široki Brijeg </p>
                    <p>2018.- FPMOZ</p>
                    <br><br><br><br>
                   
                </div>
            </div>
        </div>
    </div>

<!--- ikone --->

</body>
</html>