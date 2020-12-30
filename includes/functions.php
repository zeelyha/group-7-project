<?php
    function returnConn(){
        $servername = "localhost";
        $username = "zee";
        $password = "zee123";
        $db = "app";
        $conn = new mysqli($servername, $username, $password, $db);
    
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        
        return $conn;
    }

    function login($email, $password){
        $conn = returnConn();
        $sql = "SELECT * FROM signup_table WHERE emailmobile='$email' AND password='$password' LIMIT 1";

       
        $result = $conn->query($sql);
        
        if($result->num_rows <= 0){
            return "user doesn't exist";
        }

        $user = $result->fetch_assoc();
        if($user['password'] != $password){
            return 'Password incorrect';
        }
        
        return array('user_id' => $user['id'], 'fullname' => $user['fullname'], 'emailmobile' => $user['emailmobile'], 'username' => $user['username']);
       
    }

    function register($email, $password, $fullname, $username){
        $conn = returnConn();
        $sql = "SELECT * FROM signup_table WHERE emailmobile='$email' LIMIT 1";

       
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            return "user already exist please login";
        }

        $sql = "INSERT INTO signup_table(id,fullname,username,emailmobile,password,datemade) 
                VALUES (NULL, '$fullname', '$username', '$email', '$password',NOW())";

        if ($conn->query($sql) === TRUE) {
            return array('user_id' => $conn->insert_id, 'fullname' => $fullname, 'emailmobile' => $email, 'username' => $username);
        }  

        return 'something happened could not register user';
       
    }

    function addReview($user_id, $restaurant_id, $review){
        $conn = returnConn();
        $sql = "INSERT INTO reviews(review,restaurant_id,reviewer,review_date) 
                VALUES ('$review', '$restaurant_id', '$user_id',NOW())";


        if ($conn->query($sql) === TRUE) {
            return 'review submitted';
        }
        print($conn->error);
        return 'Something happened cannot submit your review, try again later';
    }
?>