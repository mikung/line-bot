<?php
/**
 * Created by PhpStorm.
 * User: mikung
 * Date: 02/02/2560
 * Time: 21:26
 */
require "vendor/autoload.php";

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('DqC0E6bwB9GJjUsZdCdyhtC1b6KXlp/DXoBnzPbt1/v+z0p0FCzHk5XAbO9nm2HQL8AoawkXmbJmMabvXfKrdJeueUzpp27IKe8kDox3Y4U2hjOjsM2l32hIc47h7TrPHrhtfeRQyXLwALD3yP1EJAdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => 'ec68c63b493064bedb0c8eccf7f328d6']);


$message = json_encode($action);
//$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ConfirmTemplateBuilder('data',$message);
$imagemessage = new \LINE\LINEBot\MessageBuilder\ImagemapMessageBuilder('https://mikung-line.herokuapp.com/img/01.jpg','https://mikung-line.herokuapp.com/img/01.jpg');
$response = $bot->pushMessage('U90d4da92752f6e692797e75d993d0d6e', $imagemessage);
echo $response->getHTTPStatus() . ' ' . $response->getRawBody();