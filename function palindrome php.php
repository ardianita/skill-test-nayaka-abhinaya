<?php
function palindrome($text)
{
    $text = strtolower($text);
    return $text === strrev($text);
}

echo palindrome("text") ? "Palindrom" : "Bukan Palindrom";
