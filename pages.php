<?php 

$tmp = array_keys($pages);
//echo $page;
//print_r($pages);
if(in_array($page, $tmp))
{
    include('pages/'.$page.'.php');
}
else
{
    include('pages/main.php');
}

?>