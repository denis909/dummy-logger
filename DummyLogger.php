<?php
/**
 * @author denis909 <dev@denis909.spb.ru>
 * @license MIT
 * @link http://denis909.spb.ru
 */
namespace Denis909\DummyLogger;

class DummyLogger extends \Psr\Log\AbstractLogger
{

    public function log($level, $message, array $context = [])
    {
    }

}