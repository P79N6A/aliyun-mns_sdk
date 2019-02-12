# Aliyun MNS PHP SDK

## aliyun_sdk 版本

* version 1.3.5 

## sdk修改

```
 /**
 *  AliyunMNS/GuzzleHttp/Handler/CurlFactory.php line 69
 */
 if (count($this->handles) >= $this->maxHandles )  => if ( $this->handles !== null && count($this->handles) >= $this->maxHandles ) 
```



## 主题用例

* 测试输出显示all success 则表示运行成功


```$xslt

<?php


require_once __DIR__ . '/vendor/autoload.php';

use AliyunMNS\Model\SubscriptionAttributes;
use AliyunMNS\Client;
use AliyunMNS\Requests\CreateTopicRequest;
use AliyunMNS\Exception\MnsException;
use AliyunMNS\Requests\PublishMessageRequest;



$endPoint = '';
$accessId = '';
$accessSecret = '';

$topicName = 'test';

$subscriptionName = 'subscript-test';

$client = new Client($endPoint, $accessId, $accessSecret);

$topicRequest = new CreateTopicRequest($topicName);

/**
 * 创建topic(主题)
 */
try {

    $response = $client->createTopic($topicRequest);

    echo "create topic success" . PHP_EOL;


} catch (MnsException $mnsException) {
    echo $mnsException->getMnsErrorCode() . PHP_EOL;
    return;
}

/**
 * 订阅topic
 */
$topic = $client->getTopicRef($topicName);
$attributes = new SubscriptionAttributes($subscriptionName, 'http://47.110.149.23:8088');

try {

    $topic->subscribe($attributes);

    echo 'subscribe success' . PHP_EOL;

} catch (MnsException $mnsException) {
    echo $mnsException->getMnsErrorCode() . PHP_EOL;
    return;

}
/**
 * 发布消息
 */

$messageBody = "test message";
$request = new PublishMessageRequest($messageBody);
try {
    $response = $topic->publishMessage($request);
    echo 'message publish success' . PHP_EOL;
} catch (MnsException $mnsException) {
    echo $mnsException->getMnsErrorCode() . PHP_EOL;
    return;
}

/**
 * 取消订阅topic
 */
try {
    $topic->unsubscribe($subscriptionName);
    echo 'Unsubscribe success' . PHP_EOL;
} catch (MnsException $mnsException) {
    echo $mnsException->getMnsErrorCode() . PHP_EOL;
    return;
}


/**
 * 删除topic
 */
try {
    $client->deleteTopic($topicName);
    echo "delete topic success" . PHP_EOL;
} catch (MnsException $mnsException) {
    echo $mnsException->getMnsErrorCode() . PHP_EOL;
    return;
}

echo 'all success' . PHP_EOL;
return;

```