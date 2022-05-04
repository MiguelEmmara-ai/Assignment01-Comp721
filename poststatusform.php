    <!--Author: Muhamad Miguel Emmara-->
    <!--Student ID: 18022146-->
    <!--Email: ryf2144@autuni.ac.nz-->

    <!--
        Description of File:
        This web page contains the form that enables a status to be submitted and saved.
    -->
    <!DOCTYPE html>
    <html lang="en">

    <?php
    // Set Time Zone To New Zealand
    date_default_timezone_set('Pacific/Auckland'); ?>

    <?php include('header.php'); ?>

    <body>
        <header class="header-blue">
            <?php include('nav.php'); ?>
        </header>

        <section class="contact-clean">
            <form method="POST" action="poststatusprocess.php" class="needs-validation">
                <h2 class="text-center">Post A New Status</h2>
                <div class="mb-3">
                    <h1>Status Form</h1>

                    <input class="form-control" type="text" name="statusCode" placeholder="Status Code (required)" required>
                </div>
                <div class="mb-3">
                    <input class="form-control" type="text" name="status" placeholder="Status (required)" required>
                </div>
                <h1>Options</h1>
                <div class="mb-3">
                    <p>Shares</p>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="shareRadio1" value="Public">
                        <label class="form-check-label" for="shareRadio1">Public</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="shareRadio2" value="Friends">
                        <label class="form-check-label" for="shareRadio2">Friends</label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="gridRadios" id="shareRadio3" value="Only Me">
                        <label class="form-check-label" for="shareRadio3">Only Me</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="statusCode" class="col-sm-2 col-form-label">Date</label>
                    <div class="col-sm-10">
                        <?php
                        $date = date("Y-m-d");
                        ?>
                        <input type="date" name="date" value=<?php echo $date; ?> d="date">
                    </div>
                </div>
                <div class="mb-3">
                    <p>Permission Type<br></p>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="permissionCheckBox[]" id="permissionBox1" value="Allow Like">
                        <label class="form-check-label" for="permissionBox1">Allow Like</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="permissionCheckBox[]" id="permissionBox2" value="Allow Comment">
                        <label class="form-check-label" for="permissionBox2">Allow Comment</label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="checkbox" name="permissionCheckBox[]" id="permissionBox3" value="Allow Share">
                        <label class="form-check-label" for="permissionBox3">Allow Share</label>
                    </div>
                </div>
                <div class="mb-3"><button class="btn btn-success" type="submit">send </button><button class="btn btn-danger float-end" type="reset" style="margin: 14px 0px 0px 5px;margin-left: 0px;background: var(--bs-red);">Reset</button></div>
                <div class="d-flex d-xxl-flex justify-content-xxl-center mb-3">
                    <a class="btn btn-primary flex-fill" role="button" href="./index.php" style="margin-left: 5px;">Return home</a>
                </div>
            </form>
        </section>

        <?php include('footer.php'); ?>
    </body>

    </html>