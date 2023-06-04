<!DOCTYPE html>
<html>
    <head>
        <title>My Profile</title>
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
    <div id="profileContent">
        <h1 id="aboutmeTitle"> About Me </h1>
        <div id="profileImage">
            <img src="my_face.jpg"/> 
        </div>
        <p id="aboutmeContent">Hello there! My name is Isaiah Sarkor and I am an aspiring software developer and programmer. <br> I am currently in my fourth year studying Computer Science at Thompson Rivers University in Kamloops, British Columbia, Canada. <br> While I have learned 
            a lot regarding programming and software development, I am eager to improve and enhance my knowledge and understanding of them. <br> My interests include: gaming, paintball, computers, programming, exercising, and technology in general.</p>
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
