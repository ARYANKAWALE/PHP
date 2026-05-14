<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "myDATABASE";

// 1. Establish the connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check if connection was successful
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

// 2. Write the SQL query to fetch the data
$sql = "SELECT rollNo, name, lastname FROM student";

// Execute the query
$result = mysqli_query($conn, $sql);

// 3. Check if any rows were returned
if(mysqli_num_rows($result) > 0){
    
    // Start an HTML table to structure the output
    echo "<h3>Student Records</h3>";
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr>
            <th>Roll No</th>
            <th>Name</th>
            <th>Last Name</th>
          </tr>";
    
    // 4. Loop through the result set row by row
    // mysqli_fetch_assoc grabs the next row as an associative array
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>" . $row["rollNo"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["lastname"] . "</td>";
        echo "</tr>";
    }
    
    // Close the HTML table
    echo "</table>";
    
} else {
    // Message if the table is empty
    echo "0 results found in the database.";
}

// 5. Always close the connection when finished
mysqli_close($conn);
?>