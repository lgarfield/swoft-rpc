<?php
/**
 * user interface
 *
 * @author garfield.li
 * @time 2019/04/16 11:16pm
 */
namespace SwoftRpc\User;

use Swoft\Core\ResultInterface;

/**
 * The interface of user service.
 *
 * @method ResultInterface login(string $mobile)
 * @method ResultInterface loginThird(string $token)
 *
 */
class UserInterface
{
    /**
     * @param string $mobile
     *
     * @return array
     */
    public function login(string $mobile): array;

    /**
     * @param string $token
     *
     * @return array
     */
    public function loginThird(string $token): array;
}
