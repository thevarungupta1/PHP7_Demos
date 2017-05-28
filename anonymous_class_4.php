<?php
   interface Data {
      public function detail(string $name);
   }

   class Company {
      private $title;

      public function getTitle() {
         return $this->title;
      }

      public function setTitle($title) {
         $this->title = $title;
      }  
   }

   $cmp = new Company;
   $cmp->setTitle(new class implements Data {
      public function log(string $name) {
         print($name);
      }
   });

   $cmp->getTitle()->detail("Php7 Training");

   //output
   //Php7 Training
?>