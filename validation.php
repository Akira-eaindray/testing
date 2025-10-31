<?php 

// trim
// stripslashes
// strip_tags
// htmlspecialcharacters 
// filter_Var

$name = "  hello";
echo "hey!".trim($name);

$name1 = "\ hello";
echo stripslashes($name1);

$name2 = "<h1>Hello</h1>";
echo strip_tags($name2);
echo htmlspecialchars($name2);

$email = "hi";
if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'valid';
} else {
    echo 'not valid';
}


