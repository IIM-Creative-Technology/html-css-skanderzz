<?php include('repetition/head.php');

?>

<main>

    <br>

    <div id="imgpres">

        <?php
        echo '<img id="presquestionnaire" src="' . $_GET['cheminimage'] . '">';
        ?>

    </div>

    <br>

    <h3> </h3>

    <div class="Reponses">

        <div>
            <p> Réponse A </p>
        </div>

        <div>
            <p> Réponse B </p>
        </div>

        <div>
            <p> Réponse C </p>
        </div>

        <div>
            <p> Réponse D </p>
        </div>

    </div>
</main>

<?php include('repetition/footer.php');

?>