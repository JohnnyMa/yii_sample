<?php
$blockContent = Yii::app() -> params['BusinessMenuContent'];

$blockHtml = '<dl id="detail-menu-list">';
foreach ($blockContent as $key => $item) {
    $blockHtml .= '<dt>' . $key . '</dt>';
    $blockHtml .= '<dd><ul>';
    foreach ($item as $menuItem => $menuLink) {
        $blockHtml .= '<li><a target="_self" href="' . $menuLink . '">' . $menuItem . '</a></li>';
    }
    $blockHtml .= '</ul></dd>';
}
$blockHtml .= '</dl>';

echo $blockHtml;
?>
