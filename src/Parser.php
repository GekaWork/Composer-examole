<?php
/**
 * Created by PhpStorm.
 * User: XXX
 * Date: 18.12.2018
 * Time: 22:04
 */

namespace artofabs\parser;


class Parser implements ParserInterface
{
    public function process(string $url, string $tag): array
    {
             // TODO: Implement process() method.
        $htmlPage = file_get_contents($url,$tag);

        if ($htmlPage===false){
            return ['Invalid URL'];
        }

        preg_match_all('/<' . $tag . '.*?>(.*?)<\/' . $tag . '>/s',$htmlPage,$strings);

        if(empty($strings[1])){
            return ['There are no such tags on the page'];
        }
        return $strings[1];
    }

}