<?php include('repetition/head.php');

?>
    <main>
        
        <nav>        
             <div class="navclass">

                <a href="index.php">  
                    <h2>Accueil </h2>
                </a>
                <a href="sondages.php">
                    <h2>Sondages</h2>
                </a>
                <a href="sondagedet.php">
                    <h2>Vos Sondages</h2>
                </a>
                <a href="classement.php">
                    <h2>Classement</h2>
                </a>
                <a href="connexion.php">
                    <h2>Connexion</h2>
                </a>
                <a href="inscription.php">
                    <h2>Inscription</h2>
                </a>
                </div> </nav>

        <div class="teteclassement">
        <h2> Salut à toi jeune entrepreneur/euse,</h2> 
        <h2>ici tu peux consulter le tableau des scores pour comparer le tiens et ceux des autres</h2>
        </div>

        <br>

    <table  class="tableau">
  <caption>Récapitulatif du classement général de la semaine</caption>
  <thead>
    <tr>

      <th scope="col">Pseudos</th>
      <th scope="col">Scores</th>
      <th scope="col">Nom du sondage</th>
      <th scope="col">Classement</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Margaux</th>
      <td>1976</td>
      <td>9</td>
      <td>1</td>
    </tr>

    <tr>
      <th scope="row">Samy</th>
      <td>1976</td>
      <td>6</td>
      <td>2</td>
    </tr>
       

    <tr>
      <th scope="row">Ayoub</th>
      <td>1974</td>
      <td>17</td>
      <td>3</td>
    </tr>

    <tr>
      <th scope="row">Alex</th>
      <td>1974</td>
      <td>17</td>
      <td>4</td>
    </tr>

  </tbody>

</table>





    </main>

    <br>


<?php include('repetition/footer.php'); 

?>