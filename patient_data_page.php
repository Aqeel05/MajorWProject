
<?php
    // data_page.php
    // Displays patient account data from the MySQL database
    // apparently 2 programming languages and HTML come together to return a PHP-enhanced page
    // Only staff can access this page

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
			<a>Local register</a> &nbsp; <a>Local log in</a> &nbsp; <a href="index.php">Index</a> &nbsp; <b>Patient data</b> &nbsp;
            <a href="pressure_data_page.php">Pressure data</a>
		</nav>
		<header>
			<h1>Patient data</h1>
		</header>
        <?php
            // Perform query to return all data from our tables, account (previously example_table),
            // and AccountTypeName from account_type in our database, major_project
            // that matches the AccountTypeID of 1 (Patient)
            // alternatively $conn -> query($sql); (OOP method)
            $sql = "SELECT *, account_type.AccountTypeName
            FROM account, account_type
            WHERE account.AccountTypeID = account_type.AccountTypeID AND account_type.AccountTypeID = 1
            ORDER BY AccountID ASC";
            $result = mysqli_query($conn, $sql);

            // Echo <p> to begin the message
            echo "<p>";

            // If the number of rows is 2 or more, returns the number of rows, then " rows found"
            // Otherwise, if number is exactly 1, returns "1 row found"
            // Otherwise, return "No data was found in the table."
            if (mysqli_num_rows($result) >= 2) { echo mysqli_num_rows($result) . " rows found."; }
            else if (mysqli_num_rows($result) == 1) { echo "1 row found."; }
            else { echo "No data was found in the table."; }

            // Echo </p><br> to end the message and add a new line
            echo "</p><br>";
        ?>
        <div id="data">
            <table>
                <tr>
                    <th>AccountID</th>
                    <th>First Name (FirstName)</th>
                    <th>Last Name (LastName)</th>
                    <th>Password (Passwd)</th>
                    <th>Account Type (AccountTypeName)</th>
                </tr>
            <?php
                
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        // The censoredPassword variable contains 1 * for every char in Passwd
                        $censoredPassword = "";
                        for ($i = 0; $i < strlen($row['Passwd']); $i++) { $censoredPassword .= "*"; }
                        echo "<tr>";
                        // echo $row['column_name'];
                        echo "<td>" . $row['AccountID'] . "</td>";
                        echo "<td>" . $row['FirstName'] . "</td>";
                        echo "<td>" . $row['LastName'] . "</td>";
                        echo "<td>" . $censoredPassword . "</td>";
                        echo "<td>". $row['AccountTypeName'] . "</td>";
                        echo "</tr>";
                    }
                }
            ?>
            </table>
        </div>
    </body>
</html>