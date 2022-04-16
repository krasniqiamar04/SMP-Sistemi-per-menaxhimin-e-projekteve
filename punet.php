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
        <table id="members">
            <tr>
                <th>Emri i projektit</th>
                <th>Data </th>
                <th>Pershkrimi </th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
            $punet=merrPunet();
            if ($punet) {
                while ($puna = mysqli_fetch_assoc($punet)) {
                    $punaid=$puna['punaid'];
                    echo "<tr>";
                    echo "<td>". $puna['emri'] ."</td>";
                    echo "<td>". $puna['data']."</td>";
                    echo "<td>". $puna['pershkrimi']."</td>";
                    echo "<td><a href='modifikopune.php?pid={$punaid}'>Edit</a></td>";
                    echo "<td><a href='fshijpune.php?pid={$punaid}'>Delete</a></td>";
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