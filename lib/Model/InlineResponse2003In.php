<?php
/**
 * InlineResponse2003In
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Social Graph API
 *
 * Pho Networks REST API
 *
 * OpenAPI spec version: 1.1.1
 * Contact: emre@phonetworks.org
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * InlineResponse2003In Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2003In implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_3_in';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_5f9e769ff6fe4cee02b3b4547200db6b' => '\Swagger\Client\Model\NodeEdge'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        '_5f9e769ff6fe4cee02b3b4547200db6b' => '5f9e769ff6fe4cee02b3b4547200db6b'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        '_5f9e769ff6fe4cee02b3b4547200db6b' => 'set5f9e769ff6fe4cee02b3b4547200db6b'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        '_5f9e769ff6fe4cee02b3b4547200db6b' => 'get5f9e769ff6fe4cee02b3b4547200db6b'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['_5f9e769ff6fe4cee02b3b4547200db6b'] = isset($data['_5f9e769ff6fe4cee02b3b4547200db6b']) ? $data['_5f9e769ff6fe4cee02b3b4547200db6b'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['_5f9e769ff6fe4cee02b3b4547200db6b'] === null) {
            $invalid_properties[] = "'_5f9e769ff6fe4cee02b3b4547200db6b' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['_5f9e769ff6fe4cee02b3b4547200db6b'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets _5f9e769ff6fe4cee02b3b4547200db6b
     * @return \Swagger\Client\Model\NodeEdge
     */
    public function get5f9e769ff6fe4cee02b3b4547200db6b()
    {
        return $this->container['_5f9e769ff6fe4cee02b3b4547200db6b'];
    }

    /**
     * Sets _5f9e769ff6fe4cee02b3b4547200db6b
     * @param \Swagger\Client\Model\NodeEdge $_5f9e769ff6fe4cee02b3b4547200db6b
     * @return $this
     */
    public function set5f9e769ff6fe4cee02b3b4547200db6b($_5f9e769ff6fe4cee02b3b4547200db6b)
    {
        $this->container['_5f9e769ff6fe4cee02b3b4547200db6b'] = $_5f9e769ff6fe4cee02b3b4547200db6b;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}
