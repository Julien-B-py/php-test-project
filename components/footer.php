 <footer>

   <div class="footer-text">

     <?php

      include "./utils/formatFooterYear.php";
      $year = formatFooterYear();

      echo "©$year";

      ?>,

     <a class="footer-link" href="https://github.com/Julien-B-py">
       Julien BEAUJOIN
       <i class="fab fa-github"></i>
     </a>

   </div>

 </footer>