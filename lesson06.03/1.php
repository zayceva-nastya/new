<?php
include 'fun.php';

echo markdown("**ghfdjgfjh**,*gjfkj*")."<br>";
echo markdown("~~ghfdjgfjh~~,**gjfkj**")."<br>";
echo markdown("*ghfdjgfjh*,~~gjfkj~~")."<br>";

echo bb_code('[img][/img]');

