<?php
include "inc/header.php";
if($_SESSION['anetari']['roli']!=1){
    header("Location: index.php");
}
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
        <div class="message"><?php
            if($_SESSION['message'])echo $_SESSION['message'];
        ?></div>
        <table id="members">
            <tr>
                <th>Emri dhe Mbiemri</th>
                <th>Telefoni</th>
                <th>Email</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
            $anetaret=merrAnetaret();
            if ($anetaret) {
                while ($anetari = mysqli_fetch_assoc($anetaret)) {
                    $anetariid=$anetari['antariid'];
                    echo "<tr>";
                    echo "<td>". $anetari['emri'] .' '.$anetari['mbiemri']."</td>";
                    echo "<td>". $anetari['telefoni']."</td>";
                    echo "<td>". $anetari['email']."</td>";
                    echo "<td><a href='modifikoanetar.php?aid={$anetariid}'>Edit</a></td>";
                    echo "<td><a href='fshijanetar.php?aid={$anetariid}'>Delete</a></td>";
                    echo "</tr>";
                }
            }
            ?>  
        </table>

    </section>
    </section>
</main>
<?php
include "inc/footer.php";
?>