<?php

require('connection.php');
if (isset($_POST['register'])) {
    $exist_query = ("SELECT * FROM register_user WHERE 'username'='$_POST[username]' OR 'email'='$_POST[email]'");
    $result = mysqli_query($conn, $exist_query);


    if ($result) {
        if (mysqli_num_rows($result) > 0) #it will execute when username and email id is already registered
        {
            #if any user has already taken username or email
            $result_fetch_assoc($result);
            if ($result_fetch['username'] == $POST['username']); {
                echo "<script>
                 alert('$result_fetch[username]- User name exist!');
                    window.location.href='index.php';
                    </script>";
            }
        // } else {
        //     #error for email already registered
        //     echo "<script>
        //         alert('$result_fetch[email]-Email already exist!');
        //            window.location.href='index.php';
        //            </script>";
        // }
    } else #if no same user name or name
    {
        $query = "INSERT INTO register_user(`full_name`, `username`, `email`, `password`) VALUES ('$_POST[fullname]','$_POST[username]','$_POST[email]','$_POST[password]')";
        if (mysqli_query($conn, $query)) {
            #if data inserted
            echo "<script>
    alert('Registration Successfull');
    window.location.href='index.php';
    </script>";
        } else {
            #if data can not inserted
            echo "<script>
                    alert('Can not run query');
                    window.location.href='index.php';
                    </script>";
        }
    }
} else {
    echo "<script>
    alert('Can not run query');
    window.location.href='index.php';
    </script>";
}
}