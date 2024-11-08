<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEDBRIDGE</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style1.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> <strong>MID </strong>BRIDGE </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#services">services</a>
        <a href="#doctors">doctors</a>
        <a href="#appointment">appointment</a>
        <a href="#review">review</a>
        <a href="#blogs">blogs</a>
        <a href="http://localhost//phase3/login.php">carenet hub</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="image/home-img.svg" alt="">
    </div>

    <div class="content">
        <h3>we take care of your healthy life</h3>
        <p> A person who has good physical health is likely to have bodily functions and processes working at their peak.</p>
        <a href="#appointment" class="btn"> for appointment <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<!-- home section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>150+</h3>
        <p>doctors at work</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1030+</h3>
        <p>satisfied patients</p>
    </div>

    <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3>490+</h3>
        <p>bed facility</p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>70+</h3>
        <p>available hospitals</p>
    </div>

</section>

<!-- icons section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="image/about-img.svg" alt="">
        </div>

        <div class="content">
            <h3>take the world's best quality treatment</h3>
            <p>At our hospital, we are committed to delivering the highest standards of healthcare. With a team of world-renowned specialists, advanced technology, and patient-centered care, we ensure every patient receives treatment that is not only effective but also compassionate. Our mission is to set a global standard in quality, offering exceptional medical care that is tailored to individual needs. We believe in a future where excellence in healthcare is accessible, reliable, and transformative, making us a trusted leader in providing the world's best quality treatment.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>free checkups</h3>
            <p>Your Wellness, Our Priority!</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>24/7 ambulance</h3>
            <p>Emergency Care at Your Doorstep, Day or Night</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>expert doctors</h3>
            <p>Premier Health Experts,Renowned Medical Specialists</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>medicines</h3>
            <p>Riding the Wave to Better Health</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-procedures"></i>
            <h3>bed facility</h3>
            <p>Nurturing Wellness, One Bed at a Time</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>total care</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- services section ends -->



<!-- doctors section starts  -->

<section class="doctors" id="doctors">

    <h1 class="heading"> our <span>doctors</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images\doc2.png" alt="">
            <h3>Joseph Ebinesar [MBBS,MD]</h3>
            <span>cardiologist</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
                
            </div>
        </div>

        <div class="box">
            <img src="image/doc-2.jpg" alt="">
            <h3>Ghana shyam[MBBS,MD]</h3>
            <span>ortho doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-3.jpg" alt="">
            <h3>Shravya [MBBS,MD]</h3>
            <span>ENT doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-4.jpg" alt="">
            <h3>Nivetha [MBBS,MD]</h3>
            <span>Audiologist doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-5.jpg" alt="">
            <h3> Sivashankar [MBBS,MD]</h3>
            <span>Gynecologist doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-6.jpg" alt="">
            <h3>Ram [MBBS,MD]</h3>
            <span>Pediatrician doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            
            </div>
        </div>
        <div class="box">
            <img src="image/doc-7.jpg" alt="">
            <h3>Gayathri[MBBS]</h3>
            <span>Radiologist</span>
            <div class="share">
                
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="image/doc-8.jpg" alt="">
            <h3>pragdeeth [MBBS]</h3>
            <span>Pulmonologist doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="image/doc-9.jpg" alt="">
            <h3>Linkesh[MBBS]</h3>
            <span>Neurologists doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

    </div>

</section>

<!-- doctors section ends -->

<!-- appointmenting section starts   -->

