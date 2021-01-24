<?php
/**
 * Generate a random string of variable length.
 * 
 * @author Afaan Bilal
 * @link https://afaan.dev
 * @link https://packagist.org/packages/afaanbilal/php-random-string
 * @license MIT
 */
declare(strict_types=1);

namespace AfaanBilal\RandomString;

class RandomString
{
    /**
     * String length
     * 
     * @var int
     */
    private int $length = 12;

    /**
     * The charset
     * 
     * @var string
     */
    private string $charset = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

    /**
     * Constructor
     * 
     * @param int $length String length
     * @param string $charset The charset
     * 
     * @return string
     */
    public function __construct($length = 12, $charset = null)
    {
        $this->length = $length;
        $this->charset = $charset ?? $this->charset;
    }

    /**
     * Generate a random string.
     * 
     * @return string
     */
    public function generate(): string
    {
        $max = strlen($this->charset);
        
        $str = "";
        for ($i = 0; $i < $this->length; $i++) {
            $str .= $this->charset[random_int(0, $max-1)];
        }

        return $str;
    }
}
