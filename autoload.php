<?php
/**
 * Created by PhpStorm.
 * User: RIM
 * Date: 22/11/2018
 * Time: 17:55
 */
function load ($classe){
    require $classe.'.php';
}
spl_autoload_register('load');