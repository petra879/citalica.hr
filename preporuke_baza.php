<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'citalica');

//upload na bazu
$name = "";
$book = "";
$text = "";
$id = 0;
$update = false;

if(isset($_POST['save'])){
    $name = $_POST['name'];
    $book = $_POST['book'];
    $text = $_POST['text'];
   
    mysqli_query($db, "INSERT INTO preporuke (name, book, text) VALUES ('$name', '$book',  '$text')");
    $_SESSION['message'] = "Preporuka je uspješno dodana!";
    header('location: preporuke.php');
}


//ispis iz baze na stranicu preporuke.php
$results = mysqli_query($db, "SELECT * FROM preporuke");


//ažuriranje upita
if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $book = $_POST['book'];
    $text = $_POST['text'];
    mysqli_query($db, "UPDATE preporuke SET name='$name', book='$book', text='$text' WHERE id=$id");
    $_SESSION['message'] = "Preporuka je ažurirana!";
    header('location: preporuke.php');
}


//brisanje preporuke
if(isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($db, "DELETE FROM preporuke WHERE id=$id");
    $_SESSION['message'] = "Preporuka je obrisana!";
    header('location: preporuke.php');
}
?>