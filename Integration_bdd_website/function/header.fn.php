<?php
function isActive($page, $url) {
    if (strpos($page, $url) !== FALSE) {
        echo 'active text-uppercase';
    }
}
if(strrpos($index_page, $current_url)!== false || strpos($index_page . 'index.php', $current_url) !== false):
    $title = $index_name;
  elseif(strrpos($films_page, $current_url) !== false):
    $title = $films_name;
  elseif(strrpos($contact_page, $current_url) !== false):
    $title = $contact_name;
  endif;
