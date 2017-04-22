<?php
  class JCompressorEmulator extends CoreCompressor
    {

      #// Decompressor method
      #// Used as the emulator/ cartesian manipulator
       // Takes in an equation  and length to  fulfil
       // and returns an  array of values represented
      public function get_equation_string_values($length_x, $equation)
        {
            $return_em_values = [];
            for ($i = 0; $i <= $length_x; $i++)
              {
                $subval = $this->substitute_equation($equation, [
                  'x' => $i
                ]);
                array_push($return_em_values, $subval);
              }
            return $return_em_values;
        }


      #// Will substiture in the values to an equation and
       // return the value.
      public function substitute_equation($equation, $substitute_arr)
        {
              foreach ($substitute_arr as $var => $equals)
              $equation = str_replace($var, $equals, $equation);
            $ret = eval("return $equation;");
            return $ret;
        }



      #// Converts the equation to a better, safer standard.
      public function equation_splitter($equation)
        {
            $equation = preg_replace([
                '/([1-9][0-9]*)([A-Za-z])/s' // 2x -> 2*x
              ], [
                '$1*$2'
              ], $equation);
            return explode(':',$equation);
        }


      #// Converts the given equation values and charset into
       // the string we want.
      public function convert_vals_to_string($equation_vals, $charset)
        {
          // Main opt loop.
          foreach ($equation_vals as $index => $entry_code):
            $ecode = floor($entry_code);
            $ecode = (int) $ecode;
              if (isset($charset[$ecode])):
                echo "{$charset[$ecode]}";
                // echo "{$charset[$ecode]}: $index\n";
              endif;
          endforeach;
          echo "\n";
        }


    }
