<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website - Shrayasee Naskar</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/e2130ed98e.js" crossorigin="anonymous"></script>
</head>
<body>
<div id="header">
    <div class="container">
        <nav>
            <img src="Images/stn (4).png" class="logo">
            <ul id="sidemenu">
                <li><a href="#header">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#Portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
                <i class="fa-solid fa-xmark" onclick="closemenu()"></i>
            </ul>
            <i class="fa-solid fa-bars" onclick="openmenu()"></i>
        </nav>
        <div class="header-text">
            <p></p>
            <h1>Hi, I'm <span>Shrayasee</span><br> From Kolkata</h1>
            <p> This is my official Portfolio Website to show all 
                <br>Details and work experience Web Development</p>
        </div>
    </div>
    <div class = "images">
        <img src="Images/tu.jpg" class="shape">
        

    </div>
    

</div>
<!-----------about------------>
<div id="about">
    <div class="container">
        <div class="row">
            <div class="about-col-1">
                <img src="Images/Sree.png">
            </div>
            <div class="about-col-2">
                 <h1 class="sub-title">About Me</h1>
                 <p>I am Pursuing B.Tech in Electronics And Communication
                    Engineering from Institute Of Engineering And Management,
                    Kolkata. I want to be with an organization where I can explore my
                    potential in an environment characterized by opportunity,
                    flexibility, growth and continuously acquiring skills in emerging
                    trends.</p>

                    <div class="tab-titles">
                        <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                        <p class="tab-links" onclick="opentab('experience')">Experience</p>
                        <p class="tab-links" onclick="opentab('education')">Education</p>

                    </div>
                    <div class="tab-contents active-tab" id="skills">
                        <ul>
                            <li><span>Website Development</span><br>Designing Web interfaces</li>
                            <li><span>Antenna Design</span><br>Designing Microstip Patch Antenna using CST</li>
                            <li><span>Python</span><br>Programing Languages</li>
                           
                
                        </ul>
                    </div>
                    <div class="tab-contents" id="experience">
                        <ul>
                            <li><span>2023- Current (ongoing)</span><br>Website Development</li>
                            <li><span>2021-2023 Current (ongoing)</span><br>Designing Microstip Patch Antenna using CST</li>
                            <li><span>2022</span><br>Arduino Based Voice Controlled Car</li>
                            <li><span>2022</span><br>Arduino Based heartbeat Sensor </li>
                           
                
                        </ul>
                    </div>
                    <div class="tab-contents" id="education">
                        <ul>
                            <li><span>2020-2023</span><br>Department Of Electronics And Communication Engineering <br>Institute of Engineering And Management ,Kolkata </li>
                            <li><span>2017-2020</span><br>Department Of Electronics And TeleCommunication Engineering <br>Women's Polytechnic, Kolkata</li>
                            <li><span>2017- 10th</span><br>Garia H.M.D.U.B Vidyalaya</li>
                           
                
                        </ul>
                    </div>
                </div>
            </div>
        </div>
 </div>
<!----------services----------->
<div id="services">
    <div class="container">
        <h1 class="sub-title">My Services</h1>
        <div class="services-list">
            <div>
                <i class="fa-solid fa-code"></i>
                <h2>Web Design</h2>
                <p>Website Development</p>
                <a href="#">Learn more</a>
            </div>
            <div>
                <i class="fa-brands fa-app-store-ios"></i>
                <h2>App Design</h2>
                <p>App Development</p>
                <a href="#">Learn more</a>
            </div>
            <div>
                <i class="fa-sharp fa-solid fa-crop"></i>
                <h2>UI/UX Design</h2>
                <p>Website Development</p>
                <a href="#">Learn more</a>
            </div>

        </div> 
    </div>
</div>
<!--------------portfolio------------->
<div id="Portfolio">
    <div class="container">
        <h1 class="sub-title">My Work</h1>
        <div class="work-list">
            <div class="work">
                <img src="Images/aa.jpg">
                <div class="layer">
                    <h3>Website Development</h3>
                    <p>This is a basic portfolio Website</p>
                    <a href="#"><i class="fa-solid fa-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="work">
                <img src="Images/bb.jpeg">
                <div class="layer">
                    <h3>Arduino Based Voice Controlled Car</h3>
                    <p>This works as a Robot</p>
                    <a href="#"><i class="fa-solid fa-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="work">
                <img src="Images/cc.jpg">
                <div class="layer">
                    <h3>Mobile App Development</h3>
                    <p>This Develops an App</p>
                    <a href="#"><i class="fa-solid fa-up-right-from-square"></i></a>
                </div>
            </div>
        </div>
        <a href="#" class="btn">See more</a>


    </div>

</div>
<!---------------Contact-------------->
<div id="contact">
    <div class="container">
        <div class="row">
            <div class="contact-left">
                <h1 class="sub-title">Contact Me</h1>
                <p><i class="fa-solid fa-paper-plane"></i>shrayaseenaskar2000@gmail.com</p>
                <p><i class="fa-solid fa-square-phone"></i>+91 8777436943</p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/shrayasee.naskar.33"><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-twitter-square"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/shrayasee-naskar-2626bb185/"><i class="fa-brands fa-linkedin"></i></a>
                </div>
                <a href="images/SHRAYASEE NASKAR.pdf" download class="btn btn2">Download CV</a>
            </div>
            <div class="contact-form">
        
    </div>
    <div class="contact-us">
       <form action="save.php" method="post">
           <input type="text" name="name"   class="form-control" placeholder="Enter your Name"> <br>
           <input type="email" name="email"  class="form-control" placeholder="Enter Email"> <br>
           <input type="text" name="mobile"  class="form-control" placeholder="Enter Mobile Number"> <br>
           <input type="text" name="message"   class="form-control" placeholder="Enter your Message"> <br>
           <input type="submit" class="form-control submit" value="submit" >
       </form>
    </div>
            
        <span id="msg"></span>
            </div>
        </div>
    </div>
    <div class="copyright">
        
        <p>copyright © Shrayasee <i class="fa-solid fa-heart"></i></p>
    </div>
</div>


 <script>

    var tablinks = document.getElementsByClassName("tab-links");
    var tabcontents = document.getElementsByClassName("tab-contents");
    
    function opentab(tabname){
        for(tablink of tablinks){
            tablink.classList.remove("active-link");
        }
        for(tabcontent of tabcontents){
            tabcontent.classList.remove("active-tab");
        }
        event.currentTarget.classList.add("active-link");
        document.getElementById(tabname).classList.add("active-tab");
    }
 </script>
 <script>
    var sidemeu = document.getElementById("sidemenu");
    function openmenu(){
        sidemeu.style.right ="0";
    }
    function closemenu(){
        sidemeu.style.right ="-200px";
    }



 </script>
 <script>
    
    
   
  </script>
    
</body>
</html>