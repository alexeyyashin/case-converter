# Strings case converter for PHP

Simplest way to convert strings to various cases:
* camelCase
* PascalCase
* snake_case
* SCREAMING_SNAKE_CASE (a.k.a. CONSTANT_CASE)
* Camel_Snake_Case
* kebab-case
* COBOL-CASE
* Train-Case
* flatcase
* UPPERFLATCASE

## 1. Installation

```shell
composer require alexeyyashin/case-converter
```

## 2. Usage

```php
use \AlexeyYashin\CaseConverter\CaseConverter;

$string = ' Strings case converter for PHP';

CaseConverter::toCamelCase($string);
// stringsCaseConverterForPhp

CaseConverter::toPascalCase($string);
// StringsCaseConverterForPhp

CaseConverter::toSnakeCase($string);
// strings_case_converter_for_php

CaseConverter::toScreamingSnakeCase($string);
// STRINGS_CASE_CONVERTER_FOR_PHP

CaseConverter::toCamelSnakeCase($string);
// Strings_Case_Converter_For_Php

CaseConverter::toKebabCase($string);
// strings-case-converter-for-php

CaseConverter::toCobolCase($string);
// STRINGS-CASE-CONVERTER-FOR-PHP

CaseConverter::toTrainCase($string);
// Strings-Case-Converter-For-Php

CaseConverter::toFlatCase($string);
// stringscaseconverterforphp

CaseConverter::toUpperFlatCase($string);
// STRINGSCASECONVERTERFORPHP
```
