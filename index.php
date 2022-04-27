<!--Author: Muhamad Miguel Emmara-->
<!--Student ID: 18022146-->
<!--Email: ryf2144@autuni.ac.nz-->

<!--
    Description of File:
    Default Homepage Of Status Posting System - Assignment 01
-->

<!DOCTYPE html>
<html lang="en">

<?php include('header.php'); ?>

<body>
    <header class="header-blue">
        <?php include('nav.php'); ?>
        <div class="container hero">
            <div class="row">
                <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
                    <h1 style="margin: 64px 0px 24px;">Status Posting System<br /></h1>
                    <p>Name : Muhamad Miguel Emmara<br>Student ID : 18022146<br>Email :&nbsp;ryf2144@autuni.ac.nz<br></p>
                    <a class="btn btn-success btn-lg action-button" role="button" href="./poststatusform.php">Post A New Status</a>
                    <a class="btn btn-primary btn-lg action-button" role="button" href="./searchstatusform.php" style="margin-left: 5px;">Search Status</a>
                </div>
                <div class="col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder">
                    <div class="phone-mockup"><img class="device" src="assets/img/social-media.png">
                        <div class="screen"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="highlight-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center"><strong>Acknowledgment</strong><br></h2>
                <p class="text-center"><em>I Declare that this assignment is my individual work. I have not worked collaboratively nor have I copied from any other student's work or from any other source.</em><br></p>
            </div>
            <div class="buttons">
                <a class="btn btn-primary" role="button" href="./about.php">About This assignment</a>
            </div>
        </div>
    </section>

    <?php include('footer.php'); ?>
</body>

</html>