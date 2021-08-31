<?php 

include("konekcija.php");


$username = "";
$password ="";

if(isset($_POST['login']))
{
    $username =$_POST['ime'];
    $password = $_POST['lozinka'];

    $sql = "SELECT * from `korisnici` where username ='".$username."'";
    $rezultat = $con->query($sql);
    
    if($rezultat->num_rows > 0)
    {
        $row = $rezultat ->fetch_assoc();

        if(password_verify($password, $row['password']))
        {
            $_SESSION['korisnik'] ="$username";
            header("location: korisnik.php");
        }

        else 
        {
            header("location: ndex.php");
        }
    }

    else {
        header("location: ndex.php");
    }
}

?>