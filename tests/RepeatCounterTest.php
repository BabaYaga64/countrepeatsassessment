<?php

	require_once "src/RepeatCounter.php";

	class RepeatCounterTest extends PHPUnit_Framework_TestCase
	{

		function test_1letter_1char {

			//Arrange
			$test_1letter_1char = new RepeatCounter;
			$input1 = "a";
			$input2 = "a";

			//Act
			$result = $test_RepeatCounter->CountRepeats($input1, $input2);

			//Assert
			$this->assertEquals(1, $result);

		}//Ends test_1letter_1char

		// function test_1letter_1char {

		// 	//Arrange
		// 	$test_1letter_1char = new RepeatCounter;
		// 	$input1 = "a";
		// 	$input2 = "a";

		// 	//Act
		// 	$result = $test_RepeatCounter->CountRepeats($input1, $input2);

		// 	//Assert
		// 	$this->assertEquals(1, $result);

		// }//Ends test_1letter_1char

	}//Ends class

?>