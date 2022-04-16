<?php
if (isset($_POST['kycu'])) {
    login($_POST['email'], $_POST['fjalekalimi']);
}
?>
<aside id="sidebar">
    <form id="login" method="post" class="box">
        <legend>Forma per hyrje</legend>
        <fieldset>
            <label>Email: </label>
            <input type="email" name="email" id="email">
        </fieldset>
        <fieldset>
            <label>Fjalekalimi: </label>
            <input type="password" name="fjalekalimi" id="fjalekalimi">
        </fieldset>

        <input type="submit" name="kycu" id="kycu" value="Kycu">
    </form>
    <section class="box">
        <h3 class="title">SMP ka këto funksionalitete:</h3>
        <ol>
            <li>Menaxhimin e anetareve(Shtimin| Fshirjen | Modifikimin)</li>
            <li>Menaxhimin e projekteve(Shtimin| Fshirjen | Modifikimin)</li>
            <li>Menaxhimin e puneve(Shtimin| Fshirjen | Modifikimin)</li>
            <li>Hyrjen dhe Daljen nga sistemi</li>
            <li>Menaxhime te tjera</li>
        </ol>
        <hr>
        <h3 class="title">Trajnimi Web Development ofron:</h3>
        <ul>
            <li>HTML & CSS</li>
            <li>JavaScript & jQuery</li>
            <li>PHP & MySQL</li>
            <li>Kodimi i projektit real SMP</li>
            <li>Kodimi i projektit real Rent a Car</li>
            <li>Detajet e trajnimit -
                <a href="https://probitacademy.com/courses/web-development-full-stack/">Probit Academy</a>
            </li>
        </ul>
    </section>

</aside>
<script>
    $("#login").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            fjalekalimi: {
                required: true,
            }
        },
        messages: {
            fjalekalimi: {
                required: "Please provide a password"
            },
            email: {
                required: "Please provide a email",
                email: "Please enter a valid email address"
            }
        }

    });
</script>