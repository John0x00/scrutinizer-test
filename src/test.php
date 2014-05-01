<?php
class Test{
   public function test() {
      if (1 > 2) {
         throw new Exception('The world is coming to an end');
      }
      return true;
   }   
}
