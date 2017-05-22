<?php

   function encryptAmount($data,$secret_key){
        $algorithm = 'AES-256-CBC';
        $skey = explode('-',$secret_key);
        $secret = $skey[1];
        $iv = substr($secret, 0, 16);
        $encrypted = base64_encode($iv) . openssl_encrypt($data, $algorithm, $secret, 0, $iv);
        $hmac = hash_hmac('md5', $encrypted, $secret);
        return $encrypted.'-'.$hmac;
    }
    

