<?php  
   /*
   Plugin Name: autorefreshpagemw
    Plugin URI: http://www.mwonline.com.co/
    Description: auto refresh page in  midnight
    Author: jorge hernandez
    Version: 1.0
    Author URI: http://www.mwonline.com.co/
    */

   function Segundos($hour,$minute,$second)
  {
        //Dates are arithmetic and valid
        $hora1 = mktime('24','00','00');//midnight 
        $hora2 = mktime($hour, $minute, $second);
        $segundos = $hora1 - $hora2;
        return $segundos ;
  }
   function refresh_shortcode() 
   {
          //change time zone 
          date_default_timezone_set('America/Bogota');
          //date 
            $hour=date("H");
            $minute=date("i");
            $second=date("s");
         echo '<meta http-equiv="refresh" content="'.Segundos($hour,$minute,$second).'"/>';
  }
  add_shortcode('dayrefresh', 'refresh_shortcode');
  

 ?>
