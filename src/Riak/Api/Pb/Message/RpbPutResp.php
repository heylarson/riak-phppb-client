<?php
/**
 * Auto generated from riak_kv.proto at 2016-05-06 13:12:31
 *
 * Basho\Riak\Api\Pb\Message package
 */

namespace Basho\Riak\Api\Pb\Message {
/**
 * RpbPutResp message
 */
class RpbPutResp extends \ProtobufMessage
{
    /* Field index constants */
    const CONTENT = 1;
    const VCLOCK = 2;
    const KEY = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONTENT => array(
            'name' => 'content',
            'repeated' => true,
            'type' => '\Basho\Riak\Api\Pb\Message\RpbContent'
        ),
        self::VCLOCK => array(
            'name' => 'vclock',
            'required' => false,
            'type' => 7,
        ),
        self::KEY => array(
            'name' => 'key',
            'required' => false,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::CONTENT] = array();
        $this->values[self::VCLOCK] = null;
        $this->values[self::KEY] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Appends value to 'content' list
     *
     * @param \Basho\Riak\Api\Pb\Message\RpbContent $value Value to append
     *
     * @return null
     */
    public function appendContent(\Basho\Riak\Api\Pb\Message\RpbContent $value)
    {
        return $this->append(self::CONTENT, $value);
    }

    /**
     * Clears 'content' list
     *
     * @return null
     */
    public function clearContent()
    {
        return $this->clear(self::CONTENT);
    }

    /**
     * Returns 'content' list
     *
     * @return \Basho\Riak\Api\Pb\Message\RpbContent[]
     */
    public function getContent()
    {
        return $this->get(self::CONTENT);
    }

    /**
     * Returns 'content' iterator
     *
     * @return ArrayIterator
     */
    public function getContentIterator()
    {
        return new \ArrayIterator($this->get(self::CONTENT));
    }

    /**
     * Returns element from 'content' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Basho\Riak\Api\Pb\Message\RpbContent
     */
    public function getContentAt($offset)
    {
        return $this->get(self::CONTENT, $offset);
    }

    /**
     * Returns count of 'content' list
     *
     * @return int
     */
    public function getContentCount()
    {
        return $this->count(self::CONTENT);
    }

    /**
     * Sets value of 'vclock' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVclock($value)
    {
        return $this->set(self::VCLOCK, $value);
    }

    /**
     * Returns value of 'vclock' property
     *
     * @return string
     */
    public function getVclock()
    {
        return $this->get(self::VCLOCK);
    }

    /**
     * Sets value of 'key' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setKey($value)
    {
        return $this->set(self::KEY, $value);
    }

    /**
     * Returns value of 'key' property
     *
     * @return string
     */
    public function getKey()
    {
        return $this->get(self::KEY);
    }
}
}