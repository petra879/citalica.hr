<?php
// Povezivanje s bazom
$conn = mysqli_connect('localhost', 'root', '', 'citalica');

$sql = "SELECT * FROM files";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Upload datoteka
if (isset($_POST['save'])) { 

    $filename = $_FILES['myfile']['name'];
    $destination = 'uploads/' . $filename;

    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['pdf',])) {
        echo "Datoteka mora imati .pdf ekstenziju";
    } elseif ($_FILES['myfile']['size'] > 90000000000000) {
        echo "Datoteka je prevelika!";
    } else {
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (name, size, downloads) VALUES ('$filename', $size, 0)";
            if (mysqli_query($conn, $sql)) {
                echo "Datoteka je uspješno prenesena";
            }
        } else {
            echo "Pogreška u prijenosu datoteke.";
        }
    }
}


// Download datoteka
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    $sql = "SELECT * FROM files WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['name']));
        readfile('uploads/' . $file['name']);
    }
}
?>