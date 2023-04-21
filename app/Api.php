<?php declare(strict_types=1);

namespace App;

use Symfony\Component\Dotenv\Dotenv;

class Api
{
    function getApiKey()
    {
        $dotenv = new Dotenv();
        $dotenv->load(__DIR__.'/.env');

        return $_ENV['API_KEY'];
    }
}