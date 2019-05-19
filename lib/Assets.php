<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * This class allows you to easily include assets in your CodeIgniter projet.
 *
 * Please see doc at https://packagist.org/packages/renj1e/ci-asset for more information.
 *
 * License MIT
 *
 * @author Renj1e
 */

namespace Assets;

class C
{
    public function __construct()
    {
        $CI =& get_instance();
        var_dump("expression");
    }
}