<?php
declare(strict_types=1);

namespace App;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Guzzle\Http\Exception\ClientErrorResponseException;
use Symfony\Component\VarDumper;



Class TokenGeneratorMyApp
{

    public $token;
    public function __construct()
    {
        $this->token = bin2hex(random_bytes(64));
      
    }

    

}