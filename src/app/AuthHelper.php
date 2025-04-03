<?php

class AuthHelper extends \Tina4\Auth
{
    function validToken(string $token, string $publicKey = "", string $encryption = \Nowakowskir\JWT\JWT::ALGORITHM_RS256): bool
    {
        if ($token === "Bearer " . $_ENV["TOKEN"]) {
            return true;
        }
        return parent::validToken($token, $publicKey, $encryption);
    }

}