<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/ee02357a59.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href=".goose/css/main.css">
    <link rel="stylesheet" href=".goose/css/nav.css">
    <link rel="stylesheet" href=".goose/css/filter-section.css">
    <link rel="stylesheet" href=".goose/css/project-panel.css">
    <link rel="shortcut icon" type="image/x-icon" href=".goose/assets/images/logo/logo.png">
    <title>Gooseme</title>
</head>
<body>
<!-- main-nav-bar -->
<nav class="main-nav">
    <a href="." class="logo-section">
        <img src=".goose/assets/images/logo/logo.png" alt="gooseme" class="logo">
    </a>
    <div class="searchbar-section">
        <form class="searchbar" action="" method="">
            <input class="search-input" type="text">
            <button class="search-icon"><i class="fas fa-search"></i></button>
        </form>
    </div>
    <div class="app-config-section">
        <form class="config" action="" method="">
            <button class="config-create-project">create new</i></button>
            <button class="config-main"><i class="fas fa-moon"></i></button>
            <button class="config-refresh"><i class="fas fa-sync-alt"></i></button>
            <button class="config-main"><i class="fas fa-cog"></i></button>
        </form>
    </div>
</nav>
<div class="content-container">
    <div class="left-content">
        <!-- fav-filter-section -->
        <div class="fav-filter-section">
            <div class="fav-start-icon"><i class="fas fa-star"></i></div>
            <div class="fav-filter-item selected">goosemedemoproject</div>
            <div class="fav-filter-item">gooseme</div>
            <div class="fav-filter-item">beercraftshop</div>
            <div class="fav-filter-item">eique.de</div>
            <div class="fav-filter-item">bla</div>
            <div class="fav-filter-item">blablabla</div>
            <div class="fav-filter-item">someproject</div>
            <div class="fav-filter-item">project</div>
            <div class="fav-filter-item">githubproject</div>
            <div class="fav-filter-item">testestest</div>
        </div>

        <!-- project filters -->
        <form class="project-filter-section">
            <select>
                <option value="" disabled="true" selected="selected">Type</option>
                <option value="1">Git</option>
            </select>
            <select>
                <option value="" disabled="true" selected="selected">Code</option>
                <option value="1">Java</option>
                <option value="2">Python</option>
                <option value="2">JavaScript</option>
                <option value="2">PHP</option>
            </select>
            <button class="reset-btn">reset</button>
        </form>
    </div>

    <div class="right-content">
        <!-- project panel -->

        <!-- project selector section -->
        <div class="project-selector-section">
            <div class="project-header">
                <img class="project-header-image" src=".goose/assets/images/logo/logo.png" alt="">
                <h2>Gooseme</h2>
                <div class="project-labels">
                    <span class="label">GIT</span>
                    <span class="label">GIT</span>
                    <span class="label">GIT</span>
                    <span class="label">GIT</span>
                    <span class="label">GIT</span>
                </div>
            </div>
            <div class="project-navigation">fdsafdfasd</div>
        </div>
    </div>
</div>
</body>
</html>