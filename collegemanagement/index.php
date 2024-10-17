<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width,initial scale=1.0">
    <title> Responsive Student Portal </title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
</head>
  </head>
  <body>

	<nav>
		<img src="images/logo.jpg" alt=""/>
		<div class="navigation">
		<ul>
    <li><a href="home.html">HOME</a></li>
      <?php echo isset($_SESSION['role']) 
      ? '<li><a href="user_dashboard.php">DASHBOARD</a></li> <li><a href="logout.php">LOGOUT</a></li>' 
      : '<li><a href="login.php">LOGIN</a></li>'; ?>
		</ul>
  
		</div>
	</nav>
  
    <section id="home">
      <br>
      <h2 class="first_h2">Enhance Your Tech With Nostra </h2>
      <br>
	  
      <p>Nostra is a technology consulting company driven by a group of young,creative and enthusiastic technical professionals. Our mission is to help build the next digital products and systems.Our expertise includes product development,support and maintenance & system engineering.
      <br>
      </p>
	  
      <div class="btn">
        <a class="blue" href="about.html">Learn More</a>
        <a class="yellow" href="courses.html">Visit Courses</a>
		
      </div>
    </section>

    <section id="features">
      <h1>Features</h1>
      
      <div class="fea-base">
        <div class="fea-box">
          <i class="fa-solid fa-graduation-cap"></i>
          <h3>Scholarship Facility</h3>
          <p>we offer scholarship facility to our students</p>
        </div>
		
        <div class="fea-box">
          <i class="fa-solid fa-graduation-cap"></i>
          <h3>Course contents</h3>
          <p>course contents for varius units</p>
        </div>

        <div class="fea-box">
          <i class="fa-solid fa-graduation-cap"></i>
          <h3>My Schedule</h3>
          <p>Each student have acess to their course Schedule</p>

        </div>
      </div>
    </section>

    <section id="course">
      <h1>Our Schedule</h1>
      <p>Here are courses that we offer</p>
      <div class="course-box">
	  
        <div class="courses">
          <img src="images/html.jpeg" alt="">
          <div class="details">
            <span>Updated 6/3/21</span>
            <h6>Internate programming </h6>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fa-regular fa-star-half-stroke"></i>
              <span>(300)</span>
            </div>
          </div>
        </div>
		
        <div class="courses">
          <img src="images/pscourse.jpg" alt="">
          <div class="details">
            <span>Updated 6/3/21</span>
            <h6>Multemidia Systems Technologies</h6>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <span>(300)</span>
          </div>
        </div>
		</div>
		
        <div class="courses">
          <img src="images/artificial.jpeg" alt="">
          <div class="details">
            <span>Updated 6/3/21</span>
            <h6>Artificial Intelligence</h6>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <span>(300)</span>
            </div>
          </div>
        </div>
		
        <div class="courses">
          <img src="images/stuctures.jpeg" alt="">
          <div class="details">
            <span>Updated 6/3/21</span>
            <h6>Data Structures & Algorithms</h6>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <span>(300)</span>
            </div>
          </div>
        </div>
		
        <div class="courses">
          <img src="images/operating.png" alt="">
          <div class="details">
            <span>Updated 6/3/21</span>
            <h6>Operating Systems</h6>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <span>(300)</span>
            </div>
          </div>
        </div>
		
        <div class="courses">
          <img src="images/analog.jpeg" alt="">
          <div class="details">
            <span>Updated 6/3/21</span>
            <h6>Computer Logic Design</h6>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <span>(300)</span>
            </div>
          </div>
        </div>
		
      </div>
	  </div>
    </section>

    <section id="registration">
	<div class="reg_section">
		<h2>Course Registration</h2>
	    <p><a href="#">Register your Courses here</a></p>
	</div>
      <div class="form_section">
	    <div class="form">
          <h3>Login to Your Account Now!</h3>
		  
		  
		  <form method="POST" action="login.php">
		  
			  <input type="text" placeholder="Name" name="name" id="name" required>
			  <input type="text" placeholder="Email" name="email" id="email" required>
			  <input type="password" placeholder="Password" name="password" id="password" required>
			  <div class="btn">
				<input class="yellow" type="submit" value="Submit Form">
			  </div>
		  </form>
        </div>
		
		
      <div class="reminder">
         <div class="days">
			18<br>days
        </div>
		  
		<div class="hours">
			16<br>Hours
        </div>
			
		<div class="mins">
            38<br>Minutes
		</div>
			  
		<div class="secs">
            28<br>Seconds
        </div>

		</div>
		</div>

    </section>

    |
        
    <footer>

      <div class="footer-top">
        <div class="footer-coulumn">
          <h3>E-Resources</h3>
          <ul>
          <li>Online Application</li>
          <li>E-Learning Portal</li>
          <li>Conference Portal</li>
          <li>University Journals</li>
          <li>Electronic Journals</li>
        </ul>
  
        </div>

      <div class="footer-coulumn">
       
        <h3>Student Affairs</h3>
        <ul>
        <li>Student Leadership</li>
        <li>Department Spiritual and Student Affairs</li>
        <li>Guidance & Counseling</li>
        <li>Student Campus Life</li>
        <li>Clubs & Association</li>
        <li>Arts and Cultural Events</li>
        <li>Alumni Website</li>
      </ul>
         
      </div>
   
      <div class="footer-coulumn">
          <h3>Quick Links</h3>
          <ul>
          <li>Academic Calendars</li>
          <li>Online Programmes</li>
          <li>Notice Board</li>
          <li>Help-desk Support</li>
          <li>University Policies</li>
        </ul>
          
      
      </div>
    
      <div class="footer-coulumn">
        
          
          <h3>Public info</h3>
        <ul>
     
          <li>Maps & Contacts</li>
          <li>Jobs and Careers</li>
          <li>Conference Portal</li>
          <li>Students Feedback</li>
          <li>FAQ's</li>
        </ul>
          
      </div>

    </div>
      <div class="copyright">
        <p>Copyright © 2024,all rights reserved</p>
        <div class="pro-links">
          <ul>
          <i class="fab fa-facebook"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-whatsapp"></i>
          <i class="fab fa-linkedin-in"></i>
        </ul>
        </div>
      </div>
      
    </footer>


</body>
</html>



