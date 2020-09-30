<?php include('repetition/head.php');

?>

<main>
    <br>
    <br>

    <div id="imgpres">

        <?php
        echo '<img id="presquestionnaire" src="' . $_GET['cheminimage'] . '">';
        ?>

    </div>

    <br>


    <h3> </h3>

    <div class="Reponses">

        <div class="reponse">
            <p> Réponse A </p>
        </div>

        <div class="reponse">
            <p> Réponse B </p>
        </div>

        <div class="reponse">
            <p> Réponse C </p>
        </div>

        <div class="reponse">
            <p> Réponse D </p>
        </div>

    </div>

</main>
<br>
<?php include('repetition/footer.php');

?>