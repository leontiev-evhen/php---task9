<?php
require_once 'config.php'; 

spl_autoload_register(function ($class_name) {
        require_once 'libs/'.$class_name . '.php';
        });

try
{
    $items = [
         '1' => 'item1',
         '2' => ['selected' => true, 'item2'],
         '3' => 'item3',
         ];

    $item_m = [
         '0' => ['item', 'item', 'item'],
         '1' => ['item', 'item', 'item'],
         '2' => ['item', 'item', 'item'],
         '3' => ['item', 'item', 'item'],
         '4' => ['item', 'item', 'item'],
     ];
   // $html =  HtmlHelper::select($items, 'sel');
    $html = HtmlHelper::table($item_m);
}
catch (Exception $e)
{
    $error = $e->getMessage();
}

require_once 'templates/index.php';

?>
