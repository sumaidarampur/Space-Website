<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<style>
body{
background: url(img/img6.jpg);
background-repeat: no-repeat;
background-size: 1370px 850px;
}
h2{
position:absolute;
top:100%;
left:0%;
font-size:15px;
color:white;
font-weight:normal;
}
.header a {
float: left;
color: white;
text-align: left;
padding: 12px;
text-decoration: none;
font-size: 20px;
line-height: 25px;
border-radius: 4px;
font-weight:bold;
font-family:Georgia, serif;

}
.header a:hover {
background-color: #ddd;
color: white;
}
*{box-sizing:border-box;}
body{font-family: 'Open Sans', sans-serif; color:white; font-size:14px; background-color:#dadada; padding:0px;}
.form_box{width:375px; padding:10px; background-color:#1d3c99; border-radius: 25px;}
input{padding:5px;  margin-bottom:5px;}
input[type="submit"]{border:none; outlin:none; background-color:#679f1b; color:white;}
.heading{background-color:white; border-radius: 15px; color:black; height:40px; width:100%; line-height:40px; text-align:center;}
.shadow{
  -webkit-box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.43);
-moz-box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.43);
box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.43);}
.pic{text-align:left; width:33%; float:left;}
</style>
<body>
  <div class="header">
<div class="header-right">
<a class="active" href="index.html">Home</a>
<a href="gallery.html">Gallery</a>
<a href="reference.html">Reference</a>
<a href="about us.html">About Us</a>
<a href="feedback.php">Feedback</a>
</div>
</div><br><br><br><br>
 <div class="form_box shadow">
 <form method="post" action="practice.php">
 <div class="heading">
   FEEDBACK
 </div>
 <br/>
 <p>What do you think about the quality of our blog?</p>
 <div>
   <div class="pic">
     <img src="img/img2.png" alt="" height="50" width="50"> <br/>
     <input type="radio" name="quality" value="0"> Bad
   </div>
   <div class="pic">
     <img src="img/img1.png" alt="" height="50" width="50"> <br/>
     <input type="radio" name="quality" value="1"> Okay
   </div>
   <div class="pic">
     <img src="img/img.png" alt="" height="50" width="60"> <br/>
     <input type="radio" name="quality" value="2"> Good
   </div>
 </div>

    <p>Name</p>
    <textarea name=" Name" rows="1" cols="40"></textarea><br>

    <p>Email id</p>
    <textarea name=" Email" rows="1" cols="40"></textarea><br>


    <p>Do you have any suggestion for us? </p>
    <textarea name=" suggestion" rows="8" cols="40"></textarea><br>


  <input type="submit" name="submit" value="Submit Form">
</form>
 </div>
 <script>
document.addEventListener('contextmenu',event=>event.preventDefault());
</script>
<footer>
<h2>@2021 SPACE All Rights Reserved.<br>
<a href="mailto:subhanrampure.64@gmail.com">subhanrampure.64@gmail.com</a></h2>
</footer>
</body>
</html>