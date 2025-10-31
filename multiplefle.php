<form action="" method="POST" enctype="multipart/form-data">
    <p>
        <input type="file" name="image[]" multiple>
    </p>
    <p>
        <input type="submit" value="upload" name="submit">
    </p>
</form>

<?php
echo "<pre>";
if(isset($_POST['submit'])) {
    // print_r($_FILES); 
    $file = $_FILES;
    foreach ($file as $image) {
        // print_r($image['name']); 
        foreach ($image['name'] as $k=>$image_name) {
            $tmp_name = $image['tmp_name'][$k];
            echo $tmp_name; 

            $target_file = 'image_multiple/'.$image_name;
            move_uploaded_file($tmp_name,$target_file);
            echo 'success';
        }
    }
}

?>