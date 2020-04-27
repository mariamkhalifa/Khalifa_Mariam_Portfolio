<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'template/head.php';?>
    <title>Mariam Khalifa | Roku Falshback Case Study</title>
</head>
<body>
<div id="app">
<h1 class="hidden">Roku Falshback Case Study</h1>

<section class="case-study">
    <a href="index.php#development"><img class="case-logo" src="images/logo-symbol.svg" alt="logo"></a>
    <a class="close-case" href="index.php#development">X</a>
    <h2 class="main-heading">Roku Flashback<span>Case Study</span></h2>
    
    <div class="case-con">
            <p class="case-text">The task was to create a media streaming web app. Using the Roku brand and creating the Flashback brand. The app plays movies, audio and TV from the 1950s to the 1990s. The app is to be fully responsive from mobile to desktop.
            </p>

            <ul class="case-list">
                <h3 class="case-title">Team:</h4>
                <li>Kayla Chang as designer</li>
                <li>Me as developer</li>
            </ul>
            
            <img class="case-img" src="images/roku-desktop.png" alt="roku desktop">

            <p class="case-text">I used Vue.js as the front-end framework, Sass as the CSS preprocessor, along with HTML5, Ajax and PHP.Initially I created the database with tables for the movies, audio, TV. Then I realized it would make more sense to merge the TV and movies table in one video table becuase they share the same genre types and the same columns. This would allow me to use one fetch call instead of having to do 2 calls in order to pass the table names in the Ajax url. Additionally, I created a table for users with the columns username, password, avatar, role which is either admin or not and permissions level which is a number from 1 to 5. I creatd a video genre table and an audio genre table and linking tables to the video media and music media. I created a table for the user comments. And Finally, I created a table for the age rating categories and linking table to link the ratings id with media id.
            </p>

            <img class="case-img case-mobile" src="images/roku-mobile-users.png" alt="roku mobile">
            <img class="case-img case-mobile" src="images/roku-mobile-film.png" alt="roku mobile">
            <img class="case-img case-code" src="images/roku-code-router-js.png" alt="code block">
            <img class="case-img case-code" src="images/roku-code-film-comp.png" alt="code block">
            <img class="case-img case-code" src="images/roku-code-genre-comp.png" alt="code block">
            <img class="case-img case-code" src="images/roku-code-index-php.png" alt="code block">
            <img class="case-img case-code" src="images/roku-code-functions-php.png" alt="code block">
            
            <p class="case-text">The admin role allows the control over other users' accounts. These are the different versions of the menu according to the type of user. The admin menu has the profile section where they can edit or delete users.
            </p>
            
            <div class="images-grid">
                <img class="case-img" src="images/roku-mobile-admin-menu.png" alt="roku mobile">
                <img class="case-img" src="images/roku-mobile-kids-menu.png" alt="roku mobile">
            </div>

            <p class="case-text">I used Vue Router to link to the different components. There is the log in, create user, all users, user home, search, profile, film dashboard, TV dashboard, music dashboard and the selected media element, where the user would be able to comment and share the media element on social media.
            </p>

            <img class="case-img case-code" src="images/roku-code-router-js.png" alt="code block">

            <div class="images-grid-desktop">
                <img class="case-img case-mobile" src="images/roku-mobile-search.png" alt="roku mobile">
                <img class="case-img case-mobile" src="images/roku-mobile-login.png" alt="roku mobile">
                <img class="case-img case-mobile" src="images/roku-mobile-film.png" alt="roku mobile">
                <img class="case-img case-mobile" src="images/roku-mobile-signup.png" alt="roku mobile">
            </div>
            
            <p class="case-text">I'm still working on the edit user and delete user functionality. I also plan to add social media APIs.
            </p>

            <p class="case-text">Feel free to check the project repository on github
                <span>
                    <a class="case-link" href="https://github.com/mariamkhalifa/Chang_Kayla_Khalifa_Mariam_RokuFlashback" target="_blank">here.</a>
                </span>
            </p>
    </div>
</section>

<?php include 'template/footer.php';?>

<script src="js/project.js"></script>
<script src="js/scrollTop.js"></script>

</body>
</html>