<?php
/*Temperature Conversion
Write a program that takes a temperature input in $celsius and converts it to Fahrenheit and Kelvin. Return the converted temperature values in an array.

The formula to calculate the temperature in Fahrenheit from Celsius is:

F = C*9/5 +32
The formula to calculate the temperature in Kelvin from Celsius is:

K = C + 273.15
Examples
tempConversion(0) ➞ [32, 273.15]
// 0°C is equal to 32°F and 273.15 K.
tempConversion(100) ➞ [212, 373.15]
tempConversion(-10) ➞ [14, 263.15]
tempConversion(300.4) ➞ [572.72, 573.55]
Notes
Return calculated temperatures up to two decimal places.
Return "Invalid" if K is less than 0.  */
function tempConversion($celsius) {
	$fahrenheit = round($celsius * 9/5 +32, 2);
	$kelvin = round($celsius + 273.15, 2);
	if ($kelvin < 0) {
	  return "Invalid";
	} else {
	  return array($fahrenheit, $kelvin);
	}
}

echo tempConversion(0) === [32 , 273.15];
echo tempConversion(100) === [212 , 373.15];
echo tempConversion(42.8) === [109.04 , 315.95];
echo tempConversion(300.4) === [572.72 , 573.55];
echo tempConversion(-10.7) === [12.74 , 262.45];
echo tempConversion(-273.13) === [-459.63 , 0.02];
echo tempConversion(-273.16) === "Invalid";