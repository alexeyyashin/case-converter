<?php
namespace AlexeyYashin\CaseConverter;

class CaseConverter
{
    public static function splitWords(string $string): array
    {
        $str = preg_replace_callback('/[A-Z][a-z]/', function($m)
        {
            return '_' . mb_strtolower($m[0]);
        }, $string);
        $str = preg_replace_callback('/([A-Z]{2,})/', function($m)
        {
            return sprintf('_%s_', mb_strtolower($m[0]));
        }, $str);
        $str = preg_replace('/[A-Z]/', '_$0', $str);

        $str = preg_split('/[^a-zA-Z0-9]+/', $str);

        return array_filter($str);
    }

    /**
     * myStringResult
     *
     * @param string $string
     * @return string
     */
    public static function toCamelCase(string $string): string
    {
        $result = array_values(array_map('ucfirst', self::splitWords($string)));
        if ($result) {
            $result[0] = mb_strtolower($result[0]);
        }

        return implode($result);
    }

    /**
     * MyStringResult
     *
     * @param string $string
     * @return string
     */
    public static function toPascalCase(string $string): string
    {
        return implode(array_map('ucfirst', self::splitWords($string)));
    }

    /**
     * my_string_result
     *
     * @param string $string
     * @return string
     */
    public static function toSnakeCase(string $string): string
    {
        return mb_strtolower(implode('_', self::splitWords($string)));
    }

    /**
     * MY_STRING_RESULT
     *
     * @param string $string
     * @return string
     */
    public static function toScreamingSnakeCase(string $string): string
    {
        return mb_strtoupper(implode('_', self::splitWords($string)));
    }

    /**
     * My_String_Result
     *
     * @param string $string
     * @return string
     */
    public static function toCamelSnakeCase(string $string): string
    {
        return implode('_', array_map('ucfirst', self::splitWords($string)));
    }

    /**
     * my-string-result
     *
     * @param string $string
     * @return string
     */
    public static function toKebabCase(string $string): string
    {
        return mb_strtolower(implode('-', self::splitWords($string)));
    }

    /**
     * MY-STRING-RESULT
     *
     * @param string $string
     * @return string
     */
    public static function toCobolCase(string $string): string
    {
        return mb_strtoupper(implode('-', self::splitWords($string)));
    }

    /**
     * My-String-Result
     *
     * @param string $string
     * @return string
     */
    public static function toTrainCase(string $string): string
    {
        return implode('-', array_map('ucfirst', self::splitWords($string)));
    }

    /**
     * mystringresult
     *
     * @param string $string
     * @return string
     */
    public static function toFlatCase(string $string): string
    {
        return mb_strtolower(implode(self::splitWords($string)));
    }

    /**
     * MYSTRINGRESULT
     *
     * @param string $string
     * @return string
     */
    public static function toUpperFlatCase(string $string): string
    {
        return mb_strtoupper(implode(self::splitWords($string)));
    }
}
