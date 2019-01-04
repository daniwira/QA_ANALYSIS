<?php
function automatic_switch(String $condition, Int $temperature): String
{
	if ($condition == 'on') {
		return $temperature >= 23 ? 'off' : 'on';
	} elseif ($condition == 'off') {
		return $temperature < 5 ? 'on' : 'off';
	} else {
		throw new Exception('Condition must between on or off');
	}
}

### testing
// if controller switch on
$result = automatic_switch('on', 23);
echo 'Controller state: on, temperature: 23C, heating: ' . $result . PHP_EOL;
$result = automatic_switch('on', 22);
echo 'Controller state: on, temperature: 21C, heating: ' . $result . PHP_EOL;
$result = automatic_switch('off', 4);
echo 'Controller state: off, temperature: 1C, heating: ' . $result . PHP_EOL;
$result = automatic_switch('off', 5);
echo 'Controller state: off, temperature: 12C, heating: ' . $result . PHP_EOL;

/* RESULT
Controller state: on, temperature: 23C, heating: off
Controller state: on, temperature: 21C, heating: on
Controller state: off, temperature: 1C, heating: on
Controller state: off, temperature: 12C, heating: off
*/
