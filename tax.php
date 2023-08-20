<?php
$status = $argv[1];
$value = $argv[2];

class TaxIn{
    public $n_value;
    
    public function __construct($value){
        $this->n_value =  (int)($value*1.1);
    }
    public function fee(){
        echo $this->n_value . PHP_EOL;
    }
}

class TaxOut extends TaxIn{
    public function __construct($value){
        parent::__construct($value);
        $this->n_value =  (int)($value/1.1);
    }
}

if ($status == "税抜"){
    $fee = new TaxIn($value);
    $fee->fee();
}elseif($status == "税込"){
    $fee = new TaxOut($value);
    $fee->fee();
}else{
    echo "error" . PHP_EOL;
}
?>