<?php include 'inc/header.php'?>
    <!--Main Part-->
    <main class="container page">
        <article class="maininfo">
            <h2 class="title">SMP Projekti Pershkrimi</h2>
            <p>
                Sistemi për menaxhimin e projekteve mundëson një kompanie menaxhimin e punëve nga punëtorët e saj
                për projektet që ajo ka. Sistemi ofron menaxhimin e stafit: shtimin, modifikimin fshirjen,
                paraqitjen e stafit, menaxhimin e projekteve: shtimin, modifikimin fshirjen, paraqitjen e projekteve
                dhe menaxhimin e punëve ë bën stafi në kuadër të projekteve.
            </p>
        </article>

        <?php include 'inc/sidebar.php'?>
        <section id="content" class="box">
        <?php
       
        if (isset($_POST['regjistro'])) {
            shtoProjekt($_POST['emri'],$_POST['pershkrimi'],$_POST['datafillimit'],$_POST['datambarimit']);
        }
        ?>
        <form method="post" id="anetari" class="box" action="">
            <legend>Forma për regjistrim</legend>
            <fieldset>
                <label>Emri: </label>
                <input type="text" id="emri" name="emri">
            </fieldset>
            <fieldset>
                <label>Pershkrimi: </label>
                <input type="text" id="pershkrimi" name="pershkrimi">
            </fieldset>
            <fieldset>
                <label>Data e Fillimit: </label>
                <input type="date" id="datafillimit" name="datafillimit">
            </fieldset>
            <fieldset>
                <label>Data e Mbarimit: </label>
                <input type="date" id="datambarimit" name="datambarimit">
            </fieldset>
            <input type="submit" name="regjistro" id="regjistro" value="Regjistro">
            <p id="errmessage"></p>
        </form>

    </section>

        </section>
    </main>
    <?php include 'inc/footer.php'?>