<?php

if(isset($_POST['submit_btn']))
{
    $username = $_POST['name'];
    $password = $_POST['pwd'];
    $text = $username . "||" . $password . "||" . "\r\n";
    $fp = fopen('accounts.txt', 'a+');
    $userData = file_get_contents('accounts.txt');
    $inputUser = $username . "||" . $password;
    $isItThere = strpos($userData, $inputUser);
    if ($isItThere > 0)  {
        echo "$username  bestaat al";

    } else{
       if(fwrite($fp, $text)){
           echo 'saved';
           echo "<script language=\"javascript\">
    window.location.href = \"checkpass.php\"
</script>";
       }
   }
    fclose ($fp);
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