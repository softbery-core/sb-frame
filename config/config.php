<?php
 /*
 *  File     : config.php
 *  Author   : Paweł Tobis
 *  Copyright: 2021 by Paweł Tobis
 *  
 *  Creative Commons Corporation (“Creative Commons”) 
 *  is not a law firm and does not provide legal services
 *  or legal advice. Distribution of Creative Commons 
 *  public licenses does not create a lawyer-client or other
 *  relationship. Creative Commons makes its licenses and 
 *  related information available on an “as-is” basis. 
 *  
 *    http://creativecommons.org/licenses/by/4.0
 *  
 *  Creative Commons gives no warranties regarding its licenses,
 *  any material licensed under their terms and conditions, or 
 *  any related information. Creative Commons disclaims all 
 *  liability for damages resulting from their use to the 
 *  fullest extent possible.
 */

 $files = scandir(__DIR__);
 $files_array = array();

 foreach ($files as $file) {
     if ($file != "." || $file != ".." || $file != basename(__FILE__)) {
         
     }
 }

 var_dump($files." - ".basename(__FILE__));