<?php
/**
 * GetMessagesMessagesInner
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * one_msg_waba_sdk
 *
 * [1MSG.IO](https://1msg.io/) is the perfect WhatsApp management tool for your business. With us you get full access to the official Whatsapp API/webhooks.  Every API request must contain an Authorize HTTP header with a token.  This is your channel token, which can be found in your channel project on your profile page. Please do not give the token to anyone or post it publicly.  The authorization token must be added to each request in the GET parameter 'token' and always passed to query string (?token={your_token}). Parameters in GET queries pass query string. Parameters in POST requests — through the JSON-encoded request body.   All 'send' methods (except /sendTemplate) will only work when the dialog session with the user is open. Some of our solutions simplify and avoid such limitations, but we urge you to pay more attention to this detail
 *
 * The version of the OpenAPI document: 2.39.0
 * Contact: hello@1msg.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * GetMessagesMessagesInner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetMessagesMessagesInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetMessages_messages_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'message_number' => 'int',
        'id' => 'string',
        'body' => 'string',
        'from_me' => 'bool',
        'self' => 'int',
        'is_forwarded' => 'int',
        'author' => 'string',
        'time' => 'int',
        'chat_id' => 'string',
        'type' => 'string',
        'sender_name' => 'string',
        'caption' => 'string',
        'quoted_msg_id' => 'string',
        'metadata' => 'object',
        'chat_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'message_number' => null,
        'id' => null,
        'body' => null,
        'from_me' => null,
        'self' => null,
        'is_forwarded' => null,
        'author' => null,
        'time' => null,
        'chat_id' => null,
        'type' => null,
        'sender_name' => null,
        'caption' => null,
        'quoted_msg_id' => null,
        'metadata' => null,
        'chat_name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'message_number' => false,
		'id' => false,
		'body' => false,
		'from_me' => false,
		'self' => false,
		'is_forwarded' => false,
		'author' => false,
		'time' => false,
		'chat_id' => false,
		'type' => false,
		'sender_name' => false,
		'caption' => false,
		'quoted_msg_id' => false,
		'metadata' => false,
		'chat_name' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'message_number' => 'messageNumber',
        'id' => 'id',
        'body' => 'body',
        'from_me' => 'fromMe',
        'self' => 'self',
        'is_forwarded' => 'isForwarded',
        'author' => 'author',
        'time' => 'time',
        'chat_id' => 'chatId',
        'type' => 'type',
        'sender_name' => 'senderName',
        'caption' => 'caption',
        'quoted_msg_id' => 'quotedMsgId',
        'metadata' => 'metadata',
        'chat_name' => 'chatName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'message_number' => 'setMessageNumber',
        'id' => 'setId',
        'body' => 'setBody',
        'from_me' => 'setFromMe',
        'self' => 'setSelf',
        'is_forwarded' => 'setIsForwarded',
        'author' => 'setAuthor',
        'time' => 'setTime',
        'chat_id' => 'setChatId',
        'type' => 'setType',
        'sender_name' => 'setSenderName',
        'caption' => 'setCaption',
        'quoted_msg_id' => 'setQuotedMsgId',
        'metadata' => 'setMetadata',
        'chat_name' => 'setChatName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'message_number' => 'getMessageNumber',
        'id' => 'getId',
        'body' => 'getBody',
        'from_me' => 'getFromMe',
        'self' => 'getSelf',
        'is_forwarded' => 'getIsForwarded',
        'author' => 'getAuthor',
        'time' => 'getTime',
        'chat_id' => 'getChatId',
        'type' => 'getType',
        'sender_name' => 'getSenderName',
        'caption' => 'getCaption',
        'quoted_msg_id' => 'getQuotedMsgId',
        'metadata' => 'getMetadata',
        'chat_name' => 'getChatName'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('message_number', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('body', $data ?? [], null);
        $this->setIfExists('from_me', $data ?? [], null);
        $this->setIfExists('self', $data ?? [], null);
        $this->setIfExists('is_forwarded', $data ?? [], null);
        $this->setIfExists('author', $data ?? [], null);
        $this->setIfExists('time', $data ?? [], null);
        $this->setIfExists('chat_id', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('sender_name', $data ?? [], null);
        $this->setIfExists('caption', $data ?? [], null);
        $this->setIfExists('quoted_msg_id', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('chat_name', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets message_number
     *
     * @return int|null
     */
    public function getMessageNumber()
    {
        return $this->container['message_number'];
    }

    /**
     * Sets message_number
     *
     * @param int|null $message_number message_number
     *
     * @return self
     */
    public function setMessageNumber($message_number)
    {
        if (is_null($message_number)) {
            throw new \InvalidArgumentException('non-nullable message_number cannot be null');
        }
        $this->container['message_number'] = $message_number;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets body
     *
     * @return string|null
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string|null $body body
     *
     * @return self
     */
    public function setBody($body)
    {
        if (is_null($body)) {
            throw new \InvalidArgumentException('non-nullable body cannot be null');
        }
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets from_me
     *
     * @return bool|null
     */
    public function getFromMe()
    {
        return $this->container['from_me'];
    }

    /**
     * Sets from_me
     *
     * @param bool|null $from_me from_me
     *
     * @return self
     */
    public function setFromMe($from_me)
    {
        if (is_null($from_me)) {
            throw new \InvalidArgumentException('non-nullable from_me cannot be null');
        }
        $this->container['from_me'] = $from_me;

        return $this;
    }

    /**
     * Gets self
     *
     * @return int|null
     */
    public function getSelf()
    {
        return $this->container['self'];
    }

    /**
     * Sets self
     *
     * @param int|null $self self
     *
     * @return self
     */
    public function setSelf($self)
    {
        if (is_null($self)) {
            throw new \InvalidArgumentException('non-nullable self cannot be null');
        }
        $this->container['self'] = $self;

        return $this;
    }

    /**
     * Gets is_forwarded
     *
     * @return int|null
     */
    public function getIsForwarded()
    {
        return $this->container['is_forwarded'];
    }

    /**
     * Sets is_forwarded
     *
     * @param int|null $is_forwarded is_forwarded
     *
     * @return self
     */
    public function setIsForwarded($is_forwarded)
    {
        if (is_null($is_forwarded)) {
            throw new \InvalidArgumentException('non-nullable is_forwarded cannot be null');
        }
        $this->container['is_forwarded'] = $is_forwarded;

        return $this;
    }

    /**
     * Gets author
     *
     * @return string|null
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param string|null $author author
     *
     * @return self
     */
    public function setAuthor($author)
    {
        if (is_null($author)) {
            throw new \InvalidArgumentException('non-nullable author cannot be null');
        }
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets time
     *
     * @return int|null
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param int|null $time time
     *
     * @return self
     */
    public function setTime($time)
    {
        if (is_null($time)) {
            throw new \InvalidArgumentException('non-nullable time cannot be null');
        }
        $this->container['time'] = $time;

        return $this;
    }

    /**
     * Gets chat_id
     *
     * @return string|null
     */
    public function getChatId()
    {
        return $this->container['chat_id'];
    }

    /**
     * Sets chat_id
     *
     * @param string|null $chat_id chat_id
     *
     * @return self
     */
    public function setChatId($chat_id)
    {
        if (is_null($chat_id)) {
            throw new \InvalidArgumentException('non-nullable chat_id cannot be null');
        }
        $this->container['chat_id'] = $chat_id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets sender_name
     *
     * @return string|null
     */
    public function getSenderName()
    {
        return $this->container['sender_name'];
    }

    /**
     * Sets sender_name
     *
     * @param string|null $sender_name sender_name
     *
     * @return self
     */
    public function setSenderName($sender_name)
    {
        if (is_null($sender_name)) {
            throw new \InvalidArgumentException('non-nullable sender_name cannot be null');
        }
        $this->container['sender_name'] = $sender_name;

        return $this;
    }

    /**
     * Gets caption
     *
     * @return string|null
     */
    public function getCaption()
    {
        return $this->container['caption'];
    }

    /**
     * Sets caption
     *
     * @param string|null $caption caption
     *
     * @return self
     */
    public function setCaption($caption)
    {
        if (is_null($caption)) {
            throw new \InvalidArgumentException('non-nullable caption cannot be null');
        }
        $this->container['caption'] = $caption;

        return $this;
    }

    /**
     * Gets quoted_msg_id
     *
     * @return string|null
     */
    public function getQuotedMsgId()
    {
        return $this->container['quoted_msg_id'];
    }

    /**
     * Sets quoted_msg_id
     *
     * @param string|null $quoted_msg_id quoted_msg_id
     *
     * @return self
     */
    public function setQuotedMsgId($quoted_msg_id)
    {
        if (is_null($quoted_msg_id)) {
            throw new \InvalidArgumentException('non-nullable quoted_msg_id cannot be null');
        }
        $this->container['quoted_msg_id'] = $quoted_msg_id;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return object|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param object|null $metadata metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (is_null($metadata)) {
            throw new \InvalidArgumentException('non-nullable metadata cannot be null');
        }
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets chat_name
     *
     * @return string|null
     */
    public function getChatName()
    {
        return $this->container['chat_name'];
    }

    /**
     * Sets chat_name
     *
     * @param string|null $chat_name chat_name
     *
     * @return self
     */
    public function setChatName($chat_name)
    {
        if (is_null($chat_name)) {
            throw new \InvalidArgumentException('non-nullable chat_name cannot be null');
        }
        $this->container['chat_name'] = $chat_name;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


