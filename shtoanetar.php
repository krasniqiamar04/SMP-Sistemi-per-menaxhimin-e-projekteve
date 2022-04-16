<?php
include "inc/header.php";
?>
<main class="container page">
    <article class="maininfo">
        <h2 class="title">SMP Projekti Pershkrimi</h2>
        <p> Sistemi për menaxhimin e projekteve mundëson një kompanie menaxhimin e punëve
            nga punëtorët e saj për projektet që ajo ka. Sistemi ofron menaxhimin e stafit: shtimin,
            modifikimin fshirjen, paraqitjen e stafit, menaxhimin e projekteve: shtimin,
            modifikimin fshirjen, paraqitjen e projekteve dhe menaxhimin e punëve ë bën stafi në
            kuadër të projekteve.
        </p>
    </article>

    <?php
    include "inc/sidebar.php";
    ?>
    <section id="content" class="box">
        <?php
       
        if (isset($_POST['regjistro'])) {
            shtoAnetar($_POST['emri'],$_POST['mbiemri'],$_POST['email'],$_POST['telefoni'],
            $_POST['fjalekalimi']);

        }
        ?>
        <form method="post" id="anetari" class="box" action="">
            <legend>Forma për regjistrim</legend>
            <fieldset>
                <label>Emri: </label>
                <input type="text" id="emri" name="emri">
            </fieldset>
            <fieldset>
                <label>Mbimri: </label>
                <input type="text" id="mbiemri" name="mbiemri">
            </fieldset>
            <fieldset>
                <label>Telefoni: </label>
                <input type="text" id="telefoni" name="telefoni">
            </fieldset>
            <fieldset>
                <label>Email: </label>
                <input type="email" id="email" name="email">
            </fieldset>
            <fieldset>
                <label>Fjalekalimi: </label>
                <input type="password" id="fjalekalimi" name="fjalekalimi">
            </fieldset>
            <input type="submit" name="regjistro" id="regjistro" value="Regjistro">
            <p id="errmessage"></p>
        </form>

    </section>
    </section>
</main>
<?php
include "inc/footer.php";
?>