<section class="appointment" id="appointment">

    <h1 class="heading"> <span>appointment</span> now </h1>    

    <div class="row">

        <div class="image">
            <img src="image/appointment-img.svg" alt="">
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <?php
            if(isset($message)) {
                foreach($message as $message) {
                echo'<p class ="message">'.$message.'</p>';
            }
            }
        ?>
      
            <h3>make appointment</h3>
            <input type="text"name="name" placeholder="your name" class="box">
            <input type="number"name="number" placeholder="your number" class="box">
            <input type="email"name="email" placeholder="your email" class="box">
            <input type="date"name="date" class="box">
            <input type="time"name="time" class="box">
            <select name="doctor" class="box" required>
        <option value="" disabled selected>Select a doctor</option>
        <option value="cardiologist">Cardiologist - DR Joseph Ebinesar</option>
        <option value="ortho">ortho - DR ghana shyam</option>
        <option value="gynecologist">Gynecologist - DR Sivashankar</option>
        <option value="audiologist">audiologist - DR nivethaa</option>
        <option value="ent">ent - shravya</option>
        <option value="pediatrician">pediatrician - DR ram</option>
        <option value="neurologist">Neurologist - DR Linkesh</option>
        <option value="pulmonologist">Pulmonologist - DR pragdeeth</option>
        <option value="Radiologist">Radiologist - DR Gayathri</option>
    </select>
            <input type="submit" name="submit" value="appointment now" class="btn">
            
        </form>

    </div>

</section>

<!-- appointmenting section ends -->

<!-- review section starts  -->

