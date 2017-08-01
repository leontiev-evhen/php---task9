<?php
class HtmlHelper 
{
   // public static function select($items = [], $name = '', $multiple = '', $required = '', $size = null, $class = '')
     public static function select($items = [], $params = [])
     {
        $aParams = [
            'name',
            'multiple',
            'required',
            'size',
            'class'
        ];

        if (is_array($params))
        { 
             foreach ($params as $param)
             {
                switch ($param)
                {
                    case ''
                }
             }
        }
        if (isset($name))
        {
            $params .= 'name = "'.$name.'" ';
        }
        
        if (!empty($multiple))
        {
            if ($multipe == 'multipe')
            {
                 $params .= 'multiple ';
            }
            else
            {
                throw new Exception('Undefined param, expected multiple');
            }
        }

        if (!empty($required))
        {
             if($required == 'required')
             {
                 $params .= 'required ';
             }
             else
             {
                throw new Exception('Undefined param, expected required');
             }
        }

        if(isset($size))
        {
            $params .= 'size = "'.$size.'"';
        }

        $html = '<select '.$params.'>';
        
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

        $html .= '</select>'; 
        return $html;
    }

    public static function table ($items = [], $class = '')
    {
        $html = '<table>';
        
        foreach ($items as $item)
        {
            $html .= '<tr>';
                foreach ($item as $col)
                {
                    $html .= '<td>'.$col.'</td>';
                }
            $html .= '</tr>';
        }

        $html .= '</table>';
        return $html;
    }
}
?>
