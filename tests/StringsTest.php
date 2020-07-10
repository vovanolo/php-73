<?php

use PHPUnit\Framework\TestCase;

class StringsTest extends TestCase
{
    /**
     * @see https://www.php.net/manual/en/language.types.string.php
     */
    public function testVariableParsing()
    {
        $foo = 'world';

        // Double quotes.
        $this->assertEquals('Hello world', "Hello $foo");

        // Single quotes.
        $this->assertEquals('Hello $foo', 'Hello $foo');

        // TODO "Hello ${foo}"
        $this->assertEquals('Hello world', "Hello ${foo}");

        // TODO "Hello " . $foo
        $this->assertEquals('Hello world', "Hello ".$foo);

        // TODO Heredoc
        $this->assertEquals('Hello world', <<<AAA
        Hello $foo 
        AAA);


        // TODO Nowdoc
        $this->assertEquals('Hello $foo', <<<'AAA'
        Hello $foo 
        AAA);
    }

    /**
     * @see https://www.php.net/manual/en/ref.strings.php
     */
    public function testStringFunctions()
    {
        // trim — Strip whitespace (or other characters) from the beginning and end of a string
        $this->assertEquals('Hello', trim('Hello         '));
        $this->assertEquals('Hello', trim('Hello......', '.'));

        // ltrim — Strip whitespace (or other characters) from the beginning of a string
        // TODO to be implemented
        $this->assertEquals('Hello', ltrim('......Hello','.'));

        // rtrim — Strip whitespace (or other characters) from the end of a string
        // TODO to be implemented
        $this->assertEquals('Hello', rtrim('Hello.......','.'));

        // strtoupper — Make a string uppercase
        $this->assertEquals('HELLO', strtoupper('hello'));

        // strtolower — Make a string lowercase
        $this->assertEquals('hello', strtolower('HeLlO'));

        // ucfirst — Make a string's first character uppercase
        // TODO to be implemented
        $this->assertEquals('Hello', ucfirst('hello'));

        // lcfirst — Make a string's first character lowercase
        // TODO to be implemented
        $this->assertEquals('hello', lcfirst('Hello'));

        // strip_tags — Strip HTML and PHP tags from a string
        // TODO to be implemented
        $this->assertEquals('Hello', strip_tags('Hello<p></p>'));

        // htmlspecialchars — Convert special characters to HTML entities
        // TODO to be implemented


        // addslashes — Quote string with slashes
        // TODO to be implemented
        $this->assertEquals("Hello\' world", addslashes("Hello' world"));

        // strcmp — Binary safe string comparison
        // TODO to be implemented
        $this->assertEquals("-1", strcmp("Hello","hello"));

        // strncasecmp — Binary safe case-insensitive string comparison of the first n characters
        // TODO to be implemented
        $this->assertEquals("-15", strncasecmp("Hello", "world",5));

        // str_replace — Replace all occurrences of the search string with the replacement string
        // TODO to be implemented
        $this->assertEquals("F", str_replace(array('A', 'B', 'C', 'D', 'E'),array('B', 'C', 'D', 'E', 'F'),'A'));

        // strpos — Find the position of the first occurrence of a substring in a string
        // TODO to be implemented
        $this->assertEquals("1", strpos("Hello","e"));

        // strstr — Find the position of the first occurrence of a substring in a string
        // TODO to be implemented
        $this->assertEquals("@llo", strstr("He@llo","@"));

        // strrchr — Find the last occurrence of a character in a string
        // TODO to be implemented
        $this->assertEquals(".o", strrchr("Hell.o","."));

        // substr — Return part of a string
        // TODO to be implemented
        $this->assertEquals("o", substr("Hello",-1));

        // sprintf — Return a formatted string
        // TODO to be implemented
        $this->assertEquals("Hello 0", sprintf("%s %s","Hello",0));

    }
}