<?php
    require_once("./database/ConnectionDB.php");

    $id = $_GET["id"];
    $conn = ConnectionDB::getInstance()->getConnection();
    $stmt = $conn->prepare("SELECT * FROM contacts WHERE id=:id");
    $stmt->execute([":id"=>$id]);
    $contact = $stmt->fetch();
?>
<?php require_once("./partials/header.php"); ?>

<div class="containerForm">
<form action="./crud_files/editData.php" method="POST" class="form">

    <input type="hidden" name="id" value=<?= $contact["id"] ?> />

    <label for="first_name">Nombre(s)</label>
    <input type="text" name="first_name" placeholder="Nombre" class="txt_input" value="<?= $contact["first_name"] ?>" required>

    <label for="last_name">Apellidos</label>
    <input type="text" name="last_name" placeholder="Apellidos" class="txt_input" value="<?= $contact["last_name"] ?>" required>

    <label for="number_phone">Número de telefono</label>
    <input type="number" name="number_phone" placeholder="222222222" class="txt_input" value="<?= $contact["number"] ?>" required>

    <label for="email">email</label>
    <input type="email" name="email" placeholder="email@email.com" class="txt_input" value="<?= $contact["email"] ?>" required>

    <input type="submit" value="editar" class="btn_add" name="edit_contact">

</form>
</div>

<?php require_once("./partials/footer.php"); ?>