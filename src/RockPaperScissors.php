<?php

    class RockPaperScissors
    {
        function rockPaperScissorsGame ( $input1, $input2 )
        {
          $input1 = strtolower($input1);
          $input2 = strtolower($input2);

          if ($input1 === $input2)
          {
              return "Draw";
          }

          if ($input1 === "rock") {
              if($input2 === "scissors")
              {
                  return "Player 1";
              }elseif($input2 === "paper")
              {
                  return "Player 2";
              }
        }
            if($input1 === "scissors"){
                if($input2 === "paper") {
                    return "Player 1";
                }elseif($input2 === "rock") {
                    return "Player 2";
                }

            }
            if($input1 === "paper") {
                if($input2 === "rock") {
                    return "Player 1";
                }elseif($input2 === "scissors") {
                    return "Player 2";
                }
            }

            return "INVALID ENTRY";
        }
    }
?>