<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php

        servername => "localhost";
        username => "root";
        password => "";
        database name => "follow";
        $conn = mysqli_connect("localhost", "root", "", "follow");
        
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        
        // Taking all 5 values from the form data(input)
        $username = $_REQUEST['username'];
        $gender = $_REQUEST['gender'];
        $email = $_REQUEST['email'];
        $phonecode = $_REQUEST['phonecode'];
        $phone = $_REQUEST['phone'];
        
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO follows VALUES ('$username',
            '$gender','$email','$phonecode','$phone')";
        
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully.". " Please browse your localhost php my admin". " to view the updated data</h3>";

            echo nl2br("\n$username\n $gender\n "
                . "$email\n $phonecode\n $phone");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
        
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>
