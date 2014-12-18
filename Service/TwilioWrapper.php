<?php
namespace Vresh\TwilioBundle\Service;

/**
 * This file is part of the VreshTwilioBundle.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Fridolin Koch <info@fridokoch.de>
 */
class TwilioWrapper extends \Services_Twilio
{
    /**
     * @param string   $sid
     * @param string   $token
     * @param string   $version
     * @param int      $retryAttempts
     * @param callable $logger
     */
    public function __construct($sid, $token, $version = null, $retryAttempts = 1, $logger = null)
    {
        parent::__construct($sid, $token, $version, null, $retryAttempts, $logger);
    }

    /**
     * Returns a new \Services_Twilio instance from the given parameters
     *
     * @param string   $sid
     * @param string   $token
     * @param string   $version
     * @param int      $retryAttempts
     * @param callable $logger
     *
     * @return \Services_Twilio
     */
    public function createInstance($sid ,$token, $version = null, $retryAttempts = 1, $logger = null)
    {
        return new \Services_Twilio($sid, $token, null, $version, $retryAttempts, $logger);
    }

}
