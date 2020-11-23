<?php include 'topbook_baza.php';?>

<!DOCTYPE html>
<html>
    <head>
        <title>Bestseleri</title>
        <meta charset="utf-8">
        <meta name="author" content="Petra Benček">
        <meta name="description" content="Čitalica">
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="js/script.js"></script>
        <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet" >
        
        <script>
            var i = 0; 
            var images = [];	
            var time = 4000;

            images[0] = 'img/lib1.jpg';
            images[1] = 'img/lib2.jpg';
            images[2] = 'img/lib3.jpg';
            images[3] = 'img/lib4.jpg';
            images[4] = 'img/lib5.jpg';

            function changeImg(){
	           document.slide.src = images[i];
            if(i < images.length - 1){
              i++; 
            } else { 
                i = 0;
            }
	       setTimeout("changeImg()", time);
            }
            window.onload=changeImg;
          </script>
        
    </head>
    
    <body>
         <header>
            <?php include 'header.php';?>
        </header>
          
        <div class="top_book">
            <div class="img_auto_slider">
                    <img name="slide">
            </div>
        </div>
        
        <div class="top_book_table">
            <h1>Najboljih 20 bestsellera</h1>
                <table>
                   <thead>
                        <tr>
                            <th>Ime pisca</th>
                            <th>Naziv knjige</th>
                            <th>Ažuriranje</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php while ($row = mysqli_fetch_array($results)) { ?> 
                       <tr>
                           <td ><?php echo $row['autor']; ?></td>
                           <td ><?php echo $row['book_name']; ?></td>
                           <td><a class="del_btn" href="topbook_baza.php?del=<?php echo $row['id']; ?>">Izbriši</a></td>
                       </tr>
                       <?php } ?>
                   </tbody>
               </table>
        </div>
         <div class="bg" style=" background-image:url(img/bg4.jpg);">  
        <div class="top_book_form">
            
            <form method="post" action="topbook_baza.php"> 
                <input type="hidden" name="id" value="<?php echo $id; ?>">

                <div class="topbook_upload">
                    <label>Upišite ime pisca</label>
                    <input type="text" name="autor" value="<?php echo $autor; ?>">
                </div>
                <div class="topbook_upload">
                    <label>Upišite naziv knjige</label>
                    <input type="text" name="book_name" value="<?php echo $book_name; ?>"> 
                </div><br>
                <div class="topbook_upload">
                    <button type="submit" name="save">Unesi</button>  
                </div>
            </form>
        </div> 
        </div>
        <footer>
           <?php include 'footer.php';?>
        </footer>
    </body>
</html>