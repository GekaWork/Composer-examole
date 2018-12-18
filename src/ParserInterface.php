<?php
/**
 * Created by PhpStorm.
 * User: XXX
 * Date: 18.12.2018
 * Time: 22:01
 */
namespace artofabs\parser;

interface ParserInterface{

    public function process(string $url, string $tag): array;
}