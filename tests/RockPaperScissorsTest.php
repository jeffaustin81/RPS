<?php
    require_once "src/RockPaperScissors.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {
        function test_rockPaperScissorsGame_rock_rock()
        {

            $test_RockPaperScissors = new RockPaperScissors;
            $input1 = "rock";
            $input2 = "rock";

            $result = $test_RockPaperScissors->rockPaperScissorsGame ($input1, $input2);

            $this->assertEquals("Draw", $result);
         }
    }
?>
