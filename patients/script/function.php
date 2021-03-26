<?php


include 'db.php';



set_error_handler("error_handler");


//Helper Function

function clean($str) {
    return htmlentities($str);
}

function sign_error($msg) {

    $msg = <<<DELIMITER
                      <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Warning!</strong> $msg
                </div>
DELIMITER;
    return $msg;
}

function redirect($location) {
    return header("Location:{$location}");
}

function token() {
    $token = $_SESSION['token'] = md5(uniqid(mt_rand(), true));

    return $token;
}

//end Helper Function
//validation function

function email_exist($email) {
    $sql = "SELECT * FROM users WHERE EMAIL='$email'";
    $result = query($sql);
    if (mysqli_num_rows($result) == 1) {
        return true;
    } else {
        return false;
    }
}

function uname_exist($uname) {
    $sql = "SELECT * FROM users WHERE USERNAME='$uname'";
    $result = query($sql);
    if (mysqli_num_rows($result) == 1) {
        return true;
    } else {
        return false;
    }
}

function validate_user() {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        $err = [];
        $min = 3;
        $max = 20;

        $uname = clean($_POST['uname']);
        $fname = clean($_POST['fname']);
        $email = clean($_POST['email']);
        $pass = clean($_POST['pass']);
        $cpass = clean($_POST['cpass']);
        $mob = clean($_POST['mob']);
        $add = clean($_POST['add']);
        $img = $_FILES['img']['name'];

        if (empty($add)) {
            $err[] = "Address can not be Empty";
        }
        if (strlen($add) < 8) {
            $err[] = "Address can not be less than 8 character";
        }
        if (strlen($uname) < $min) {
            $err[] = "Username can not be less than {$min} character";
        }
        if (strlen($uname) > $max) {
            $err[] = "Username can not be more than {$max} character";
        }
        if (strlen($fname) < $min) {
            $err[] = "Fullname can not be less than {$min} character";
        }
        if (strlen($fname) > $max) {
            $err[] = "Fullname can not be more than {$max} character";
        }
        if (uname_exist($uname)) {
            $err[] = "Sorry! that Username is taken";
        }
        if (email_exist($email)) {
            $err[] = "Sorry! that Email already is registered";
        }
        if (strlen($email) < $min) {
            $err[] = "Email can not be less than {$min} character";
        }
        if ($pass !== $cpass) {
            $err[] = "Your Password field do not match";
        }

        if (!empty($err)) {
            foreach ($err as $error) {
                echo sign_error($error);
            }
        } else {
            if (register_user($uname, $fname, $pass, $email, $mob, $add, $img)) {
                $_SESSION['suc'] = "User Register";
                $_SESSION['emsg'] = "Please Check Your E-Mail for activation Link!!!";
                redirect("login.php");
            }
        }
    }
}

function register_user($uname, $fname, $pass, $email, $mob, $add, $img) {

    $uname = escape($uname);
    $fname = escape($fname);
    $pass = escape($pass);
    $email = escape($email);
    $mob = escape($mob);
    $add = escape($add);
    $target = "asset/img/dp/" . basename($img);

    if (email_exist($email)) {
        return false;
    } else if (uname_exist($uname)) {
        return false;
    } else {
        $pass = md5($pass);
        $query = "INSERT INTO users(USERNAME,PASSWORD,FULLNAME,EMAIL,MOBILE,ADDRESS,PROFILE_IMG,ACTIVE) "
                . " VALUES('$uname','$pass','$fname','$email','$mob','$add','$img','0')";
        $result = query($query);
        if ($result) {
            move_uploaded_file($_FILES["img"]["tmp_name"], $target);

            $subject = "Activate Account";
            $msg = "Please Click the link below to activate your account  "
                    . "http://localhost/clg_project/actuser.php?mail=$email&pass=$pass";

            $header = "From: noreply@yourwebsite.com";


            mail($email, $subject, $msg, $header);
            return true;
        }
    }
}

function activate_user() {
    if ($_SERVER['REQUEST_METHOD'] == "GET") {


        if (isset($_GET['mail'])) {

            $email = clean($_GET['mail']);

            $query = "SELECT U_ID FROM users WHERE EMAIL='" . escape($email) . "'";
            $result = query($query);
            if (mysqli_num_rows($result) == 1) {

                $sql = "UPDATE users SET ACTIVE=1 WHERE EMAIL='" . escape($email) . "'";
                $result = query($sql);
                if ($result) {
                    return true;
                } else {
                    return false;
                }
            }
        }
    }
}

