<?php

function strToInitials($str) {
	$nameToArr = explode(" ", strtoupper($str));

	$initials = '';
	foreach($nameToArr as $k => $v) {
		$initials = $initials.array_first(str_split($v));
	}
	 return $initials;
}