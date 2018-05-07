<?php namespace Flextype;

/**
 *
 * Redirect Plugin for Flextype
 *
 * @author Romanenko Sergey / Awilum <awilum@yandex.ru>
 * @link http://flextype.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Flextype\Component\{Event\Event, Registry\Registry, Http\Http, Arr\Arr};

//
// Add listner for onPageContentAfter event
//
Event::addListener('onPageContentAfter', function () {

    //
    // Search in frontmatter of the curent page element 'redirect'
    //
    if (Arr::keyExists(Pages::$page, 'redirect')) {
        Http::redirect(Arr::get(Pages::$page, 'redirect'));
    }

    //
    // Redirect to the custom urls on specific pages
    //
    $redirects = Registry::get('site.redirects');
    if (is_array($redirects) && count($redirects) > 0) {
        foreach ($redirects as $old_url => $new_url) {
            if (Http::getUriString() == $old_url) {
                Http::redirect($new_url);
            }
        }
    }

});
