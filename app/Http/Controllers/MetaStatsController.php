<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;


class MetaStatsController extends Controller
{

    /*private $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => Config::get('facebook.base_url'),
        ]);
    }*/

    public function index()
    {
        $client = new Client();
        $token = 'EAAWehUz2vggBOwKIvrJunhc2bKZAxZBJLvbdCZAm4TZA0XZAI0cvlDWZBZA9Jzcct9m59NZB58XZAN8K3PxuZA1QZCG6BXp5Uf8nEn6KXdtDW69VO7HBnRkR4lVZBveweo8vspUdXiB1uflK4X8FRRt8f9wwZBbb8VHw9xU2Reoy9SVAFGLAptzm07iAyt8ZAPDZC4beRXMsVoozt33kroOzD0hBeEgCZArVzgZDZD';
        /*$response = $this->client->post('https://graph.facebook.com/v19.0/me?fields=id,name', [
            'headers' => [
              'Authorization: Bearer '.$token,
         ],
        ]);*/

        $response = $client->get("https://graph.facebook.com/v19.0/122118238064232120?access_token=".$token);

        //var_dump($response);
        $json = $response->getBody()->getContents();
        $data = json_decode($json, true);
    
        var_dump($data);
    // Mostrar los datos en la vista
        //return view('data', ['data' => $data]);
    }

}
