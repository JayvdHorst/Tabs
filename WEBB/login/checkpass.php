<?php

if(isset($_POST['submit_btn'])) {
    $username = $_POST['name'];
    $password = $_POST['pwd'];

    $userData = file_get_contents('accounts.txt');


    $inputUser = $username . "||" . $password;

    $isItThere = strpos($userData, $inputUser);
    if ($isItThere === false) {
        echo "$username  bestaat niet";
        session_start();
        $_SESSION['user'] = "";

        session_unset();

        session_destroy();
    } else {
        if($username == "" || $password ==""){
            echo "voer uw gebruiksgegevens in";
        }else {
            echo "$username komt voor op pos: $isItThere<br>";
            session_start();
            $_SESSION['user'] = $username;
        }
    }
}

?>

<form action="" method="POST">
    <h1>enter info</h1>
    <p>
        <label>loginname</label><input type="text" name="name"/>
        <label>password</label><input type="password" name="pwd"/>
        <br/>
        <br/>
    </p>
    <input type="submit" name="submit_btn" id="submit" value="submit"/>
    <input type="reset" id="reset" value="reset"/>
</form>
