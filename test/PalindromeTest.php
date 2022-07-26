<?php

namespace Iqbal\Palindrome;

use PHPUnit\Framework\TestCase;

class PalindromeTest extends TestCase
{
     public function testOutput()
     {
          $palindrome = new Palindrome();
          $palindrome->isPalindrome("kodok");
     }

     public function testIsPalindrome()
     {
          $palindrome = new Palindrome();
          $this->assertTrue($palindrome->isPalindrome("a"));
          $this->assertTrue($palindrome->isPalindrome("aba"));
          $this->assertTrue($palindrome->isPalindrome("kodok"));
          $this->assertTrue($palindrome->isPalindrome("sinis")) . PHP_EOL;
     }

     public function testIsNotPalindrome()
     {
          $palindrome = new Palindrome();

          $this->assertFalse($palindrome->isPalindrome("ab"));
          $this->assertFalse($palindrome->isPalindrome("abab"));
          $this->assertFalse($palindrome->isPalindrome("iqbal"));
          $this->assertFalse($palindrome->isPalindrome("iba"));
     }

     public function testOutputWithoutTemp()
     {
          $palindrome = new Palindrome();
          $this->assertTrue($palindrome->isPalindromeWithoutTemporary("kodok"));
     }

     public function testIsPalindromeWithoutLooping()
     {
          $palindrome = new Palindrome();
          $this->assertTrue($palindrome->isPalindromeWithoutLooping("kodok"));
     }
}
