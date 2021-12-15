<html>
<head><title>Homepage</title></head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
.slide{background-color:white;float:right;width:80%;}
.left{float:left;width:20%,height:100%;position:absolute;top:150px;}
.container{width:100%;height:100%;}
a:link, a:visited {
    background-color:white;
    color: black;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border: 3px solid crimson;
}


a:hover, a:active {
    background-color: crimson;
    color:white;
}
</style>

<body>
<div class="container">
<div class="left" align="center">
<table width="250px" border="0" cellspacing="20px">
<tr>
<td align="center"> <h2> SCHEDULE: </h2> </td>
</tr>
<tr>
<td align="center"><a href="http://localhost/day1.php" align="center"> Day 1 </a></td>
</tr>
<tr>
<td align="center"> <a href="http://localhost/day2.php"> Day 2 </a> </td>
</tr>
<tr>
<td align="center"> <br><br> <a href="first.php"> Back </a> </td>
</tr>

</table>
</div>
<div class="slide">
<img class="mySlides w3-animate-fading" src="1.jpg" style="width:100%;height:600px">
<img class="mySlides w3-animate-fading" src="dance.jpg" style="width:100%;height:600px">
<img class="mySlides w3-animate-fading" src="fashionshow.jpg" style="width:100%;height:600px">
<img class="mySlides w3-animate-fading" src="kenny.jpg" style="width:100%;height:600px" >
<img class="mySlides w3-animate-fading" src="talenth.jpg" style="width:100%;height:600px"><br>
</div>
</div>
<script>
var slideIndex = 0;
slideshow();

function slideshow() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(slideshow, 3000); // Change image every 1 seconds
}

/*var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 9000);    

*/
</script>

</body>

</html>