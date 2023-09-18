<?php 
 include('connect.php');
class Profile{
        
    function __construct(){

        if(array_key_exists('Login', $_POST)){
            $this-> Login();
        }
        
        elseif(array_key_exists('Signup', $_POST)){
            $this-> SignUp();
        }
        elseif(array_key_exists('RegGuardian', $_POST)){
            $this-> RegGuardian();
        }
        elseif(array_key_exists('CreateClass', $_POST)){
            $this-> CreateClass();
        }
        elseif(array_key_exists('CreateArm', $_POST)){
            $this-> CreateArm();
        }

        
    }

    function SignUp(){
         global $con;
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email =$_POST['email'];
        $password =$_POST['password'];
        $sql = "INSERT INTO users (firstname, lastname, email, password ) VALUES('$firstname','$lastname','$email', '$password')";
        mysqli_query($con,$sql);

        return;
    
    }
 
        function Login(){
            global $con;
            if($_SERVER['REQUEST_METHOD']=="POST"){
                //something was posted
                $email = $_POST['email'];
                $password = $_POST['password'];

                if(!empty ($email) && !empty($password) && !is_numeric($email)){
                    //save to database
                    $query = "SELECT * FROM users WHERE email ='$email' ";
                    $result = mysqli_query($con, $query);

                    if($result && mysqli_num_rows($result) ==1){

                        $user_data = mysqli_fetch_assoc($result);
                        if($user_data['password'] == $password){
                            $_SESSION['user_id'] = $user_data['user_id'];
                            header("location: index.php");
                            exit;
                        }

                    }
                } 
                echo "wrong username and password";
            } else {
                echo "please enter some valid information";
            }
            return;
        }


        function RegGuardian(){
            global $con;
            $name = $_POST['name'];
            $phonenumber = $_POST['phonenumber'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $state = $_POST['state'];
            $lga = $_POST['lga'];

            $sql = "INSERT INTO guardian(name, phonenumber, email, address, state, lga ) VALUES('$name','$phonenumber','$email', '$address', '$state', '$lga')";
            mysqli_query($con,$sql);
    
            return;
        }
        function CreateClass(){
                global $con;
                $category = $_POST['category'];

                $sql = "INSERT INTO class(category) VALUES('$category')";
                mysqli_query($con, $sql);
        
                return;

        }
        function CreateArm(){
            global $con;
            $arm = $_POST['arm'];

            $sql = "INSERT INTO arm(arm) VALUES('$arm')";
            mysqli_query($con, $sql);

            return;         
        }
}

$pro = new Profile();
?>