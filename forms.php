<!DOCTYPE html>
<html lang="en">
<body>
    <form action="sample.txt" method="get">
    username: <input type="text" name="name"><br>
    password: <input type="password" name="password"><br>
    <br>
    <select name="language[]" >
        <option value="php">php</option>
        <option value="python">python</option>
        <option value="java">java</option>
        <option value="None">None</option>
    </select>
    <input type="submit">
    </form>
</body>
</html>