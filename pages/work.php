<!DOCTYPE html>
 <html>
     <head>
         <title>Mackenzie Evans</title>
         
         <link rel="stylesheet" type="text/css" href="../stylesheets/style.css">
         <link rel="stylesheet" type="text/css" href="../stylesheets/nav.css">
         <link rel="icon" href="../media/favicon.png" type="image/png">

         <?php include('../php/variables.php'); ?>
         
        <meta charset="UTF-8">
        <meta name="description" content="Mackenzie Evans' Portfolio">
        <meta name="keywords" content="Mackenzie, portfolio, web developer, HTML, CSS, JavaScript, PHP">
        <meta name="author" content="Mackenzie Evans">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
     </head>
     <body>

     <?php echo $nav; ?>

         <main id="main-work">

             <h1>Internships and Hand Coded Websites</h1>

             <div class="internship">
                 <img src="../media/monte-vista.jpg" alt="Monte Vista Elementary Website" class="hover" />
                    <div class="middle">
                        <div class="text">
                            <h3>Monte Vista Elementary School</h3>
                            <p>She works to update, maintain, and oversee the redesign of the school website.  She has reorganized the website's layout and content by adding pages, posts, and photos.</p>
                        </div>
                    </div>
             </div>

             <div class="internship">
                 <img src="../media/cb.png" alt="Coach Background Website" class="hover" />
                    <div class="middle">
                        <div class="text">
                            <h3>National Background & Screening Solutions, LLC</h3>
                            <p>Mackenzie uses PHP to help rebuild their website from the backend to make it more functional and secure.</p>
                        </div>
                    </div>
             </div>

             <div class="internship">
                 <img src="../media/jefc.png" alt="Jordan Education Foundation Website" class="hover" />
                    <div class="middle">
                        <div class="text">
                            <h3>Jordan Education Foundation Challenge</h3>
                            <p>Mackenzie worked with a partner to design and develop this site in just six hours.</p>
                        </div>
                    </div>
             </div>

             <div class="internship">
                 <img src="../media/ai.png" alt="Artificial Intelligence Website" class="hover" />
                    <div class="middle">
                        <div class="text">
                            <h3>ClearLight Robotics - Artificial Intelligence</h3>
                            <p>Mackenzie worked with a team of six to build two websites in two months.</p>
                        </div>
                    </div>
             </div>

         </main>

         <?php echo $footer; ?>
         
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