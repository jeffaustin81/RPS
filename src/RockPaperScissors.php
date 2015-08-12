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

          elseif ($input1 === "rock" && $input2 === "scissors" || $input1 === "paper" && $input2 === "rock" || $input1 === "scissors" && $input2 = "paper") {

              return "Player 1";
          }

          elseif ($input2 === "rock" && $input1 === "scissors" || $input2 === "paper" && $input1 === "rock" || $input2 === "scissors" && $input1 = "paper") {

              return "Player 2";
          }
        }
    }
