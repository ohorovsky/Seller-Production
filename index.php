<?php
 
include 'counter.php';

$error = "";

    if ($_POST){
        
        if (!$_POST["email"]){
            
            $error .= "An email adress is required.<br>";
            
        }
        
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            $error .= "The email address is invalid.<br>";
        }
        
        if ($error != ""){
            
            $error = '<div class="alert alert-danger" role="alert">
                            <strong>Oh no!</strong> Check your email adress and try submitting again.</div>';
            
        } else{
            
            $emailTo = "o.horovsky@gmail.com";
            $name = $_POST['name'];
            $comment = $_POST['comment'];
            $headers = "From: ".$_POST['email'];
            
            if(mail($emailTo, $name, $comment, $headers)){
                
                $successMessage = '<div class="alert alert-success" role="alert">
                            Your message has been sent! I\'ll get in touch ASAP!</div>';
                
            }
            
        }
        
    }

?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <link href="style/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="style/main.css">
        <script src="js/prefixfree.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700" rel="stylesheet">
    </head>

    <body>
        <nav class="navbar">
            <div class="container">
                <ul class="navbar-left">
                    <!--nested block-->
                    <li class="navbar-left__item"><a class="navbar-left__tile" href="#header">Home</a></li>
                    <li class="navbar-left__item"><a class="navbar-left__tile" href="#main">Bio</a></li>
                </ul>

                <ul class="navbar-right">
                    <!--nested block-->
                    <li class="navbar-right__item"><a class="navbar-right__tile" href="#music">Music</a></li>
                    <li class="navbar-right__item"><a class="navbar-right__tile" href="#footer">Contact</a></li>
                </ul>
            </div>
        </nav>
        <img class="navbar-logo" src="img/logo.png">
        <img class="mobile-logo" src="img/logo.png">
        <a class="menuBtn">
            <span class="icon-line"></span>
            <span class="icon-line"></span>
            <span class="icon-line"></span>
        </a>

        <div class="menu">
            <div class="menuItems">
                <a href="#header"><h1>HOME</h1></a>
                <a href="#main"><h1>BIO</h1></a>
                <a href="#music"><h1>MUSIC</h1></a>
                <a href="#footer"><h1>CONTACT</h1></a>
            </div>
        </div>
        <header id="header">

        </header>
        <div class="header-overlay">
            <h1><span class="fade-left">Music <span class="slash">/</span> Audio </span> <span class="fade-right">Production</span></h1>
            <div class="play">
                <p class="up">Audio/Video</p>
                <div class="lineBreak"></div>
                <p class="down">Click to Play</p>
                <div class="audio-icons">
                    <a class="icon1" href="" target="_blank"><img src="img/bandcamp.png"></a>
                    <a class="icon2" href="" target="_blank"><img src="img/reverbnation.png"></a>
                    <a class="icon3" href="" target="_blank"><img src="img/soundcloud.jpg"></a>
                    <a class="icon4" href="" target="_blank"><img src="img/youtube.png"></a>
                    <a class="iconBack" href="" onclick="return false;"><i class="fa fa-times" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="buy">
                <p class="up">Releases</p>
                <div class="lineBreak"></div>
                <p class="down">Click to Buy</p>
                <div class="buy-icons">
                    <a href=""><img src=""></a>
                    <a href=""><img src=""></a>
                    <a href=""><img src=""></a>
                </div>

            </div>
        </div>
        <section id="main">
            <section class="bio">
                <div class="bio_overlay">
                    <div class="container">
                        <h2>BIO</h2>
                        <div class="lineBreak"></div>
                        <div class="studioText">
                            <p>Love for the music, absolute devotion and humility towards it. I do not know if anything else what would be so clear and totally unexplainable at the same time exists. The music. Phenomenon which causes the joy or pain. It let’s you feel the whole variety of the emotions. I can easily regard it as the essentiality for the human. You can hear it, feel it, see it and literally touch it in your fantasy. It leads the man since the Tamtam has been hit for the first time. 12 simple tones, but infinite combinations, variations and music algorithms, which effect the human feelings. Music can evoke the total relaxation or help you to get rid of the depression. Smile, joy. On the other hand it can evoke the anxiety, vulnerability, fear, anger or even the insanity. Waking up in the morning and listening to your favourite melody is priceless. On your way to the work or school, playing your ‘daily dose’ of music to put your mind in the tune. Every adjective can be used to describe the music. We are talking about something that can not be described by words. It is something that accompany us since we open the eyes for the first time, until we close them for the last one. No-one has defined this wonder. Because when there is one, it is called MUSIC. This is the phenomenon I appreciate a lot. This is what Seller Production is here for. For serving this phenomenon to all of you. Helping you to fulfil your dreams.</p>
                        </div>
                    </div>

                </div>


            </section>
            <section class="studio">
                <div class="bio_overlay">
                    <div class="container">
                        <h2>STUDIO</h2>
                        <div class="lineBreak"></div>
                        <div class="studioText">

                            <h4>HARDWARE:</h4>
                            <p>Mac Pro Intel Xeon - 3x/ GENELEC 1030A / JBL Control 1C / Digital YAMAHA 02R / YAMAHA DMP 9-16 / Marantz NA7004 Network Audio Player / AKAI S5000 & S3000 / Kawai MAV-8 / MIDI Macman interface Merge 2-in / 2-out / MIDI MiniMacman interface / Midisport 2x2 USB MIDI interface / AKG C3000B / SHURE HSMC001 / SENNHEISER: HD 280 / Akayo Pro - 62CD </p>
                            <h4>AUDIO INTERFACE: </h4>
                            <p>ADAT BRIDGE 16 channel adat interface / AVID HD OMNI / Steinberg MR 816x / Word Clock Sample Rate Generator: SyncGen / DIGI 002 Avid / M-Audio Pro Fire 610</p>
                            <h4>SOFTWARE: </h4>
                            <p>Pro TOOLS 12.7 Native / Pro TOOLS 12.7 HD + plug ins AAX / Waves / UAE / Pro TOOLS 12.6.1 Native / Cubase 8.5.20 / VST Plugins </p>
                            <h4>SYNTHETIZER MODUL's & KEYBOARD's:</h4>
                            <p>ProTeus/1 XR / Alesis D4 / Kurzweil - Micro Piano / KORG Trinity Plus / KORG 01/W fd / KORG TR / ProKeys Sono 88</p>

                        </div>

                    </div>

                </div>
            </section>
        </section>
        <div id="music">
            <h1>MUSIC <span class="slash">/</span> VIDEO</h1>
        </div>
        <section id="feature">
            <iframe width="100%" height="265" scrolling="no" frameborder="no" src="https://www.reverbnation.com/widget_code/html_widget/artist_5324043?widget_id=55&pwc[included_songs]=1&context_type=page_object&spoid=artist_5646980&pwc[size]=small"></iframe>


        </section>
        <footer id="footer">
            <a href="#header">
                <div class="arrowTop"></div>
            </a>
            <div class="contact">
                <p>Seller Media s.r.o.</p>
                <p>Radlinského 15</p>
                <p>040 17 Košice</p>


            </div>
            <a class="email" href="mailto:sellerproduction@sellerproduction.com">sellerproduction<span class="slash">@</span>sellerproduction.com</a>
            <br>
            <button id="contactBtn">GET IN TOUCH</button>

            <!-- MODAL -->

            <div id="myModal" class="modal">

                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close">&times;</span>
                        <h2>CONTACT US</h2>
                    </div>
                    <div class="modal-body">
                        <form id="form" method="post">
                            <fieldset class="pull-left">
                                <label for="name">Name</label>
                                <br>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                            </fieldset>

                            <fieldset class="pull-right">
                                <label for="email">Email address</label>
                                <br>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
                                <br>
                                <small class="text-muted">I'll never share your email with anyone else.</small>
                            </fieldset>
                            <div class="clearfix"></div>
                            <div id="error"><?php echo $error.$successMessage; ?></div> 
                            <div class="danger">
                            <strong>Oh no!</strong> Check your email adress and try submitting again.
                        </div>

                            <fieldset class="comment">
                                <label for="comment">Comment</label>
                                <br>
                                <textarea class="form-control" id="comment" name="comment" rows="5"></textarea>
                            </fieldset>
                            <br>
                            <fieldset>
                                <input type="submit" value="Send" id="submitButton" name="submit">
                                <input type="reset" value="Reset" id="resetButton">
                            </fieldset>

                        </form>
                    </div>

                </div>

            </div>
            <div class="footerIcons">
                <a class="fb" href="https://www.facebook.com/sellerproduction/?fref=ts" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                <a class="insta" href="https://www.instagram.com/peter.seller/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a class="twitter" href="https://twitter.com/seller6Peter" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                <a class="linked" href="https://www.linkedin.com/in/peter-seller-68137511a" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
            </div>
            <div class="credit">
                <p id="counter"><span class='slash'>-></span>
                    <?php echo "$count"; ?><span class="slash">&lt;-</span></p>
                <p>&copy;2017 SELLER PRODUCTION</p>
            </div>
            <div class="advert">
                <p>WEBSITE DESIGN BY <a href="http://www.on-dro.com" target="_blank">ON-DRO</a></p>
            </div>


        </footer>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>

        <script src="https://use.fontawesome.com/b70e0f0a83.js"></script>
        <script src="js/script.js"></script>
    </body>

    </html>