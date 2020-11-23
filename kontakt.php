<!DOCTYPE html>
<html>
    <head>
        <title>Kontakt</title>
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
        
        <div class="contact">
            <div class="contact_us">
                <h2>Kontaktirajte nas...</h2>
                <p>Ako imate bilo kakvih pitanja ili poteškoća, kontaktirajte nas putem navedene forme i rado ćemo Vam pomoći. Uživajte u Čitalici!</p>
            </div>
            
            <div class="containerBox">
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="text">
                            <h3>Adresa</h3>
                            <p>42 000 Varaždin<br>Hrvatska</p>
                        </div>
                    </div>

                     <div class="box">
                        <div class="icon"><i class="fas fa-phone"></i></div>
                        <div class="text">
                            <h3>Telefon</h3>
                            <p>+385 98 978 7919</p>
                        </div>
                    </div>

                     <div class="box">
                        <div class="icon"><i class="fas fa-envelope"></i></div>
                        <div class="text">
                            <h3>E - mail</h3>
                            <p>petra879@gmail.com</p>
                        </div>
                    </div>            
            </div>
          
            <div class="contactForm">
                <form action="kontakt.php" method="post">
                    <h2>Pošaljite poruku</h2>
                    <div class="inputBox">
                        <input type="text" name="name" required="required" placeholder="Ime i prezime...">
                        <input type="text" name="email" required="required" placeholder="E - mail...">
                        <input type="text" name="subject" required="required" placeholder="Predmet...">
                        <textarea name="msg" required="required" placeholder="Napišite svoju poruku..."></textarea>
                        <input type="submit" name="btn-send" value="Pošalji">
                    </div>
                </form>
            </div>  
        </div>
        </div>

        <footer>
           <?php include 'footer.php';?>
        </footer>
    </body>
</html>