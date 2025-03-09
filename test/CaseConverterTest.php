<?php

namespace AlexeyYashin\CaseConverter;

use PHPUnit\Framework\TestCase;

class CaseConverterTest extends TestCase
{
    protected const TEST_STRING = ' Strings case converter for PHP';

    public function testSplitWords()
    {
        $this->assertSame(
            ['strings', 'case', 'converter', 'for', 'php'],
            array_values(CaseConverter::splitWords(self::TEST_STRING))
        );
    }

    public function testToFlatCase()
    {
        $this->assertSame(
            CaseConverter::toFlatCase(self::TEST_STRING),
            'stringscaseconverterforphp'
        );
    }

    public function testToCamelCase()
    {
        $this->assertSame(
            CaseConverter::toCamelCase(self::TEST_STRING),
            'stringsCaseConverterForPhp'
        );
    }

    public function testToKebabCase()
    {
        $this->assertSame(
            CaseConverter::toKebabCase(self::TEST_STRING),
            'strings-case-converter-for-php'
        );
    }

    public function testToCobolCase()
    {
        $this->assertSame(
            CaseConverter::toCobolCase(self::TEST_STRING),
            'STRINGS-CASE-CONVERTER-FOR-PHP'
        );
    }

    public function testToScreamingSnakeCase()
    {
        $this->assertSame(
            CaseConverter::toScreamingSnakeCase(self::TEST_STRING),
            'STRINGS_CASE_CONVERTER_FOR_PHP'
        );
    }

    public function testToSnakeCase()
    {
        $this->assertSame(
            CaseConverter::toSnakeCase(self::TEST_STRING),
            'strings_case_converter_for_php'
        );
    }

    public function testToTrainCase()
    {
        $this->assertSame(
            CaseConverter::toTrainCase(self::TEST_STRING),
            'Strings-Case-Converter-For-Php'
        );
    }

    public function testToPascalCase()
    {
        $this->assertSame(
            CaseConverter::toPascalCase(self::TEST_STRING),
            'StringsCaseConverterForPhp'
        );
    }

    public function testToCamelSnakeCase()
    {
        self::assertSame(
            CaseConverter::toCamelSnakeCase(self::TEST_STRING),
            'Strings_Case_Converter_For_Php'
        );
    }

    public function testToUpperFlatCase()
    {
        self::assertSame(
            CaseConverter::toUpperFlatCase(self::TEST_STRING),
            'STRINGSCASECONVERTERFORPHP'
        );
    }
}
