<?php

	require_once "src/RepeatCounter.php";

	class RepeatCounterTest extends PHPUnit_Framework_TestCase
	{

		function test_1letter_1char()
		{

			//Arrange
			$test_RepeatCounter = new RepeatCounter;
			$input1 = "a";
			$input2 = "a";

			//Act
			$result = $test_RepeatCounter->CountRepeats($input1, $input2);

			//Assert
			$this->assertEquals(1, $result);

		}//Ends test_1letter_1char

		function test_1letter_1charmismatch() {

		//Arrange
		$test_RepeatCounter = new RepeatCounter;
		$input1 = "a";
		$input2 = "b";

		//Act
		$result = $test_RepeatCounter->CountRepeats($input1, $input2);

		//Assert
		$this->assertEquals(0, $result);

		}//Ends test_1letter_1charmismatch


		



	}//Ends class RepeatCounterTest

?>
