<?php

class Product{
    
    public static function getProducts (){
        global $konekcija;
        $upit = "SELECT * FROM games";
        $rezultat = mysqli_query($konekcija, $upit);
        $lista = array();
        while ($redak = mysqli_fetch_assoc($rezultat))
            array_push($lista, $redak);
        return $lista;
    }
    
    public static function deleteProduct ($id) {
        global $konekcija;
        $id=intval($id);
        $sql="DELETE FROM games WHERE ID=".$id;
        return mysqli_query($konekcija, $sql);
    }
    public static function saveProduct(){
        global $konekcija;
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
           
            $ime=$_POST['ime'];
            $publisher=$_POST['publisher'];
            $genre=$_POST['genre'];
            $price=$_POST['price'];
            $sizememory=$_POST['sizememory'];
            $target='../slike/'.basename($_FILES['image']['name']);
            $image=$_FILES['image']['name'];
            if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
                $sql="INSERT INTO games VALUES (null,'".$ime."','".$publisher."','".$genre."','".$price."','".$sizememory."','slike/".$image."')";
                mysqli_query($konekcija,$sql);
            }
        }
    }
}
?>