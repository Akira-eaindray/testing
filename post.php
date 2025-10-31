<form action="" method="POST">
    <p>
        <input type="checkbox" name="fruit[]" value="Mango">
        <input type="checkbox" name="fruit[]" value="Apple">
    </p>
    <p>
        <input type="radio" name="gender" value="Male">
        <input type="radio" name="gender" value="Female">
    </p>

    <p>
        <select name="color[]" multiple>
            <option value="red">RED</option>
            <option value="green">GREEN</option>
            <option value="blue">BLUE</option>
        </select>
    </p>
    <p>
        <input type="submit">
    </p>
</form>

<?php
    if(isset($_POST['color'])) {
    // print_r($_POST['fruit'][0]);
    // foreach($_POST['fruit'] as $f) {
    //     echo $f;
    // } 

    // echo $_POST['color'];

    foreach($_POST['color'] as $c) {
        echo $c;
    }
    } 
?>