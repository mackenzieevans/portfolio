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

         <?php

         include_once('../php/database.php');
         $db = new Database();
         $mysqli = $db->getConnection();
         $result = $mysqli->query('select * FROM certifications c JOIN providers p on c.provider_id = p.id');
         $numRows = $result->num_rows;
         $affected = $mysqli->affected_rows;
         $result_awards = $mysqli->query('select * FROM awards');
         $result_education = $mysqli->query('select * FROM education');


         ?>
     </head>
     <body>

        <?php echo $nav; ?>
         
         <main id="main-background">
             
             <h1>Background</h1>

             <?php

             echo "<table>";
             echo "<tr><th colspan='5'>Education</th></tr>";

             while($row = $result_education->fetch_assoc())
             {
                 $school = $row['school'];
                 $year_begin = $row['year_begin'];
                 $year_end = $row['year_end'];
                 $grades = $row['grades'];
                 $credit = $row['credit'];
                 $grad = $row['grad'];
                 echo "<tr><td>$school</td><td>$year_begin - $year_end</td><td>GPA: $grades</td><td>$credit College Credit Hours</td><td>Graduation: $grad</td></tr></div>";
             }

             echo "</table>";

             echo "<br />";

             echo "<table>";
             echo "<tr><th>Provider</th><th>Certification</th></tr>";

             while($row = $result->fetch_assoc())
             {
                 $provider_id = $row['name'];
                 $certificate_name = $row['certificate_name'];
                 $badge = $row['badge'];

                 if($badge == NULL){
                     echo "<tr><td>$provider_id</td><td>$certificate_name</td></tr></div>";
                 } else {
                     echo "<tr><td>$provider_id</td><td><a href='$badge' alt='Link to Badge' target='_blank'>$certificate_name</a></td></tr></div>";
                 }

             }

             echo "</table>";

             echo "<br />";

             echo "<table>";
             echo "<tr><th>Awards</th></tr>";

             while($row = $result_awards->fetch_assoc())
             {
                 $award = $row['name'];
                 echo "<tr><td>$award</td></tr></div>";
             }

             echo "</table>";

             echo "<br />";


             ?>
             <!--<div id="certifications">
             <div id="mta">
             <h2>Microsoft Technology Associate</h2>
             <embed src="../certifications/html5.pdf" alt="HTML5 Certification" />
             <embed src="../certifications/html_css.pdf" alt="Intro to Programming using HTML and CSS Certification" />
             <embed src="../certifications/javascript.pdf" alt="Intro to Programming using JavaScript Certification" />
             </div>
             
             <div id="ciw">
             <h2>Certified Internet Web Professional</h2>
             <embed src="../certifications/site_development.pdf" alt="CIW Site Development Certification" />
             </div>
             
             <div id="adobe">
             <h2>Adobe</h2>
             <embed src="../certifications/dreamweaver.pdf" alt="Dreamweaver Certification" />
             <embed src="../certifications/photoshop.pdf" alt="Photoshop Certification" />
             </div>
             

             </div>-->
         
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