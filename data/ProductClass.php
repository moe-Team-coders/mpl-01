<?php
    class Product{
        // fields, attributes
        var $code;
        var $name;
        var $price;
        var $image_name;
        
        // constructor
        function __construct($defaultCode, $defaultName,$defaultPrice,$defaultImage_name)
        {
            $this->code = $defaultCode;
            $this->name= $defaultName;
            $this->price= $defaultPrice;
            $this->image_name= $defaultImage_name;

        }
        // methods, functions
        public function getCode()
        {
            return $this->code;
        }

        public function getName()
        {
            return $this->name;
        
        }
        
        public function getPrice()
        {
            return $this->price;
        }
        
        public function getImage_name()
        {
            return $this->image_name;

        }
    }
    $pro = array(
        new Product(1,"Watch +1",15,"1.jpg"),
        new Product(1,"Phone A10",150,"2.jpg"),
        new Product(3,"Laptop 2021",750,"3.jpg"),
        new Product(4,"Stickers",10,"4.jpg"),
        new Product(3,"Bag 55",30,"5.jpg"),
        new Product(3,"Wirless Mouse",15,"6.jpg"),
        new Product(3,"T-shirt",22,"7.jpg"),

       );
       foreach($pro as $b)
       {
           
           echo "<p>".$b->getName()."</p>";
           echo "<p>".$b->getPrice()."</p>";
           echo "<p>".$b->getCode()."</p>";
           echo "<p>".$b->getImage_name()."</p>";
           }
        
  

 ?>




