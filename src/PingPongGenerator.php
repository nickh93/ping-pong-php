<?php

    class PingPongGenerator
    {
        function generatePingPongArray($input_number)
        {
            $numberArray = array();
            $index = 1;
            while ($input_number >= $index)
            {
              if (($index % 15)==0)
               {
                  $wordPingPong = "ping-pong";
                  array_push($numberArray, $wordPingPong);
               }
              else if (($index % 3)==0)
              {
                  $wordPing = "ping";
                  array_push($numberArray, $wordPing);
              }
              else if (($index % 5)==0)
              {
                  $wordPong = "pong";
                  array_push($numberArray, $wordPong);
              }
              else
              {
                  array_push($numberArray, $index);
              }


              // sleep(1);
              $index++;
            }
            return $numberArray;
          }
        }

?>
