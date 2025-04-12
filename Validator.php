<?php

class Validator {

    public static function emptyString($value, $min = 1, $max = 600) {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function email ($value) {
       return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}