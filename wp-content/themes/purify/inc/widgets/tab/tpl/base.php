<?php
/**
 * Created by PhpStorm.
 * User: Anh Tuan
 * Date: 12/3/2014
 * Time: 9:55 AM
 */
$rand = time() . '-1-' . rand(0, 100);

echo '<div class="tab-contact">';

echo '<ul class="nav nav-tabs" role="tablist">';
//$active = $content_active ='';

$j = $k = 1;
foreach ( $instance['tab'] as $i => $tab ) {
    if ( $j == '1' ) {
        $active = "class='active'";
    } else {
        $active = '';
    }
    echo '<li role="presentation" ' . $active . '><a href="#thimm-widget-tab-' . $j .$rand. '" data-toggle="tab">' . $tab['title'] . '</a></li>';
    $j ++;
}

echo '</ul>';

echo '<div class="tab-content">';
foreach ( $instance['tab'] as $i => $tab ) {
    if ( $k == '1' ) {
        $content_active = " active in";
    } else {
        $content_active = '';
    }
    echo ' <div role="tabpanel" class="tab-pane fade' . $content_active . '" id="thimm-widget-tab-'  .$k .$rand. '">' . $tab['content'] . '</div>';
    $k ++;
}
echo '</div>';
echo '</div>';
?>