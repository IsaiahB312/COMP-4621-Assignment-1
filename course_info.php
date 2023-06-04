<!DOCTYPE html>
<html>
<head>
    <title>Course Info</title>
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
    <div id="infoContainer">
        <h1 id="courseInfo">Course Information</h1>
        <div id="courseDesc">
            <h2>Course Description</h2>
            <p>This course provides students with the concepts and technologies involved in the design, implementation, and operation <br>
                of web-based information systems.Students use a variety of Web development tools and programming/scripting languages. Emphasis is <br>
                placed on the technologies for rich Web application, including the aspect of Web programming paradigm; the information exchange between client and <br>
                server; the model-view-controller architecture; Web application frameworks; content management systems; Web services; Web data mining; and security issues.</p>
        </div>
        <div id="courseObj">
            <h2>Learning Objectives</h2>
            <p>Upon completion of this course you should be able to:</p>
                <div id="L1">
                    <ul class="list">
                        <li>The major areas and challenges of web programming.</li><br>
                        <li>Distinguish web-related technologies.</li><br>
                        <li>Use advanced topics in JavaScript and jQuery.</li><br>
                        <li>Use a server-side scripting language, Node.js</li><br>
                        <li>Use NoSQL, MongoDB.</li><br>
                        <li>Use Node.js to access a MongoDB collection.</li><br>
                        <li>Use advanced web technologies AngularJS.</li><br><br>
                    </ul>
                </div>
                <p>Design and implement:</p>
                    <div id="L2">
                        <ul class="list">
                            <li>Typical static web pages and interactive web applications.</li><br>
                            <li>Dynamic web applications.</li><br>
                            <li>Web applications that use asynchronous communication.</li><br>
                            <li>Secure 3-tier data-driven web applications.</li><br>
                            <li>Real-time communications</li>
                        </ul>
                    </div>
        </div>
        <br><button class="btn-cc" onclick="changeColor()">Change colour</button><br>
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
