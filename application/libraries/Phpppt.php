<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');
require_once APPPATH.'/third_party/PhpPowerpoint/Autoloader.php';
require_once APPPATH.'/third_party/PhpPowerpoint/Common/Autoloader.php';

use PhpOffice\PhpPowerpoint\Autoloader;
use PhpOffice\PhpPowerpoint\IOFactory;
use PhpOffice\PhpPowerpoint\Settings;
use PhpOffice\PhpPowerpoint\PhpPowerpoint;
use PhpOffice\PhpPowerpoint\Style\Alignment;
use PhpOffice\PhpPowerpoint\Style\Color;

Autoloader::register();

class Phpppt extends Autoloader {

}

