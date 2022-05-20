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

    <section class="newsletter-subscribe">
        <div class="container text-center">
            <div class="intro">
                <h2 class="text-center">Search For Status<br></h2>
                <p class="text-center">Status Information<br></p>

                <?php
                function getStatus()
                {
                    require_once "settings.php";
                    $searchKeyword = $_GET["status"];

                    if (
                        !empty($_GET[$searchKeyword]) ||
                        $searchKeyword == null ||
                        $searchKeyword == " "
                    ) {
                        echo '<div class="container d-flex justify-content-center">';
                        echo '<div class="row">';
                        echo '<div class="col">';
                        echo '<img src="https://c.tenor.com/pnjwPjNNxq8AAAAi/doraemon-manga.gif" alt="Sad Doraemon" width="250" height="250"> <br>';
                        echo "The search string is empty. Please enter a keyword to search.";
                        echo "<br>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    } else {
                        // Create connection
                        $conn = new mysqli($host, $user, $pswd, $dbnm);

                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT * FROM post where status_content LIKE '%$searchKeyword%';";
                        $result = $conn->query($sql);

                        if (!$result) {
                            echo "Fatal Error Occurred, Please Check The Database Table!";
                        } else {
                            if ($result->num_rows > 0) {
                                // Output data of each row using card style
                                while ($row = $result->fetch_assoc()) {
                                    echo '<div class="d-flex justify-content-center">';
                                    echo '<div class="card w-75" style="width: 10rem;">';
                                    echo '<div class="card-body">';
                                    echo "Status: " .
                                        $row["status_content"] .
                                        "<br> Status Code: " .
                                        $row["status_code"] .
                                        "<br> <br> Share: " .
                                        $row["share"] .
                                        "<br> Date Posted: " .
                                        $row["input_date"] .
                                        "<br> Permission: " .
                                        $row["permission"] .
                                        "<br>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "<br>";
                                }
                            } else {
                                echo '<div class="container d-flex justify-content-center">';
                                echo '<div class="row">';
                                echo '<div class="col">';
                                echo '<img src="https://c.tenor.com/pnjwPjNNxq8AAAAi/doraemon-manga.gif" alt="Sad Doraemon" width="250" height="250"> <br>';
                                echo "Status not found. Please try a different keyword";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                            }
                        }
                        $conn->close();
                    }
                }
                getStatus();
                ?>

            </div>
        </div>
        <div class="container mt-5 d-grid gap-2 d-md-block">
            <a class="btn btn-success" role="button" href="./searchstatusform.php">Search For Another Status</a>
            <a class="btn btn-danger float-end" role="button" href="./index.php" style="margin: 14px 0px 0px 5px;margin-left: 0px;background: var(--bs-red);">Return To Home</a>
        </div>
    </section>

    <?php include('footer.php'); ?>

</body>

</html>