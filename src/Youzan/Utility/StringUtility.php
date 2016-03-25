<?php
namespace Youzan\Utility;

class StringUtility {
    /**
     * @param string $string
     *
     * @return bool
     */
    public static function isJsonString($string) {
        json_decode($string);
        if (json_last_error() != JSON_ERROR_NONE) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * @param string $string
     *
     * @return bool
     */
    public static function isUtf8Encoding($string) {
        return mb_check_encoding($string, 'utf8');
    }

    /**
     * @param $needle
     * @param $haystack
     * @return bool
     */
    static function hasPrefix($needle, $haystack)
    {
        if (strpos($haystack, $needle) === 0) {
            return true;
        }
        return false;
    }

    /**
     * @param $needle
     * @param $haystack
     * @return bool
     */
    static function hasSuffix($needle, $haystack)
    {
        if (substr($haystack, -strlen($needle)) === $needle) {
            return true;
        }
        return false;
    }

    /**
     * @param $filename
     * @return mixed
     */
    static public function fileExtension($filename)
    {
        return $ext = pathinfo($filename, PATHINFO_EXTENSION);;
    }
}