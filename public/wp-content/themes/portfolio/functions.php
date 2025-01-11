
<?php
function user_contactmethods_filter($items) {
    $items['X']  = 'X(URL)';
    $items['Instagram']  = 'Instagram (URL)';
    $items['Facebook']  = 'Facebook (URL)';
    $items['note'] = 'Note';
    $items['birthplace'] = '出身地';
    $items['job'] = '職業';
    $items['university'] = '出身大学';
    return $items;
}
add_filter('user_contactmethods', 'user_contactmethods_filter');