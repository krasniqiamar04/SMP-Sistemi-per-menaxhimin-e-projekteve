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
            $anetariid=$_GET['aid'];
            $anetari=merrAnetarId($anetariid);
            $emri=$anetari['emri'];
            $mbiemri=$anetari['mbiemri'];
            $telefoni=$anetari['telefoni'];
            $email=$anetari['email'];
            $fjalekalimi=$anetari['fjalekalimi'];
        }
        if (isset($_POST['fshij'])) {
            fshijAnetar($_POST['anetariid']);
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
                <label>Mbimri: </label>
                <input type="text" id="mbiemri" name="mbiemri" readonly
                value="<?php if(!empty($mbiemri)) echo $mbiemri; ?>">
            </fieldset>
            <fieldset>
                <label>Telefoni: </label>
                <input type="text" id="telefoni" name="telefoni" readonly
                value="<?php if(!empty($telefoni)) echo $telefoni; ?>">
            </fieldset>
            <fieldset>
                <label>Email: </label> 
                <input type="email" id="email" name="email" readonly
                value="<?php if(!empty($email)) echo $email; ?>">
            </fieldset>
            <fieldset>
                <label>Fjalekalimi: </label>
                <input type="password" id="fjalekalimi" name="fjalekalimi" readonly
                value="<?php if(!empty($fjalekalimi)) echo $fjalekalimi; ?>">
            </fieldset>
            <input type="submit" name="fshij" id="fshij" value="Fshij">
            <p id="errmessage"></p>
        </form>

    </section>
    </section>
</main>
<?php
include "inc/footer.php";
?>