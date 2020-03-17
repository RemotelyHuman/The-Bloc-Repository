<?php echo file_get_contents("html/header.html"); ?>
<title>Search | Bloc</title>
<meta property="og:url" content="https://bloc.gq">
<script type="text/javascript" src="js/search.js"></script>
<link rel="stylesheet" href="css/search.css">
<?php echo file_get_contents("html/header2.html"); ?>

<div class="top"></div>
<div class="top"></div>

<div class="search-bar w3-row w3-center">
        <input type="text" name="search" value="" autocomplete="off" id="myinput" onkeyup="searchFunction()" placeholder="Search">
</div>

<div class="top w3 w3-hide-medium w3-hide-large"></div>

<div class="w3-row w3-center">
    <div id="wrapper">
        <li>
            <a href="wiki/the-book-of-abaddon.php">The Book of Abaddon</a>
        </li>
    </div>
</div>
</div>

<?php echo file_get_contents("html/footer.html"); ?>
