<?php session_start()?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K-INFO</title>
    <link rel="shortcut icon" href="imagens/icon_pagina.png" type="image/x-icon">
    <link rel="stylesheet" href="home.css">
    <script src="js/home.js" defer></script>
</head>

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

    <!-- fundo home -->
    <div id="home_kinfo"></div>

    <!-- ================================================= CATEGORIAS DE PRÉVIA ================================================= -->

    <!-- PREVIA MUSICAS --> 

    <div id="previa_musicas">

            <button id="antes-btn-musicas"> <img src="imagens/botao_categoria_previa(esquerda).png" id="botao-imagem"></button>

         <div class="carrosel-musicas">
            <div class="div-movimentacao-musicas">
               
               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/track/19t5GSN3XsLB7UOsZD8Fwv" target="_blank"><img src="imagens/capas-musicas/seventeen-teen-age.jpg" id="card_musicas_home">
                  <h5 class="card-title-home">CLAP (SEVENTEEN)</h5></a></div>

               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/track/6i8MbzVn4nzyjUcSoVcz7B" target="_blank"><img src="imagens/capas-musicas/aespa_armagedon.jpg" id="card_musicas_home">
                  <h5 class="card-title-home">ARMAGEDON (AESPA)</h5></a></div>
                  
               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/track/0skYUMpS0AcbpjcGsAbRGj" target="_blank"><img src="imagens/capas-musicas/blackpink-pink-venom.jfif" id="card_musicas_home">
                  <h5 class="card-title-home">PINK VENOM (BLACKPINK)</h5></a></div>

               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/track/69CrOS7vEHIrhC2ILyEi0s" target="_blank"><img src="imagens/capas-musicas/jisoo-flower.jfif" id="card_musicas_home">
                  <h5 class="card-title-home">FLOWER (JISOO)</h5></a></div>

               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/track/2H7euNHOF7uADN6dfsWoZa" target="_blank"><img src="imagens/capas-musicas/red-velvet-cosmic.jfif" id="card_musicas_home">
                  <h5 class="card-title-home">COSMIC (RED VELVET)</h5></a></div>

               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/track/0vaxYDAuAO1nPolC6bQp7V" target="_blank"><img src="imagens/capas-musicas/kiss-of-life-midas-touch.jfif" id="card_musicas_home">
                  <h5 class="card-title-home">MIDAS TOUCH (KISS OF LIFE)</h5></a></div>

               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/track/45lXSvtDt6uKiGZIXB4LLF" target="_blank"><img src="imagens/capas-musicas/itzy-born-to-be.jpg" id="card_musicas_home">
                  <h5 class="card-title-home">BORN TO BE (ITZY)</h5></a></div>
                                         
               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/track/26EM9sZnQkLLQxixGd88KE" target="_blank"><img src="imagens/capas-musicas/2ne1-i-am-the-best.jpg" id="card_musicas_home">
                  <h5 class="card-title-home">I AM THE BEST (2NE1)</h5></a></div>
                                            
               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/track/3o8QzWsiiqTUVgBZfHgF58" target="_blank"><img src="imagens/capas-musicas/nct-cherry-bomb.jfif" id="card_musicas_home">
                  <h5 class="card-title-home">CHERRY BOMB (NCT 127)</h5></a></div>
                                               
               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/track/0ARKW62l9uWIDYMZTUmJHF" target="_blank"><img src="imagens/capas-musicas/born_pink .png" id="card_musicas_home">
                  <h5 class="card-title-home">SHUT DOWN (BLACKPINK)</h5></a></div>
                 
               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/track/1aKvZDoLGkNMxoRYgkckZG" target="_blank"><img src="imagens/capas-musicas/illit-magnetic.jfif" id="card_musicas_home">
                  <h5 class="card-title-home">MAGNETIC (ILLIT)</h5></a></div>
    
               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/track/2qQpFbqqkLOGySgNK8wBXt" target="_blank"><img src="imagens/capas-musicas/twice-fancy.jfif" id="card_musicas_home">
                  <h5 class="card-title-home">FANCY (TWICE)</h5></a></div>
    
                 <div class="card-body-home">
                    <a href="https://open.spotify.com/intl-pt/track/6Yc3tjFCVR2bfAQFRTZBef" target="_blank"><img src="imagens/capas-musicas/bts-home.jfif" id="card_musicas_home">
                    <h5 class="card-title-home">HOME (BTS)</h5></a></div>
                       
                 <div class="card-body-home">
                    <a href="https://open.spotify.com/intl-pt/track/2YmfV4lAjrAQvuggKCUX6m" target="_blank"><img src="imagens/capas-musicas/enhypen-sweet-venom.jfif" id="card_musicas_home">
                    <h5 class="card-title-home">SWEET VENOM (ENHYPEN)</h5></a></div>
    
                 <div class="card-body-home">
                    <a href="https://open.spotify.com/intl-pt/track/0yB4jrSwN0bFtFRDR5vyMj" target="_blank"><img src="imagens/capas-musicas/exo-love-shot.jfif" id="card_musicas_home">
                    <h5 class="card-title-home">LOVE SHOT (EXO)</h5></a></div>

                 <div class="card-body-home">
                    <a href="https://open.spotify.com/intl-pt/track/1BAtAtx0VgWgAMROWK9WYf" target="_blank"><img src="imagens/capas-musicas/ive-accendio.jfif" id="card_musicas_home">
                    <h5 class="card-title-home">ACCENDIO (IVE)</h5></a></div>
                  
                  <div class="card-body-home">
                     <a href="https://open.spotify.com/intl-pt/track/2UuKZDzjZ7cVMOvpmuAMYj" target="_blank"><img src="imagens/capas-musicas/tell-me-wonder-girls.jfif" id="card_musicas_home">
                     <h5 class="card-title-home">TELL ME (WONDER GIRLS)</h5></a></div>

                  <div class="card-body-home">
                     <a href="https://open.spotify.com/intl-pt/track/35dhwUoJNlxrPyEIJkfDnx" target="_blank"><img src="imagens/capas-musicas/twice-i-got-you.jfif" id="card_musicas_home">
                     <h5 class="card-title-home">I GOT YOU (TWICE)</h5></a></div>

                  <div class="card-body-home">
                     <a href="https://open.spotify.com/intl-pt/track/6uTPA1xlcsk6dbchB2dhzl" target="_blank"><img src="imagens/capas-musicas/txt-back-for-more.jfif" id="card_musicas_home">
                     <h5 class="card-title-home">BACK FOR MORE (TXT)</h5></a></div>

                  <div class="card-body-home">
                     <a href="https://open.spotify.com/intl-pt/track/4OtVQ2ZxS7yigIjGz5yKg1" target="_blank"><img src="imagens/capas-musicas/twice-ready-to-be.jfif" id="card_musicas_home">
                     <h5 class="card-title-home">SET ME FREE (TWICE)</h5></a></div>
      
                  <div class="card-body-home">
                     <a href="https://open.spotify.com/intl-pt/track/0iuZMy88H6vxDA2oaJNhJg" target="_blank"><img src="imagens/capas-musicas/twice-perfect -world.jfif" id="card_musicas_home">
                     <h5 class="card-title-home">PERFECT WORLD (TWICE)</h5></a></div>
            
                  <div class="card-body-home">
                     <a href="https://open.spotify.com/intl-pt/track/1SaLI6o5GhfcaxPVAJoD3r" target="_blank"><img src="imagens/capas-musicas/aespa-hot-mess.jfif" id="card_musicas_home">
                     <h5 class="card-title-home">HOT MESS (AESPA)</h5></a></div>

                  <div class="card-body-home">
                     <a href="https://open.spotify.com/intl-pt/track/351KkakA2YtGEXqSEIIasy" target="_blank"><img src="imagens/capas-musicas/supernova-aspa.jpg" id="card_musicas_home">
                     <h5 class="card-title-home">SUPERNOVA (AESPA)</h5></a></div>
                  
                  <div class="card-body-home">
                     <a href="https://open.spotify.com/intl-pt/track/57RkVmnj3b1FUJoUdkSuZD" target="_blank"><img src="imagens/capas-musicas/everglow-zombie.jpg" id="card_musicas_home">
                     <h5 class="card-title-home">ZOMBIE (EVERGLOW)</h5></a></div>

                  <div class="card-body-home">
                     <a href="https://open.spotify.com/intl-pt/track/6m1TWFMeon7ai9XLOzdbiR" target="_blank"><img src="imagens/capas-musicas/bts-love-yourself.jpg" id="card_musicas_home">
                     <h5 class="card-title-home">FAKE LOVE (BTS)</h5></a></div>

                  <div class="card-body-home">
                     <a href="https://open.spotify.com/intl-pt/track/3RkSwrsIadAvqVtMp5yhaB" target="_blank"><img src="imagens/capas-musicas/enhypen-romance-undtold.jpg" id="card_musicas_home">
                     <h5 class="card-title-home">XO (ONLY IF YOU SAY YES) (ENHYPEN)</h5></a></div>

                  <div class="card-body-home">
                     <a href="https://open.spotify.com/intl-pt/track/3AoEQRuFf8zVXWqSLo2UOi" target="_blank"><img src="imagens/capas-musicas/le-sserafim-crazy.jpg" id="card_musicas_home">
                     <h5 class="card-title-home">CRAZY (LE SSERAFIM)</h5></a></div>       

                  <div class="card-body-home">
                     <a href="https://open.spotify.com/intl-pt/track/021L6LlBBtr34BmFRHd9Ic" target="_blank"><img src="imagens/capas-musicas/everglow-last-melody.jpg" id="card_musicas_home">
                     <h5 class="card-title-home">FIRST (EVERGLOW)</h5></a></div>
                              
                  <div class="card-body-home">
                     <a href="https://open.spotify.com/intl-pt/track/2UE9XGbAzicJIyo4bB6sqM" target="_blank"><img src="imagens/capas-musicas/seventeen-right-here.jpg" id="card_musicas_home">
                     <h5 class="card-title-home">MAESTRO (SEVENTEEN)</h5></a></div>
                                 
                  <div class="card-body-home">
                     <a href="https://open.spotify.com/intl-pt/track/210JJAa9nJOgNa0YNrsT5g" target="_blank"><img src="imagens/capas-musicas/newjeans-gods.jpg" id="card_musicas_home">
                     <h5 class="card-title-home">GODS (NEWJEANS)</h5></a></div>

                  <div class="card-body-home">
                     <a href="https://open.spotify.com/intl-pt/track/1iNvVaWmlKJns2LNTXN39Q" target="_blank"><img src="imagens/capas-musicas/aespa-savage.jfif" id="card_musicas_home">
                     <h5 class="card-title-home">AENERGY (AESPA)</h5></a></div>

                  <div class="card-body-home">
                     <a href="https://open.spotify.com/intl-pt/track/7muTXW7kGytN3zdomku6FV" target="_blank"><img src="imagens/capas-musicas/sunmi-tail.jfif" id="card_musicas_home">
                     <h5 class="card-title-home">TAIL (SUNMI)</h5></a></div>

                  <div class="card-body-home">
                     <a href="https://open.spotify.com/intl-pt/track/5XWlyfo0kZ8LF7VSyfS4Ew" target="_blank"><img src="imagens/capas-musicas/aespa-drama.jpg" id="card_musicas_home">
                     <h5 class="card-title-home">DRAMA (AESPA)</h5></a></div>

                  <div class="card-body-home">
                     <a href="https://open.spotify.com/intl-pt/track/296nXCOv97WJNRWzIBQnoj" target="_blank"><img src="imagens/capas-musicas/le-sserafim-fearles.jpg" id="card_musicas_home">
                     <h5 class="card-title-home">FEARLESS (LE SSERAFIM)</h5></a></div>

                  <div class="card-body-home">
                     <a href="https://open.spotify.com/intl-pt/track/7hU3IHwjX150XLoTVmjD0q" target="_blank"><img src="imagens/capas-musicas/lisa-lalisa.jfif" id="card_musicas_home">
                     <h5 class="card-title-home">MONEY (LISA)</h5></a></div>

                  <div class="card-body-home">
                     <a href="https://open.spotify.com/intl-pt/track/5sdQOyqq2IDhvmx2lHOpwd" target="_blank"><img src="imagens/capas-musicas/new-jeans-get-up.jfif" id="card_musicas_home">
                     <h5 class="card-title-home">SUPER SHY (NEWJEANS)</h5></a></div>

                  <div class="card-body-home">
                     <a href="https://open.spotify.com/intl-pt/track/0jFHMDRXxKaREor3hBEEST" target="_blank"><img src="imagens/capas-musicas/sunmi-gashina.jfif" id="card_musicas_home">
                     <h5 class="card-title-home">GASHINA (AESPA)</h5></a></div>

                  <div class="card-body-home">
                     <a href="https://open.spotify.com/intl-pt/track/5vK3WrTOp6rEoASx1jAsp1" target="_blank"><img src="imagens/capas-musicas/twice-dive.jfif" id="card_musicas_home">
                     <h5 class="card-title-home">DIVE (TWICE)</h5></a></div>

                  <div class="card-body-home">
                     <a href="https://open.spotify.com/intl-pt/track/4e1aewX6ATPcdfQIqr7gqO" target="_blank"><img src="imagens/capas-musicas/kiss-of-life-sticky.jfif" id="card_musicas_home">
                     <h5 class="card-title-home">STICKY (KISS OF LIFE)</h5></a></div>

                  <div class="card-body-home">
                     <a href="https://open.spotify.com/intl-pt/track/1ULdASrNy5rurl1TZfFaMP" target="_blank"><img src="imagens/capas-musicas/aespa-my-world.jpg" id="card_musicas_home">
                     <h5 class="card-title-home">SIPCY (AESPA)</h5></a></div>

                  <div class="card-body-home">
                     <a href="https://open.spotify.com/intl-pt/track/69xohKu8C1fsflYAiSNbwM" target="_blank"><img src="imagens/capas-musicas/bts-proof.jpg" id="card_musicas_home">
                     <h5 class="card-title-home">RUN (BTS)</h5></a></div>

                  <div class="card-body-home">
                     <a href="https://open.spotify.com/intl-pt/track/7uyeEbG6hyApgXuEypGcsZ" target="_blank"><img src="imagens/capas-musicas/ive-mine.jpg" id="card_musicas_home">
                     <h5 class="card-title-home">BADDIE (IVE)</h5></a></div>

                  <div class="card-body-home">
                     <a href="https://open.spotify.com/intl-pt/track/1OG1NoKpZZLrMqMYCk9m84" target="_blank"><img src="imagens/capas-musicas/stray-kids-rock-star.jfif" id="card_musicas_home">
                     <h5 class="card-title-home">LALALALA (STRAY KIDS)</h5></a></div>

                  <div class="card-body-home">
                     <a href="https://open.spotify.com/intl-pt/track/5OlieB5VdsOMuBuCtllXGW" target="_blank"><img src="imagens/capas-musicas/bts-dark-&-wild.jpg" id="card_musicas_home">
                     <h5 class="card-title-home">BTS CYPHER (BTS)</h5></a></div>

                  <div class="card-body-home">
                     <a href="https://open.spotify.com/intl-pt/track/2pIUpMhHL6L9Z5lnKxJJr9" target="_blank"><img src="imagens/capas-musicas/newjeans-newjeans.jpg" id="card_musicas_home">
                     <h5 class="card-title-home">ATTENTION (NEWJEANS)</h5></a></div>

                  <div class="card-body-home">
                     <a href="https://open.spotify.com/intl-pt/track/6vvPecFTmWxDfEJ6cYT1wa" target="_blank"><img src="imagens/capas-musicas/lisa-rockstar.jpg" id="card_musicas_home">
                     <h5 class="card-title-home">ROCKSTAR (LISA)</h5></a></div>

                  <div class="card-body-home">
                     <a href="https://open.spotify.com/intl-pt/track/4MTNimMDRyFZv37Thcktwa" target="_blank"><img src="imagens/capas-musicas/seventeen-sevententh-heaven.jpg" id="card_musicas_home">
                     <h5 class="card-title-home">GOD OF MUSIC (SEVENTEEN)</h5></a></div>
            </div>
         </div>

            <button  id="prox-btn-musicas"> <img src="imagens/botao_categoria_previa(direita).png" id="botao-imagem"></button>                  
    </div>
               

    <!-- PREVIA GRUPOS --> 
    <div id="previa_grupos">

      <button id="antes-btn-grupos"> <img src="imagens/botao_categoria_previa(esquerda).png" id="botao-imagem"></button>

      <div class="carrosel-grupos">
         <div class="div-movimentacao-grupos">
            
            <div>
               <a href="aespa.php"><img src="imagens/polaroid_aespa.jpg" id="polaroid-grupos"></a>
            </div>

            <div>
               <a href="blackpink.php"><img src="imagens/polaroid_blackpink.jpg" id="polaroid-grupos"></a>
            </div>

            <div>
               <a href="babymonster.php"><img src="imagens/polaroid_babymonster.jpg" id="polaroid-grupos"></a>
            </div>

            <div>
               <a href="kiss-of-life.php"><img src="imagens/polaroid_kiss_of_life.jpg" id="polaroid-grupos"></a>
            </div>

            <div>
               <a href="seventeen.php"><img src="imagens/polaroid_seventeen.jpg" id="polaroid-grupos"></a>
            </div>

            <div>
               <a href="everglow.php"><img src="imagens/polaroid_everglow.jpg" id="polaroid-grupos"></a>
            </div>

            <div>
               <a href="g-idle.php"><img src="imagens/polaroid_gidle.jpg" id="polaroid-grupos"></a>
            </div>

            <div>
               <a href="enhypen.php"><img src="imagens/polaroid_enhypen.jpg" id="polaroid-grupos"></a>
            </div>

            <div>
               <a href="red-velvet.php"><img src="imagens/polaroid_red-velvet.jpg" id="polaroid-grupos"></a>
            </div>

            <div>
               <a href="itzy.php"><img src="imagens/polaroid_itzy.jpg" id="polaroid-grupos"></a>
            </div>

            <div>
               <a href="ateez.php"><img src="imagens/polaroid_ateez.jpg" id="polaroid-grupos"></a>
            </div>

            <div>
               <a href="txt.php"><img src="imagens/polaroid_txt.jpg" id="polaroid-grupos"></a>
            </div>

            <div>
               <a href="ive.php"><img src="imagens/polaroid_ive.jpg" id="polaroid-grupos"></a>
            </div>

            <div>
               <a href="le-sserafim.php"><img src="imagens/polaroid_lesserafim.jpg" id="polaroid-grupos"></a>
            </div>

            <div>
               <a href="newjeans.php"><img src="imagens/polaroid_newjeans.jpg" id="polaroid-grupos"></a>
            </div>

            <div>
               <a href="stray-kids.php"><img src="imagens/polaroid_stray_kids.jpg" id="polaroid-grupos"></a>
            </div>

            <div>
               <a href="twice.php"><img src="imagens/polaroid_twice.jpg" id="polaroid-grupos"></a>
            </div>

            <div>
               <a href="bts.php"><img src="imagens/polaroid_bts.jpg" id="polaroid-grupos"></a>
            </div>

         </div>
      </div>

         <button  id="prox-btn-grupos"> <img src="imagens/botao_categoria_previa(direita).png" id="botao-imagem"></button>                  
 </div>


    <!-- PREVIA ALBUNS--> 

    <div id="previa_albuns">

      <button id="antes-btn-albuns"> <img src="imagens/botao_categoria_previa(esquerda).png" id="botao-imagem"></button>

      <div class="carrosel-albuns">
         <div class="div-movimentacao-albuns">
            
            <div class="card-body-home">
               <a href="https://open.spotify.com/intl-pt/album/0mC9MXPddkzggVsOXh5gd3" target="_blank"><img src="imagens/capas-musicas/gidle-2.jpg" id="card-albuns">
               <h5 class="card-title-home">2 (G-IDLE)</h5></a></div>

            <div class="card-body-home">
               <a href="https://open.spotify.com/intl-pt/album/7J41hCLBI2kEwL6RVSxfNx" target="_blank"><img src="imagens/capas-musicas/aespa-whiplash.jpg" id="card-albuns">
               <h5 class="card-title-home">WHIPLASH (AESPA)</h5></a></div>
               
            <div class="card-body-home">
               <a href="https://open.spotify.com/intl-pt/album/7jaSNQUBJbvfbZHLNFrV7P" target="_blank"><img src="imagens/capas-musicas/born_pink .png" id="card-albuns">
               <h5 class="card-title-home">BORN PINK (BLACKPINK)</h5></a></div>

            <div class="card-body-home">
               <a href="https://open.spotify.com/intl-pt/album/0mDwrOXZHN1lgCNeBvkBbj" target="_blank"><img src="imagens/capas-musicas/txt-tomorrow.jpg" id="card-albuns">
               <h5 class="card-title-home">MINISODE 3: TOMORROW (TXT)</h5></a></div>

            <div class="card-body-home">
               <a href="https://open.spotify.com/intl-pt/album/5lHtH6O6mCnVx1MNuPPBQK" target="_blank"><img src="imagens/capas-musicas/red-velvet-cosmic.jfif" id="card-albuns">
               <h5 class="card-title-home">COSMIC (RED VELVET)</h5></a></div>

            <div class="card-body-home">
               <a href="https://open.spotify.com/intl-pt/album/7tgTOUXm74GKA12wsQIUPu" target="_blank"><img src="imagens/capas-musicas/twice-dive.jfif" id="card-albuns">
               <h5 class="card-title-home">DIVE (TWICE)</h5></a></div>

            <div class="card-body-home">
               <a href="https://open.spotify.com/intl-pt/album/4Oz7K9DRwwGMN49i4NbVDT" target="_blank"><img src="imagens/capas-musicas/le-sserafim-unforgiven.jpg" id="card-albuns">
               <h5 class="card-title-home">UNFORGIVEN (LE SSERAFIM)</h5></a></div>
                                      
            <div class="card-body-home">
               <a href="https://open.spotify.com/intl-pt/album/3WdsoMKRqtw5Sgg67YrpnY" target="_blank"><img src="imagens/capas-musicas/stray-kids-ate.jfif" id="card-albuns">
               <h5 class="card-title-home">ATE (STRAY KIDS)</h5></a></div>
                                         
            <div class="card-body-home">
               <a href="https://open.spotify.com/intl-pt/album/7dsAlxH9cMgyREm8OLdWWT" target="_blank"><img src="imagens/capas-musicas/enhypen-orange-blood.jpg" id="card-albuns">
               <h5 class="card-title-home">ORANGE BLOOD (ENHYPEN)</h5></a></div>
                                            
            <div class="card-body-home">
               <a href="https://open.spotify.com/intl-pt/album/2Jrp37x38qZqtyrIrfxN4H" target="_blank"><img src="imagens/capas-musicas/seventeen-right-here.jpg" id="card-albuns">
               <h5 class="card-title-home">17 IS RIGHT HERE (SEVENTEEN)</h5></a></div>
              
            <div class="card-body-home">
               <a href="https://open.spotify.com/intl-pt/album/1r0F1EzzNOaJyB7U0Jp5RH" target="_blank"><img src="imagens/capas-musicas/ateez-the-world.jpg" id="card-albuns">
               <h5 class="card-title-home">WILL (ATEEZ)</h5></a></div>
 
            <div class="card-body-home">
               <a href="https://open.spotify.com/intl-pt/album/43wFM1HquliY3iwKWzPN4y" target="_blank"><img src="imagens/capas-musicas/bts-love-yourself-answer.jpg" id="card-albuns">
               <h5 class="card-title-home">LOVE YOURSELF ANSWER (BTS)</h5></a></div>
 
              <div class="card-body-home">
                 <a href="https://open.spotify.com/intl-pt/album/4NIqCxqP9o8Tp6tGLBqd8O" target="_blank"><img src="imagens/capas-musicas/bts-love-yourself.jpg" id="card-albuns">
                 <h5 class="card-title-home">LOEVE YOURSELF TEAR (BTS)</h5></a></div>
                    
              <div class="card-body-home">
                 <a href="https://open.spotify.com/intl-pt/album/0Gmf4pfe0POEQq2FgGAj2q" target="_blank"><img src="imagens/capas-musicas/stray-kids-oddinary.jfif" id="card-albuns">
                 <h5 class="card-title-home">ODDINARY (STRAY KIDS)</h5></a></div>
 
               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/album/4w1dbvUy1crv0knXQvcSeY" target="_blank"><img src="imagens/capas-musicas/aespa-girls.jpg" id="card-albuns">
                  <h5 class="card-title-home">GIRLS (AESPA)</h5></a></div>

              <div class="card-body-home">
                 <a href="https://open.spotify.com/intl-pt/track/1BAtAtx0VgWgAMROWK9WYf" target="_blank"><img src="imagens/capas-musicas/kiss-of-life-lose-yourself.jpg" id="card-albuns">
                 <h5 class="card-title-home">LOSE YOURSELF (KISS OF LIFE)</h5></a></div>
               
               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/album/0zH0C0fkzAjhSnGKLOuxwX" target="_blank"><img src="imagens/capas-musicas/everglow-reminiscence.jpg" id="card-albuns">
                  <h5 class="card-title-home">REMINISCENCE (EVERGLOW)</h5></a></div>

               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/album/05I8FltCMnGa3kE38mpOkL" target="_blank"><img src="imagens/capas-musicas/enhypen-romance-undtold.jpg" id="card-albuns">
                  <h5 class="card-title-home">ROMANCE: UNTOLD (ENHYPEN)</h5></a></div>

               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/album/3cm3EkNQLpKu58btSJT7fz" target="_blank"><img src="imagens/capas-musicas/itzy-born-to-be.jpg" id="card-albuns">
                  <h5 class="card-title-home">BORN TO BE (ITZY)</h5></a></div>

               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/album/538vEfAgLJ6g2I8ubuOlap" target="_blank"><img src="imagens/capas-musicas/le-sserafim-crazy.jpg" id="card-albuns">
                  <h5 class="card-title-home">CRAZY (LE SSERAFIM)</h5></a></div>
   
               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/album/4N1fROq2oeyLGAlQ1C1j18" target="_blank"><img src="imagens/capas-musicas/new-jeans-get-up.jfif" id="card-albuns">
                  <h5 class="card-title-home">GET UP (NEW JEANS)</h5></a></div>
         
               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/album/5NMtxQJy4wq3mpo3ERVnLs" target="_blank"><img src="imagens/capas-musicas/aespa-drama.jpg" id="card-albuns">
                  <h5 class="card-title-home">DRAMA (AESPA)</h5></a></div>

               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/album/71O60S5gIJSIAhdnrDIh3N" target="_blank"><img src="imagens/capas-musicas/blackpink-pretty-savage.jfif" id="card-albuns">
                  <h5 class="card-title-home">THE ALBUM (BLACKPINK)</h5></a></div>
               
               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/album/0eSbsl3j8jz96LC2NCLPc4" target="_blank"><img src="imagens/capas-musicas/babymonster-babymonster.jpg" id="card-albuns">
                  <h5 class="card-title-home">BABYMONST7ER (BABYMONSTTER)</h5></a></div>

               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/album/5k34rAvlw3WV7Kh6dAZnxG" target="_blank"><img src="imagens/capas-musicas/kiss-of-life.jfif" id="card-albuns">
                  <h5 class="card-title-home">KISS OF LIFE (KISS OF LIFE)</h5></a></div>

               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/album/4lfFgz2rD1irxf7dZhNJht" target="_blank"><img src="imagens/capas-musicas/seventeen-face-the-sun.jpg" id="card-albuns">
                  <h5 class="card-title-home">FACE THE SUN (SEVENTEEN)</h5></a></div>

               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/album/2Hyuin3i1cSZ1FlQFeCPZH" target="_blank"><img src="imagens/capas-musicas/gidle-i-love.jpg" id="card-albuns">
                  <h5 class="card-title-home">I LOVE (G-IDLE)</h5></a></div>       

               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/album/7q65W5gVANjh1j1KXLeU0f" target="_blank"><img src="imagens/capas-musicas/enhypen-dark-blood.jpg" id="card-albuns">
                  <h5 class="card-title-home">DARK BLOOD (ENHYPEN)</h5></a></div>
                           
               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/album/6MNlcai3skKLKv5syzFwC3" target="_blank"><img src="imagens/capas-musicas/red-velvet-russian-roulette.jpg" id="card-albuns">
                  <h5 class="card-title-home">RUSSIAN ROULETTE (RED VELVET)</h5></a></div>
                              
               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/album/4U7rGOkJgtxs27H9L93Xli" target="_blank"><img src="imagens/capas-musicas/itzy-carzy-in-love.jpg" id="card-albuns">
                  <h5 class="card-title-home">CRAZY IN LOVE (ITZY)</h5></a></div>

               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/album/5DxixnuklLg28S7UMeGC9H" target="_blank"><img src="imagens/capas-musicas/ateez-the-world-ep2.jpg" id="card-albuns">
                  <h5 class="card-title-home">OUTLAW (ATEEZ)</h5></a></div>

               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/album/5Zdr9vactwnJH4Vpe9Mid9" target="_blank"><img src="imagens/capas-musicas/txt-freeze.jpg" id="card-albuns">
                  <h5 class="card-title-home">FREEZE (TXT)</h5></a></div>

               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/album/7z61DsZtWO2S4nC5xd0b9p" target="_blank"><img src="imagens/capas-musicas/ive-accendio.jfif" id="card-albuns">
                  <h5 class="card-title-home">IVE SWITCH (IVE)</h5></a></div>

               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/album/4Mc7WwYH41hgUWeKX25Sot" target="_blank"><img src="imagens/capas-musicas/le-sserafim-fearles.jpg" id="card-albuns">
                  <h5 class="card-title-home">FEARLESS (LE SSERAFIM)</h5></a></div>

               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/album/1FVw30SoC91lq1UZ6N9rwN" target="_blank"><img src="imagens/capas-musicas/newjeans-supernatural.jpg" id="card-albuns">
                  <h5 class="card-title-home">SUPERNATURAL (NEW JEANS)</h5></a></div>

               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/album/3Pel3gWsPxVpZVrciU0Fm6" target="_blank"><img src="imagens/capas-musicas/stray-kids-5-star.jfif" id="card-albuns">
                  <h5 class="card-title-home">5-STAR (STRAY KIDS)</h5></a></div>

               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/album/2GKTroaa4ysyhEdvzpvUoM" target="_blank"><img src="imagens/capas-musicas/twice-summer-nights.jfif" id="card-albuns">
                  <h5 class="card-title-home">SUMMER NIGHTS (TWICE)</h5></a></div>

               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/album/6nYfHQnvkvOTNHnOhDT3sr" target="_blank"><img src="imagens/capas-musicas/bts-be.jpg" id="card-albuns">
                  <h5 class="card-title-home">BE (BTS)</h5></a></div>

               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/album/3vyyDkvYWC36DwgZCYd3Wu" target="_blank"><img src="imagens/capas-musicas/aespa-savage.jfif" id="card-albuns">
                  <h5 class="card-title-home">SAVAGE (AESPA)</h5></a></div>

               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/album/1rE0Gy69MFUh4GuXafWd0f" target="_blank"><img src="imagens/capas-musicas/seventeen-sevententh-heaven.jpg" id="card-albuns">
                  <h5 class="card-title-home">SEVENTEENTH HEAVEN (SEVENTEEN)</h5></a></div>

               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/album/1T2W9vDajFreUuycPDjUXk" target="_blank"><img src="imagens/capas-musicas/gidle-i-never-die.jpg" id="card-albuns">
                  <h5 class="card-title-home">I NEVER DIE (G-IDLE)</h5></a></div>

               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/album/4LGYBcRsteiXjcPD4QQvxv" target="_blank"><img src="imagens/capas-musicas/enhypen-border-carnival.jpg" id="card-albuns">
                  <h5 class="card-title-home">BORDER: CARNIVAL (ENHYPEN)</h5></a></div>

               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/album/0rvrbZvaDX5S9ZBhwOwFfH" target="_blank"><img src="imagens/capas-musicas/red-velvet-perfect-velvet.jpg" id="card-albuns">
                  <h5 class="card-title-home">PERFECT VELVET (RED VELVET)</h5></a></div>

               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/album/6P01cKb7sdwfnNpuMLNEik" target="_blank"><img src="imagens/capas-musicas/itzy-kill-my-doubt.jpg" id="card-albuns">
                  <h5 class="card-title-home">KILL MY DOUBT (ITZY)</h5></a></div>

               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/album/4HGhzqQEY1X6WWZw6MhjlO" target="_blank"><img src="imagens/capas-musicas/ateez-treasure.jpg" id="card-albuns">
                  <h5 class="card-title-home">ALL TO ACTION (ATEEZ)</h5></a></div>

               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/album/63fWdGyeBj8VDjvHSUROx3" target="_blank"><img src="imagens/capas-musicas/txt-freefall.jpg" id="card-albuns">
                  <h5 class="card-title-home">FREEFAL (TXT)</h5></a></div>

               <div class="card-body-home">
                  <a href="https://open.spotify.com/intl-pt/album/38VzP4yWfHdHafITKKRHEB" target="_blank"><img src="imagens/capas-musicas/ive-ive.jpg" id="card-albuns">
                  <h5 class="card-title-home">I'VE IVE (IVE)</h5></a></div>
         </div>
      </div>

         <button id="prox-btn-albuns"> <img src="imagens/botao_categoria_previa(direita).png" id="botao-imagem"></button>                  
 </div>
     <!-- =========================================================================================================== -->


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

     
</body>
</html>