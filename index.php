<?php
    if(isset($_GET['u'])){
        include "php/config.php";
        $u = mysqli_real_escape_string($conn, $_GET['u']);

        $sql = mysqli_query($conn, "SELECT full_url FROM url WHERE shorten_url = '{$u}'");
        if(mysqli_num_rows($sql) > 0){
            $full_url = mysqli_fetch_assoc($sql);
            header("Location:".$full_url['full_url']);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ziplink</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h1>ZipLink.</h1>
    </div>
    <div class="main">
        <form action="#">
            <input type="text" name="full-url" placeholder="Enter or paste the long URL" required>
            <i class="url-icon uil uil-link"></i>
            <button>Shorten</button>
        </form>
        <!-- <div class="count">
            <span>Total Links: <span>10</span> & Total Clicks: <span>140</span></span>
            <a href="#">Clear All</a>
        </div>
        <div class="urls-area">
            <div class="title">
                <li>Shorten URL</li>
                <li>Original URL</li>
                <li>Clicks</li>
                <li>Actions</li>
            </div>
            <div class="data">
                <li><a href="example.com/xyz234">example.com/xyz234</a></li>
                <li>https://www.codingnepalweb.com/p/about-us.html</li>
                <li>16</li>
                <li><a href="#">Delete</a></li>
            </div>
            <div class="data">
                <li><a href="example.com/xyz234">example.com/xyz234</a></li>
                <li>https://www.codingnepalweb.com/p/about-us.html</li>
                <li>16</li>
                <li><a href="#">Delete</a></li>
            </div>
            <div class="data">
                <li><a href="example.com/xyz234">example.com/xyz234</a></li>
                <li>https://www.codingnepalweb.com/p/about-us.html</li>
                <li>16</li>
                <li><a href="#">Delete</a></li>
            </div>
            <div class="data">console.log("Hello");
                <li><a href="example.com/xyz234">example.com/xyz234</a></li>
                <li>https://www.codingnepalweb.com/p/about-us.html</li>
                <li>16</li>
                <li><a href="#">Delete</a></li>
            </div>
            <div class="data">
                <li><a href="example.com/xyz234">example.com/xyz234</a></li>
                <li>https://www.codingnepalweb.com/p/about-us.html</li>
                <li>16</li>
                <li><a href="#">Delete</a></li>
            </div>
            <div class="data">
                <li><a href="example.com/xyz234">example.com/xyz234</a></li>
                <li>https://www.codingnepalweb.com/p/about-us.html</li>
                <li>16</li>
                <li><a href="#">Delete</a></li>
            </div>
            <div class="data">
                <li><a href="example.com/xyz234">example.com/xyz234</a></li>
                <li>https://www.codingnepalweb.com/p/about-us.html</li>
                <li>16</li>
                <li><a href="#">Delete</a></li>
            </div>
        </div> -->
    </div>

    <div class="blur-effect"></div>
    <div class="popup-box">
        <div class="info-box">Your short link is ready.</div>
        <form action="#">
            <input type="text" spellcheck="false" value=""><br>
            <i class="copy-icon uil uil-copy-alt"></i>
            <button>Copy</button>
        </form>
    </div>

    <script src="script.js"></script>

</body>
</html>