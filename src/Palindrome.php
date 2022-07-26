<?php

namespace Iqbal\Palindrome;

class Palindrome
{
     public function isPalindrome(string $value): bool
     {
          $temporary = "";

          for ($i = strlen($value) - 1; $i >= 0; $i--) {
               $temporary = $temporary . substr($value, $i, 1);
          }

          echo $temporary . PHP_EOL;

          if ($temporary != $value) {
               return false;
          }

          return true;
     }

     public function isPalindromeWithoutTemporary(string $value): bool
     {
          for ($i = 0; $i < strlen($value) / 2; $i++) {
               $indexAwal = $i;
               $indexAkhir = strlen($value) - $i - 1;

               if (substr($value, $indexAwal, 1) != substr($value, $indexAkhir, 1)) {
                    return false;
               }

               return true;
          }
     }

     private function isPalindromeRecursive(string $value, int $i): bool
     {
          if ($i < strlen($value) / 2) {
               // $indexAwal = $i;
               // $indexAkhir = strlen($value) - $i - 1;

               if (substr($value, $i, 1) != substr($value, strlen($value) - $i - 1, 1)) {
                    return false;
               } else {
                    return $this->isPalindromeRecursive($value, $i + 1);
               }
          } else {
               return true;
          }
     }

     public function isPalindromeWithoutLooping(string $value)
     {
          return $this->isPalindromeRecursive($value, 0);
     }
}
