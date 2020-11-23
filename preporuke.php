<?php include 'preporuke_baza.php';
    if(isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $update = true;
                
        $rec = mysqli_query($db, "SELECT * FROM preporuke WHERE id=$id");
        $record = mysqli_fetch_array($rec);
        $name = $record['name'];
        $text = $record['text'];
        $book = $record['book'];
        $id = $record['id'];
        } ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Preporuke</title>
        <meta charset="utf-8">
        <meta name="author" content="Petra Benček">
        <meta name="description" content="Čitalica">
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="js/script.js"></script>
        <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet" >
    </head>
    
    <body>
         <header>
            <?php include 'header.php';?>
        </header>
          
       <div class="preporuke"> 
            <form method="post" action="preporuke_baza.php"> 
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <img src="img/bookstore.png" width="169px" height="200px">
            <div class="preporuke_upload">
                <label>Upišite svoje ime i prezime</label>
                <input type="text" name="name" value="<?php echo $name; ?>">
            </div>
            <div class="preporuke_upload">
                <label>Ime pisca i knjige</label>
                <input type="text" name="book" value="<?php echo $book; ?>"> 
            </div>
            <div class="preporuke_upload">
                <label>Napiši preporuku</label>
                <textarea name="text" cols="60" rows="6" value="<?php echo $text; ?>"></textarea>
            </div>
            <div class="preporuke_upload">
                <?php if($update == true): ?>
                     <button type="submit" name="update">Ažuriraj</button>
                <?php else: ?>  
                    <button type="submit" name="save">Spremi</button>  
                <?php endif ?>
            </div>
                    
           <?php if(isset($_SESSION['message'])): ?>
                <div class="message">
                    <?php 
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);?>
                </div>
           <?php endif ?>
           </form>
          
           <div class="preporuke_table">
               <table>
                   <thead>
                        <tr>
                            <th>Ime pisca i knjige</th>
                            <th>Opis</th>
                            <th>Preporuku napisao</th>
                            <th colspan="2">Ažuriranje</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php while ($row = mysqli_fetch_array($results)) { ?> 
                       <tr>
                           <td style="width:20%;font-weight: bold;"><?php echo $row['book']; ?></td>
                           <td style="font-style: italic;text-align: justify;"><?php echo $row['text']; ?></td>
                           <td style="width:12%; text-align:right;"><?php echo $row['name']; ?></td>
                           <td style="width:5%;"><a class="edit_btn" href="preporuke.php?edit=<?php echo $row['id']; ?>">Uredi</a></td>
                           <td style="width:5%;"><a class="del_btn" href="preporuke_baza.php?del=<?php echo $row['id']; ?>">Izbriši</a></td>
                       </tr>
                       <?php } ?>
                   </tbody>
               </table>
           </div>
        </div>
   
        <footer>
           <?php include 'footer.php';?>
        </footer>
    </body>
</html>