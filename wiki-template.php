<?php echo file_get_contents("../html/header-wiki.html"); ?>
<title>Wiki Template | Bloc</title>
<meta property="og:url" content="https://bloc.gq">
<?php echo file_get_contents("../html/navbar-wiki.html"); ?>
<div class="title" style="background-image: url('../error/error.png');"><div class="title-text">Title</div></div>
<div class="page">

<div class="content"> <!-- Main stuff goes in here !-->
<h1 id="test">Test</h1>
<img src="../error/error.png" style="height:20vh">
<p>test</p>

</div>

<div class="sidebar">
  <a href="#test">Test</a>
  <a href="#test">Test</a>
  <a href="#test">Test</a>
  <a href="#test">Test</a>
</div>

</div>
<?php echo file_get_contents("html/footer.html"); ?>
<!--
h1-h6 = header (the bigger the number the smaller the header)
p = normal text
<img src="example"> = image (emxample would be the url)
<ul>
  <li>test</li> = bullet points where <li> is each point and test is the text
</ul>
<a href="example">test</a> = Hyperlink example is where your linking to while test is the text that is shown
id="test" = put this in the tag to be able to link to it
<br> = next line
!-->
