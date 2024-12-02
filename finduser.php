<?php
 include 'database.php';    //My database
 session_start();  // Make sure session is started before using $_SESSION

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['LoginBtn'])) {
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

     // Prepare the SQL query to check for user credentials
     $sql = "SELECT * FROM user WHERE user_email = ? AND user_password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $user_email, $user_password);
    $stmt->execute();
    $result = $stmt->get_result();

     // If the login is successful, get the user_id 
    if ($result->num_rows == 1) {
         // Fetch the user_id from the database
        $stmt2 = $conn->prepare("SELECT user_id FROM user WHERE user_email = ?");
        $stmt2->bind_param("s", $user_email);
        $stmt2->execute();
        $stmt2->bind_result($user_id);
        $stmt2->fetch();
        $stmt2->close();

         // Store the user email and user_id in the session
        $_SESSION['user_email'] = $user_email;
        $_SESSION['user_id'] = $user_id;  

        //  header("Location: shop.php");
        header("Location: index.php");
        exit();
    } else {
        echo '<script>
                alert("Login failed. Invalid username or password!!");
            </script>';
        include_once 'login.php';
    }
}
    // include 'database.php';
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }

    // if (isset($_POST['LoginBtn'])) {
    //     $user_email = $_POST['user_email'];
    //     $user_password = $_POST['user_password'];
    
    //     $sql = "SELECT * FROM user WHERE user_email = ? AND user_password = ?";
    //     $stmt = $conn->prepare($sql);
    //     $stmt->bind_param("ss", $user_email, $user_password);
    //     $stmt->execute();
    //     $result = $stmt->get_result();

    //     $stmt2=$conn->prepare("SELECT user_id FROM user WHERE user_email = ?");
    //     $stmt2->bind_param("s", $user_email);
    //     $stmt2->execute();

    
    //     if ($result->num_rows == 1) {
    //         $_SESSION['user_email'] = $user_email;
    //         header("Location: shop.php");
    //         exit();
    //     } else {
    //         // echo "Invalid login credentials.";
    //         echo  '<script>
    //                 alert("Login failed. Invalid username or password!!");
    //             </script>';
    //             include_once 'login.php';
    //     }
    // }
    // else {
    //     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    // }
    

    // if (isset($_POST['LoginBtn'])) {
    //     $user_email = $_POST['user_email'];
    //     $user_password = $_POST['user_password'];

    //     $sql = "SELECT * FROM user WHERE user_email = '$user_email' AND user_password = '$user_password'";  
    //     $result = mysqli_query($conn, $sql);  

    //     if ($result) {
    //         $count = mysqli_num_rows($result);

    //         if ($count == 1) {  
    //             $_SESSION['user_email'] = $user_email;
    //             header("Location: shop.php");
    //             exit();
    //         } else {
    //             echo  '<script>
    //                         alert("Login failed. Invalid username or password!!");
    //                     </script>';
    //                     include_once 'login.php';
    //         }
    //     } else {
    //         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    //     }

    //     mysqli_close($conn);
    // }
?>
