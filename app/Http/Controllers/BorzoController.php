<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BorzoController extends Controller
{
    public function index(){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://robotapitest-br.borzodelivery.com/api/business/1.1');
        curl_setopt($curl, CURLOPT_HTTPHEADER, ['X-DV-Auth-Token: 2707A540CDE133E16C95AFEF9B3F49F190DA883A']);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($curl);
        if ($result === false) {
            throw new Exception(curl_error($curl), curl_errno($curl));
        }

        echo $result;
    }
}
