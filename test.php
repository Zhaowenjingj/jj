<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2019/4/12
 * Time: 17:06
 */
date_default_timezone_set("PRC");
class test
{
 public $name="zhaowenjing";
 public  $height="123";
 public  $weight="98kg";
 public  $team="bull";
 public  $playerNumber="23";

 //构造方法
    function __construct($name,$height,$weight,$team,$playerNumber)
    {
        echo "In test constructor\n";
        //$this是php里面的伪变量，表示对象自身。可以通过$this->的方式访问对象的属性和方法
        $this->name=$name;
        $this->height=$height;
        $this->weight=$weight;
        $this->team=$team;
        $this->playerNumber=$playerNumber;


    }

    //定义方法
    public function run(){
        echo "Running\n";

    }
    public function jump(){
        echo "Jumping\n";

    }
    public function dribble(){
        echo "Dribbling\n";

    }
    public function shoot(){
        echo "Shooting\n";

    }
    public function dunk(){
        echo "Dunking\n";

    }
    public function pass(){
        echo "Passing\n";

    }

}
//类到实例化
$jordan=new test("zhaowenjing","123","98kg","bull","23");
echo  $jordan->name."\n";
$jordan->dribble();
$jordan->pass();