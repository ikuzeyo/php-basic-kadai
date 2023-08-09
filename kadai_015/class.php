<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>課題連想配列</title>
</head>

<body>
    <p>
        <?php
        class Food {
            private $name;
            Private $price;

            public function set_name(string $name){
                $this->name=$name;   
            }
            public function set_price(int $price){
                $this->price=$price;
            }

            public function show_price(){
                echo'<br>'.$this -> price ;
            }
        }

            $potato = new Food();

            $potato ->set_name('potato');
            $potato ->set_price('250');

            

  

        class Animal{
            private $name;
            private $height;
            private $weight;
            
            public function set_name(string $name){
                $this->name=$name;
            }
            public function set_height(int $height){
                $this-> height=$height;
            }
            public function set_weight(int $weight){
                $this-> weight=$weight;
            }
            public function show_height(){
                echo '<br>'.$this -> height .'<br>';
            }
        }
        $dog = new Animal();
        $dog->set_name('dog');
        $dog->set_height('60');
        $dog->set_weight(5000);
    Print_r($potato);
    echo '<br>';
    Print_r($dog);

$potato-> show_price();
$dog-> show_height();


        ?>
    </p>

</body>

</html>