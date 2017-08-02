<?php
class HtmlHelper 
{
    private static $selectParams = [
        'name',
        'multiple',
        'required',
        'size',
        'class'
    ];

    private static $tableParams = [
        'align',
        'class',
        'th',
    ];

    private static $listParams = [
        'class',
        'type',
    ];

    private static $listDlParams = [
        'class',
    ];

    private static $inputParams = [
        'type',
        'class',
        'name',
        'value',
        'checked'
    ];

    public static function getHtmlHelper ()
    {
        $arrayParamsHtmlHelper =  [
            'selectHtml'  => self::$selectParams,
            'tableHtml'   => self::$tableParams,
            'listHtml'    => self::$listParams,
            'listDlHtml' => self::$listDlParams,
            'inputHtml'   => self::$inputParams,
        ];

        return self::listHtml($arrayParamsHtmlHelper);
    }

    /**
     * html helper select
     */
     public static function selectHtml ($items = [], $params = [])
     {

        if (is_array($params) && !empty($params))
        {
             $sParams = '';
             foreach ($params as $key=>$param)
             {
                 if (in_array($key, self::$selectParams))
                 {
                     switch ($key)
                     {
                         case 'name':

                             $sParams .= 'name = "'.$param.'" ';
                             break;

                         case 'multiple':

                             $sParams .= 'multiple ';
                             break;

                         case 'required':

                             $sParams .= 'required ';
                             break;

                         case 'size':

                             if (!empty($param))
                             {
                                $sParams .= 'size = "'.$param.'"';
                                break;
                             }
                             else
                             {
                                 throw new Exception('Expected size number > 0');
                             }

                         case 'class':

                             $sParams .= 'class = "'.$param.'"';
                             break;

                         default:
                             throw new Exception('Undefined param '.__FUNCTION__);
                     }
                 }
                 else
                 {
                    throw new Exception('Undefined param '.__FUNCTION__ );
                 }
             }
        }
        else
        {
            $sParams = '';
        }

        $html = '<select '.$sParams.'>';

         if (is_array($items))
         {
             foreach ($items as $item)
             {

                 if (is_array($item) && $item['selected'] === true)
                 {
                     $html .= '<option value="'.$item[0].'" selected>'.$item[0].'</option>';
                 }
                 else
                 {
                     $html .= '<option value="'.$item.'">'.$item.'</option>';
                 }
             }
         }

        $html .= '</select>';

        return $html;
    }

    /**
    * html helper table
     */
    public static function tableHtml ($items = [], $params = [])
    {
        $th = false;
        if (is_array($params) && !empty($params))
        {
            $tParams = '';
            foreach ($params as $key=>$param)
            {
                if (in_array($key, self::$tableParams))
                {
                    switch ($key)
                    {
                        case 'align':

                            $tParams .= 'align = "'.$param.'" ';
                            break;

                        case 'class':

                            $tParams .= 'class = "'.$param.'"';
                            break;

                        case 'th':

                            $th = true;
                            break;

                        default:
                            throw new Exception('Undefined param '.__FUNCTION__);
                    }
                }
                else
                {
                    throw new Exception('Undefined param '.__FUNCTION__);
                }
            }
        }
        else
        {
            $tParams = '';
        }

        $html = '<table '.$tParams.'>';

        if (is_array($items))
        {
            $i = 0;
            foreach ($items as $item)
            {
                $html .= '<tr>';

                foreach ($item as $col)
                {
                    if ($th && $i == 0)
                    {
                        $html .= '<th>'.$col.'</th>';
                    }
                    else
                    {
                        $html .= '<td>'.$col.'</td>';
                    }

                }
                $html .= '</tr>';
                $i++;
            }
        }

        $html .= '</table>';

        return $html;
    }

    /**
     * html helper ul-ol
     */
    public static function listHtml ($items = [], $params = [])
    {
        $typeList = 'ul';
        if (is_array($params) && !empty($params))
        {
            $lParams = '';
            foreach ($params as $key=>$param)
            {
                if (in_array($key, self::$listParams))
                {
                    switch ($key)
                    {
                        case 'type':

                            $typeList = $param;
                            break;

                        case 'class':

                            $lParams .= 'class = "'.$param.'"';
                            break;

                        default:
                            throw new Exception('Undefined param '.__FUNCTION__);
                    }
                }
                else
                {
                    throw new Exception('Undefined param '.__FUNCTION__);
                }
            }
        }
        else
        {
            $lParams = '';
        }

        $html = '<'.$typeList .' '.$lParams.'>';

        if (is_array($items))
        {

            foreach ($items as $key=>$item)
            {

                $html .= '<li>'.(is_array($item) ? $key : $item);
                if (is_array($item))
                {
                    $html .= '<'.$typeList.'>';
                    foreach ($item as $value)
                    {
                        $html .= '<li>'.$value.'</li>';
                    }
                    $html .= '</'.$typeList.'>';
                }
                $html .= '</li>';
            }
        }

        $html .= '</'.$typeList.'>';

        return $html;
    }

    /**
     * html helper dl
     */
    public static function listDlHtml ($items = [], $params = [])
    {
        if (is_array($params) && !empty($params))
        {
            $dParams = '';
            foreach ($params as $key=>$param)
            {
                if (in_array($key, self::$listDlParams))
                {
                    switch ($key)
                    {

                        case 'class':

                            $dParams .= 'class = "'.$param.'"';
                            break;

                        default:
                            throw new Exception('Undefined param '.__FUNCTION__);
                    }
                }
                else
                {
                    throw new Exception('Undefined param '.__FUNCTION__);
                }
            }
        }
        else
        {
            $dParams = '';
        }

        $html = '<dl '.$dParams.'>';

        if (is_array($items))
        {
            foreach ($items as $key=>$itemDt)
            {
                $html .= '<dt>'.$key.'</dt>';
                    foreach ($itemDt as $itemDd)
                    {
                        $html .= '<dd>'.$itemDd.'</dd>';
                    }
            }
        }

        $html .= '</dl>';

        return $html;
    }

    /**
     * html helper input
     */
    public static function inputHtml ($params = [])
    {
        if (is_array($params) && !empty($params))
        {
            $iParams = '';
            foreach ($params as $key=>$param)
            {

                if (in_array($key, self::$inputParams))
                {
                    switch ($key)
                    {

                        case 'type':

                            $iParams .= 'type = "'.$param.'"';
                            break;

                        case 'name':

                            $iParams .= 'name = "'.$param.'"';
                            break;

                        case 'class':

                            $iParams .= 'class = "'.$param.'"';
                            break;

                        case 'value':

                            $iParams .= 'value = "'.$param.'"';
                            break;

                        case 'checked':

                            $iParams .= 'checked = "checked"';
                            break;

                        default:
                            throw new Exception('Undefined param '.__FUNCTION__);
                    }
                }
                else
                {
                    throw new Exception('Undefined param '.__FUNCTION__);
                }
            }
        }
        else
        {
            $iParams = '';
        }

        $html = '<input '.$iParams.'>';

        return $html;
    }
}
?>
