<?
abstract class ProductShop {
    const PROFIT =33;
       abstract public function totalCost();
       abstract public function profitCalc();
}
class ProductDigital extends ProductShop{
    const PRICE = 1300;
    private $amount;

    public function __construct($amount){
        self::setAmount($amount);        
    }
    public function getPrice(){
        return PRICE;
    }
    public function getAmount(){
        return $this->amount;
    }
    public function setAmount($amount=0){
        $this->amount=$amount;
    }
    public function totalCost()
    {
        return self::PRICE*$this->amount;
    }
    public function profitCalc(){
        return self::PRICE*$this->amount/100*parent::PROFIT;
    }
}
class ProductReal extends ProductDigital{
    public function getPrice(){
        return parent::PRICE*2;
    }
    public function totalCost(){
        return self::PRICE*2*parent::getAmount();
    }
    public function profitCalc(){
        return parent::PRICE*2*parent::getAmount()/100*parent::PROFIT;
    }
}
class productWeight extends ProductShop {
private $price;
private $weight;
public function __construct($price,$weight){
    self::setPrice($price);
    self::setWeight($weight);
}
public function setPrice($price=0){
    $this->price=$price;
}
public function getWeight($weight=0){
    $this->weight=$weight;
}
public function totalCost(){
    return $this->price*$this->weight;
}
public function profitCalc(){
    return $this->price*$this->weight/100*PROFIT;
}
}
$obj_digital=new ProductDigital(1);
echo $obj_digital->profitCalc()."<p>";

$obj_real=new ProductReal(1);
echo $obj_real->profitCalc()."<p>";

$obj_weight=new ProductWeight(3,300);
echo $obj_weight->profitCalc();