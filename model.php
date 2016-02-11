<?php
// where we take information about our city - Yaroslavl
// http://export.yandex.ru/weather-ng/forecasts/27331.xml

class Weather 
{
	// адрес xml файла
	private  $data_file;
	private $xml;
	
	public function __construct($data_file)
	{
		$this->xml = simplexml_load_file($data_file); // раскладываем xml на массив
	}
	
	// выбираем требуемые параметры (город, температура, пиктограмма и тип погоды текстом (облачно, ясно)
	public function getCity ()
	{
		$city=$this->xml->fact->station;
		return $city;
	}
	public function getTemp ()
	{
		$temp=$this->xml->fact->temperature;
		// Если значение температуры положительно, для наглядности добавляем "+"
		if ($temp>0) {$temp='+'.$temp;}
		return $temp;
	}
	public function getImage ()
	{
		return $this->xml->fact->image;
	}
	public function getType ()
	{
		return $this->xml->fact->weather_type;
	}
	public function __toString()
	{
		return "Температура воздуха по городу: ".$this->xml->fact->station;
	}
}