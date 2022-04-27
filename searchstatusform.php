<!--Author: Muhamad Miguel Emmara-->
<!--Student ID: 18022146-->
<!--Email: ryf2144@autuni.ac.nz-->

<!--
    Description of File:
This web page retrieves an input string for the status search, reads data from the status database
table, searches for the occurrence of the input status string and generates the corresponding HTML
output in response to a user’s search request.
-->

<!DOCTYPE html>
<html lang="en">

<?php include('header.php'); ?>

<body>
    <header class="header-blue">
        <?php include('nav.php'); ?>
    </header>

    <section class="contact-clean">
        <form method="GET" action="searchstatusprocess.php" class="needs-validation">
            <h2 class="text-center">Search For A Status</h2>
            <div class="mb-3">
                <input class="form-control" type="text" name="status" placeholder="Enter A Status" required>
            </div>
            <div class="mb-3">
                <button class="btn btn-success" type="submit">Search</button>
                <button class="btn btn-danger float-end" type="reset" style="margin: 14px 0px 0px 5px;margin-left: 0px;background: var(--bs-red);">Reset</button>
            </div>
            <div class="d-flex d-xxl-flex justify-content-xxl-center mb-3">
                <a class="btn btn-primary flex-fill" role="button" href="./index.php" style="margin-left: 5px;">Return home</a>
            </div>
        </form>
    </section>

    <?php include('footer.php'); ?>
</body>

</html>