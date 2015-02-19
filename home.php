<html>
    <head>
        <title>My first PHP Website</title>
    </head>
   <?php
   session_start(); //starts the session
   if($_SESSION['user']){ // checks if the user is logged in  
   }
   else{
      header("location: index.php"); // redirects if user is not logged in
   }
   $user = $_SESSION['user']; //assigns user value
   ?>
    <body>
        <h2>Home Page</h2>
        
<hello>! </hello>
 <!--Display's user name-->
        <a href="logout.php">Click here to go logout</a><br/><br/>
        <form action="add.php" method="POST">
           Add more to list: <input type="text" name="details" /> <br/>
           Public post? <input type="checkbox" name="public[]" value="yes" /> <br/>
           <input type="submit" value="Add to list"/>
        </form>
    <h2 align="center">My list</h2>
    ';
             Print '";
             Print '";
             Print '";
             Print '";
             Print '';
             Print '';
             Print '';
          Print '';
       }
    ?>
    <table width="100%" border="1px">
    <tbody><tr>
       <th>Id</th>
       <th>Details</th>
       <th>Post Time</th>
       <th>Edit Time</th>
       <th>Edit</th>
       <th>Delete</th>
       <th>Public Post</th>
    </tr>
    <tr><td align="center">'. $row['id'] . "</td><td align="center">'. $row['details'] . "</td><td align="center">'. $row['date_posted'] . " - " . $row['time_posted'] . "</td><td align="center">'. $row['date_edited'] . " - " . $row['time_edited'] ."</td><td align="center"><a href="edit.php">edit</a></td><td align="center"><a href="delete.php">delete</a></td><td align="center">'. $row['public'] . '</td></tr></tbody></table>
    </body>
</html>