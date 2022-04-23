<html>
    <head>
        <title>TorioRx Pharmacy | Products</title>

        <?php include("../Customer/includes/main/header.php"); ?>

        <?php include("../Customer/includes/main/products_style.php"); ?>

    </head>

    <body style="font-family: Poppins;">

    <div class="hero-image">
    <div class="hero-text">
        <h1 style="font-size:50px">TorioRx Pharmacy - Products</h1>
        <br>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="search">
    </div>
    </div>

    <ul class="cards" id="myUL">
            <li>
                <a href="" class="card">
                <img src="../Customer/img/test.png" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                    <div class="card__header-text">
                        <h3 class="card__title">Biogesic</h3>            
                        <span class="card__status">Relief and care for headache and fever</span>
                    </div>
                    </div>
                    <button type="button" style="margin-left: 2em; margin-bottom: 2em;">More Details</button>
                </div>
                </a>      
            </li>
            <li>
                <a href="" class="card">
                <img src="../Customer/img/test1.jpg" class="card__image" alt="" />
                <div class="card__overlay">        
                    <div class="card__header">
                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
                    <div class="card__header-text">
                        <h3 class="card__title">Bioflu Tablet</h3>
                        <span class="card__status">For relief of flu and its multiple symptoms</span>
                    </div>
                    </div>
                    <button type="button" style="margin-left: 2em; margin-bottom: 2em;">More Details</button>
                </div>
                </a>
            </li>
            <li>
                <a href="" class="card">
                <img src="../Customer/img/test2.png" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                    <div class="card__header-text">
                        <h3 class="card__title">Solmux Capsule</h3>       
                        <span class="card__status">For relief of cough with phlegm</span>
                    </div>
                    </div>
                    <button type="button" style="margin-left: 2em; margin-bottom: 2em;">More Details</button>
                </div>
                </a>
            </li>
            <li>
                <a href="" class="card">
                <img src="../Customer/img/test3.png" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
                    <div class="card__header-text">
                        <h3 class="card__title">Solmux Advance</h3>
                        <span class="card__status">For added immunity to cough relief</span>
                    </div>          
                    </div>
                    <button type="button" style="margin-left: 2em; margin-bottom: 2em;">More Details</button>
                </div>
                </a>
            </li>    
    </ul>

    <?php include("../Customer/includes/main/products_search.php"); ?>

    </body>
</html>
