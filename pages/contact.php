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

         <main id="main-contact">

             <?php
             include('../php/form.php');
             ?>

             <h1>Contact Mackenzie <a href="https://www.linkedin.com/in/mackenzie-evans-33a59b159/" alt="LinkedIn Profile Link" target="_blank"><img src="../media/linkedin.png" alt="LinkedIn Icon" id="linkedin" /></a></h1>

             <form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">


                 <div class="success"><?php echo $success; ?></div>

                 <fieldset>
                     <input type="text" name="name" placeholder="Name" value="<?= $name ?>" />
                     <span class="error"><?= $name_error ?></span>
                 </fieldset>

                 <fieldset>
                     <input type="text" name="phone" placeholder="Phone Number" value="<?= $phone ?>" />
                     <span class="error"><?= $phone_error ?></span>
                 </fieldset>

                 <fieldset>
                     <input type="text" name="email" placeholder="Email" value="<?= $email ?>" />
                     <span class="error"><?= $email_error ?></span>
                 </fieldset>

                 <fieldset>
                     <textarea type="text" name="comment" placeholder="Your Message Here" value="<?= $comment ?>"></textarea>
                     <span class="error"><?= $comment_error ?></span>
                 </fieldset>

                 <fieldset>
                 <button type="submit" name="submit" class="click" data-submit="...Sending">Submit</button>
                 </fieldset>


             </form>

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