<?php 
include('header.php');
if(isset($_POST['submit'])):
    $CIN=htmlentities($_POST['CIN']);
    $Nom=htmlentities($_POST['Nom']);
    $prenom=htmlentities($_POST['prenom']);
    $Date_de_naissance=htmlentities($_POST['Datedenaissance']);
    $telephone=htmlentities($_POST['telephone']);
    $adress=htmlentities($_POST['adress']);
    $num_de_carte=htmlentities($_POST['numdecarte']);
    $email=htmlentities($_POST['email']);
    $password=htmlentities($_POST['password']);
    $sql= " INSERT INTO client VALUES ('$CIN','$Nom','$prenom','$Date_de_naissance','$telephone','$email',' $password','$adress','$num_de_carte')";
    if(mysqli_query($con,$sql)){
        echo '<div class="alert alert-success">thank you for siging up</div>';
    }else{
        echo 'bad'.$sql .mysqli_error($con);
    }
endif;

?>
<div class="container">
<form action="inscription.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">CIN</label>
    <input type="text" name="CIN" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nom</label>
    <input type="text" name="Nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">prenom</label>
    <input type="text" name="prenom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
 
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Date de naissance</label>
    <input type="date" name="Datedenaissance" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">numero de telephone</label>
    <input type="number" name="telephone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">adress </label>
    <input type="text" name="adress" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">num de carte</label>
    <input type="text" name="numdecarte" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>

  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<footer>
    <div id="footer1">
        <div id="par1">
            <p>Oui à la newsletter !</p>
        </div>
        <div id="par2">
            <p>Recevez les meilleures offres des magasins Auchan et d'Auchan.fr</p>
        </div>
        <div id="inputs">
            <input type="text" name="" id="TextBox">
            <input type="button" id="footerbtn" value="OK">
        </div>
    </div>
    <div id="footer2">
        <div>
            <p>A PROPOS</p>
        </div>
        <div>
            <p>INFOS LEGALES</p>
        </div>
        <div>
            <p>MOYENS DE PAIEMENT</p>
        </div>
        <div>
            <p> MA CARTE FIDELITE </p>
        </div>
        <div id="imgs">
            <img src="img/fb.png" alt="">
            <img src="img/instagram.png" alt="">
            <img src="img/twitter.png" alt="">
            <img src="img/twitter.png" alt="">
        </div>
    </div>
    <div id="coorp">
        <p> XXX 2020 © Tous droits réservés </p>
    </div>
</footer>
</body>

</html>