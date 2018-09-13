<?php
include("connection.php");
echo "<br>";

if ( $_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_POST["user"];
    $pass = $_POST["pass"];
    
    echo "YOUR INFO:";
    echo "<br>";
    


        if(empty($name) and empty($pass)){
            echo "All fields are blank";
        }
        else if (empty($name)){ 
            echo "You need to enter a name";
        }else if(empty($pass)){
            echo "You need a password";
        }else{
            echo "Username: $name";
            echo "<br>";
            echo "Password: $pass";
            echo "<br>";
            echo "<br>";

            $sql = "SELECT * from dbusers";
            $return = $connect->query($sql)->fetchAll();
            
            if(empty($return)){
                echo "No Such User existing";
            }
            
            
            foreach ($return as $rowdata){

                if ($name == $rowdata["username"] and $pass == $rowdata["password"]){
                echo"<br>";
                echo"<br>";
                echo $rowdata["name"] . " you are succesfully Logged In!";
                break;
                }else if ($name == $rowdata["username"] and $pass != $rowdata["password"]){
                echo"<br>";
                echo"<br>";
                echo" WRONG PASSWORD!";
                break;
                }else {
                    echo"<br>";
                    echo"<br>";
                    echo"NO USER EXISTING";
                    break;
                }
               


            }
            
 
        }
    
    }


?>