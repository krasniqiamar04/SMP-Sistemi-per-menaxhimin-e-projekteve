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
        if (isset($_GET['pid'])) {
            $punaid = $_GET['pid'];
            $pune = merrPuneId($punaid);

            $projektiid = $pune['projektiid'];
            $projektiemri = $pune['emri'];
            $data = $pune['data'];
            $data=date("Y-m-d",strtotime($data));
            $pershkrimi = $pune['pershkrimi'];
        }
        if (isset($_POST['modifiko'])) {
            modifikoPune($_POST['punaid'],$_POST['projektiid'], $_POST['data'], $_POST['pershkrimi']);
        }
        ?>
        <form method="post" id="anetari" class="box" action="">
            <legend>Forma për regjistrim</legend>
            <fieldset>
            <input type="hidden" id="punaid" name="punaid" 
                value="<?php if(!empty($punaid)) echo $punaid; ?>">
                <label>Emri: </label>
                <select name="projektiid">
                    <?php
                    echo "<option value='{$projektiid}'>{$projektiemri}</option>";
                    $projketet = merrProjektet();
                    if ($projketet) {
                        while ($projekti = mysqli_fetch_assoc($projketet)) {
                            $prid = $projekti['projektiid'];
                            $emri = $projekti['emri'];
                            if($prid!=$projektiid){
                                echo "<option value='{$prid}'>{$emri}</option>";
                            }
                        }
                    }
                    ?>
                </select>
            </fieldset>
            <fieldset>
                <label>Data: </label>
                <input type="date" id="data" name="data" value="<?php if(!empty($data)) echo $data; ?>">
            </fieldset>

            <fieldset>
                <label>Pershkrimi: </label>
                <textarea name="pershkrimi"><?php
                    if(!empty($pershkrimi)) echo $pershkrimi;
                ?></textarea>
            </fieldset>
            <input type="submit" name="modifiko" id="modifiko" value="Modifiko">
            <p id="errmessage"></p>
        </form>

    </section>
    </section>
</main>
<?php
include "inc/footer.php";
?>