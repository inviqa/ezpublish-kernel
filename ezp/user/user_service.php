<?php
/**
 * File contains User Service
 *
 * @copyright Copyright (C) 1999-2011 eZ Systems AS. All rights reserved.
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2.0
 * @package ezp
 * @subpackage user
 */

namespace ezp\user;

/**
 * User Service, extends repository with user specific operations
 *
 * @package ezp
 * @subpackage user
 */
class UserService extends \ezp\base\AbstractService
{
    /**
     * Get an User object by id
     *
     * @param int $id
     * @return User
     * @throws \InvalidArgumentException
     */
    public function load( $id )
    {
        $user = $this->handler->userHandler()->load( (int) $id );
        if ( !$user )
            throw new \InvalidArgumentException( "Could not find 'User' with id: {$id}" );
        return $user;
    }
}
