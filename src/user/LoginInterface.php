<?php
/**
 * user interface
 *
 * @author garfield.li
 * @time 2019/04/16 11:16pm
 */
namespace RpcSwoft\User;

use Swoft\Core\ResultInterface;

/**
 * The interface of user service.
 *
 */
interface LoginInterface
{
    /**
     * just login in
     *
     * @param string $mobile
     * @param array $extraInfo
     * [
     *    'platform' => 1,
     *    'project' => 20,
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
