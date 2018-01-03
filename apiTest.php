<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;
use PHPHtmlParser\Dom;

$jar = new \GuzzleHttp\Cookie\CookieJar;
$domain = 'photofunia.com';
$values = ['PHPSESSID' => 'gc938mjl73umea70kbl5chk2n5'];
$cookieJar = $jar->fromArray($values,$domain);

$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://photofunia.com/',
    // You can set any number of default request options.
    'timeout'  => 10.0,
    'cookies' => $cookieJar
]);



// $response = $client->request('POST', 'https://photofunia.com/categories/all_effects/pencil_drawing?server=1', [
//     'multipart' => [
//         [
//             'name'     => 'current-category',
//             'contents' => 'all_effects'
//         ],
//         [
//             'name'     => 'image',
//             'contents' => 'FpOP8l20CYBd_SLz5kG4PQ'
//         ],
//         [
//             'name'     => 'image:crop',
//             'contents' => '0.0.1280.770'
//         ],
//         [
//             'name'     => 'color',
//             'contents' => 'gray'
//         ],
//         [
//             'name'     => 'paper',
//             'contents' => 'white'
//         ],
//         [
//             'name'     => 'fade_edges',
//             'contents' => 'on'
//         ],
//     ]
// ]);




// print_r($response);
// $dom = new IvoPetkov\HTML5DOMDocument();
// $dom->loadHTML($response->getBody());
// echo $dom->querySelector('a.button')->getAttribute('href');

$response = $client->request('POST', 'https://photofunia.com/images?server=1', [
    'multipart' => [
        [
            'name'     => 'image',
            'contents' => fopen('DFVL2005.jpg','r')
        ],
    ]
]);

echo($response->getBody());

?>