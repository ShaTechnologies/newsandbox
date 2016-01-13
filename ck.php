<?php
/**
 * Created by PhpStorm.
 * User: Dhanujaya
 * Date: 1/13/2016
 * Time: 10:17 AM
 */

 class vehicle{
    var $name;
    var $speed;

    function setname($name,$speed)
    {
        $this->name=$name;
        $this->speed=$speed;
    }
function printthis()
{
    echo 'speed is '. $this->speed.' vehicle is '. $this->name;

}

}
$v1 =new vehicle();
$v1->setname('hyundai','180');
$v1->printthis();

?>