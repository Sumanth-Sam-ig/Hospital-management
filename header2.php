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
    width: 25%;
    background-color: rgba(100,150,200,0.8);
    position: fixed;
    left:1%;
    top:1%;
    height: 60%;
    overflow: auto;
}

li a {
    display: block;
    color: rgb(40,40,100);
    padding: 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: rgba(30,50,70,0.8);
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}
    

</style>

</head>

<body>

<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="patients.php">News</a></li>
  <li><a href="notifs.php">Notification</a></li>
  <li><a href=" pharma .php">About</a></li>
</ul>

</body>


</html>