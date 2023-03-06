<?php

require_once 'vendor/autoload.php';

// echo \Mantas\FirstApp\Hello::say();
// echo '<br />';
// echo \Mantas\FirstApp\folderis\Goodbye::say();

$climate = new \League\CLImate\CLImate;

$climate->red('Whoa now this text is red.');
$climate->blue('Whoa now this text is blue.');
