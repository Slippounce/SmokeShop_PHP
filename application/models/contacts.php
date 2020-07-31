<?php
function putFeedback($name, $email, $phone, $request_text){
    global $link;
    $sql = "insert into feedbacks (name, email, phone, request_text) values('$name', '$email', '$phone', '$request_text')";
    if(!$result = mysqli_query($link, $sql)){
        echo mysqli_error($link);
        return false;
    }
    return true;
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    //write into db
    header("Location: contacts.php?fc=true");
    putFeedback(clearStr($_POST['feedback-author']),clearStr($_POST['email']),
        clearStr($_POST['phone']),clearStr($_POST['feedback-text']));
    exit();
}
$categories = selectAllCategories();
$news = selectSidebarNews();
if($categories === false || $news === false){
echo "ERROR!";
exit;
}
?>