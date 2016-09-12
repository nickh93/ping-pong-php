<?php

    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_replaceNumber3()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 3;

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //assert
            $this->assertEquals([1,2,"ping"], $result);
        }

        function test_replaceNumber5()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 5;

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //assert
            $this->assertEquals([1,2,"ping",4,"pong"], $result);
        }

        function test_replaceNumber15()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 15;

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //assert
            $this->assertEquals([1,2,"ping",4,"pong","ping",7,8,"ping","pong",11,"ping",13,14,"ping-pong"], $result);
        }
    }
?>
