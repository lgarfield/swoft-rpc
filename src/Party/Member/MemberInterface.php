<?php
/**
 * interface
 *
 * @author garfield
 * @email garfiel.li@foxmail.com
 */

namespace RpcSwoft\Party\Member;

use Swoft\Core\ResultInterface;

/**
 * The interface of member service.
 *
 */
interface MemberInterface
{
    /**
     * 获取党员信息
     * User: lazy
     * Date: 2019-05-05 15:26
     * @param int $id
     * @param array $field
     * @return array
     */
    public function getUserInfo(int $id, array $field): array;


    /**
     * 获取党员组织信息
     *
     * User: lazy
     * Date: 2019-05-10 14:17
     * @param array $ids
     * @return array
     */
    public function getUserOrg(array $ids): array;
}