////////////********Log In validation /////
function validate_user_login() {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        $err = [];
        $min = 3;
        $max = 20;

        $email = clean($_POST['email']);
        $pass = clean($_POST['pass']);
        $rem = clean($_POST['remember']);

        if (empty($email)) {
            $err[] = "Email Field Cant Be Empty";
        }

        if (empty($pass)) {
            $err[] = "Password Field Cant Be Empty";
        }

        if (!empty($err)) {
            foreach ($err as $error) {
                echo sign_error($error);
            }
        } else {

            if (login_user($email, $pass, $rem)) {


                

                redirect($_SESSION['url']);
            } else {

                $_SESSION['emsg'] = "Invalid Email/Password";
                redirect("login.php");
            }
        }
    }
}

function login_user($email, $pass, $rem) {

    $email = escape($email);
    $pass = escape($pass);

    $log = "SELECT U_ID,USERNAME,PASSWORD,PROFILE_IMG FROM users WHERE EMAIL='$email' AND ACTIVE=1";
    $result = query($log);
    if (mysqli_num_rows($result) == 1) {


        $row = mysqli_fetch_assoc($result);
        $db_pass = $row['PASSWORD'];

        if (md5($pass) === $db_pass) {

            if ($rem == "on") {

                setcookie('myid', $row['U_ID'], time() + 60);
            }



            $ID = $_SESSION['myid'] = $row['U_ID'];
            $_SESSION['myname'] = $row['USERNAME'];
            $_SESSION['myimg'] = $row['PROFILE_IMG'];



            return true;
        } else {
            return false;
        }
        return true;
    } else {
        return false;
    }
}

function logged_in() {

    if (isset($_SESSION['myid']) || isset($_COOKIE['myid'])) {

        return true;
    } else {
        return false;
    }
}

////////////********Forget Password /////

function recover_password() {

    if ($_SERVER['REQUEST_METHOD'] == "POST") {


        if (isset($_SESSION['token']) && $_POST['token'] === $_SESSION['token']) {
            $email = escape($_POST['email']);

            if (email_exist($email)) {

                $code = $_SESSION['vcode'] = rand(100000, 999999);

                setcookie('temp_code', $code, time() + 240);

                $subject = "Please reset your Password";
                $msg = "Here is your Password reset code {$code} "
                        . "Click here to reset your password  "
                        . " http://localhost/clg_project/code.php?email=$email";
                $head = "From:noreply@gmail.com";

                if (mail($email, $subject, $msg, $head)) {
                    $_SESSION['suc'] = "Reset link has been sent to {$email}";
                    redirect("login.php");
                } else {
                    $_SESSION['emsg'] = "Email has not been sent try again later!!";
                    redirect("login.php");
                }
            } else {

                $_SESSION['emsg'] = "This email doesn't exist";
                redirect("recover.php");
            }
        } else {

            redirect("login.php");
        }
    }
}

function validate_code() {

    if (isset($_COOKIE['temp_code'])) {

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            if (!isset($_GET['email'])) {


                $_SESSION['emsg'] = "Email not found";
                redirect("recover.php");
            } else if (empty($_GET['email'])) {

                $_SESSION['emsg'] = "Empty Email";
                redirect("recover.php");
            } else {


                if (isset($_POST['code'])) {

                    $code = clean($_POST['code']);

                    if ($_SESSION['vcode'] == $code) {
                        $_SESSION['suc'] = "Code Match!! Reset Your Password";
                        redirect("reset.php?mail={$_GET['email']}");
                    } else {

                        $_SESSION['emsg'] = "Code doesn't match";
                        redirect("code.php?mail={$_GET['email']}");
                    }
                }
            }
        }
    } else {

        $_SESSION['emsg'] = "Sorry! your validation code session expire";
        redirect("recover.php");
    }
}

function change_password() {

    if ($_SERVER['REQUEST_METHOD'] == "POST") {


        if (!isset($_GET['mail'])) {

            $_SESSION['emsg'] = "mail Not found try again Later";
            redirect("recover.php");
        } else {

            $email = $_GET['mail'];

            $pass = clean($_POST['pass']);
            $cpass = clean($_POST['cpass']);

            if (empty($pass)) {

                $_SESSION['emsg'] = "Field Not be Empty";
                redirect("reset.php?mail={$email}");
            } else if (empty($cpass)) {

                $_SESSION['emsg'] = "Field Not be Empty";
                redirect("reset.php?mail={$email}");
            } else if ($pass != $cpass) {
                $_SESSION['emsg'] = "Both Password Not Match";
                redirect("reset.php?mail={$email}");
            } else {

                $vpass = md5($pass);
                $query = "UPDATE users SET PASSWORD='$vpass' WHERE EMAIL='$email'";
                $result = query($query);
                if ($result) {

                    $_SESSION['suc'] = "Password has been Changed";
                    redirect("login.php");
                } else {

                    mysqli_error($con);
                }
            }
        }
    }
}


// Custom Error Handler

function error_handler($en,$em)
{
    echo "Error No is $en and Error Message is $em";
}

?>

