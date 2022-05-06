<?php
session_start();
if (!$_SESSION['UserName']) {
  header('location:../login.php');
}
?>
<?php include_once('./include/header.php'); ?>
<div class="container col-12 col-sm-6 mt-3">
  <h2>افزودن موضوع جدید</h2>
  <hr>
  <form action="#" method="post">
    <div class="mb-3 mt-3">
      <label for="name">نام موضوع:</label>
      <input type="text" class="form-control" placeholder="موضوع" name="name">
    </div>
    <div class="mb-3">
      <div class="form-group">
        <label for="discription">توضیحات:</label>
        <textarea class="form-control" rows="5" name="discription"></textarea>
      </div>
      <div class="form-check mb-3">
      </div>
      <button type="submit" class="btn btn-primary">ثبت</button>
  </form>
</div>
<?php
require_once('./include/config.php');
if ($_POST) {
  $name = $_POST['name'];
  $discription = $_POST['discription'];
  $sql = "INSERT INTO `category` ( `name`, `discription`) VALUES ('$name', '$discription')";
  mysqli_query($conn, $sql);
}
?>