<?php include_once ('connection.php'); ?>

<html lang="en">
    
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Housing Any Where | Homeseeker </title>
	    <link rel="stylesheet" href="(Basic)Style.css">
        
</head>
<div class="homeseeker">
<body>


    <header>
        <div class="logo">
            <img src="images/logo.png" alt="Logo" width= "150px" /> 
        </div>
            <div class="topnav">
                <a class="active" href="index.html">Log Out</a>
            </div>
        
    </header>
        <main id="contentContainer">


            <div id="content">
                <!-- <span id ="Welcome"> <h1>Welcome  Siham! </span></h1> -->
           <section style="text-align: center;">
            <h1>Welcome <strong>Siham</strong>! </h1> 
         </section>

               <!-- <pre><span class="em"> Your Name: </span>  Siham Khalid     <span class="em">Phone number: </span> 0550167978    <span class="em">   Email address: </span> siham0099@outlook.com</pre>
			<br> -->

            <pre> <img src="images/user.png" alt="user" style="width:20px;height:20px;">  Siham Khalid  <img src="images/phone.png" alt="phone" style="width:20px;height:20px;"> 0550167978  <img src="images/email.png" alt="email" style="width:20px;height:20px;">Siham@gmail.com</pre>
			<br>
				

                
                <table>
                <span class="title">
				<h2> Requested Homes </h2>  <br>
                </span>

                    <tr>
                        <th>Property Name</th>
                        <th>Category</th>
                        <th>Rent</th>
                        <th>Status</th>
                    </tr>
                    
                    <tr>
                        <td><a href=""> Olaya Plaza </a> </td>
                        <td>Apartment</td>
					    <td> 3000/month  </td>	
				        <td>Under Consideration</td>
                        <td> <a href=""> withdraw </a></td>
                    </tr>
                    
                    <tr>
                        <td> <a href=""> Al-Nakheel House </a> </td>
                        <td>Villa</td>
					    <td>20000/month</td>	
				        <td>Declined</td>
                    </tr>
					
                    <tr>
                        <td> <a href=""> Al-Rajhi House </a></td>
                        <td>Villa</td>
					    <td>50000/month</td>	
				        <td> Accepted</td> 
                    </tr>
                
                </table> <br>
<br><br >
                <div class="sort">
                    <br>
                    Search by Category:
                    <select name="Catsort" id="Catsort">
                      <option value="Apartment">Apartment</option>
                      <option value="Villa">Villa</option>
                    </select>
                </div>

                <table>
                    <span class="title">
                    <h2> Homes for Rent </h2> 
                    </span>
                    
                        <tr>
                            <th>Property Name</th>
                            <th>Category</th>
                            <th>Rent</th>
                            <th>Rooms</th>
                            <th>Location</th>
                        </tr>
                        
                        <tr>
                            <td>  <a href="PropertyDetailsPage.html"> Comfy Homes </a> </td>
                            <td> Villa </td>
                            <td>150000/month</td>	
                            <td>6</td>
                            <td> Riyadh, Al-Malqa District </td>
                            <td>  <a href=""> Applay </a> </td>
                        </tr>
                        
                        <tr>
                            <td> <a href=""> Al-Yasmin Apartments </a> </td>
                            <td> Apartment </td>
                            <td>35000/month</td>	
                            <td>3</td>
                            <td>Ryiadh, Al-Yasmin District </td>
                            <td>  <a href=""> Applay </a> </td>
                        </tr>
                        
                        <tr>
                            <td> <a href=""> Luxury House </a> </td>
                            <td>Villa</td>
                            <td> 500000/month</td>	
                            <td>9</td>
                            <td>Ryiadh, Hittin District </td>
                            <td>  <a href=""> Applay </a> </td>
                        </tr>
  
                        <tr>
                            <td> <a href=""> Al-Rabie Apartments </a> </td>
                            <td>Villa</td>
                            <td> 30000/month</td>	
                            <td>5</td>
                            <td>Ryiadh, Al-Rabie District </td>
                            <td>  <a href=""> Applay </a> </td>
                        </tr>
                        
            
                       
                    </table> 
            </div>
			
		
        </main>
           <br><br>
        <footer class="foo">  
            <p class="copyright">Copyright &copy; 2023 <a href="index.html">Housing Anywhere</a> All rights reserved.
			</p>
        </footer>
</body 
</div>
</html>

