<!DOCTYPE html>
 <html>
     <head>
         <title>Mackenzie Evans</title>
         
         <link rel="stylesheet" type="text/css" href="stylesheets/style.css">
         <link rel="stylesheet" type="text/css" href="stylesheets/nav.css">
         <link rel="icon" href="media/favicon.png" type="image/png">

         <?php include('php/variables.php'); ?>
         
        <meta charset="UTF-8">
        <meta name="description" content="Mackenzie Evans' Portfolio">
        <meta name="keywords" content="Mackenzie, portfolio, web developer, HTML, CSS, JavaScript, PHP">
        <meta name="author" content="Mackenzie Evans">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
     </head>
     <body>


         <?php echo $homeNav; ?>

         
         <main id="main-index">
             
              <h1 id="mac">Mackenzie Evans</h1>
             
            
             <img src="media/portrait.png" alt="Portrait of Mackenzie" />

             
              <p>Mackenzie is an outgoing, highly motivated, and talented web developer.  During her high school career, she will have completed 27 college credit hours, passed the AP Calculus BC exam, served as a National Honor Society Member and excelled in the web development program at Jordan Applied Technology Center (JATC).  While studying at JATC, Mackenzie served as the SkillsUSA President and earned nine industry certifications.  She is the current Bingham High School Sterling Scholar for Computer Technology.  Mackenzie is serving as an intern with Monte Vista Elementary School where she oversees the redesign of the school website.  She is also serving as an intern with National Background &amp; Screening Solutions using PHP to help rebuild their website to make it more functional and secure.  Mackenzie has accepted a scholarship to the University of Utah and has been directly admitted into the College of Engineering where she plans to pursue a degree in Computer Science.  As technology is constantly evolving and changing for the better, Mackenzie is excited to be at the forefront of that evolution.</p>
             
             
         </main>

         <?php
            echo $footer; ?>
         
         <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

     </body>
</html>