<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Multiple Dump and Die and shows all together.
 * Use : dd($var1, $var2,.....)
 */
if (!function_exists('dd')) {
    function dd()
    {
        $arrays = func_get_args();
        $count = count($arrays);
        echo '<pre>';
        for ( $i = 0; $i < func_num_args(); $i++ ){
            $line_break = ($i+1==$count)?'':'<hr/><br/>';
            printf( "%s ".$line_break, print_r($arrays[$i], true) );
        }
        echo '</pre>';
        die();
    }
}
