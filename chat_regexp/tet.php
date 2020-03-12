<?php
preg_match_all('/<agent>(.*?)<\/agent>(.*?)<ip>(.*?)<\/ip>(.*?)<name>(.*?)<\/name>(.*?)<text>(.*?)<\/text>(.*?)<date>(.*?)<\/date>/ius', file_get_contents('chat.xml'), $match);
echo "<pre>";
print_r ($match);