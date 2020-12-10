<?php 

if (isset($_REQUEST['q']))
{
$obj = array(

    array('img/team-member/Dalila.jpg', 'Dalila Meftahi', 'Speaker', '#', '#', '#')
);


$response='';

foreach($obj as $arr) 
{
  $response .= $arr[4];
}
echo $response;
}