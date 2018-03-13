<?php

if (!function_exists('getTitle')) {
    function getTitle($object = null, $property = 'title') {
        if (is_object($object) && isset($object->$property)) {
            return $object->$property . ' | ' . session('current_lang')->site_title;
        } elseif (is_string($object) && !empty($object)) {
            return $object . ' | ' . session('current_lang')->site_title;
        } else {
            return session('current_lang')->site_title;
        }
    }
                              }


function escapeAndTrim($string)
{
    return trim(strip_tags($string));
}


function getNWords($string, $n = 5, $withDots = true)
{
    $excerpt = explode(' ', $string, $n + 1);
    $wordCount = count($excerpt);
    if ($wordCount >= $n) {
        array_pop($excerpt);
    }
    $excerpt = implode(' ', $excerpt);
    if ($withDots && $wordCount >= $n) {
        $excerpt .= ' ...';
    }
    return $excerpt;
}

function mb_ucfirst($string, $encoding = 'utf8')
{
    $stringLength = mb_strlen($string, $encoding);
    $firstChar = mb_substr($string, 0, 1, $encoding);
    $then = mb_substr($string, 1, $stringLength - 1, $encoding);
    return mb_strtoupper($firstChar, $encoding) . $then;
}
