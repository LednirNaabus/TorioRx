<html>
    <head>
        <title>TorioRx Pharmacy | Products</title>
        <?php include('includes/main/header.php'); ?>
        
        <?php include('includes/main/products_header.php'); ?>
        
        <?php include("../Admin/includes/main/products_style.php"); ?>

    </head>

    <body style="font-family: Poppins;">

    <!-- navbar -->
    <?php include('includes/main/navbar.php'); ?>

    <div class="hero-image">
    <div class="hero-text">
        <h1 style="font-size:50px">TorioRx Pharmacy - Products</h1>
        <br>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="search" style="display: inline-block;">
        <div class="input-group-append" style="float: right;">
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span></button>
        </div>
    </div>
    </div>

  <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Create Product Entry</h4>
            </div>
            <div class="modal-body">
            <form>
            <div class="form-group">
                <label for="exampleFormControlInput1">Name of Product</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Biogesic">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Product Image</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Brief Info</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Relief and care for headache and fever">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Main Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Product Content</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Intake Interval</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
            </div>
            </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default">Add to List</button>
            </div>
        </div>
        </div>
    </div>
    </div>

    <ul class="cards" id="myUL">
            <li>
                <a href="viewproduct.php" class="card">
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
                        <span class="card__status">For relief of flu</span>
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

    <!-- footer -->
    <?php include('includes/main/footer.php'); ?>
    </body>
</html>
