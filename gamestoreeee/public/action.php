<?php
    session_start();

    include("dp.php");
    
    if(isset($_POST["action"])){
        $sql="SELECT * FROM games WHERE publisher !=''";
        if(isset($_POST[''])){
            $publisher=implode("','",$_POST['publisher']);
            $sql .="AND publisher IN('".$publisher."')";
        }
        if(isset($_POST['ime'])){
            $ime=implode("','",$_POST['ime']);
            $sql .="AND ime IN('".$ime."')";
        }
        if(isset($_POST['price'])){
            $price=implode("','",$_POST['price']);
            $sql .="AND price IN('".$price."')";
        }
        if(isset($_POST['genre'])){
            $genre=implode("','",$_POST['genre']);
            $sql .="AND genre IN('".$genre."')";
        }
        if(isset($_POST['sizememory'])){
            $sizememory=implode("','",$_POST['sizememory']);
            $sql .="AND sizememory IN('".$sizememory."')";
        }
        
        $result=$konekcija->query($sql);
        $output='';
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $output .= '
                <div class="col-md-3 mb-2">
                <div class="card-deck">
                    <div class="card border-secondary">
                        <img src="'.$row['Slika'].'" class="card-img-top">
                        <div class="card-img-overlay">
                        <br><br><br><br><br><br><br><br>
                            <h6 style="margin-top:175px" class="text-light bg-info text-center rounded p-1"> 
                            '.$row['Ime'].'
                            </h6>
                        </div>
                        <br><br>
                        <div class="card-body">
                            <h4 class="card-title text-danger">PRICE: '.$row['price'].' Kn</h4>
                            <p>
                                <b>IME:</b> '.$row['ime'].' <br>
                                <b>PUBLISHER:</b> '.$row['publisher'].' <br>
                                <b>SIZEMEMORY: </b>'.$row['sizememory'].' <br>
                                <b>GENRE: </b>'.$row['genre'].' <br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
                ';
            }   
        }else{
            $output.="<h3>No games found!</h3>";
        } 
        echo $output;
    }
?>