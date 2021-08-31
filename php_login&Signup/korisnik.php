<?php 
include ("konekcija.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="logout.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moj Profil</title>
</head>
<body>
    <head>
        <h1>Dobrodosli.</h1>
    </head>

    <a href="logout.php" id="logout">Izlogujte se</a>

    <?php 
        $sql= "SELECT COUNT(*) FROM korisnici GROUP BY username";
        $rezultat = $con -> query($sql);
        $korisnici = array();
        while($row= $rezultat -> fetch_assoc()) 
        {
            $korisnici[] = $row;
        }
        $broj = count($korisnici);
    ?>
    <h3>Broj korisnika na sajtu je: <?php echo $broj; ?></h3>
</body>
</html>