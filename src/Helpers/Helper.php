<?php
/*
 * This file is part of the jinyPHP package.
 *
 * (c) hojinlee <infohojin@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
<<<<<<< HEAD
namespace Jiny\Database;

if (! function_exists('db_init')) {
    function db_init($info) {
        if (file_exists(DBINFO)) {
            $dbconf = include DBINFO;
            return new \Jiny\Database\Database($dbconf);
        } else {
            echo "DB 설정파일이 없습니다.";
            exit;
        }
    }
}

if (! function_exists('bindParams')) {
    function bindParams($stmt, $data)
    {
        foreach ($data as $field => &$value) {
            $stmt->bindParam(':'.$field, $value);
        }
        return $stmt;
    }
}
=======
use \Jiny\Database;
>>>>>>> 2d5802ee1f38639080133f5f2564c7f28124e3c9
