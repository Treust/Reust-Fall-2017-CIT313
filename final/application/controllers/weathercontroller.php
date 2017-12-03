<?php

class WeatherController extends Controller{

	public function index(){

		$this->set(result,false);
	 	}
	     public function getresults() {

	 		$worky = "http://api.worldweatheronline.com/premium/v1/weather.ashx?key=5a873c6668524995842224009171211&q=".$_POST['zip']."&format=xml&num_of_days=2";


	         $this->set(result,true);
	$this->set(weather,$xml);


	}

}

?>
