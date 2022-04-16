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
            shtoPune($_POST['projektiid'],$_POST['data'],$_POST['pershkrimi']);
        }
        ?>
        <form method="post" id="anetari" class="box" action="">
            <legend>Forma për regjistrim</legend>
            <fieldset>
                <label>Emri: </label>
                <select name="projektiid">
                    <?php
                    $projketet=merrProjektet();
                    if ($projketet) {
                        while ($projekti = mysqli_fetch_assoc($projketet)) {
                            $projektiid=$projekti['projektiid'];
                            $emri=$projekti['emri'];                            
                            echo "<option value='{$projektiid}'>{$emri}</option>";
                        }
                    }
                    ?>
                </select>
            </fieldset>
            <fieldset>
                <label>Data: </label>
                <input type="date" id="data" name="data">
            </fieldset>
            
            <fieldset>
                <label>Pershkrimi: </label>
               <textarea name="pershkrimi"></textarea>
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