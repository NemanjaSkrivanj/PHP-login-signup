<?php 
include("konekcija.php");

$email = "";
$username ="";
$password="";
$rpassword="";

if(isset($_POST['register']))
{
    $email=$_POST['email'];
    $username=$_POST['ime'];
    $password=$_POST['lozinka'];
    $rpassword=$_POST['plozinka']; 

    $sql ="SELECT * from korisnici where email ='".$email."'";

    $result = $con->query($sql);

    if($result->num_rows>0)
    {
        echo ("Korisnicko ime ili lozinka vec postoje.");
    }

    else
    {
        $upit="SELECT * from korisnici where username = '".$username."'";
        $rezultat = $con->query($upit);

        if($rezultat->num_rows>0)
        {
            echo("Korisnicko ime ili lozinka vec postoje.");
        }
    }

    if($password===$rpassword)
    {   
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $upitdod ="INSERT into korisnici (username, password, email) values ('".$username."', '".$hash."', '".$email."')";
            $rezult2=$con->query($upitdod);
            header("location: korisnik.php");
    }

    else
    {
        echo("Unesite tacnu lozinku.");
    }
}