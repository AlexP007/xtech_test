<?php

namespace component\JsonDecoder;

class JsonDecoder
{
   private $input;
   public $output = [];
   
   public function setJson(string $json)
   {
    $this->input = json_decode($json, JSON_OBJECT_AS_ARRAY);
    return $this;
   }
   
   public function decode()
   {
        foreach ($this->input as $key => $value) {
            $this->output[] = new JsonResult($key, $value);
        }
        return $this->output;
   }
}