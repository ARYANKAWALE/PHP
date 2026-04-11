<?php
if(isset($_POST['set']))
{
    setcookie("user", $_POST['name'], time()+3600);
    echo "Cookie Set";
}
if(isset($_POST['delete']))
{
    setcookie("user", "", time()-3600);
    echo "Cookie Deleted";
}
?>
<form method="post">
Name: <input type="text" name="name"><br><br>
<input type="submit" name="set" value="Create Cookie">
<input type="submit" name="delete" value="Delete Cookie">
<input type="submit" name="show" value="Show Cookie">
</form>
<?php
if(isset($_POST['show']))
{
    if(isset($_COOKIE['user']))
        echo "Cookie: ".$_COOKIE['user'];
    else
        echo "No Cookie Found";
}
?>
