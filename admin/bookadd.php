<?php
session_start();
if (!$_SESSION['UserName']) {
    header('location:../login.php');
}
?>
<?php include_once('./include/header.php'); ?>
<?php require_once('./include/config.php'); ?>
<div class="container col-12 col-sm-6 mt-3">
    <h2>افزودن کتاب جدید</h2>
    <hr>
    <form action="#" method="post" enctype="multipart/form-data">
        <div class="mb-3 mt-3">
            <label for="name">نام کتاب:</label>
            <input type="text" class="form-control" placeholder="نام کتاب:" name="name">
        </div>
        <div class="input-group mt-3 mb-3 mx-5 my-5 w-50">
            <label class="input-group-text" for="inputGroupSelect01">موضوع :</label>
            <?php $sql = "SELECT * FROM category";
            $result = $conn->query($sql); ?>
            <select class="form-select" id="inputGroupSelect02" name="category">
                <option selected>انتخاب موضوع</option>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="mb-3">
            <div class="form-group">
                <label for="discription">توضیحات:</label>
                <textarea class="form-control" rows="5" name="discription"></textarea>
            </div>
            <div class="input-group mt-3 mb-3 mx-5 my-5 w-50">
                <input type="file" class="form-control" id="inputGroupFile01" name="image">
            </div>
            <div class="form-check"></div>
            <button type="submit" class="btn btn-primary">ثبت</button>
        </div>
    </form>
</div>
<?php
if ($_POST) {
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    $category_id = $_POST['category'];
    $name = $_POST['name'];
    $discription = $_POST['discription'];
    
    $sql = "INSERT INTO book (category, name, discription, imagepath) VALUES ('$category_id','$name', '$discription','$target_file')";
    mysqli_query($conn, $sql);
}
?>