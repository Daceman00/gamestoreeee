<?php
session_start();
include("dp.php"); 
 
include("model/user.class.php"); 
if (!User::jePrijavljen()) header("Location: login.php");

$prijavljeni_korisnik = User::$prijavljeniKorisnik;
if($prijavljeni_korisnik["typeOfUser"] !='korisnik'){
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAME STORE</title>
    <link rel="stylesheet" href="styleee.css">
    <link rel="shortcut icon" href='slike/logogame.png'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=sqap" 
    rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <a href="Gamestore.php"></a>
    <a href="games.php"></a>
    <a href="login.php"></a>
    
    <style>
        body{
            background-color:lavender;
        }
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
            </div>
                <div class="container">
                <p class="text-light" style="right:20px;">
                <b><?php echo ($prijavljeni_korisnik["firstName"]. " ".$prijavljeni_korisnik["surName"]);?></b>
                <p><a href="logout.php">Log out!</a></p>
                </p>
            </div>
        </nav>
</header>
<br><br><br>
<!--- PONUDA --->
<div class="container-fluid">
        <div class="row">
            <div class="col-lg-2" style="background-color:lightcyan;">
                <h5><b>FILTER GAME </b></h5>
                <h6 class="text-info">Publisher </6>
                <ul class="list-group">
                    <?php
                        $sql="SELECT DISTINCT publisher FROM games ORDER BY publisher";
                        $result=$konekcija->query($sql);
                        while($row=$result->fetch_assoc()){
                    ?>
                    <li class="list-group-item">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input games_check" value="<?= $row['publisher']; ?>" id="publisher"><?= $row['publisher']; ?>
                                </label>
                            </div>
                    </li>
                    <?php } ?>
                </ul>

                <h6 class="text-info">Genre</6>
                <ul class="list-group">
                    <?php
                        $sql="SELECT DISTINCT genre FROM games ORDER BY genre";
                        $result=$konekcija->query($sql);
                        while($row=$result->fetch_assoc()){
                    ?>
                    <li class="list-group-item">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input games_check" value="<?= $row['genre']; ?>" id="genre"><?= $row['genre']; ?>
                                </label>
                            </div>
                    </li>
                    <?php } ?>
                </ul>

                <h6 class="text-info">Sizememory</6>
                <ul class="list-group">
                    <?php
                        $sql="SELECT DISTINCT sizememory FROM games ORDER BY sizememory";
                        $result=$konekcija->query($sql);
                        while($row=$result->fetch_assoc()){
                    ?>
                    <li class="list-group-item">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input games_check" value="<?= $row['sizememory']; ?>" id="sizememory"><?= $row['sizememory']; ?>
                                </label>
                            </div>
                    </li>
                    <?php } ?>
                </ul>

                

                
            </div>
            <div class="col-lg-10" style="background-color:lightcyan";>
                <h5 class="text-center" id="textChange"> <b>GAMES </b></h5>
                <div class="text-center">
                    <img src="slike/loading.gif" id="loader" width="200" style="display:none">
                </div>
                <br>
                <div class="row" id="result">
                        <?php
                            $sql="SELECT * FROM games";
                            $result=$konekcija->query($sql);
                            while($row=$result->fetch_assoc()){
                        ?>

                        <div class="col-md-3 mb-2">
                            <div class="card-deck">
                                <div class="card border-secondary">
                                    <img src=" <?= $row['image']; ?>" class="card-img-top">
                                    <div class="card-img-overlay">
                                    <br><br><br><br><br><br><br><br>
                                        <h6 style="margin-top:175px" class="text-light bg-info text-center rounded p-1"> <?= 
                                            $row['name'];
                                        ?></h6>
                                    </div>
                                    <br><br>
                                    <div class="card-body">
                                        <h4 class="card-title text-danger">PRICE: <?= $row['price'] ?> Kn</h4><br>
                                        <h6 class="text-center">SPECIFICATIONS</h6>
                                        <hr>
                                        <p>
                                            <b>PUBLISHER: </b><?= $row['publisher']; ?> <br>
                                            <b>GENRE: </b><?= $row['genre']; ?> <br>
                                            <b>SIZEMEMORY: </b><?= $row['sizememory']; ?> <br>
                                            <b>PRICE: </b><?= $row['price']; ?> <br>
                                            
                                        </p>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                </div>
            </div>
        </div>
</div>

 
</div> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".games_check").click(function(){
                $("#loader").show();
                var action='data';
                var publisher=get_filter_text('publisher');
                var genre=get_filter_text('genre');
                var sizememory=get_filter_text('sizememory');
                var price=get_filter_text('price');
               
                $.ajax({                              
                    url:'action.php',
                    method:'POST',
                    data:{action:action,publisher:publisher,genre:genre,sizememory:sizememory,price:price},
                    success:function(response){
                        $("#result").html(response);
                        $("#loader").hide();
                        $("#textChange").text("Filtrirani proizvodi");
                    }
                });
            });
            function get_filter_text(text_id){
                var filterData=[];
                $('#'+ text_id + ':checked').each(function(){
                    filterData.push($(this).val());
                });
                return filterData;
            }
        });
    </script>
</body>
</html>