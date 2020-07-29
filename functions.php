<?php
function limitText($text, $limit, $smash = true){
   $size = strlen($text);
   if($size <= $limit){
      $new_text = $text;
   } else {
      if($smash == true){
         $new_text = trim(substr($text, 0, $limit))."...";
      } else {
         $last_space = strrpos(substr($text, 0, $limit), " ");
         $new_text = trim(substr($text, 0, $last_space))."...";
      }
   }
   return $new_text;
}