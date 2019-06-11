<?php
/**
 * sha512 Twig Filter plugin for Craft CMS 3.x
 *
 * A filter for twig to hash a string with sha512, based on the md5 filter by Daniel Jones.
 *
 * @link      https://christopherdowson.studio
 * @copyright Copyright (c) 2019 Christopher Dowson
 */

namespace christopherdowson\sha512twigfilter\twigextensions;

use christopherdowson\sha512twigfilter\sha512TwigFilter;

use Craft;

/**
 * Twig can be extended in many ways; you can add extra tags, filters, tests, operators,
 * global variables, and functions. You can even extend the parser itself with
 * node visitors.
 *
 * http://twig.sensiolabs.org/doc/advanced.html
 *
 * @author    Christopher Dowson
 * @package   sha512TwigFilter
 * @since     1.0.0
 */
class sha512TwigFilterTwigExtension extends \Twig_Extension
{
    // Public Methods
    // =========================================================================

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'sha512TwigFilter';
    }

    /**
     * Returns an array of Twig filters, used in Twig templates via:
     *
     *      {{ 'something' | someFilter }}
     *
     * @return array
     */
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('sha512', [$this, 'strSha512']),
        ];
    }

    /**
     * Returns an array of Twig functions, used in Twig templates via:
     *
     *      {% set this = someFunction('something') %}
     *
    * @return array
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('sha512', [$this, 'strSha512']),
        ];
    }

    /**
     * Our function called via Twig; it can do anything you want
     *
     * @param null $text
     *
     * @return string
     */
    public function strSha512($text = null)
    {
        $result = hash( 'sha512', $text );

        return $result;
    }
}
