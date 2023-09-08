<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../assets/css/style.css">
<link rel="stylesheet" href="../../assets/css/styletabs.css">
<link rel="stylesheet" href="../../assets/css/stylesearch.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="../../assets/js/tabs.js"></script>
</head>
<body>
    <div class="header">
        <img src="../../assets/logo1.png" alt="">
        <h1>NDA REGISTRY</h1>
    </div>

    <div class="navbar">
        <a href="../dash.php">HOME</a>
        <a href="../index.php">INCOMING 2021</a>
        <a href="../letters_without_reference_2021/index.php">LETTERS WITHOUT REFERENCE 2021</a>
        <a href="../paste_errors/index.php">PASTE ERRORS</a>
        <a href="../Staff/index.php" class="active">STAFF</a>
        <form action="index.php" method="GET" class="right">
            <div class="searchBox">
                <input class="searchInput"type="text" placeholder="Search Record..." autocomplete="off" name="filter" value="<?php echo isset($_GET['filter']) ? $_GET['filter'] : ''; ?>">
                    <button class="searchButton" type="submit">
                        <i class="material-icons">
                            search
                        </i>
                    </button>
            </div>
        </form>
        <!--    <a rel="facebox" href="add.php" id="add">ADD RECORD</a>-->
        <!--    <a rel="facebox" href="add.php" id="add"><img width="65" height="65" src="https://img.icons8.com/3d-fluency/94/add-file.png" alt="add-file"/></a> -->
    </div>
</body>