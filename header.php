<?php
echo'    
    <nav id="sidebar">
        <div class="toggle-btn" onclick="show()">
            <span></span>
            <span></span>
            <span></span>
            <p>Izbornik</p>
        </div>
                
        <center>
            <img src="img/logo.png" class="logo" alt="logo_img" width="200px" height="200px">
        </center>

        <ul>
            <li class="active"><a href="index.php">Početna stranica</a></li>  
            <li><a href="eknjige.php">E - knjige</a></li>
            <li><a href="topbook.php">Bestseleri</a></li>
            <li><a href="preporuke.php">Preporuke</a></li>
                        
            <li><a href="kontakt.php">Kontakt</a></li> 
        </ul>
                
            <div class="container">
                <input type="text" placeholder="Search...">
                <div class="btn_src">
                    <i class="fas fa-search"></i>
                </div>
            </div>          
        </nav>  
       
        <div class="logo_header">
            <h2><a href="index.php">Čitalica.hr</a></h2>
            <img src="img/logo.png">
        </div>';
?>