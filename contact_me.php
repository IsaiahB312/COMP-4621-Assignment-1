<!DOCTYPE html>
<html>
<head>
    <title>Contact Me</title>
    <link rel="stylesheet" href="A1_style.css">
    <script src="A1_script.js">
    </script>
</head>
<body>
    <nav id="nav">
        <ul class="links">
            <li><a href="main_page.php">My Profile</a></li>
            <li><a href="course_info.php">Course Info</a></li>
            <li><a href="contact_me.php">Contact Me</a></li>
        </ul>
    </nav>
    <div id="container">
        <div id="contactMe">
            <form name="contactMeForm" action="db.php" onsubmit="return formValid()" method="post">
                <label for="name">Name:</label><br>
                 <input type="text" id="name" name="name"><br><br>
                <label for="email">Email:</label><br>
                <input type="text" id="email" name="email"><br><br>
                <label for="phnum">Phone Number:</label><br>
                <input type="text" id="phnum" name="phnum"></p>
                <p id="warning"></p>
                <input type="submit" value="Submit">
              </form>
        </div>
        <button class="btn-cc" onclick="changeColor()">Change colour</button><br>
    </div>
    <div class="time">
        <?php
            date_default_timezone_set('America/Los_Angeles'); 
            $date = date('m/d/Y h:i a', time());
            echo $date;
        ?>
    </div>
</body>
</html>
