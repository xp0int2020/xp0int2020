<?php


highlight_file(__FILE__);
class A{
    public $data;
    public function __destruct()
    {
        $this->data->close();
    }
}
class B{

    public $cache;
    public function getit($key){
        if (isset($this->cache[$key])){
            return $this->cache[$key];
        }
    }
    public function __call($method, $args)
    {

        return call_user_func_array($this->getit($method), $args);

    }
}

class C{

    public $evil,$arggg;
    public function evallll(){
        call_user_func($this->evil,$this->arggg);

    }
}



unserialize($_GET['sssssss']);