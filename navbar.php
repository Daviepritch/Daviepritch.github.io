<header class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="#" class="navbar-brand"></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></button>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li <?php if ($currentPage === 'Home') {echo 'class="active"';} ?>><a href="index">Home</a></li>                    
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Page 2</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="signin.html">Sign In</a></li>
                <li><a href="signup.html">Sign Up</a></li>
            </ul>
        </div>
    </div>
</header>
