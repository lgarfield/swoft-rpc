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
 */
class LoginInterface
{
    /**
     * just login in
     *
     * @param string $mobile
     * @param array $extraInfo
     * [
     *    'platform' => 1,
     *    'device' => 2,
     *    'ip' => '12.34.56.78'
     * ]
     *
     * @return array
     */
    public function login(string $mobile, array $extraInfo): array;

    /**
     * login with third token
     *
     * @param string $token
     * @param int $type
     * @param array $extraInfo
     * [
     *    'platform' => 1,
     *    'project' => 10,
     *    'ip' => '12.34.56.78'
     * ]
     *
     * @return array
     */
    public function loginThird(string $token, int $type, array $extraInfo): array;
}
