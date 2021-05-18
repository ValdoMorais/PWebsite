<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="tudo">
   <!-- <div class="bod">
        <img src="img/trader3.jpg" alt="">
    </div>-->

    <a id="Home"></a>
    <div class="nav">  
        <ul>
            <li>
                <a href="#Home">
                    <span class="icon"> <i class="fa fa-home" aria-hidden="true"></i></span>
                    <span class= "title"> Home</span>
                </a>
            </li>
            <li>
                <a href="#Services">
                    <span class="icon"><i class="fa fa-briefcase" aria-hidden="true"></i></span>
                    <span class= "title"> Services</span>
                </a>
            </li>
            <li>
                <a href="#about">
                    <span class="icon"><i class="fa fa-code" aria-hidden="true"></i></span>
                    <span class= "title"> About</span>
                </a>
            </li>
            <li>
                <a href="#contact">
                    <span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                    <span class= "title"> Contact</span>
                </a>
            </li>
        </ul>
    </div>
    <!--Background slider HTML-->
    <div class="banner-area">
        <div class="banner-text">
            <h2> Seja bem Vindo ao Website Soluction </h2>
        </div>
    </div> 

        <div class="view">
            <a id="Services"></a>
            <div class="card">
                <div class="upside">
                    <div class="text">
                        <h2>Valdo Morais Flor</h2>
                        <p> Student &amp; web Developer</p>
                    </div>
                    <div class="add">
                        <i class = "fa fa-plus"></i>
                    </div>
                </div>
                <div class="bottom">
                    <div>
                        <p>Projets</p>
                        <p>5</p>
                    </div>
                    <div>
                        <p>Youtube</p>
                        <p>0</p>
                    </div>
                    <div>
                        <p>followers</p>
                        <p>1,756</p>
                    </div>
                </div>
                <div class="inside">
                    <p>follow me On</p>
                    <a href="#" ><i class="fa fa-facebook fa-2x fa-fw"></i></a>
                    <a href="#" ><i class="fa fa-instagram fa-2x fa-fw"></i></a>
                    <a href="#" ><i class="fa fa-github-alt fa-2x fa-fw"></i></a>
                    <a href="#" ><i class="fa fa-twitter fa-2x fa-fw"></i></a>
                </div>
            </div>

        </div>
        <div class="about">
        <a id="about"></a>
        </div>

        <div class="contact">
            <a id="contact"></a>
            <div class="contactInfo">
                <div><i class="fa fa-map-marker" aria-hidden="true"></i>Pontagea, Beira, Mocambique</div>
                <div><i class="fa fa-envelope-o" aria-hidden="true"></i>ValdoMorais.vm@gmail.com</div>
                <div><i class="fa fa-phone" aria-hidden="true"></i>+258 846 777 776</div>
                <div><i class="fa fa-clock-o" aria-hidden="true"></i>Mon _ Fri 8:00 AM to 5:00 PM</div>
            </div>
            <div class="contactForm">
                <h2>Contact Us</h2>
                <form class="Contact" method="post" action="processa.php">
                    <input type="text"name="name" class="textBox" placeholder="Your name" required>
                    <input type="email"name="email" class="textBox" placeholder="Your email" required><br>
                    <textarea type="message" name="message" rows="5"  placeholder="Your message" required></textarea>
                    <input type="submit"name="submit" class="sendBtn" value="Send">
                </form>
            </div>
        </div>
    <script>

        $(function(){
            $(".add").click(function(){
                $(".card").toggleClass("pCard_on");
                $(".add i").toggleClass("fa-minus");
            });
        });

    </script>

</body>
</html>