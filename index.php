<?php require_once("./database/ConnectionDB.php"); ?>
<?php require_once("./crud_files/showAllData.php"); ?>
<?php require_once("./partials/header.php"); ?>

<div class="rootModal"></div>

<section class="header">
  <h1>Mis contactos</h1>
  <div class="add"><a href="./formAdd.php" class="a_link"><i class="fa-solid fa-plus"></i></a></div>
</section>

<section class="contacts">
  <?php foreach ($contacts as $contact) : ?>
    <div class="card">
      <div class="icon"><i class="fa-solid fa-user"></i></div>
      <p class="name"><?= $contact["first_name"] ?> <?= $contact["last_name"] ?></p>

      <div class="group_actions_buttons">

        <a href="./formEdit.php?id=<?=$contact["id"]?>"><div class="edit"><i class="fa-solid fa-pen-to-square"></i></div></a>
        
        <div class="delete" data-idcontact=<?= $contact["id"] ?>>
          <i class="fa-solid fa-trash"></i>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</section>
<script src="./scripts/confirm_delete.js"></script>
<?php require_once("./partials/footer.php") ?>