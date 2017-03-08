<?php
class lophcDTO
{
    var $malophc;
    var $macn;
    var $tenlophc;
    var $khoa;
    function __construct($malophc, $tenlophc, $macn, $khoa)
    {
        $this->malophc=$malophc;
        $this->tenlophc=$tenlophc;
        $this->macn=$macn;
        $this->khoa=$khoa;
    }
}
?>