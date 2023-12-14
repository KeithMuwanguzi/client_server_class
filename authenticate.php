
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $dob = $_POST["dob"];

    $conn = odbc_connect("Driver={Microsoft Access Driver (*.mdb, *.accdb)};Dbq=D:/xammp/htdocs/assignmentThree/pydb.accdb", '', '');


    if (!$conn) {
        die("Connection failed: " . odbc_errormsg());
    }
    echo "Connected to Db successfully";

   
    $query = "INSERT INTO registration (Name, Email, Phone, Password, DOB) VALUES ('$name', '$email', '$phone', '$password', '$dob')";

    $result = odbc_exec($conn, $query);

    if (!$result) {
        die("Error executing query: " . odbc_errormsg());
    }
    odbc_close($conn);

    // Redirect to a success page
    header("Location: success.php");
    exit();
}
?>
