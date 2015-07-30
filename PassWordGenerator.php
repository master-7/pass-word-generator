<?php

namespace master7\password;

/**
 * Class PassWordGenerator
 * @package master7\password
 */
class PassWordGenerator {

    /**
     * Generate the password
     * @param int $countWord
     * @param int $countNumber
     * @return null|string
     */
    public static function generate($countWord = 1, $countNumber = 3)
    {
        $password = null;

        $dictionary = require('dictionary.php');

        for($count = 1; $count <= $countWord; $count++)
        {
            $password .= $dictionary[rand(0, count($dictionary))];
        }

        for($count = 1; $count <= $countNumber; $count++)
        {
            $password .= rand(0, 9);
        }
        return $password;
    }

}