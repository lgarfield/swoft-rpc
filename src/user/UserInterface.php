<?php
/**
 * This file is part of Swoft.
 *
 * @link https://api.party.org
 * @contact garfield.li@foxmail.com
 */

namespace RpcSwoft\User;

use Swoft\Core\ResultInterface;

/**
 * The interface of user service
 *
 * @method ResultInterface deferGetBaseInfo(string $account)
 */
interface UserInterface
{
    /**
     * @param string $account
     *
     * @return array
     */
    public function getBaseInfo(string $account): array;

    /**
     * @param string $account
     * @param string $mobile
     *
     * @return array
     */
    public function editMobile(string $account, string $mobile): array;

    /**
     * @param string $mobile
     *
     * @return array
     */
    public function add(string $mobile): array;

}
