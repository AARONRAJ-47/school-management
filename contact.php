<!doctype html>
<html>
<head><title>contact us</title></head>
<link rel="stylesheet" href="sh.css">
<style>
body { 
 display: flex;
align-items: center; 
justify-content: center; 
font-family: cursive; 
background-color:#008fff;
}
 fieldset{
height:50%;
width:80%;
}
label{
	color:black
}
input, textarea {

  color: #333;
  height: 50%;
  width: 50%;
  outline: none;
  padding: 0 15px;
  font-size: 17px;
  font-weight: 400;
  border: 1.5px solid #C7BEBE;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
  font-family: cursive; 
} 
input[type="submit"] { 
transform: translate(2.2%); 
padding: 3px; 
margin-top: 0.6rem; 
font-family: cursive; 
font-weight: bold; 
} 

</style>
<body>
<nav style="height: 100vh;">
<ul class="nav-flex-row">
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/home.php" style="text-decoration:none">home</a> </div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/about.php" style="text-decoration:none">About</a> </div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/school_tech.php" style="text-decoration:none">teachers</a></div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/screv.php" style="text-decoration:none">students</a></div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/contact.php" style="text-decoration:none">contact</a></div></li>
</ul>
</nav>
<section>
<br>
<br>
<form method="POST" action="cont.php">
<h2 style="color:black"><b>ST.Antony's matric hr.sec.school<b></h2>
      <fieldset>
        <legend>Contact me</legend>
		<label for="name">Name</label>
        <div class="form-control" >
          <input type="name" id="name" name="name" placeholder="Enter your name" required />
        </div>
     <label for="email">Email</label>
        <div class="form-control">
          <input
            type="email"
            id="email" name="email"
            placeholder="Enter your email"
            required
          />
        </div>
     <label for="message">Message</label>
        <div class="form-control" >
          <textarea
            id="message"
            cols="30"
            rows="10" name="message"
            placeholder="Enter your message"
            required
          ></textarea>
        </div>
        <input type="submit" value="Send" class="submit-btn" />
      </fieldset>
</form>
</section>
</body>
</html>