<?php
    // Dynamic year for footer
    function formatFooterYear()
    {
      // Store current year as a string in a variable
      $currentYear = date("Y");
      // If current year is 2022
      if ($currentYear == "2022") {
        return $currentYear;
      }
      // If current year is different from 2022
      return "2022 - $currentYear";
    }
?>