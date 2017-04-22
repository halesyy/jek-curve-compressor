<?php
  class Compressor extends JCompressorEmulator
    {
      /*
      | -------------------------------------------------------------
      | JekoCompression is a complex, abstract idea meant to convert
      | long pieces  of text into  said "Equations"  that can act as
      | keys for decompressing text.
      | This in theory  should be able to push the  size of anything
      | into very, very! small sizes.
      | Example: Turning the alphabet into a smaller size, the equat
      | -ion would be: y=x, as it's a linear-progressed size and wou
      | -ld be decompressed as "26(x)", 26 is the string length an
      | -d the brackets is the equation.
      | -------------------------------------------------------------
      | My documentation as well as my methods  are always pieces of
      | art, so enjoy debuggers!
      | -------------------------------------------------------------
      */

          public $charsets = [
            'basic' => ' abcdefghijklmnopqrstuvwxyz0123456789'
          ];


          public function compress($input)
            {




            }


          /*
          | @parm StringEquationCompressed

          */
          public function decompress($equation)
            {
              echo $equation."\n";
              $equation = $this->equation_splitter($equation);
              print_r($equation);
            }







    }
