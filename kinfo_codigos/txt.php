<?php session_start()?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K-INFO</title>
    <link rel="shortcut icon" href="imagens/icon_pagina.png" type="image/x-icon">
    <link rel="stylesheet" href="txt.css">
<body>
    
     <!-- topo -->
     <nav id="menu"> 
      <div id="div-logo-kinfo">
        <a href="home.php">
            <img src="imagens/k-info-logo.png" id="k-info-logo">
        </a>
      </div>

        <a href="home.php" id="inicio">
            INICIO
        </a> 
        
        <a href="musicas.php" id="musicas">
            MUSICAS
        </a>   

        <a href="grupos.php" id="grupos">
            GRUPOS 
        </a> 

        <a href="./login-cadastro/logout.php" id="sair">
            SAIR 
        </a> 

        <a href="sobre.php">
            <img src='imagens/perfil_icon.png' id="perfil_icon">
        </a>
    </nav>

    <div id="fundo"></div>

    <div id="fundo-membros">
        <div id="membros-card">
            <div><a><img id="soobin-card" src="imagens/txt/soobin-polaroid.jpg"></a></div>
            <div><a><img id="beomgyu-card" src="imagens/txt/beomgyu-polaroid.jpg"></a></div>         
            <div><a><img id="kai-card" src="imagens/txt/kai-polaroid.jpg"></a></div> 
            <div><a><img id="taehyun-card" src="imagens/txt/taehyun-polaroid.jpg"></a></div> 
            <div><a><img id="yeonjun-card" src="imagens/txt/yeonjun-polaroid.jpg"></a></div> 
        </div>
    </div>

    <div id="background">
        <div><h5 id="discografia">DISCOGRAFIA</h5>
            <div id="redes-sociais">
            <!--SPOTIFY-->
            <div><a href="https://open.spotify.com/intl-pt/artist/0ghlgldX5Dd6720Q3qFyQB" target="_blank"><img src="imagens/spotify.png" id="spotify" alt="spotify"></a></div>
      
            <!--FACEBOOK-->
            <div><a href="https://www.facebook.com/TXT.bighit/?locale=pt_BR " target="_blank"><img src="imagens/faceboock.png" id="facebook" alt="facebook"></a></div>
           
            <!--INSTAGRAM-->
            <div><a href="https://www.instagram.com/txt_bighit/" target="_blank"><img src="imagens/instagram.png" id="instagram" alt="instagram"></a></div>
           
            <!--YOUTUBE-->
            <div><a href="https://www.youtube.com/@TXT_bighit" target="_blank"><img src="imagens/youtube.png"  id="youtube" alt="youtube"></a></div>
           
            <!--TIK TOK-->
            <div><a href="https://www.tiktok.com/@txt.bighitent" target="_blank"><img src="imagens/tiktok.png" id="tiktok" alt="tiktok"></a></div>
        </div>
    </div>

    <!--DISCOGRAFIA-->

    <div class="discografia-vinis">
        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/5NZ1IEOLWVRYIhN8uRPyZs" target="_blank"><img src="imagens/txt/discografia-open-always-wins.png" id="vinis-size">
            <h5 id="discografia-title">OPEN ALWAYS WINS (SINGLE)</h5></a></div>

        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/4gUSRC5pgmbbDi39dGBsuL" target="_blank"><img src="imagens/txt/discografia-chikai.png " id="vinis-size">
            <h5 id="discografia-title">CHIKAI (SINGLE)</h5></a></div>

        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/0RFuTYmc3LtPHt0rs0Mqwl" target="_blank"><img src="imagens/txt/discografia-minisode3-tomorrow-remixes.png" id="vinis-size">
            <h5 id="discografia-title">MINISODE 3: TOMORROW (REMIXES) (ALBUM)</h5></a></div>    

        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/0mDwrOXZHN1lgCNeBvkBbj" target="_blank"><img src="imagens/txt/discografia-minisode3-tomorrow.png" id="vinis-size">
            <h5 id="discografia-title">MINISODE 3: TOMORROW (ALBUM)</h5></a></div>

        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/63fWdGyeBj8VDjvHSUROx3" target="_blank"><img src="imagens/txt/discografia-freefall.png" id="vinis-size">
            <h5 id="discografia-title">THE NAME CHAPTER: FREEFALL (ALBUM)</h5></a></div>

        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/3InBiuGXecuwXqG81YrB1E" target="_blank"><img src="imagens/txt/discografia-back-for-more(more-edition).png" id="vinis-size">
            <h5 id="discografia-title">BACK FOR MORE (MORE EDITION) (EP)</h5></a></div>

        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/5zhfCotijpaEJfQNVAC8mV" target="_blank"><img src="imagens/txt/discografia-back-for-more.png" id="vinis-size">
            <h5 id="discografia-title">BACK FOR MORE (SINGLE)</h5></a></div>

        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/3xUNr11OLl38k9aPZ5AzrA" target="_blank"><img src="imagens/txt/discografia-do-it-like-that(jax-jones-remix).png" id="vinis-size">
            <h5 id="discografia-title">DO IT LIKE THAT (JAX JONES REMIX) (SINGLE)</h5></a></div>

        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/5KSss6H6yvZIpYG2MNpVR7" target="_blank"><img src="imagens/txt/discografia-do-it-like-that(alan-walker-remix).png" id="vinis-size">
            <h5 id="discografia-title">DO IT LIKE THAT (ALAN WALKER REMIX) (SINGLE)</h5></a></div>

        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/69mUDfqiMNvS4IHwdtEfn0" target="_blank"><img src="imagens/txt/discografia-do-it-like-that(pop-remix).png" id="vinis-size">
            <h5 id="discografia-title">DO IT LIKE THAT (POP R&B REMIX) (SINGLE)</h5></a></div>
                
        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/3vS6dRY94LpO01JxEN95dM" target="_blank"><img src="imagens/txt/discografia-do-it-like-that(jersey-remix).png" id="vinis-size">
            <h5 id="discografia-title">DO IT LIKE THAT (JERSEY CLUB REMIX) (SINGLE)</h5></a></div>

        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/0Z1ebaoFTQDDzebTh3fD2P" target="_blank"><img src="imagens/txt/discografia-do-it-like-that.png" id="vinis-size">
            <h5 id="discografia-title">DO IT LIKE THAT (SINGLE)</h5></a></div>

        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/60A86b5rgjI35DzjphO0Iy" target="_blank"><img src="imagens/txt/discografia-sweet.png" id="vinis-size">
            <h5 id="discografia-title">SWEET (ALBUM)</h5></a></div>

        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/5NS7oB7XrDg7xcx4p2595x" target="_blank"><img src="imagens/txt/discografia-sweet-hydrangea-love.png" id="vinis-size">
            <h5 id="discografia-title">HYDRANGEA LOVE (SINGLE)</h5></a></div>

        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/5cF6IwsPaJh0QI32RXWjGB" target="_blank"><img src="imagens/txt/discografia-sugar-rush-ride(japanese-ver).png" id="vinis-size">
            <h5 id="discografia-title">SUGAR RUSH RIDE (JAPANESE VER.) (SINGLE)</h5></a></div>

        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/6dT50XMh2FjyJOINykOAd3" target="_blank"><img src="imagens/txt/discografia-goodbye-for-now.png" id="vinis-size">
            <h5 id="discografia-title">GOODBYE NOW (SINGLE)</h5></a></div>
                
        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/7gkb4MxKe9rnoR3wxbJXJg" target="_blank"><img src="imagens/txt/discografia-the-name-chapter-temptation.png" id="vinis-size">
            <h5 id="discografia-title">THE NAME CHAPTER: TEMPTATION (EP)</h5></a></div>

        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/0V2vQVVSUJXXqSnikWNcZq" target="_blank"><img src="imagens/txt/discografia-free-falling.png" id="vinis-size">
            <h5 id="discografia-title">FREE FALLING (SINGLE)</h5></a></div>

        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/0nTPrUjlLwEJD6Fdw2GGoU" target="_blank"><img src="imagens/txt/discografia-good-boy-gone-bad.png" id="vinis-size">
            <h5 id="discografia-title">GOOD BOY GONE BAD (SINGLE)</h5></a></div>

        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/4i69b6pT4wIAIkoYGA71Um" target="_blank"><img src="imagens/txt/discografia-ring .png" id="vinis-size">
            <h5 id="discografia-title">RING (SINGLE)</h5></a></div>

        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/6HxwkL6Z3D14XOXY5SUPJp" target="_blank"><img src="imagens/txt/discografia-valley-of-lifes.png" id="vinis-size">
            <h5 id="discografia-title">VALLEY OF LIFES (SINGLE)</h5></a></div>

        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/1o8jYrnyZueTPIdhlHuTc8" target="_blank"><img src="imagens/txt/discografia-minisode2-thursdays-child.png" id="vinis-size">
            <h5 id="discografia-title">MINISODE 2: THURSDAY'S CHILD (EP)</h5></a></div>
    
        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/4m50lReG8oCO6pdvJmMOVm" target="_blank"><img src="imagens/txt/discografia-ps5.png" id="vinis-size">
            <h5 id="discografia-title">PS5 (SNGLE)</h5></a></div>
        
        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/3aOc7Dx7XaZusfqxjDzrVL" target="_blank"><img src="imagens/txt/discografia-chaotic-wonderland.png" id="vinis-size">
            <h5 id="discografia-title">CHAOTIC WONDERLAND (EP)</h5></a></div>
            
        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/2yyyLbIoQWvZXudDHeUkOd" target="_blank"><img src="imagens/txt/discografia-eyes.png" id="vinis-size">
            <h5 id="discografia-title">EYES (SINGLE)</h5></a></div>
                
        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/4kZPJgs4OcK4AXHlEbIwuU" target="_blank"><img src="imagens/txt/discografia-chaotic-wonderland.png" id="vinis-size">
            <h5 id="discografia-title">ITO (SINGLE)</h5></a></div>
                    
        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/4mz8WmQHMhE51kERBJt7oK" target="_blank"><img src="imagens/txt/discografia-i-know-i-love-you(feat-mod-sun).png" id="vinis-size">
            <h5 id="discografia-title">I KNOW I LOVE YOU (FEAT. MOD SUN) (SINGLE)</h5></a></div>

        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/2CjIfWoFITACUOlWGB7os5" target="_blank"><img src="imagens/txt/discografia-the-chaos-chapter-fight-or-scape.png" id="vinis-size">
            <h5 id="discografia-title">THE CHAOS CHAPTER: FIGHT OR SCAPE (ALBUM)</h5></a></div>   
            
        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/2g6eRzETrUKRIBC8QnjAE1" target="_blank"><img src="imagens/txt/discografia-i-know-i-love-you(feat-woodie).png" id="vinis-size">
            <h5 id="discografia-title">I KNOW I LOVE YOU (FEAT. PH-1, WOODIE GOCHILD, SEORI) (SINGLE)</h5></a></div>     

        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/5Zdr9vactwnJH4Vpe9Mid9" target="_blank"><img src="imagens/txt/discografia-the-chaos-chapter-freeze.png" id="vinis-size">
            <h5 id="discografia-title">THE CHAOS CHAPTER: FREEZE (ALBUM)</h5></a></div>     

        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/2YM7tiN0dqi4gJXj7YMB7I" target="_blank"><img src="imagens/txt/discografia-doom-at-your-service.png" id="vinis-size">
            <h5 id="discografia-title">DOOM AT YOUR SERVICE (SINGLE)</h5></a></div>     

        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/6lNj7Qeyd2x48m0NX3w2Sf" target="_blank"><img src="imagens/txt/discografia-still-dreaming.png" id="vinis-size">
            <h5 id="discografia-title">STILL DREAMING (ALBUM)</h5></a></div>     

        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/7mLKvwyfqvTfq4GaUo52oG" target="_blank"><img src="imagens/txt/discografia-force.png" id="vinis-size">
            <h5 id="discografia-title">FORCE (SINGLE)</h5></a></div>     

        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/2DDNDdePEx9R0bBwRqahdr" target="_blank"><img src="imagens/txt/discografia-minisode1-blue-hour.png" id="vinis-size">
            <h5 id="discografia-title">MINISODE 1: BLUE HOUR (EP)</h5></a></div>     

        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/74nwjBBoKHQOP6DDs71Zwf" target="_blank"><img src="imagens/txt/discografia-drama.png" id="vinis-size">
            <h5 id="discografia-title">DRAMA (SINGLE)</h5></a></div>     

        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/4JSVFzfDlPh0LcB0F5bswh" target="_blank"><img src="imagens/txt/discografia-drama(japanese-ver).png" id="vinis-size">
            <h5 id="discografia-title">DRAMA (JAPANESE VER.) (SINGLE)</h5></a></div>    

        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/4jTVGyo4fSSFniFPbfr0bW" target="_blank"><img src="imagens/txt/discografia-the-dream-chapter-eternity.png" id="vinis-size">
            <h5 id="discografia-title">THE DREAM CHAPTER: ETERNITY (EP)</h5></a></div>    

        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/0q7bDr9lPLduHdECJOYZ8B" target="_blank"><img src="imagens/txt/discografia-magic-hour.png" id="vinis-size">
            <h5 id="discografia-title">MAGIC HOUR (SINGLE)</h5></a></div>    

        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/7yDyRk7Wvvw7JM1kqV4tJf" target="_blank"><img src="imagens/txt/discografia-the-dream-chapter-magic.png" id="vinis-size">
            <h5 id="discografia-title">THE DREAM CHAPTER: MAGIC (ALBUM)</h5></a></div>    

        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/0fA75IiylPro5rHnIiD2mf" target="_blank"><img src="imagens/txt/discografia-our-summer.png" id="vinis-size">
            <h5 id="discografia-title">OUR SUMMER (SINGLE)</h5></a></div>    

        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/4uJ120PsfiWOC7aV5FqGkU" target="_blank"><img src="imagens/txt/discografia-cat-dog.png" id="vinis-size">
            <h5 id="discografia-title">CAT & DOG (ENGLISH VER.) (SINGLE)</h5></a></div>    

        <div id="vinis"><a href="https://open.spotify.com/intl-pt/album/5GiLAzb049s1SsDiUPhHVz" target="_blank"><img src="imagens/txt/discografia-the-dream-chapter-star.png" id="vinis-size">
            <h5 id="discografia-title">THE DREAM CHAPTER: STAR (EP)</h5></a></div>    
    </div>
</div>

     
     <!-- ======================================================RODAPÉ===================================================== -->


     <footer id="rodape"> 
      <div id="div-frase"><a id="frase">DEDICADO AOS FAS DE K-POP</a></div>

      <!-- twitch -->
      <div id="div-twitch">
         <a href="https://www.twitch.tv/peixe_devasso" target="_blank"><img src="imagens/twitch-icon.png" id="twitch-icon"></a>
      </div>

      <!-- instagram -->
      <div id="div-instagram">
         <a href="https://www.instagram.com/marcosdifff/?locale=zh_CN&hl=fa" target="_blank"><img src="imagens/Instagram-color-icon.png" id="instagram-icon"></a>
      </div>

      <!-- kiku na arvore -->
      <div id="div-kiku">
         <a><img src="imagens/kiku-arvore.png" id="kiku-arvore"></a>
      </div>

      <!-- referencias -->
      <div id="div-referencias">
         <a id="referencias">REFERENCIAS</a>
         <a href="https://kpopping.com" id="referencias-kpopping">kpoping.com</a>
         <br>
         <a href="https://open.spotify.com" id="referencias-spotify">spotify.com</a>  
      </div>


     </footer>
     <!-- =========================================================================================================== -->