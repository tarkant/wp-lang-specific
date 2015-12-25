<?php
/**
 * Plugin Name: WP Lang Specific
 * Plugin URI: https://github.com/tarkant/wp-lang-specific
 * Description: WP Lang Specific enables you to show specific blocks of content following the language of the browser used by the visitor using simple shortcodes.
 * Version: 1.0.0
 * Author: Jacer Omri, Tarek Jellali
 * Author URI: https://github.com/tarkant/wp-lang-specific
 * License: GPL2
 */

class WpLangSpecific {

    function __construct()
    {
        $this->register_shortcode();
    }

    /**
     * @param $string_one
     * @param $string_two
     * @return boolean
     */
    function compare($string_one, $string_two)
    {
        return (strtolower($string_one) == strtolower($string_two));
    }

    /**
     * @param $atts
     * @param null $content
     * @return null|string
     */
    function shortcode( $atts , $content = null ) {
        $client_language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

        // Attributes
        /** @var string $language */
        /** @var string $fallback */
        extract( shortcode_atts(
                array(
                    'language' => '',
                    'fallback' => '',
                ), $atts )
        );

        if($this->compare($client_language ,$language ))
        {
            return $content;
        }
        else
        {
            return $fallback;
        }
    }

    function register_shortcode()
    {
        add_shortcode( 'lang', [$this, 'shortcode'] );
    }
}

/** @var WpLangSpecific $lang_specific */
$lang_specific = new WpLangSpecific();
