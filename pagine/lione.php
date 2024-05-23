<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UFT-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>
            Francia
        </title>
        <SCRIPT src="script.js"> </SCRIPT>
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.min.css" integrity="sha512-fJcFDOQo2+/Ke365m0NMCZt5uGYEWSxth3wg2i0dXu7A1jQfz9T4hdzz6nkzwmJdOdkcS8jmy2lWGaRXl+nFMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="icon" type="image/x-icon" href="../immagini/logo.png">
    </head>

    <body>
        <header>
            <div class="homebar">
                <a href="../index.php">
                    <img src="../immagini/logo.png" width="110px" height="60px" id="logo">
                    Holiway
                </a>
                <a href="Chi-Siamo.html">Chi siamo</a>
            </div>
        </header>

        <main>
            <div class="city-container">
                <section class="city-text-container">
                    <div class="div-row-col">

                        <div class="col-sx">
                            <div class="irrelevant-text-left">Francia</div>
                            <div class="catchy-phrase-text">Una roba che attira l'attenzione!</div>
                            <div class="filler-text">
                                <p>Scoprite il Fascino di Parigi:
                                    Iniziate il vostro viaggio nel cuore della Francia con una visita alla magica Parigi. Sotto la Torre Eiffel, passeggerete per le strade lastricate del Quartiere Latino, e ammirerete le opere d'arte al Louvre. Lasciatevi conquistare dalla raffinatezza dei suoi caffè, dalla sua cucina squisita e dall'atmosfera romantica che permea l'intera città.</p>
                                <p>Esperienze uniche nelle Regioni Francesi:
                                    La Francia è molto più di Parigi! Esplorate la pittoresca campagna della Normandia, ammirando i maestosi scogli di Étretat e assaporando i famosi formaggi locali. O godetevi il fascino della Provenza, tra campi di lavanda e pittoreschi villaggi, respirando l'aria profumata di rose e timo.</p>
                                <p>Scoprite la Storia nei Castelli della Loira:
                                    Avventuratevi tra i maestosi castelli della Valle della Loira, testimoni di un'epoca di sfarzo e splendore. Ammirate l'architettura gotica di Chambord, perdetevi nei giardini di Villandry e immergetevi nell'atmosfera fiabesca di Chenonceau, dove la storia prende vita sotto i vostri occhi.</p>
                                <p>Cucina Francese: una Delizia per il Palato:
                                    Gli amanti del cibo non resteranno delusi dalla cucina francese. Gustatevi un pranzo gourmet in un bistrot parigino, assaporando i sapori raffinati di foie gras e escargot. O lasciatevi tentare dalle prelibatezze locali nei mercati provenzali, tra pane croccante, formaggi aromatici e vini deliziosi.</p>
                                <p>Viaggio su Misura con Holiway:
                                    Presso Holiway, ci impegniamo a rendere il vostro viaggio in Francia un'esperienza indimenticabile e senza stress. Dal momento della prenotazione fino al vostro ritorno a casa, sarete assistiti da professionisti del settore che si prenderanno cura di ogni dettaglio</p>
                            </div>
                            <div class="image-container">
                                <div><img class="img-res-2" src="../immagini/champagne.jpg"></div>
                            </div>
                        </div>

                        <div class="col-dx">
                            <div class="image-container">
                                <div><img class="img-res-2" src="../immagini/Lione.jpg"></div>
                            </div>
                            <div class="testo-sotto-immagine">Cosa puo' offrire</div>
                            <div class="filler-text-right">
                                <p>Nel cuore dell'Europa, tra paesaggi dipinti da artisti e città intrise di storia, un viaggio in Francia si trasforma in un'avventura indimenticabile tra arte, cultura e gastronomia.</p>
                                <p style="margin-top: 10px;">In questo viaggio incantato attraverso la Francia, si scopre non solo la bellezza dei suoi paesaggi e la ricchezza della sua storia, ma anche l'essenza stessa del savoir-vivre francese, fatta di buon cibo, buon vino e il piacere di condividere momenti preziosi con coloro che amiamo. È un viaggio che lascia un'impronta indelebile nella mente e nel cuore di chi ha il privilegio di compierlo, arricchendo la vita con ricordi indelebili e ispirazioni senza fine.</p>
                            </div>
                            <div class="bottone_prezzo">
                                <?php 
                                $_SESSION["Prezzo"] = 800;
                                ?>
                                <a href="../backend/lose_money.php"><p>A partire da 800$</p></a>
                            </div>
                        </div>

                    </div>
                </section>
            </div>

            <div class="sub-text">
                <strong id="destinazioni"> Altre Destinazioni:</strong>
            </div>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.pkgd.min.js" integrity="sha512-achKCfKcYJg0u0J7UDJZbtrffUwtTLQMFSn28bDJ1Xl9DWkl/6VDT3LMfVTo09V51hmnjrrOTbtg4rEgg0QArA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

            <div class="main-carousel" data-flickity='{ "cellAlign": "left", "contain": true}'>
                <div class="carousel-cell-sudafrica"><a href="../pagine/sudafrica.html" class="carousel-text">SudAfrica</a></div>
                <div class="carousel-cell-giappone"><a href="../pagine/giappone.html" class="carousel-text">Giappone</a></div>
                <div class="carousel-cell-messico"><a href="../pagine/messico.html" class="carousel-text">Messico</a></div>
                <div class="carousel-cell-stati-uniti"><a href="../pagine/statiuniti.html" class="carousel-text">Stati Uniti</a></div>
                <div class="carousel-cell-italia"><a href="../pagine/italia.html" class="carousel-text">Italia</a></div>
            </div>

        </main>
        <footer>
            <ul class="footerbar">
                <li><p>Sito creato con la collaborazione di: Aloi Vincenzo, Vivenzio Francesco e Barbato Luca</p></li>
            </ul>
        </footer>
    </body>
</html>