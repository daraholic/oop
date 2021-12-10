<?php
class Animal{
    public $name='';
    protected $age=0;
    private $heartbeat=0;

    public function __construct(){
        $this->age=rand(10,20);
        $this->name='john';
        $this->heartbeat=rand(20,60);     
    }
    public function getName(){
        return $this->name;
    }
    public function getHeartbeat(){
        return $this->heartbeat;
    }
    public function setName($name){
        $this->name=$name;
    }
}

$animal=new Animal;
// echo $animal->name;
echo $animal->getName();
$animal->setName('mmm');
echo $animal->getName();
echo $animal->getHeartbeat();
// echo $animal->age;

?>