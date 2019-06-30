<?php
/**
 * Created by PhpStorm.
 * User: Issam
 * Date: 22/11/2017
 * Time: 16:44
 */
/**
 * @param array $params
 *
 * @return PDO
 */
function initCon(array $params) {
    $connection = new PDO(
        'mysql:host='.$params['host'].';dbname='.$params['dbname'].';port='.$params['port'],
        $params['user'],
        $params['password']
    );
    return $connection;
}
$params = [
    'host' => 'localhost',
    'dbname' => 'php-wb2',
    'port' => 3306,
    'user' => 'root',
    'password' => '',
];

$con = initCon($params);

