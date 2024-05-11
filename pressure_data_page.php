
<?php
    // pressure_data_page.php
    // Displays patient pressure data from InfluxDB
    // Staff and patients can access this page

    // Include the connectionTest.php file to connect to the server
    include 'connectionTest.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styles.css">
        <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
        <script>
            // jQuery code goes here
        </script>
    </head>
    <body>
        <div id="title">
            <label>FWDIS: The Foot Weight Distribution Identifier Solution</label><br><br>
        </div>
		<nav>
			<a>Local register</a> &nbsp; <a>Local log in</a> &nbsp; <a href="index.php">Index</a> &nbsp; <a href="patient_data_page.php">Patient data</a> &nbsp;
            <b>Pressure data</b>
		</nav>
		<header>
			<h1>Pressure data</h1>
		</header>
        <p>This section is incomplete.</p>
        <div id="data">
            <table>
                <tr>
                    <th>DataID</th>
                    <th>Pressure1</th>
                    <th>Pressure2</th>
                    <th>Pressure3</th>
                    <th>More Pressure attributes...</th>
                    <th>PatientID</th>
                </tr>
            </table>
        </div>
    </body>
</html>