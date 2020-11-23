 <!DOCTYPE html>
<html>
    <head>
        <title>E - knjige</title>
        <meta charset="utf-8">
        <meta name="author" content="Petra Benček">
        <meta name="description" content="Čitalica">
        <link rel="stylesheet" href="css/style.css">
       <script type="text/javascript" src="js/script.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    </head>
    
    <body>
       <header>
            <?php include 'header.php';?>
        </header>
         
        <div class="bg" style=" background-image:url(img/bg2.jpg);">   
            <div class="eknjige">

                <div class="upload_box">
                    <form action="eknjige.php" method="post" enctype="multipart/form-data" >
                        <h2>Prenesi i ti svoje e - knjige na Čitalicu.hr</h2>
                        <input type="file" name="myfile"> <br>
                        <button type="submit" name="save">Upload</button><br><br>
                        <?php include 'eknjige_baza.php';?>
                    </form>
                </div>
            </div>
        </div> 
        
        <div class="eknjige_table">
            <table>
                <thead>
                    <th>Naziv e-knjige</th>
                    <th>Veličina</th>
                    <th>Preuzimanje</th>
                </thead>
                <tbody>
                    <?php foreach ($files as $file): ?>
                    <tr>
                        <td><?php echo $file['name']; ?></td>
                        <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
                        <td><a  class="edit_btn" href="eknjige.php?file_id=<?php echo $file['id'] ?>">Preuzmi</a></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
  
        <footer>
           <?php include 'footer.php';?>
        </footer>
    </body>
</html>