<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: todo.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>TodoItem</code>
 */
class TodoItem extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string msg = 1;</code>
     */
    private $msg = '';
    /**
     * <code>bool done = 2;</code>
     */
    private $done = false;

    public function __construct() {
        \GPBMetadata\Todo::initOnce();
        parent::__construct();
    }

    /**
     * <code>string msg = 1;</code>
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * <code>string msg = 1;</code>
     */
    public function setMsg($var)
    {
        GPBUtil::checkString($var, True);
        $this->msg = $var;
    }

    /**
     * <code>bool done = 2;</code>
     */
    public function getDone()
    {
        return $this->done;
    }

    /**
     * <code>bool done = 2;</code>
     */
    public function setDone($var)
    {
        GPBUtil::checkBool($var);
        $this->done = $var;
    }

}
