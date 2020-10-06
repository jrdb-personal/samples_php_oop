<?php 

abstract class TaxCalculator{
	public function __construct(){

	}
	public function calculate( $taxableAmount ){
		if(!filter_var( $taxableAmount, FILTER_VALIDATE_INT | FILTER_VALIDATE_FLOAT  ) ){
			//throw new 100( $taxableAmount . ' is not a valid format to run calculation on.' );
		}
		return $this->runCalculation( $taxableAmount );
	}

	abstract protected function runCalculation( $taxableAmount );
}

class ReallyComplexCalc extends TaxCalculator{
	protected function runCalculation( $taxableAmount ) {
		return $taxableAmount * 100/125; 
	}
}

class TinyTaxCalculator extends TaxCalculator{
	protected function runCalculation( $taxableAmount ) {
		return $taxableAmount * 100/101;
	}
}

interface PaymentStream{
	 function pay( $Amount );
}

interface CollectionStream{
	function collect($Amount);
}

class HttpsPaymentStream implements PaymentStream, CollectionStream{
	public function __construct(){
			
	}
	public function collect($Amount){
		return 'payed ' .$Amount . 'by stream';
	}
	public function pay( $Amount ) {
		return 'payed ' . $Amount . ' by https';
	}
}

class FixedPipePaymentStream implements PaymentStream {
	public function __construct(){		
	}
	function pay( $Amount ) {
		return 'payed ' . $Amount . ' by fixed pipe';
	}
}

class TaxPaymentProcessor{
	private $taxCalculator;
	private $stream;
	public function __construct(TaxCalculator $taxCalculator, PaymentStream $stream ){
		$this->taxCalculator = $taxCalculator;
		$this->stream        = $stream;
	}

	public function processTax( $taxableAmount ){
		$calculatedTax = $this->taxCalculator->calculate( $taxableAmount );
		return $this->stream->pay( $calculatedTax );
	}
}

$httpsTaxPaymentProcessor = new TaxPaymentProcessor(
	  new ReallyComplexCalc(),
      new HttpsPaymentStream());
echo $httpsTaxPaymentProcessor->processTax( 1000.1 ) . "<br>";


$fixedPipeTaxPaymentProcessor = new TaxPaymentProcessor(
	  new TinyTaxCalculator(),
      new FixedPipePaymentStream() );

echo $fixedPipeTaxPaymentProcessor->processTax( 1000 ). "<br>";

echo $fixedPipeTaxPaymentProcessor->processTax(50). "<br>";

?>

1