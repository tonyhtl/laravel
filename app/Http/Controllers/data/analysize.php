<?php

namespace App\Http\Controllers\data;

use App\Http\Controllers\Controller;

class analysize extends Controller{

    public function data_analysize(){

        $row = 1;
        $handle = fopen("/Users/thuangtl/Downloads/mmall.csv","r");
        setlocale(LC_ALL,array('zh_CN.gbk','zh_CN.gb2312','zh_CN.gb18030'));
        
//fgetcsv() 解析读入的行并找出 CSV格式的字段然后返回一个包含这些字段的数组。 
        while ($data = fgetcsv($handle, 1000, ",")) {
            //$data = eval('return '.iconv('gbk','utf-8',var_export($data,true)).';');
            $num = count($data);

            $data=iconv("gb2312", "utf-8//IGNORE",$data);            
            var_dump($data);
            $row++;
            for ($c=0; $c < $num; $c++) {
		    //注意中文乱码问题
                //$data[$c]=iconv("gb2312", "utf-8//IGNORE",$data[$c]);
                //var_dump($data[$c]);
            }
        }
        fclose ($handle);
        
    }
}
?>
