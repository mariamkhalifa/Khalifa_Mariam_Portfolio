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
    <a href="index.php"><img class="case-logo" src="images/logo-symbol.svg" alt="logo"></a>
    <a class="close-case" href="index.php">X</a>
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

            <p class="case-text">I used Vue.js as the front-end framework, Sass as the CSS preprocessor. I created the database with tables for the movies, audio, TV. Additionally, a table for users, genre and a linking table to link the genres with the media elements. I used PHP and MySql to connect to the database, and Ajax to fetch the data from the database.
            </p>

            <img class="case-img case-mobile" src="images/roku-mobile-users.png" alt="roku tablet">
                
            <img class="case-img case-mobile" src="images/roku-mobile-film.png" alt="roku tablet">
            
            <p class="case-text">The users have different permissions according to their admin status and whether they are kids or not. These are the different versions of the menu according to the type of user. The admin menu has the profile section where they can add users and access parental controls. The kids menu has only the Closed Captions and the language choices.
            </p>
            
            <div class="images-grid">
                <img class="case-img" src="images/roku-mobile-admin-menu.png" alt="roku mobile">
                <img class="case-img" src="images/roku-mobile-kids-menu.png" alt="roku mobile">
            </div>

            <p class="case-text">I used Vue Router to link to the different components. There is the landing page, sign up, log in, create user, all users, film dashboard, TV dashboard, audio dashboard and the selected media element, where the user would be able to rate, comment and share the media element on social media.
            </p>

            <div class="images-grid-desktop">
                <img class="case-img case-mobile" src="images/roku-mobile-landing.png" alt="roku mobile">
                <img class="case-img case-mobile" src="images/roku-mobile-login.png" alt="roku mobile">
                <img class="case-img case-mobile" src="images/roku-mobile-film.png" alt="roku mobile">
                <img class="case-img case-mobile" src="images/roku-mobile-signup.png" alt="roku mobile">
            </div>
            
            <p class="case-text">These were the components that I have created so far. This project should be finished in a couple of weeks. Stay tuned!
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