<?php
/**
 * Created by PhpStorm.
 * User: hamis
 * Date: 3/11/19
 * Time: 11:34 PM
 */
/**
 * Document Directory
 * @param $title
 * @return string
 */
if (! function_exists('document_dir')) {
    function document_dir($title) {
        return public_path(). DIRECTORY_SEPARATOR . 'storage' . DIRECTORY_SEPARATOR . $title;
    }
}

/**
 * Document url
 * @param $title
 * @return string
 */
if (! function_exists('document_url')) {
    function document_url($title) {
        return 'storage' . DIRECTORY_SEPARATOR . $title;
    }
}
