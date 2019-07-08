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

    /**
     * @param string $account
     *
     * @return array
     */
    public function resetPasswd(string $account): array;

    /**
     * change password
     *
     * @param string $account
     * @param string $oldPass
     * @param string $newPass
     *
     * @return array
     */
    public function changePasswd(string $account, string $oldPass, string $newPass): array;
}
