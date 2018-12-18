<?php
/*
 * getTranslit return string
 */

function getTranslit($str){

    $rus=array('À','Á','Â','Ã','Ä','Å','¨','Æ','Ç','È','É','Ê','Ë','Ì','Í','Î','Ï','Ð','Ñ','Ò','Ó','Ô','Õ','Ö','×','Ø','Ù','Ú','Û','Ü','Ý','Þ','ß','à','á','â','ã','ä','å','¸','æ','ç','è','é','ê','ë','ì','í','î','ï','ð','ñ','ò','ó','ô','õ','ö','÷','ø','ù','ú','û','ü','ý','þ','ÿ',' ');
    $lat=array('A','B','V','G','D','E','E','GH','Z','I','Y','K','L','M','N','O','P','R','S','T','U','F','H','C','Ch','SH','SCH','Y','Y','Y','E','YU','YA','a','b','v','g','d','e','e','gh','z','i','y','k','l','m','n','o','p','r','s','t','u','f','h','c','ch','sh','sch','y','y','y','e','yu','ya',' ');

    $text = preg_split('//u',$str,-1,PREG_SPLIT_NO_EMPTY);//split string
    if(in_array($text[0],$rus)){ //check if first character is rus
        $text = str_replace($rus,$lat,$str);
    }
    if(is_array($text)){
        $text = implode('', $text);
    }
    return $text;
}







