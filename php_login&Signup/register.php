<?php
include("konekcija.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style2.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SBB</title>
</head>
<body>
    <div class="bg"> 
    
        <div id="logo">
            <img src="slike/sbb.png" alt="">
        </div>

        <div class="fleksalica">
            
            <div class="levi">
                <h1> MOJ SBB - VIŠE BRZIH INFORMACIJA I REŠENJA ZA VAS</h1>

                <div class="fleksufleksu">
                    <div> <img src="slike/banka.png" alt=""> <h2 style="color:white" align="center">Moj racun</h2> <p style="color:white" align="center">Prati i proveravaj račune i uplate u bilo kom trenutku.</p></div>
                    <div> <img src="slike/poklon.jpg" alt=""><h2 style="color:white" align="center"> Moj paket </h2> <p style="color:white" align="center"> Upravljaj izabranim SBB TV, Net i Tel uslugama.</p> </div>
                    <div> <img src="slike/plus.png" alt=""> <h2 style="color:whjte" align="center">  Moji dodaci </h2> <p style="color:white" align="center"> Prilagodi sve svojim željama - dodaj usluge koje ti odgovaraju.</p> </div>
                    <div id="donjifleks"> <img src="slike/ekran.png" alt=""> <h2 style="color:black" align="center">  Moja potrošnja </h2> <p style="color:black" align="center"> Prati potrošnju GB, troškove telefonskih razgovora, iznajmljenih filmova i serija. </p></div>
                    <div id="donjifleks"> <img src="slike/settings.png" alt=""> <h2 style="color:black" align="center">Podešavanja </h2> <p style="color:black" align="center"> Podesi e-mail naloge, govornu poštu, preusmeri pozive, aktiviraj e-račun, podesi brzo biranje. </p> </div>
                    <div id="donjifleks"> <img src="slike/uredjaji.jpg" alt=""> <h2 style="color:black" align="center"> Moji uređaji </h2> <p style="color:black" align="center"> Upravljaj uređajima - dodaj i menjaj uređaje, restartuj ih, promeni PIN, preimenuj ih.</p></div>
                </div>

            </div>

        
            <div class="desni">

            <form action="novikorisnik.php" method="POST">

                <div id="boja"> 

                <div id="forma">
                     <h1> <a href="#"> Registracija </a> </h1>
                     <h2>  <a href="ndex.php">Vec imate nalog? </a> </h2>
                </div>

                <p id="tekstforme">EMAIL: </p>
                <input type="email" name="email" value="" size="60" id="input" required>
                <p id="tekstforme">KORISNICKO IME: </p>
                <input type="text" name="ime" value="" size="60" id="input" required>
                <p id="tekstforme">LOZINKA: </p>
                <input type="password" name="lozinka" value="" size="60" id="input" required>
                <p id="tekstforme">POTVRDA LOZINKE: </p>
                <input type="password" name="plozinka" value="" size="60" id="input" required>


                <input type="submit" name="register" value="Registruj se" size="80">

                <div id="forma2">

                <div id="check">

                    <input type="checkbox" name="check">
                    <p>Zapamti me</p>
                
                </div>  

                <div id="zabloz">
                  <a href="#"><p>Ne secas se lozinke?</p> </a>
                </div>
                </div>


                </div>
                    
            </form>

            </div>

        </div>

    </div>
</body>
</html>