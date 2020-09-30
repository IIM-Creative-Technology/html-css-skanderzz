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
  <caption>Comparatif des meilleurs scores de la semaine</caption>
  <thead>
    <tr>

      <th scope="col">Pseudos</th>
      <th scope="col">Scores</th>
      <th scope="col">Nom du Sondage</th>
      <th scope="col">Classement</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Margaux</th>
      <td>2500</td>
      <td>Squeezie</td>
      <td>1</td>
    </tr>

    <tr>
      <th scope="row">Alex</th>
      <td>2500</td>
      <td>Gotaga</td>
      <td>2</td>
    </tr>

    <tr>
      <th scope="row">Samy</th>
      <td>2250</td>
      <td>Squeezie</td>
      <td>3</td>
    </tr>
       

    <tr>
      <th scope="row">Ayoub</th>
      <td>2000</td>
      <td>Squeezie</td>
      <td>4</td>
    </tr>

  </tbody>

</table>

<br>
<br>

    <table  class="tableau">
  <caption>Sondage concernant Squeezie</caption>
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
      <td>2500</td>
      <td>Squeezie</td>
      <td>1</td>
    </tr>

    <tr>
      <th scope="row">Samy</th>
      <td>2250</td>
      <td>Squeezie</td>
      <td>2</td>
    </tr>
       

    <tr>
      <th scope="row">Ayoub</th>
      <td>2000</td>
      <td>Squeezie</td>
      <td>3</td>
    </tr>

    <tr>
      <th scope="row">Alex</th>
      <td>1500</td>
      <td> Squeezie</td>
      <td>4</td>
    </tr>

  </tbody>

</table>

<br>
<br>

<table  class="tableau">
  <caption>Sondage concernant Gotaga</caption>
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
      <th scope="row">Alex</th>
      <td>2500</td>
      <td>Gotaga</td>
      <td>1</td>
    </tr>

    <tr>
      <th scope="row">Ayoub</th>
      <td>1750</td>
      <td>Gotaga</td>
      <td>2</td>
    </tr>
       

    <tr>
      <th scope="row">Samy</th>
      <td>1750</td>
      <td>Gotaga</td>
      <td>3</td>
    </tr>

    <tr>
      <th scope="row">Alex</th>
      <td>1500</td>
      <td>Gotaga</td>
      <td>4</td>
    </tr>

  </tbody>

</table>


    </main>

    <br>


<?php include('repetition/footer.php'); 

?>