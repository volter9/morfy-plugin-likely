<?php

/**
 * Morfy Social Sharing Buttons Plugin based on Likely
 *
 * (c) Evgeny Steblinsky / volter9 <volter9.github.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class Likely 
{
    /**
     * @param string $title
     * @param string $url
     * @param array|string $classes
     */
    static public function buttons($title = '', $url = '', $classes = '')
    {
        $classes = is_array($classes) 
            ? implode(' ', $classes) 
            : $classes;
        
        $template = Template::factory(PLUGINS_PATH . '/likely/templates/');
        $template->display('likely.tpl', compact('title', 'url', 'classes'));
    }
}

Action::add('theme_header', function () {
    $base = Url::getBase();
    
    printf('<link href="%s/plugins/likely/bower_components/ilyabirman-likely/release/likely.css" rel="stylesheet">', $base);
});

Action::add('theme_footer', function () {
    $base = Url::getBase();
    
    printf('<script src="%s/plugins/likely/bower_components/ilyabirman-likely/release/likely.js"></script>', $base);
});