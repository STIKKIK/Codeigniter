<?php
class Compare extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function build_string($str = "")
    {
        //if ($str == "")	// uh-oh!  จะเป็นอย่างไรถ้า FALSE หรือเลข 0 ถูกส่งมา?
        if ($str === "")
        {
            echo $str . "hit";
        }
        else
        {
            echo $str . "not hit";
        }
    }
}