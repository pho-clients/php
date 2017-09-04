# Swagger\Client\DefaultApi

All URIs are relative to *https://virtserver.swaggerhub.com/phonetworks/server-rest/1.1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAttribute**](DefaultApi.md#addAttribute) | **POST** /{uuid}/attribute/{key} | updates (or creates) an attribute
[**delAttribute**](DefaultApi.md#delAttribute) | **DELETE** /{uuid}/attribute/{key} | deletes an attribute
[**delEntity**](DefaultApi.md#delEntity) | **DELETE** /{uuid} | deletes an entity
[**getAllEdges**](DefaultApi.md#getAllEdges) | **GET** /{uuid}/edges/all | retrieves the edges of a node
[**getAttribute**](DefaultApi.md#getAttribute) | **GET** /{uuid}/attribute/{key} | retrieves the value of an entity attribute
[**getAttributes**](DefaultApi.md#getAttributes) | **GET** /{uuid}/attributes | retrieves the existing attribute keys of an entity (edge or node)
[**getEdge**](DefaultApi.md#getEdge) | **GET** /edge/{uuid} | retrieves an edge
[**getEdgeGetters**](DefaultApi.md#getEdgeGetters) | **GET** /{uuid}/edges/getters | retrieves the edge getter methods of a node
[**getEdgeSetters**](DefaultApi.md#getEdgeSetters) | **GET** /{uuid}/edges/setters | retrieves the edge setter methods of a node
[**getFounder**](DefaultApi.md#getFounder) | **GET** /founder | retrieves the Graph Founder
[**getGraph**](DefaultApi.md#getGraph) | **GET** /graph | retrieves the main Graph
[**getIncomingEdges**](DefaultApi.md#getIncomingEdges) | **GET** /{uuid}/edges/in | retrieves the incoming edges of a node
[**getNode**](DefaultApi.md#getNode) | **GET** /{uuid} | retrieves a node
[**getNodeEdge**](DefaultApi.md#getNodeEdge) | **GET** /{uuid}/{edge} | edge getter
[**getOutgoingEdges**](DefaultApi.md#getOutgoingEdges) | **GET** /{uuid}/edges/out | retrieves the outgoing edges of a node
[**getSpace**](DefaultApi.md#getSpace) | **GET** /space | retrieves the Space
[**getType**](DefaultApi.md#getType) | **GET** /{uuid}/type | fetches entity type
[**makeActor**](DefaultApi.md#makeActor) | **POST** /actor | creates an Actor object
[**makeEdge**](DefaultApi.md#makeEdge) | **POST** /{uuid}/{edge} | creates an edge
[**setAttribute**](DefaultApi.md#setAttribute) | **PUT** /{uuid}/attribute/{key} | updates (or creates) an attribute


# **addAttribute**
> \Swagger\Client\Model\InlineResponse2004 addAttribute($value)

updates (or creates) an attribute

Works with all entities, including nodes and edges. Given its key, updates an  attribute value, or creates it, if it doesn't yet exist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$value = "value_example"; // string | The value to update the key with.

try {
    $result = $api_instance->addAttribute($value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->addAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **value** | **string**| The value to update the key with. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delAttribute**
> \Swagger\Client\Model\InlineResponse2004 delAttribute()

deletes an attribute

Works with all entities, including nodes and edges. Given its key, deletes an  attribute.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();

try {
    $result = $api_instance->delAttribute();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->delAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delEntity**
> delEntity()

deletes an entity

Works with all entities, including nodes and edges.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();

try {
    $api_instance->delEntity();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->delEntity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllEdges**
> \Swagger\Client\Model\InlineResponse2003 getAllEdges($uuid)

retrieves the edges of a node

By passing in a node ID, you can fetch all the edges of the node in question; including incoming and outgoing.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$uuid = "uuid_example"; // string | The node ID

try {
    $result = $api_instance->getAllEdges($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAllEdges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The node ID |

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAttribute**
> string getAttribute($uuid, $key)

retrieves the value of an entity attribute

Attribute key must be case-sensitive.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$uuid = "uuid_example"; // string | The node ID
$key = "key_example"; // string | The attribute key

try {
    $result = $api_instance->getAttribute($uuid, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The node ID |
 **key** | **string**| The attribute key |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAttributes**
> string[] getAttributes($uuid)

retrieves the existing attribute keys of an entity (edge or node)

Attribute keys are case-sensitive, and they will be listed in an array.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$uuid = "uuid_example"; // string | The node ID

try {
    $result = $api_instance->getAttributes($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The node ID |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEdge**
> \Swagger\Client\Model\Edge getEdge($uuid)

retrieves an edge

By passing in an ID, you can search for available edges in the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$uuid = "uuid_example"; // string | The edge ID

try {
    $result = $api_instance->getEdge($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getEdge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The edge ID |

### Return type

[**\Swagger\Client\Model\Edge**](../Model/Edge.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEdgeGetters**
> string[] getEdgeGetters($uuid)

retrieves the edge getter methods of a node

By passing in a node UUID that exists in the database, you can fetch  the edge getter methods of the node in question.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$uuid = "uuid_example"; // string | The node ID

try {
    $result = $api_instance->getEdgeGetters($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getEdgeGetters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The node ID |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEdgeSetters**
> string[] getEdgeSetters($uuid)

retrieves the edge setter methods of a node

By passing in a node UUID that exists in the database, you can fetch  the edge setter methods of the node in question. These setters may or  may not be formative. If they are formative, a new node is created in result.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$uuid = "uuid_example"; // string | The node ID

try {
    $result = $api_instance->getEdgeSetters($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getEdgeSetters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The node ID |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFounder**
> \Swagger\Client\Model\InlineResponse200 getFounder()

retrieves the Graph Founder

The Founder must be a \\Pho\\Framework\\Actor object.  This method returns the object type as well as object ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();

try {
    $result = $api_instance->getFounder();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getFounder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGraph**
> \Swagger\Client\Model\InlineResponse2001 getGraph()

retrieves the main Graph

The Graph must be a \\Pho\\Lib\\Graph\\SubGraph and \\Pho\\Framework\\Graph object.  This method returns the object type as well as object ID. The Graph contains all nodes and edges in the system.  Though it is contained by Space, its one and only container.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();

try {
    $result = $api_instance->getGraph();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getGraph: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIncomingEdges**
> \Swagger\Client\Model\NodeEdge[] getIncomingEdges($uuid)

retrieves the incoming edges of a node

By passing in a node ID, you can fetch  the incoming edges of the node in question.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$uuid = "uuid_example"; // string | the node ID

try {
    $result = $api_instance->getIncomingEdges($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getIncomingEdges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| the node ID |

### Return type

[**\Swagger\Client\Model\NodeEdge[]**](../Model/NodeEdge.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNode**
> \Swagger\Client\Model\Node getNode($uuid)

retrieves a node

By passing in an ID, you can search for available nodes in the system. Please note, this function will not return edges. This method  is  reserved for nodes only.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$uuid = "uuid_example"; // string | The node ID

try {
    $result = $api_instance->getNode($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The node ID |

### Return type

[**\Swagger\Client\Model\Node**](../Model/Node.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNodeEdge**
> string[] getNodeEdge($uuid, $edge)

edge getter

Fetches edge results, whether as edge IDs or node IDs, depending on edge's characteristics.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$uuid = "uuid_example"; // string | The node ID
$edge = "edge_example"; // string | The edge getter label

try {
    $result = $api_instance->getNodeEdge($uuid, $edge);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getNodeEdge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The node ID |
 **edge** | **string**| The edge getter label |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutgoingEdges**
> \Swagger\Client\Model\NodeEdge[] getOutgoingEdges($uuid)

retrieves the outgoing edges of a node

By passing in a node ID, you can fetch  the outgoing edges of the node in question.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$uuid = "uuid_example"; // string | the node ID

try {
    $result = $api_instance->getOutgoingEdges($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOutgoingEdges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| the node ID |

### Return type

[**\Swagger\Client\Model\NodeEdge[]**](../Model/NodeEdge.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSpace**
> \Swagger\Client\Model\InlineResponse2002 getSpace()

retrieves the Space

The Space must be a \\Pho\\Lib\\Graph\\Graph object.  This method returns the object type as well as object uuid. Space always comes with the nil ID;  00000000000000000000000000000000, and under normal circumstances its class is always Pho\\Kernel\\Standards\\Space

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();

try {
    $result = $api_instance->getSpace();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSpace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getType**
> string getType($uuid)

fetches entity type

Possible values are; \"Space\", \"Node\", \"Graph Node\", \"Graph\", \"Actor Node\" \"Object Node\", \"Edge\", \"Read Edge\", \"Write Edge\", \"Subscribe Edge\", \"Mention Edge\", \"Unidentified\".

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$uuid = "uuid_example"; // string | the node

try {
    $result = $api_instance->getType($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| the node |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **makeActor**
> string makeActor($param1)

creates an Actor object

Fetches whatever set as \"default_object\"=>\"actor\" while determining what Actor object to construct. If it doesn't exist, uses \"default_object\"=>\"founder\" class. Otherwise fails.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$param1 = "param1_example"; // string | Actor constructor argument. More parameters may be passed via param2, param3 ... param50.

try {
    $result = $api_instance->makeActor($param1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->makeActor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **param1** | **string**| Actor constructor argument. More parameters may be passed via param2, param3 ... param50. | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **makeEdge**
> string makeEdge($param1)

creates an edge

Used to set new edges. If the edge is formative, then a node is also formed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$param1 = "param1_example"; // string | The value to update the key with. There can be 50 of those. For example;  param1=\"value1\", param2 =\"another value\" depending on the edge's default constructor variable count.

try {
    $result = $api_instance->makeEdge($param1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->makeEdge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **param1** | **string**| The value to update the key with. There can be 50 of those. For example;  param1&#x3D;\&quot;value1\&quot;, param2 &#x3D;\&quot;another value\&quot; depending on the edge&#39;s default constructor variable count. | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setAttribute**
> \Swagger\Client\Model\InlineResponse2004 setAttribute($value)

updates (or creates) an attribute

Works with all entities, including nodes and edges. Given its key, updates an  attribute value, or creates it, if it doesn't yet exist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$value = "value_example"; // string | The value to update the key with.

try {
    $result = $api_instance->setAttribute($value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->setAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **value** | **string**| The value to update the key with. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

