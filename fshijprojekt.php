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
        
        if(isset($_GET['aid'])){
            $projektiid=$_GET['aid'];
            $projekti=merrProjektet($projektiid);
            $emri=$projekti['emri'];
            $pershkrimi=$projekti['pershkrimi'];
            $datafillimit=$projekti['datafillimit'];
            $datambarimit=$projekti['datambarimit'];
        }
        if (isset($_POST['fshij'])) {
            fshijProjekt($_POST['projektiid']);
        }
        ?>
        <form method="post" id="anetari" class="box" action="">
            <legend>Forma për regjistrim</legend>
            <input type="hidden" id="anetariid" name="anetariid" 
                value="<?php if(!empty($anetariid)) echo $anetariid; ?>">
            <fieldset>
                <label>Emri: </label>
                <input type="text" id="emri" name="emri" readonly
                value="<?php if(!empty($emri)) echo $emri; ?>">
            </fieldset>
            <fieldset>
                <label>Pershkrimi: </label>
                <input type="text" id="pershkrimi" name="pershkrimi" readonly
                value="<?php if(!empty($pershkrimi)) echo $pershkrimi; ?>">
            </fieldset>
            <fieldset>
                <label>Data e fillimit: </label>
                <input type="text" id="datafillimit" name="datafillimit" readonly
                value="<?php if(!empty($datafillimit)) echo $datafillimit; ?>">
            </fieldset>
            <fieldset>
                <label>Data e mbarimit: </label> 
                <input type="date" id="datambarimit" name="datambarimit" readonly
                value="<?php if(!empty($datambarimit)) echo $datambarimit; ?>">
            </fieldset>
            <input type="submit" name="fshij" id="fshij" value="Fshij">
            <p id="errmessage"></p>
        </form>

    </section>
</main>
<?php
include "inc/footer.php";
?>