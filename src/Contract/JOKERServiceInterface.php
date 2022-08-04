<?php
declare(strict_types=1);
namespace GiocoPlus\JOKER\Contract;
/**
 * Joker 電子
 */
interface JOKERServiceInterface {

    /**
     * 遊戲啟動
     *
     * @param string $op_code
     * @param string $account
     * @param string $game_code
     * @param string $language
     * @param string $back_url
     * @return mixed
     */
    function gameLaunch(string $op_code, string $account, string $game_code, string $language, string $back_url = null);

    /**
     * 遊戲詳情
     * @param string $op_code
     * @param string $bet_id
     * @return mixed
     */
    function gameDetail(string $op_code, string $bet_id);

    /**
     * 上/下分失敗 訂單檢核
     * @param string $op_code
     * @param string $order_no
     * @return mixed
     */
    function orderFailCheck(string $op_code, string $order_no);

    /**
     * 營商帳號轉換為遊戲商帳號
     * @param string $op_code
     * @param array $vendor
     * @param string $member_code
     * @return mixed
     */
    function accountToVendor(string $op_code, array $vendor, string $member_code);

    /**
     * 遊戲商帳號轉換為營商帳號
     * @param string $op_code
     * @param array $vendor
     * @param string $vendor_account
     * @return mixed
     */
    function accountToOperator(string $op_code, array $vendor, string $vendor_account);
}