<section class="review" id="review">
    
    <h1 class="heading"> client's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/pic-1.jpg" alt="">
            <h3>shyam</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">The platform is very convenient for patients who want seamless access to their medical records and services. The interface is clean and easy to use, which makes interacting with the healthcare system less intimidating. The added features like ordering medications and finding specialists online make it much easier to manage healthcare needs without repeated hospital visits.</p>
        </div>

        <div class="box">
            <img src="image/pic-1.jpg" alt="">
            <h3>anand</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">As someone who works in healthcare administration, I appreciate the thorough and thoughtful design of the website. The login portals for different user types streamline the process and keep tasks well-organized. Admin controls are powerful, and I can see this significantly reducing paperwork and making coordination smoother</p>
        </div>

        <div class="box">
            <img src="image/pic-1.jpg" alt="">
            <h3>shravya</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Having access to a comprehensive healthcare system online is a big step forward. The project tackles the need for digitalization in healthcare by offering login portals for patients, doctors, and administrators. This level of integration can make healthcare more accessible and efficient, promoting better communication and faster response times.</p>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="image/blog-1.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 04 november, 2024 </a>
                    <a href="#"> <i class="fas fa-user"></i> by Vishal Renake</a>
                </div>
                <h3>Redefining healthcare service delivery with AI</h3>
                <p>Vishal Renake, Executive VP - Healthcare Operations, Teleperformance in India explains how the healthcare industry is poised to witness AI revolutionising the way patients seek assistance and healthcare professionals provide care</p>
                <a href="https://www.expresshealthcare.in/blogs/guest-blogs-healthcare/redefining-healthcare-service-delivery-with-ai/444981/" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/blog-2.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 04 november, 2024 </a>
                    <a href="#"> <i class="fas fa-user"></i> by ram </a>
                </div>
                <h3>The Change Healthcare Cyberattack: A Wake-Up Call for Healthcare Cybersecurity </h3>
                <p>In the early hours of February 21, the healthcare sector faced a dire threat: Change Healthcare, a major component of UnitedHealth Group’s digital operations, fell victim to a sophisticated ransomware attack by ALPHV/BlackCat. This incident, demanding a $22 million ransom, marked one of the most significant cyberattacks in American healthcare history, highlighting the sector’s vulnerabilities and the audacity of modern cybercriminals. </p>
                <a href="https://blogs.opentext.com/the-change-healthcare-cyberattack-a-wake-up-call-for-healthcare-cybersecurity/" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/blog-3.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> November 1, 2024 </a>
                    <a href="#"> <i class="fas fa-user"></i> by oward E. LeWine, MD </a>
                </div>
                <h3>Eating more fruits and vegetables may prevent chronic kidney disease</h3>
                <p>Eating a plant-based diet that includes a variety of fruits and vegetables has been shown to help lower high blood pressure. But can these foods also protect against worsening of chronic kidney disease in people who already have high blood pressure? To find out, researchers recruited 153 participants with both high blood pressure and chronic kidney disease. Kidney disease was confirmed by high levels of albumin in their urine. Albumin, a protein found in the blood, can pass into the urine when a kidney is damaged.</p>
                <a href="https://www.health.harvard.edu/staying-healthy/eating-more-fruits-and-vegetables-may-prevent-chronic-kidney-disease" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="image/blog-4.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 08 october 2024 </a>
                    <a href="#"> <i class="fas fa-user"></i> by Adelaida Sarukhan </a>
                </div>
                <h3>Marburg Virus Disease: Are Vaccines and Treatments in the Horizon?</h3>
                <p>Marburg virus disease is back in the headlines. Outbreaks of this emerging disease are rare but highly dangerous. Fortunately, today we have more knowledge –and some tools in the horizon – that can help us contain them</p>
                <a href="https://www.isglobal.org/en/healthisglobal/-/custom-blog-portlet/marburg-virus-disease-are-vaccines-and-treatments-in-the-horizon-" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="image/blog-5.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> September 19 2024 </a>
                    <a href="#"> <i class="fas fa-user"></i> by Knowledge and News on Women’s Health (KNOWH) </a>
                </div>
                <h3>Sickle Cell Disease: A Spotlight on Women</h3>
                <p>eptember is National Sickle Cell Awareness Month. This annual observance helps raise awareness about sickle cell disease (SCD) and spotlights ongoing advancements in research and treatment options for those who are living with this chronic and often painful disease. SCD is the most common inherited blood disorder and affects approximately 100,000 Americans.</p>
                <a href="https://www.fda.gov/consumers/knowledge-and-news-women-owh-blog/sickle-cell-disease-spotlight-women" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="image/blog-6.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> September 16, 2024 </a>
                    <a href="#"> <i class="fas fa-user"></i> by Emily Kirby, BPH </a>
                </div>
                <h3>Prevent Fungal Diseases in the Workplace</h3>
                <p>As part of Fungal Disease Awareness Week, we are highlighting fungal diseases that can affect workers. Coccidioidomycosis (Valley fever), blastomycosis, and histoplasmosis are fungal diseases caused by fungi that live in the environment in certain regions. Infections are caused by breathing in fungal spores that get into the air. Some jobs and work activities that disturb soil in areas where the fungi live can release fungal spores into the air and put workers at higher risk. Employers and workers can take steps to reduce risk and prevent workplace exposures to fungal diseases.</p>
                <a href="https://blogs.cdc.gov/niosh-science-blog/2024/09/16/fungal-diseases/" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#doctors"> <i class="fas fa-chevron-right"></i> doctors </a>
            <a href="#appointment"> <i class="fas fa-chevron-right"></i> appointment </a>
            <a href="#review"> <i class="fas fa-chevron-right"></i> review </a>
            <a href="#blogs"> <i class="fas fa-chevron-right"></i> blogs </a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> dental care </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> message therapy </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> cardioloty </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> ambulance service </a>
        </div>

        <div class="box">
            <h3>appointment info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +91-7708968884 </a>
            <a href="#"> <i class="fas fa-phone"></i> +91-7708968994 </a>
            <a href="#"> <i class="fas fa-envelope"></i> Josephhospital@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> Josephhospital1@gmail.com </a>
            <a href="https://www.bing.com/maps?mepi=127%7E%7EUnknown%7EAddress_Link&ty=18&q=Provident+Cosmo+City&ss=ypid.YN4070x6373487620409150326&ppois=12.808719635009766_80.20063018798828_Provident+Cosmo+City_YN4070x6373487620409150326%7E&cp=12.808726%7E80.200624&v=2&sV=1&FORM=MPSRPL&lvl=16.0"> <i class="fas fa-map-marker-alt"></i> chennai </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-faceappointment-f"></i> faceappointment </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit"> created by <span>Joseph Ebinesar</span> | all rights reserved </div>

</section>

<!-- footer section ends -->


<!-- js file link  -->
<script src="js/script.js"></script>

</body>
</html>