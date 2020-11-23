<!DOCTYPE html>
<html>
    <head>
        <title>Početna stranica</title>
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
   
        <section class="img_slider">     
            <!--img slider start-->
            
             <div class="slider">
                <div class="slider_images">
                    <input type="radio" name="slide" id="img1" checked>
                    <input type="radio" name="slide" id="img2">
                    <input type="radio" name="slide" id="img3">
                    <input type="radio" name="slide" id="img4">
                    
                    <img src="img/1.jpg" class="i1" alt="img1">
                    <img src="img/2.jpg" class="i2" alt="img2">
                    <img src="img/3.jpg" class="i3" alt="img3">
                    <img src="img/4.jpg" class="i4" alt="img4"> 
                </div>
                 
                 <div class="dots">
                    <label for="img1"></label>
                    <label for="img2"></label>
                    <label for="img3"></label>
                    <label for="img4"></label>
                 </div>
            </div>
            <!--img slider end-->
        </section>

        <div class="citat">
            <cite>"Reci mi šta čitaš i ja ću ti reći tko si."</cite><br>
            <p>Martin Heidegger</p>  
        </div>
        
        <div class="intro">
            <p>Dobrodošli na Čitalicu.hr, stranicu na kojoj možete pročitati preporuke koje su napisale druge osobe, dodati knjige u pdf formatu za skinuti i pročitati, te vidjeti koji su trenutni bestseleri u svijetu.</p>
        </div>
       
        <footer>
           <?php include 'footer.php';?>
        </footer>
    </body>
</html>