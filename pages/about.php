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
         
         <main id="main-about">
         
             <img src="../media/handstand.png" alt="Handstand Picture" id="handstand" />
             <h1>About Mackenzie Evans</h1>
             <hr />
             <br />

             <div id="about">
             <p>Mackenzie started dancing at the age of 14 after a gymnastics injury.  She worked hard to get to the level of the other dancers that have been dancing for 10+ years.  Mackenzie quickly fell in love with dance and excelled.  By her fourth year at <a href="https://www.empowerdance.com/" alt="Link to Empower Dance Studio">Empower Dance</a>, Mackenzie was on the top elite team at the studio: Premier.  Mackenzie loves to dance and be active.  She competed for four years before she was injuried.  It was then that she really dove into computer programming and learning new coding languages.</p>
             <img src="../media/leap.png" alt="Leap Picture" />
             
             <img src="../media/gym.png" alt="Gymnastics Picture" />
             <p>Mackenzie started doing gymnastics at the age of 5.  She fell in love with it right away.  By the age of seven she started competing. As a level seven gymnast, Mackenzie was the State Champion on the floor.  As a level eight gymnast, Mackenzie was the silver medalist on beam at Regionals.  After her gymnastics career ended she went back and became a coach at the gym where she learned everything: <a href="http://www.huntsgymnastics.com/" alt="Link to Hunt's Gymnastics">Hunt's Gymnastics</a>.</p>
             
             <p>Mackenzie has recently started scuba diving.  She became certified during the summer of 2017 and has completed multiple dives.  She has done dives in the Tulum, Mexico.  These dives were amazing and absolutely breathtaking.  After these extraordinary dives, Mackenzie was hooked.  She has plans to complete as many dives as possible all around the world.</p>
             <img src="../media/scuba.png" alt="Scuba Diving Picture" />
             </div>


         <div id="about-resized">

             <img src="../media/leap.png" alt="Leap Picture" />
             <p>Mackenzie started dancing at the age of 14 after a gymnastics injury.  She worked hard to get to the level of the other dancers that have been dancing for 10+ years.  Mackenzie quickly fell in love with dance and excelled.  By her fourth year at <a href="https://www.empowerdance.com/" alt="Link to Empower Dance Studio">Empower Dance</a>, Mackenzie was on the top elite team at the studio: Premier.  Mackenzie loves to dance and be active.  She competed for four years before she was injuried.  It was then that she really dove into computer programming and learning new coding languages.</p>

             <img src="../media/gym.png" alt="Gymnastics Picture" />
             <p>Mackenzie started doing gymnastics at the age of 5.  She fell in love with it right away.  By the age of seven she started competing. As a level seven gymnast, Mackenzie was the State Champion on the floor.  As a level eight gymnast, Mackenzie was the silver medalist on beam at Regionals.  After her gymnastics career ended she went back and became a coach at the gym where she learned everything: <a href="http://www.huntsgymnastics.com/" alt="Link to Hunt's Gymnastics">Hunt's Gymnastics</a>.</p>

             <img src="../media/scuba.png" alt="Scuba Diving Picture" />
             <p>Mackenzie has recently started scuba diving.  She became certified during the summer of 2017 and has completed multiple dives.  She has done dives in the Tulum, Mexico.  These dives were amazing and absolutely breathtaking.  After these extraordinary dives, Mackenzie was hooked.  She has plans to complete as many dives as possible all around the world.</p>

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