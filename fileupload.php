<form action="" method="POST" enctype="multipart/form-data"> 
    <!-- to declare that file will be chosen -->
        <input type="file" name="image">
    </p>
    <p>
        <input type="submit" name="upload" value="Upload">
    </p>
</form>

<?php
if(isset($_POST['upload'])) {
    echo "<pre>";
    print_r($_FILES);
    $img_name  = $_FILES['image']['name'];
    $target_file = "image/".$img_name;
    echo $target_file;
    $tmp = $_FILES['image']['tmp_name'];

    if(move_uploaded_file($tmp, $target_file)) {
        echo 'upload success!';
    } else {
        echo 'error';
    }

}