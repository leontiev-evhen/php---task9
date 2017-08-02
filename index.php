<?php
require_once 'config.php'; 

spl_autoload_register(function ($class_name) {
        require_once 'libs/'.$class_name . '.php';
        });

try
{
    $ParamsHtmlHelper = HtmlHelper::getHtmlHelper();

    /*==================== select ==========================*/

    $itemOptions = [
         '1' => 'item1',
         '2' => ['selected' => true, 'item2'],
         '3' => 'item3',
    ];

    $selectParams = [
        'name'      => 'mySelect',
        //'multiple'  => 'multiple',
        'required' => true,
        //'size'      => '',
        'class'     => 'form-control',
    ];

    $htmlSelect = HtmlHelper::selectHtml($itemOptions, $selectParams);

    /*==================== table ==========================*/

    $itemsTable = [
         '0' => ['item', 'item', 'item'],
         '1' => ['item', 'item', 'item'],
         '2' => ['item', 'item', 'item'],
         '3' => ['item', 'item', 'item'],
         '4' => ['item', 'item', 'item'],
     ];

    $tableParams = [
        'align' => 'center',
        'class' => 'table table-striped',
        'th' => true,
    ];

    $htmlTable = HtmlHelper::tableHtml($itemsTable, $tableParams);

    /*==================== list ul-ol ==========================*/

    $itemsList = [
        'item1',
        'item2' => ['item2', 'item2'],
        'item3',
        'item4',
        'item5' => ['item2', 'item2'],
    ];

    $listParams = [
        'class' => 'list-group',
        //'type' => 'ol',
    ];

    $htmlList = HtmlHelper::listHtml($itemsList, $listParams);

    /*==================== list dl ==========================*/

    $itemsDlList = [
        'item' => ['Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.'],
        'item2' => ['Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.'],
        'item3' => ['Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.'],
    ];

    $listDlParams = [
        'class' => 'myDl',
    ];

    $htmlDlList = HtmlHelper::listDlHtml($itemsDlList, $listDlParams);

    /*==================== input ==========================*/

    $inputParams = [
        'class' => 'radio-inline',
        'type'  => 'radio',
        //'value' => 'text',
        'name'  => 'myRadio',
    ];

    $htmlInput1 = HtmlHelper::inputHtml($inputParams);
    $htmlInput2 = HtmlHelper::inputHtml($inputParams);
    $htmlInput3 = HtmlHelper::inputHtml($inputParams);

}
catch (Exception $e)
{
    $error = $e->getMessage();
}

require_once 'templates/index.php';

?>
