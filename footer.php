 <footer>

   <?php
    // Dynamic year footer
    function copyrightYear()
    {
      $currentYear = date("Y");
      // If current year is 2022
      if ($currentYear == "2022") {
        return $currentYear;
      }
      // If current year is different from 2022
      return "2022 - $currentYear";
    }
    ?>

   <div class="footer-text">
     ©<?php echo copyrightYear(); ?>,
     <a class="footer-link" href="https://github.com/Julien-B-py">
       Julien BEAUJOIN
       <i class="fab fa-github"></i>
     </a>
   </div>

 </footer>