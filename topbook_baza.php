<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'citalica');

//upload na bazu
$autor = "";
$book_name = "";
$id = 0;

if(isset($_POST['save'])){
    $autor = $_POST['autor'];
    $book_name = $_POST['book_name'];
   
   
    mysqli_query($db, "INSERT INTO topbook (autor, book_name) VALUES ('$autor', '$book_name')");
    header('location: topbook.php');
}


//ispis iz baze na stranicu
$results = mysqli_query($db, "SELECT * FROM topbook");


//brisanje 
if(isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($db, "DELETE FROM topbook WHERE id=$id");
    header('location: topbook.php');
}
?>