<?php

namespace Cloudflare;

use Cloudflare\Api;

/**
 * CloudFlare API wrapper
 *
 * CloudFlare IPs
 * CloudFlare IP space
 *
 * @author James Bell <james@james-bell.co.uk>
 * @version 1
 */

class IPs extends Api
{
    /**
     * Default permissions level
     * @var array
     */
    protected $permission_level = array('read' => null, 'edit' => null);

    /**
     * CloudFlare IPs
     * Get CloudFlare IPs
     */
    public function ips($identifier)
    {
        return $this->get('/ips');
    }
}
