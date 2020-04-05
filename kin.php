<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'template/head.php';?>
    <title>Mariam Khalifa | Keep It Neutral Case Study</title>
</head>
<body>
<div id="app">
<h1 class="hidden">Keep It Neutral Case Study</h1>

<section class="case-study">
    <a href="index.php"><img class="case-logo" src="images/logo-symbol.svg" alt="logo"></a>
    <a class="close-case" href="index.php">X</a>
    <h2 class="main-heading">Keep It Neutral<span>Case Study</span></h2>
    
    <div class="case-con">
            <p class="case-text">An advertising campaign targeting teenagers between the age of 13 to 19 to raise awareness about HIV and AIDS. Our team came up with the title of Keep It Neutral to bring the HIV positive and the HIV negative together in order to create a neutral space to fight the stigma around the topic. The campaign’s message is; connection through education.
            </p>

            <ul class="case-list">
                <h3 class="case-title">Team:</h4>
                <li>Kayla Chang as motion designer</li>
                <li>Luisa Valero as designer</li>
                <li>Kahani Gajjar as designer</li>
                <li>Sandra Tsao as  back-end developer</li>
                <li>Me as front-end developer</li>
            </ul>
            
            <div class="case-desktop-con"><img src="images/kin-desktop.png" alt="roku desktop"></div>

            <p class="case-text">My role as the front-end developer was to bring this beautiful and colourful design to life through a fully responsive website. I used HTML5, CSS3, Sass, Vue.js. Our back-end developer was to create a CMS for this website, so we had to use PHP and MySql, as well as Ajax. I also added a gulp.js file for image minification.
            </p>
    
            <div class="case-tablet-con"><img src="images/kin-tablet-home-long.png" alt=""></div>
            <div class="case-mobile-con"><img src="images/kin-mobile-home-long.png" alt=""></div>
            
            <p class="case-text">The hero section contains elements form the campaign visuals. The messages and images change to engage the user and communicate more of the campaign messages. In order to achieve that I used CSS animations. The first set of hero images are styled in a grid that switches from 1 column in mobile to 2 columns in tablet to 3 columns in desktop. The challenge for me was figuring out how to position the second set of hero images using (position: absolute). The problem with using (position) is that elements are not part of the normal flow anymore, thus can’t be a part of the grid system or any other system. After multiple trials, I found the solution, which is to create another div for the second set of hero images and style them with grid just like the first group, then to wrap this second section in a div and position it absolutely on top of the first group of hero images. 
            </p>
                
            <img class="case-img" src="images/kin-desktop-hero.png" alt="">
            <img class="case-img" src="images/kin-desktop-hero-animation.png" alt="">
            
            <p class="case-text">The community page connects the users with the events happening in the community, as well as our Instagram feed. We want people to be able to talk and share their stories, so we created a form where the user can submit their anonymous story, which then would be shared through our social media channels.
            </p>

            <div class="case-desktop-con"><img src="images/kin-desktop-community.png" alt=""></div>

            <p class="case-text">Our contact page has the contact form,  social media links and contact info. We plan to add a section to download the campaign assets. This project should be done in a couple of weeks. Come and take a look to see how it turns out.
            </p>
            
            <div class="case-desktop-con"><img src="images/kin-desktop-contact.png" alt=""></div>

            <p class="case-text">Feel free to check the project repository on github
                <span>
                    <a class="case-link" href="https://github.com/mariamkhalifa/Chang_Khalifa_Gajjar_Tsao_Valero_FIP" target="_blank">here.</a>
                </span>
            </p>
    </div>
</section>

<?php include 'template/footer.php';?>

<script src="js/project.js"></script>
<script src="js/scrollTop.js"></script>

</body>
</html>