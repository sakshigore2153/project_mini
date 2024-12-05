<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
body{
    padding: 0;
    margin: 0;
    background-color:aliceblue;
}
.navbar{
    background-color: rgb(172, 214, 172); 
  height: 50px;
    padding: 11px;
    display: flex;
    align-items: center;
    flex-wrap: wrap;   
}
.navbar-icon{
    height: 50px;
}
.navbar-brand-name1{
    text-align: center;
    font-size: 50px;
    color: rgb(3, 142, 3);
    font-weight: bold;
   margin-left: 3px;
}.navbar-brand-name2{
    font-size: 50px;
    color:black;
    font-weight: bold;
   margin-right: 200px;
}
.navbar-menu-cobtainer{
    margin-left: 400px;
}
.navbar-menu{
font-size: 20px;
padding: 10px 20px;
font-weight: bold;
margin-left: 20px;
cursor: pointer;
background-color: rgb(53, 123, 53);  
border-radius: 20px;
color: black;
color: white;
}
.navbar-menu-cobtainer a{
text-decoration: none;
cursor: pointer;
}

.navbar-menu-list{
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    
}

.header-container{
    display: flex;
justify-content: space-around;
align-items: center;
flex-wrap: wrap;
}
.background-img{
    width:1517px;
    height: 635px;
    margin-top: 2px;

}

.header-title{
    margin-top: -600px;
    margin-left: 150px;
    font-size: 70px;
    font-weight: bold;
    animation: textWave 3s infinite;

}

.shop1{
    margin-left: -450px;
    font-size: 25px;
    text-align: center;
    cursor: pointer;
}

a{
    text-decoration: none;
}
.shop-container{
    display: flex;
    justify-content: space-around;
    margin-top: 150px;
   
}
.Shop-items{
    border-radius: 15px;
    border: 2px solid rgb(56, 55, 55);
    height: 300px;
    padding: 20px;
    width: 300px;  
    /* margin-top: 40px;   */
    background-color: rgb(196, 237, 219);
    box-shadow: 0 0 0 0.5px gray;
}
.shop-menu{
    font-size: 20px;
    margin-left: 80px;
    margin-top: 30px;
}
.shop-img1{
    height: 250px;
    display: block;
    margin-left: 10px;
}
.shop-img2{
    height: 250px;
    display: block;
    margin-left: 20px;
}
.shop-img3{
    height: 250px;
    display: block;
    margin-left: 10px;
}
</style>
</head>

<body>
<div class="navbar">
    <div class="navbar-brand">
        <img src="./Images/icons-fresh.png" class="navbar-icon">
        <spam class="navbar-brand-name1">Fresh</spam>
        <spam class="navbar-brand-name2">Shop</spam>
    </div>
    <div class="navbar-menu-cobtainer">
      <a href="index.html"  class="navbar-menu"> Home</a>
      <a href="./Pages/about.html" class ="navbar-menu"> About</a>
      <a href="./Pages/login.html" class="navbar-menu">login</a>
      <a href="./Pages/review.html" class="navbar-menu">Review</a>
      <a href="./Pages/contact.html" class="navbar-menu">Contact</a>
    </div>
    </div>
  </div>
</body>
</html>
