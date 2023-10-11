<?php
/**
 * SetMeRequest
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
 * SetMeRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SetMeRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SetMeRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'about' => 'string',
        'address' => 'string',
        'description' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'vertical' => 'string',
        'photo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'about' => null,
        'address' => null,
        'description' => null,
        'email' => null,
        'phone' => null,
        'vertical' => null,
        'photo' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'about' => false,
		'address' => false,
		'description' => false,
		'email' => false,
		'phone' => false,
		'vertical' => false,
		'photo' => false
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
        'about' => 'about',
        'address' => 'address',
        'description' => 'description',
        'email' => 'email',
        'phone' => 'phone',
        'vertical' => 'vertical',
        'photo' => 'photo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'about' => 'setAbout',
        'address' => 'setAddress',
        'description' => 'setDescription',
        'email' => 'setEmail',
        'phone' => 'setPhone',
        'vertical' => 'setVertical',
        'photo' => 'setPhoto'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'about' => 'getAbout',
        'address' => 'getAddress',
        'description' => 'getDescription',
        'email' => 'getEmail',
        'phone' => 'getPhone',
        'vertical' => 'getVertical',
        'photo' => 'getPhoto'
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

    public const VERTICAL_AUTOMOTIVE = 'Automotive';
    public const VERTICAL_BEAUTY_SPA_AND_SALON = 'Beauty, Spa and Salon';
    public const VERTICAL_CLOTHING_AND_APPAREL = 'Clothing and Apparel';
    public const VERTICAL_EDUCATION = 'Education';
    public const VERTICAL_ENTERTAINMENT = 'Entertainment';
    public const VERTICAL_EVENT_PLANNING_AND_SERVICE = 'Event Planning and Service';
    public const VERTICAL_FINANCE_AND_BANKING = 'Finance and Banking';
    public const VERTICAL_FOOD_AND_GROCERY = 'Food and Grocery';
    public const VERTICAL_PUBLIC_SERVICE = 'Public Service';
    public const VERTICAL_HOTEL_AND_LODGING = 'Hotel and Lodging';
    public const VERTICAL_MEDICAL_AND_HEALTH = 'Medical and Health';
    public const VERTICAL_NON_PROFIT = 'Non-profit';
    public const VERTICAL_PROFESSIONAL_SERVICES = 'Professional Services';
    public const VERTICAL_SHOPPING_AND_RETAIL = 'Shopping and Retail';
    public const VERTICAL_TRAVEL_AND_TRANSPORTATION = 'Travel and Transportation';
    public const VERTICAL_RESTAURANT = 'Restaurant';
    public const VERTICAL_OTHER = 'Other';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVerticalAllowableValues()
    {
        return [
            self::VERTICAL_AUTOMOTIVE,
            self::VERTICAL_BEAUTY_SPA_AND_SALON,
            self::VERTICAL_CLOTHING_AND_APPAREL,
            self::VERTICAL_EDUCATION,
            self::VERTICAL_ENTERTAINMENT,
            self::VERTICAL_EVENT_PLANNING_AND_SERVICE,
            self::VERTICAL_FINANCE_AND_BANKING,
            self::VERTICAL_FOOD_AND_GROCERY,
            self::VERTICAL_PUBLIC_SERVICE,
            self::VERTICAL_HOTEL_AND_LODGING,
            self::VERTICAL_MEDICAL_AND_HEALTH,
            self::VERTICAL_NON_PROFIT,
            self::VERTICAL_PROFESSIONAL_SERVICES,
            self::VERTICAL_SHOPPING_AND_RETAIL,
            self::VERTICAL_TRAVEL_AND_TRANSPORTATION,
            self::VERTICAL_RESTAURANT,
            self::VERTICAL_OTHER,
        ];
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
        $this->setIfExists('about', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('vertical', $data ?? [], null);
        $this->setIfExists('photo', $data ?? [], null);
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

        $allowedValues = $this->getVerticalAllowableValues();
        if (!is_null($this->container['vertical']) && !in_array($this->container['vertical'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'vertical', must be one of '%s'",
                $this->container['vertical'],
                implode("', '", $allowedValues)
            );
        }

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
     * Gets about
     *
     * @return string|null
     */
    public function getAbout()
    {
        return $this->container['about'];
    }

    /**
     * Sets about
     *
     * @param string|null $about Profile`s About section.
     *
     * @return self
     */
    public function setAbout($about)
    {
        if (is_null($about)) {
            throw new \InvalidArgumentException('non-nullable about cannot be null');
        }
        $this->container['about'] = $about;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address Address of the business
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description of the business. Max 256 characters
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email Business email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone Linked phone number
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets vertical
     *
     * @return string|null
     */
    public function getVertical()
    {
        return $this->container['vertical'];
    }

    /**
     * Sets vertical
     *
     * @param string|null $vertical Industry of the business
     *
     * @return self
     */
    public function setVertical($vertical)
    {
        if (is_null($vertical)) {
            throw new \InvalidArgumentException('non-nullable vertical cannot be null');
        }
        $allowedValues = $this->getVerticalAllowableValues();
        if (!in_array($vertical, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'vertical', must be one of '%s'",
                    $vertical,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['vertical'] = $vertical;

        return $this;
    }

    /**
     * Gets photo
     *
     * @return string|null
     */
    public function getPhoto()
    {
        return $this->container['photo'];
    }

    /**
     * Sets photo
     *
     * @param string|null $photo HTTP link *https://...*  Or base64-encoded file with mime data, for example *data:image/jpeg;base64,/9j/4AAQSkZJRgABAQ...*   File in form-data input field
     *
     * @return self
     */
    public function setPhoto($photo)
    {
        if (is_null($photo)) {
            throw new \InvalidArgumentException('non-nullable photo cannot be null');
        }
        $this->container['photo'] = $photo;

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


