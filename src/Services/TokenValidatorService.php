<?php
/**
 * Created by PhpStorm.
 * User: mariano
 * Date: 17/10/18
 * Time: 16:29
 */

// src/Services/TokenValidatorService.php
namespace App\Services;

class TokenValidatorService
{
    public function validate(string $token)
    {
        $authorizationType = 'Bearer';
        $desiredToken = '123a';
        $tokenEvaluated = $authorizationType.' '.$desiredToken;
        $result = ( $token === $tokenEvaluated)? true : false ;
        return $result;
    }
}