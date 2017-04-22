<?php
  /*
  | These are  just some extra  functions that  can be used
  | instead of adding them to an extra class for only extra
  | classes.
  */

    function jd_split_equation_from_length($input)
      {
          #// Example inputs are: 26(x), 1545(281+2x+x^2)

              $split = preg_replace(
                  '/([0-9]*)[[](.*?)[]]/is',
                  '$1::::$2',
              $input);
              $split = explode('::::', $split);

          return $split;
      }
