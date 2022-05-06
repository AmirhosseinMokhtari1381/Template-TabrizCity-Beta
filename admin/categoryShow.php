<?php
session_start();
if (!$_SESSION['UserName']) {
  header('location:../login.php');
}
?>
<?php include_once('./include/header.php'); ?>
<?php
require_once('./include/config.php');
$sql = "SELECT * FROM category";
$result = $conn->query($sql);
?>
<<div class="container mt-3">
  <h2>دسته‌بندی کتاب‌ها</h2>
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>نام دسته</th>
        <th>توضیحات</th>
        <th>عملیات</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($row = $result->fetch_assoc()) {

      ?>
        <tr>
          <td><?= $row['name'] ?></td>
          <td><?= $row['discription'] ?></td>
          <td ><a href="categoryDelete.php?id=<?= $row['id'] ?>"><img src="../img/icons/trash.svg" alt="Delete" width="30" height="30" ></a></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
  </div>