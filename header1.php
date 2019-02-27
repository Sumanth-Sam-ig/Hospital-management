<!doctype html>
<html>

<head>

<style>

body {
    margin: 0;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 150px;
    background-color: rgba(100,150,200,0.8);
    border:0px solid blue;
    border-radius:5px;
    position: fixed;
    left:3%;
    top:10%;
    height: 50%;
    overflow: auto;
}

li a {
    display: block;
    color: rgb(40,40,100);
    padding: 10px 15px;
    margin:14px 2px 14px 2px; 
    text-decoration:none;
    font-family: lucida;
}

li a.active {
    background-color: rgba(30,50,70,0.8);
    color: white;
}

li a:hover:not(.active) {
    background-color: rgba(100,200,200,0.6);
    color: white;
}
    

</style>

</head>

<body>

<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="doctors.php">News</a></li>
  <li><a href="notifs.php">Notification</a></li>
  <li><a href="Account.php">My Account</a></li>
  <li><a href="prescriptions.php">About</a></li>
</ul>

</body>


</html>