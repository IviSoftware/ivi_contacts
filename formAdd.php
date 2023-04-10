<?php require_once("./partials/header.php"); ?>

<div class="containerForm">
<form action="./crud_files/addData.php" method="POST" class="form">
    <label for="first_name">Nombre(s)</label>
    <input type="text" name="first_name" placeholder="Nombre" class="txt_input" required>

    <label for="last_name">Apellidos</label>
    <input type="text" name="last_name" placeholder="Apellidos" class="txt_input" required>

    <label for="number_phone">Número de telefono</label>
    <input type="number" name="number_phone" placeholder="222222222" class="txt_input" required>

    <label for="email">email</label>
    <input type="email" name="email" placeholder="email@email.com" class="txt_input" required>

    <input type="submit" value="Agregar" class="btn_add" name="add_contact">

</form>
</div>

<?php require_once("./partials/footer.php"); ?>