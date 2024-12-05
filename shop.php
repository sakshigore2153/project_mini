
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=dive-width,inatial-sacl=1.0>">
<title>About page</title>

   <link rel="stylesheet" href="../css/about.css">
   <style>
    .img5{
      width:600px;
     height:500px;
     border-radius:0px;
     border: 2px solid green;
     display: inline-block;
     padding: 0px;
     margin: 20px;
    }
    .png{
      height: 50px;
      width: 50px;
      padding-bottom: 5px;
    }
    .cardest{
      width:200px;
            border:1px solid black;
            text-align: center;
            background-color: #f9fcf9;
            border-radius: 10px;
            border: none;
            display: block;
            justify-content: center;
    }
    .latest-offers{
            height:250px;
            background-color: rgb(172, 214, 172);
            display:flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin: 20px 10px;
            padding:10px;
    }
    .img-in-card{
      height: 170px;
      width: 170px;
    }
    .product-name{
      font-size: small;
      color: rgb(5, 5, 60);
      
    }
    .no{
      font-size: small;
      color: rgb(5, 5, 60);
    }
	
body{
  padding: 0;
  margin: 0;
  background-color:aliceblue;
}
.navbar{
    background-color: rgb(172, 214, 172); 
  height: 80px;
    display: flex;
    align-items: center;
    flex-wrap: wrap;   
}
.navbar-icon{
    height: 60px;
}
.navbar-brand-name1{
    text-align: center;
    font-size: 50px;
    color:rgb(14, 134, 14);
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
background-color: black;  
border-radius: 20px;
color: white;
}
.navbar-menu:hover{
    background-color: rgb(5, 92, 5);
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



  .img2{
    width:200px;
     height:450px;
     border-radius:0px;
     border: 2px solid green;
     display: inline-block;
     padding: 0px;
     margin: 20px;
  }
  .header-c{
    display: flex;
    align-items: center;
  }
  .h1{
    text-align: center;
    color: rgb(4, 97, 38);
    font-size: xx-large;
    padding: auto;
    margin: 50px;
  
  }
  .descrption{
    text-align: center;
    color: rgb(178, 21, 21);
    font-size:large
   
  }
  .button{
    font-size: 10px;
  padding: 3px 10px;
  font-weight: bold;
  margin-left: 300px;
  cursor: pointer;
  background-color: rgb(53, 123, 53);
  border-radius: 10px;
  color: black;
  color: white;
  }
  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
  }
  section {
    height: 100vh;
    width: 100%;
    display: grid;
    place-items: center;
  }
  .row {
    display: flex;
    flex-wrap: wrap;
    margin-bottom: 20px;
  }
  .column {
    width: 100%;
    padding: 0 1em 1em 1em;
    text-align: center;
  }
  .card {
    width: 100%;
    height: 100%;
    padding: 2em 1.5em;
    background: linear-gradient(#ffffff 50%, #108826  50%);
    background-size: 100% 200%;
    background-position: 0 2.5%;
    border-radius: 5px;
    box-shadow: 0 0 35px rgba(0, 0, 0, 0.12);
    cursor: pointer;
    transition: 0.5s;
  }
  h3 {
    font-size: 20px;
    font-weight: 600;
    color: #1f194c;
    margin: 1em 0;
  }
  p {
    color: #575a7b;
    font-size: 10px;
    line-height: 1.6;
    letter-spacing: 0.03em;
  }
  .icon-wrapper {
    background-color:  white;
    position: relative;
    margin: auto;
    font-size: 30px;
    height: 2.5em;
    width: 2.5em;
    color: #ffffff;
    border-radius: 50%;
    display: grid;
    place-items: center;
    transition: 0.5s;
  }
  .btn{
      size:30px;
      color: #60eb79;
  }
  .card:hover {
    background-position: 0 100%;
  }
  .card:hover .icon-wrapper {
    background-color: #ffffff;
    color: #7deb7d ;
  }
  .card:hover h3 {
    color: #ffffff;
  }
  .card:hover p {
    color: #f0f0f0;
  }
  @media screen and (min-width: 768px) {
    section {
      padding: 0 2em;
    }
    .column {
      flex: 0 50%;
      max-width: 50%;
    }
  }
  @media screen and (min-width: 992px) {
    section {
      padding: 1em 3em;
    }
    .column {
      flex: 0 0 33.33%;
      max-width: 33.33%;
    }
  }
  .head{
    height: 70px;
    width: 1280px;
    background-color: #108826;
    text-align: center;
  }
  .bottom{
    margin-bottom: 150px;
  
  }
  .section-heading{
    color: red;
  }
  .sec{
    color: #1f194c;
  }
  .card1{
    margin-bottom: 100px;
  }
  .table{
    margin-top: 40px;
    margin-left: 40px;
  }
  .row1{
    margin-bottom: 100px;
  }

  .footer-container{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    margin-top: auto;
    background-color: black;
    height: 400px;
}
.footer-heading{
    padding-top: 200px;
    color: white;
    font-size: 50px;
}
.footer-link{
    padding-top: 150px;
    color: white;
}
.footer-contact{
    padding-top: 150px;
    color: white;
}
.img-smi{
    padding-top: 170px; 
}
.q-link {
    text-decoration: none;
    color: white;
    font-size: 20px;
    margin-left: 10px;
}
.footer-email{
    font-size: 20px;
}
.footer-no{
    font-size: 20px;
}
   .style1 {color: #FFFFFF}
   </style>
<body>
    <div class="navbar">
      <div class="navbar-brand">
        <img src="./Images/icons-fresh.png" class="navbar-icon">
        <spam class="navbar-brand-name1">Fresh</spam>
        <spam class="navbar-brand-name2">Shop</spam>
      </div>
      <div class="navbar-menu-cobtainer">
        <a href="index.html" class="navbar-menu"> Home</a>
        <a href="./Pages/about.html" class="navbar-menu"> About</a>
        <a href="./Pages/login.html" class="navbar-menu">login</a>
        <a href="./Pages/review.html" class="navbar-menu">Review</a>
        <a href="./Pages/contact.html" class="navbar-menu">Contact</a>
      </div>
    </div>
    </div>
<div class="header-c">
               <div>
                 <img src="../Images/cheery1.jpg" class="img5"/>
               </div> 
               <div class="card1">
                  <h1 class="h1"> Need For Your Daily Life.......!</h1>
                  <p class="descrption"><a href="../../../../Users/saksh/OneDrive/Desktop/icp-6-group-11-html-css-project-1 - Copy/index.html"><b>https://Fresh Food.Food.in</a><b><br>
                    <b>Food is one of the basic necessities of life.</b><br>
                      <b>Food contains nutrients—substances essential for the</b> <br> 
                      <b>growth, repair, and maintenance of body tissues and for the</b> <br>
                       <b>regulation of vital processes. Nutrients provide  </b><br>
                      <b> the energy our bodies need to function. The energy </b> <br>
                 <b>in food is measured in units called calories</b></p>
                       <button class="button">Readmore</button>
      
                       <div class="table">
                      <table width="650" height="100" border="1px" bordercolor="#FFFFFF">
                        <tr>
                          <td width="200" height="30" bgcolor="#006600"><div align="center"class="style3 style1" color="white">Vission</div></td>
                          <td width="200" bgcolor="#006600"><div align="center"class="style3 style1" color="white">Mission</div></td>
                          <td width="200" bgcolor="#006600"><div align="center" class="style3 style1"color="white">Motto</div></td>
                        </tr>
                        <tr>
                          <td>To shape the future of exceptionally good foods for people everywhere.
                            good foods for people everywhere                          </td>
                          <td>To ease the minds and lives of consumers
                            everywhere with our simple, safe, delicious, foods.</td>
                          <td>sale theonline fodd is fresh and just</td>
                        </tr>
                      </table>
                       </div>
              </div>
              </div>
              <section>
                <div class="row1">
                <div class="row">
                  <div class="head">
                  <h2 class="section-heading">Features</br>
                    <h1 class="sec">Welcome Fresh Food????</h1></h2>
                  </div>
                </div>
                <div class="bottom">
                <div class="row">
                  <div class="column">
                    <div class="card">
                      <div class="icon-wrapper">
                        <i></i>
                        <img src="../images/fruit10.png" class="png">
                      </div>
                      <h3>FRESH AND ORGANIUC</h3>
                      <p><b>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                          </b></p><br>
                    <div class="btn">
                          <button style="background-color:#a1f0af;">Read More</button>
                      </div>
                    </div>
                  </div>
                  <div class="column">
                    <div class="card">
                      <div class="icon-wrapper">
                        <i></i>
                        <img src="../images/delivery.png" class="png">
                      </div>
                    
                      <h3>FREE DELIVERY</h3>
                               <p><b>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                              </b></p><br>
                              <div class="btn">
                                <button style="background-color:#a1f0af;">Read More</button>
                            </div>
                    </div>
                  </div>
                  <div class="column">
                    <div class="card">
                      <div class="icon-wrapper">
                        <i class=" style="color: #ff57e0; ></i>
                        <img src="../images/pay.png" class="png">
                      </div>
                      <h3>EASY PAYMENTS</h3>
                                 <p><b>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                </b></p><br>
                                <div class="btn">
                                  <button style="background-color:#a1f0af;">Read More</button>
                              </div>
                    </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </section>
                  <section>
                    <div class="row1">
                      <div class="row">
                        <div class="head">
                        <h2 class="section-heading">Welcome Fresh Food???? </br>
                          <h1 class="sec">About Fresh Food Team</h1></h2>
                        </div>
                      </div>
   <div class="latest-offers">
      
    <div class="cardest">
        <img src="../images/akanksha.jpg" class="img-in-card">
        <p class="product-name">Name=Anbhule Akanksha</p>
        <p class="no">no:-9356766254</p>
       
        
    </div>
    <div class="cardest">
        <img src="../images/anu.jpg" class="img-in-card">
        <p class="product-name">Walkaroo go men </p>
        
       
    </div>
    <div class="cardest">
        <img src="../images/saurabh.jpg" class="img-in-card">
        <p class="product-name">Men Sandal</p>
       
       
    </div>
    <div class="cardest">
        <img src="../images/vaishu.jpeg" class="img-in-card">
        <p class="product-name">Rich Luxury</p>
        
       
    </div>
   </div>
   <div class="latest-offers">
      
    <div class="cardest">
        <img src="../images/rutik.jpg" class="img-in-card">
        <p class="product-name">Name=Anbhule Akanksha</p>
       
        
    </div>
    <div class="cardest">
        <img src="../images/men3.jpg" class="img-in-card">
        <p class="product-name">Walkaroo go men </p>
        
       
    </div>
    <div class="cardest">
        <img src="../images/men4.jpg" class="img-in-card">
        <p class="product-name">Men Sandal</p>
       
       
    </div>
    <div class="cardest">
        <img src="../images/men5.jpg" class="img-in-card">
        <p class="product-name">Rich Luxury</p>
        
       
    </div>
   </div>
                  <section class="footer">
                    <div class="footer-container">
                      <h1 class="footer-heading">FreeShop</h1>
                  
                      <div class="footer-link">
                        <ul>
                          <h1>Quick Links</h1>
                           <a href="index.html" class="q-link">Home</a> <br>
                           <a href="about.html" class="q-link">About</a> <br>
                           <a href="contact.html" class="q-link">Contact</a> <br>
                          <a href="review.html" class="q-link">Review</a> <br>
                          <a href="login.html" class="q-link">Login</a>
                        </ul>
                      </div>
                  
                      <div class="footer-contact">
                        <h1 class="footer-cont">Contact Us</h1>
                        <p class="footer-email"> Email info:-freshshop431@gmail.com</p>
                        <p class="footer-no"> Phone no:-123-456-789</p>
                      </div>
                  
                      <div class="img-smi ">
                        <img src="../images\facebook.png">
                        <img src="../Images\instagram.png">
                        <img src="../images/twitter.png">
                      </div>
                    </div>
              
                
                <script src="https://kit.fontawesome.com/90fb78d75b.js" crossorigin="anonymous"></script>
</body>
</html>
