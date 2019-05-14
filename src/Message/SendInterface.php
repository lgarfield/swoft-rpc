<?php
/**
 * @author lazy <729011771@qq.com>
 * Date: 2019-05-14
 * Time: 14:08
 */

namespace RpcSwoft\Message;

use Swoft\Core\ResultInterface;

/**
 * The interface of message service.
 *
 * User: lazy
 * Date: 2019-05-14 14:09
 *
 * Interface SendInterface
 * @package RpcSwoft\Message
 */
interface SendInterface
{
    /**
     * 验证码发送
     *
     * User: lazy
     * Date: 2019-05-14 14:11
     *
     * @param string $account
     * @param int $code
     * @param int $type 1:手机号 2:邮箱 3:其他
     *
     * @return array
     */
    public function sendCoder(string $account, int $code, int $type = 1): array;
}
