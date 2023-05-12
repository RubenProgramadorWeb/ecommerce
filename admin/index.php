<?php
include_once "header.php";
?>

<main class="main">
  <div class="main_overview">
    <div class="overview_card">
      <div class="overview_card-info">Usuarios</div>
      <div class="overview_card-icon">
        <?php
        $total = new userController;
        $total->totalUser();
        ?>
      </div>
    </div>
    <div class="overview_card">
      <div class="overview_card-info">Artículos</div>
      <div class="overview_card-icon">50</div>
    </div>
    <div class="overview_card">
      <div class="overview_card-info">Categorías</div>
      <div class="overview_card-icon">10</div>
    </div>
    <div class="overview_card">
      <div class="overview_card-info">Mensajes</div>
      <div class="overview_card-icon">20</div>
    </div>
    <div class="overview_card">
      <div class="overview_card-info">Ordenes</div>
      <div class="overview_card-icon">20</div>
    </div>
  </div>

  <div class="main_cards">
    <div class="card">
      <?php
      include_once 'userList.php';
      ?>
    </div>

    <div class="card">
      <?php
      include_once 'categoryList.php';
      ?>
    </div>

    <div class="card">Card</div>
  </div>
  <div class="main_cards">
    <div class="card">
      <?php
      include_once 'userLog.php';
      ?>
    </div>
    <div class="card">Card</div>
    <div class="card">Card</div>
  </div>
</main>

<?php
include_once "footer.php";
?>