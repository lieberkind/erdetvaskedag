<?php

class Washingday extends Eloquent {

	public function isToday()
	{

		$today = new DateTime('today');
		$tomorrow = new DateTime('tomorrow');
		$time = new DateTime($this->time);

		return $time > $today && $time < $tomorrow;
	}

	public function format()
	{
		$time = new DateTime($this->time);

		return $time->format('\D. d/m k\l. H:i');
	}

}