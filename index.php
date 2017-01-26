<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/style.css">
    <title>SipNub</title>
</head>
<body>

<!-- Determine which navbar to show -->
<?php
if (!$_SESSION) {
    include "partials/loggedOutNavbar.php";
} else {
    include "partials/loggedInNavbar.php";
}
?>

<!-- Signup section -->
<section class="signup-section">
    <div class="background-image-dimmer"></div>
    <div class="content container-fluid">
        <div class="padding-for-mobile">
            <div class="row">
                <div class="attention-grabber col-lg-7 col-md-7 col-sm-7 col xs-12">
                    <h1 class="header">This is <br class="hidden-xs">not GitHub</h1>
                    <p class="description">This is my attempt to replicate GitHub. Please do not enter
                        any sensitive information. <br class="hidden-sm hidden-xs">I am not responsible for any loss of data.
                    </p>
                </div>
                <div class="signup-form col-lg-5 col-md-5 col-sm-5 col xs-12">
                    <div class="signup-hero pull-right">
                        <form class="form" action="user/create_user" method="POST">
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" id="username-input" aria-describedby="usernameHelp" placeholder="Pick a username">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" id="email-input" aria-describedby="emailHelp" placeholder="Your email address">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" id="password-input" aria-describedby="passwordHelp" placeholder="Create a password">
                                <p id="passwordHelp" class="small-text form-text text-muted">Use at least one letter, one numeral, and seven characters.</p>
                            </div>
                            <button type="submit" name="home-signup" class="signup-btn btn btn-success">Sign up for SipNub</button>
                            <br>
                            <p id="passwordHelp" class="small-text TOS form-text text-muted">By clicking "Sign up for SipNub", you agree to our
                                <a href="">terms of service</a> and <a href="">privacy policy</a>. We'll occasionally send you account related emails.</p>
                        </form>
                    </div>
                    <button type="submit" class="signup-btn-num2 btn btn-success hidden">Sign up for SipNub</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Welcome section -->
<section class="welcome-home-developers">
    <div class="content container-fluid">
        <h1 class="header">Welcome home, developers</h1>
        <p class="description">SipNub fosters a fast, flexible, and collaborative development process that lets you work on your own
        or with others.</p>
    </div>
</section>

<!-- Services section -->
<section class="services">
    <div class="content container-fluid">
        <div class="row">
            <div id="service1" class="service col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="img-div">
                    <img class="img-responsive" src="public/img/home-ill-build.png" alt="">
                </div>
                <h4 class="title">For everything you build</h4>
                <p class="description">Host and manage your code on SipNub. You can keep your work private or share it with the world.</p>
            </div>
            <div id="service2" class="service col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="img-div">
                    <img class="img-responsive" src="public/img/home-ill-work.png" alt="">
                </div>
                <h4 class="title">A better way to work</h4>
                <p class="description">From hobbyists to professionals, SipNub helps developers simplify the way they build software.</p>
            </div>
            <div id="service3" class="service col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="img-div">
                    <img class="img-responsive" src="public/img/home-ill-projects.png" alt="">
                </div>
                <h4 class="title">Millions of projects</h4>
                <p class="description">SipNub is home to millions of open source projects. Try one out or get inspired to create your own.</p>
            </div>
            <div id="service4" class="service col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="img-div">
                    <img class="img-responsive" src="public/img/home-ill-platform.png" alt="">
                </div>
                <h4 class="title">One platform, from start to finish</h4>
                <p class="description">With hundreds of integrations, SipNub is flexible enough to be at the center of your development process.</p>
            </div>
        </div>
    </div>
</section>

<!-- Who uses GitHub? -->
<section class="who-uses-github">
    <div class="content container-fluid clearfix">
        <h1 class="title">Who uses SipNub?</h1>
        <hr class="hr-divider hr-divider-1">
        <div class="row">
            <div class="info-col col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a class="header-link" href="">
                    <h4 class="header">Individuals <i class="fa fa-caret-right"></i></h4>
                </a>
                <p class="description">
                    Use SipNub to create a personal project, whether you want to experiment with a new programming language or host your life’s work.
                </p>
            </div>
            <div class="info-col col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a class="header-link" href="">
                    <h4 class="header">Communities <i class="fa fa-caret-right"></i></h4>
                </a>
                <p class="description">
                    SipNub hosts one of the largest collections of open source software. Create, manage, and work on some of today’s most influential technologies.
                </p>
            </div>
            <div class="info-col col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a class="header-link" href="">
                    <h4 class="header">Businesses <i class="fa fa-caret-right"></i></h4>
                </a>

                <p class="description">
                    Businesses of all sizes use SipNub to support their development process and securely build software.
                </p>
            </div>
        </div>
        <hr class="hr-divider hr-divider-2">
        <div class="row nasa-info">
            <div class="nasa-description col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
                <p>SipNub is proud to host projects and organizations like <a href="">NASA</a>.</p>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <img class="img-responsive nasa-image" src="public/img/org_example_nasa.png" alt="">
            </div>
        </div>
    </div>
</section>

<!-- Sign up pro section -->
<section class="signup-pro">
    <div class="content container-fluid">
        <div class="well">
            <div class="signup-btn">
                <button class="btn btn-success">Sign up for SipNub</button>
            </div>
            <div class="description">
                Public projects are always free. Work together across unlimited private repositories for $7 / month.
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="main-footer">
    <div class="content container-fluid">
        <div class="site-footer">
            <ul class="list list2 pull-right">
                <li><a href="">Contact</a></li>
                <li><a href="">API</a></li>
                <li><a href="">Training</a></li>
                <li><a href="">Shop</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">About</a></li>
            </ul>
            <a class="footer-logo" href="">
                <svg aria-hidden="true" class="octicon octicon-mark-github" height="24" version="1.1" viewBox="0 0 16 16" width="24"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path></svg>
            </a>
            <ul class="list list1">
                <li>© 2017 SipNub, Inc.</li>
                <li><a href="">Terms</a></li>
                <li><a href="">Privacy</a></li>
                <li><a href="">Security</a></li>
                <li><a href="">Status</a></li>
                <li><a href="">Help</a></li>
            </ul>
        </div>
    </div>
</footer>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="public/js/script.js"></script>
</html>
