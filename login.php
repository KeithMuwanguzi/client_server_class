<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Connect to the Access database using odbc
    $conn = odbc_connect("Driver={Microsoft Access Driver (*.mdb, *.accdb)};Dbq=D:/xammp/htdocs/assignmentThree/pydb.accdb", '', '');

    if (!$conn) {
        die("Connection failed: " . odbc_errormsg());
    }

    $query = "SELECT * FROM registration WHERE Email='$email' AND Password='$password'";
    $result = odbc_exec($conn, $query);

    if (!$result) {
        die("Error executing query: " . odbc_errormsg());
    }

    $rowCount = 0;
    while (odbc_fetch_row($result)) {
        $rowCount++;
    }
    odbc_close($conn);

    if ($rowCount > 0) {
        // Authentication successful
        header("Location: home.php");
        exit();
    } else {
        // Authentication failed
        echo "<div class='success-container'>";
        echo "<p>Login failed. Invalid email or password.</p>";
        echo "</div>";
    }
}
?>
