<?php
namespace Rawilum;

use Arr;
use Request;
use Url;

class Redirect
{
    /**
     * @var Rawilum
     */
    protected $rawilum;

    /**
     * Constructor
     *
     * @param Rawilum $rawilum
     */
    public function __construct(Rawilum $c)
    {
        $this->rawilum = $c;

        // Redirect to the custom urls on specific pages
        $redirects = $this->rawilum['config']->get('site.redirects');

        if (is_array($redirects) && count($redirects) > 0) {
            foreach ($redirects as $old_url => $new_url) {
                if (Url::getUriString() == $old_url) Request::redirect($new_url);
            }
        }

        // Redirect from specific page to another page
        $this->rawilum['events']->addListener('onPageContentAfter', function () {
            if (Arr::keyExists($this->rawilum['pages']->page, 'redirect')) {
                Request::redirect(Arr::get($this->rawilum['pages']->page, 'redirect'));
            }
        });
    }
}

new Redirect($rawilum);
