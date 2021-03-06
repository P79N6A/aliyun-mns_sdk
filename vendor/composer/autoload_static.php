<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit705f6e4cb45311687a24db1e6da7f854
{
    public static $files = array (
        'c223bb0cd35ae83fcd77f6093e86ad38' => __DIR__ . '/../..' . '/GuzzleHttp/functions.php',
        '51eb6970b082fcafbbcaeb27de588f53' => __DIR__ . '/../..' . '/GuzzleHttp/Psr7/functions.php',
        'ca4ea91ee046289e6bc6dcd5c1a69e0b' => __DIR__ . '/../..' . '/GuzzleHttp/promise/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpSdk\\' => 7,
        ),
        'A' => 
        array (
            'Application\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpSdk\\' => 
        array (
            0 => __DIR__ . '/../..' . '/php_sdk',
        ),
        'Application\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
    );

    public static $classMap = array (
        'AliyunMNS\\AsyncCallback' => __DIR__ . '/../..' . '/AliyunMNS/AsyncCallback.php',
        'AliyunMNS\\Client' => __DIR__ . '/../..' . '/AliyunMNS/Client.php',
        'AliyunMNS\\Common\\XMLParser' => __DIR__ . '/../..' . '/AliyunMNS/Common/XMLParser.php',
        'AliyunMNS\\Config' => __DIR__ . '/../..' . '/AliyunMNS/Config.php',
        'AliyunMNS\\Constants' => __DIR__ . '/../..' . '/AliyunMNS/Constants.php',
        'AliyunMNS\\Exception\\BatchDeleteFailException' => __DIR__ . '/../..' . '/AliyunMNS/Exception/BatchDeleteFailException.php',
        'AliyunMNS\\Exception\\BatchSendFailException' => __DIR__ . '/../..' . '/AliyunMNS/Exception/BatchSendFailException.php',
        'AliyunMNS\\Exception\\InvalidArgumentException' => __DIR__ . '/../..' . '/AliyunMNS/Exception/InvalidArgumentException.php',
        'AliyunMNS\\Exception\\MalformedXMLException' => __DIR__ . '/../..' . '/AliyunMNS/Exception/MalformedXMLException.php',
        'AliyunMNS\\Exception\\MessageNotExistException' => __DIR__ . '/../..' . '/AliyunMNS/Exception/MessageNotExistException.php',
        'AliyunMNS\\Exception\\MnsException' => __DIR__ . '/../..' . '/AliyunMNS/Exception/MnsException.php',
        'AliyunMNS\\Exception\\QueueAlreadyExistException' => __DIR__ . '/../..' . '/AliyunMNS/Exception/QueueAlreadyExistException.php',
        'AliyunMNS\\Exception\\QueueNotExistException' => __DIR__ . '/../..' . '/AliyunMNS/Exception/QueueNotExistException.php',
        'AliyunMNS\\Exception\\ReceiptHandleErrorException' => __DIR__ . '/../..' . '/AliyunMNS/Exception/ReceiptHandleErrorException.php',
        'AliyunMNS\\Exception\\SubscriptionAlreadyExistException' => __DIR__ . '/../..' . '/AliyunMNS/Exception/SubscriptionAlreadyExistException.php',
        'AliyunMNS\\Exception\\SubscriptionNotExistException' => __DIR__ . '/../..' . '/AliyunMNS/Exception/SubscriptionNotExistException.php',
        'AliyunMNS\\Exception\\TopicAlreadyExistException' => __DIR__ . '/../..' . '/AliyunMNS/Exception/TopicAlreadyExistException.php',
        'AliyunMNS\\Exception\\TopicNotExistException' => __DIR__ . '/../..' . '/AliyunMNS/Exception/TopicNotExistException.php',
        'AliyunMNS\\Http\\HttpClient' => __DIR__ . '/../..' . '/AliyunMNS/Http/HttpClient.php',
        'AliyunMNS\\Model\\AccountAttributes' => __DIR__ . '/../..' . '/AliyunMNS/Model/AccountAttributes.php',
        'AliyunMNS\\Model\\BatchSmsAttributes' => __DIR__ . '/../..' . '/AliyunMNS/Model/BatchSmsAttributes.php',
        'AliyunMNS\\Model\\DeleteMessageErrorItem' => __DIR__ . '/../..' . '/AliyunMNS/Model/DeleteMessageErrorItem.php',
        'AliyunMNS\\Model\\MailAttributes' => __DIR__ . '/../..' . '/AliyunMNS/Model/MailAttributes.php',
        'AliyunMNS\\Model\\Message' => __DIR__ . '/../..' . '/AliyunMNS/Model/Message.php',
        'AliyunMNS\\Model\\MessageAttributes' => __DIR__ . '/../..' . '/AliyunMNS/Model/MessageAttributes.php',
        'AliyunMNS\\Model\\QueueAttributes' => __DIR__ . '/../..' . '/AliyunMNS/Model/QueueAttributes.php',
        'AliyunMNS\\Model\\SendMessageRequestItem' => __DIR__ . '/../..' . '/AliyunMNS/Model/SendMessageRequestItem.php',
        'AliyunMNS\\Model\\SendMessageResponseItem' => __DIR__ . '/../..' . '/AliyunMNS/Model/SendMessageResponseItem.php',
        'AliyunMNS\\Model\\SmsAttributes' => __DIR__ . '/../..' . '/AliyunMNS/Model/SmsAttributes.php',
        'AliyunMNS\\Model\\SubscriptionAttributes' => __DIR__ . '/../..' . '/AliyunMNS/Model/SubscriptionAttributes.php',
        'AliyunMNS\\Model\\TopicAttributes' => __DIR__ . '/../..' . '/AliyunMNS/Model/TopicAttributes.php',
        'AliyunMNS\\Model\\UpdateSubscriptionAttributes' => __DIR__ . '/../..' . '/AliyunMNS/Model/UpdateSubscriptionAttributes.php',
        'AliyunMNS\\Model\\WebSocketAttributes' => __DIR__ . '/../..' . '/AliyunMNS/Model/WebSocketAttributes.php',
        'AliyunMNS\\Queue' => __DIR__ . '/../..' . '/AliyunMNS/Queue.php',
        'AliyunMNS\\Requests\\BaseRequest' => __DIR__ . '/../..' . '/AliyunMNS/Requests/BaseRequest.php',
        'AliyunMNS\\Requests\\BatchDeleteMessageRequest' => __DIR__ . '/../..' . '/AliyunMNS/Requests/BatchDeleteMessageRequest.php',
        'AliyunMNS\\Requests\\BatchPeekMessageRequest' => __DIR__ . '/../..' . '/AliyunMNS/Requests/BatchPeekMessageRequest.php',
        'AliyunMNS\\Requests\\BatchReceiveMessageRequest' => __DIR__ . '/../..' . '/AliyunMNS/Requests/BatchReceiveMessageRequest.php',
        'AliyunMNS\\Requests\\BatchSendMessageRequest' => __DIR__ . '/../..' . '/AliyunMNS/Requests/BatchSendMessageRequest.php',
        'AliyunMNS\\Requests\\ChangeMessageVisibilityRequest' => __DIR__ . '/../..' . '/AliyunMNS/Requests/ChangeMessageVisibilityRequest.php',
        'AliyunMNS\\Requests\\CreateQueueRequest' => __DIR__ . '/../..' . '/AliyunMNS/Requests/CreateQueueRequest.php',
        'AliyunMNS\\Requests\\CreateTopicRequest' => __DIR__ . '/../..' . '/AliyunMNS/Requests/CreateTopicRequest.php',
        'AliyunMNS\\Requests\\DeleteMessageRequest' => __DIR__ . '/../..' . '/AliyunMNS/Requests/DeleteMessageRequest.php',
        'AliyunMNS\\Requests\\DeleteQueueRequest' => __DIR__ . '/../..' . '/AliyunMNS/Requests/DeleteQueueRequest.php',
        'AliyunMNS\\Requests\\DeleteTopicRequest' => __DIR__ . '/../..' . '/AliyunMNS/Requests/DeleteTopicRequest.php',
        'AliyunMNS\\Requests\\GetAccountAttributesRequest' => __DIR__ . '/../..' . '/AliyunMNS/Requests/GetAccountAttributesRequest.php',
        'AliyunMNS\\Requests\\GetQueueAttributeRequest' => __DIR__ . '/../..' . '/AliyunMNS/Requests/GetQueueAttributeRequest.php',
        'AliyunMNS\\Requests\\GetSubscriptionAttributeRequest' => __DIR__ . '/../..' . '/AliyunMNS/Requests/GetSubscriptionAttributeRequest.php',
        'AliyunMNS\\Requests\\GetTopicAttributeRequest' => __DIR__ . '/../..' . '/AliyunMNS/Requests/GetTopicAttributeRequest.php',
        'AliyunMNS\\Requests\\ListQueueRequest' => __DIR__ . '/../..' . '/AliyunMNS/Requests/ListQueueRequest.php',
        'AliyunMNS\\Requests\\ListSubscriptionRequest' => __DIR__ . '/../..' . '/AliyunMNS/Requests/ListSubscriptionRequest.php',
        'AliyunMNS\\Requests\\ListTopicRequest' => __DIR__ . '/../..' . '/AliyunMNS/Requests/ListTopicRequest.php',
        'AliyunMNS\\Requests\\PeekMessageRequest' => __DIR__ . '/../..' . '/AliyunMNS/Requests/PeekMessageRequest.php',
        'AliyunMNS\\Requests\\PublishMessageRequest' => __DIR__ . '/../..' . '/AliyunMNS/Requests/PublishMessageRequest.php',
        'AliyunMNS\\Requests\\ReceiveMessageRequest' => __DIR__ . '/../..' . '/AliyunMNS/Requests/ReceiveMessageRequest.php',
        'AliyunMNS\\Requests\\SendMessageRequest' => __DIR__ . '/../..' . '/AliyunMNS/Requests/SendMessageRequest.php',
        'AliyunMNS\\Requests\\SetAccountAttributesRequest' => __DIR__ . '/../..' . '/AliyunMNS/Requests/SetAccountAttributesRequest.php',
        'AliyunMNS\\Requests\\SetQueueAttributeRequest' => __DIR__ . '/../..' . '/AliyunMNS/Requests/SetQueueAttributeRequest.php',
        'AliyunMNS\\Requests\\SetSubscriptionAttributeRequest' => __DIR__ . '/../..' . '/AliyunMNS/Requests/SetSubscriptionAttributeRequest.php',
        'AliyunMNS\\Requests\\SetTopicAttributeRequest' => __DIR__ . '/../..' . '/AliyunMNS/Requests/SetTopicAttributeRequest.php',
        'AliyunMNS\\Requests\\SubscribeRequest' => __DIR__ . '/../..' . '/AliyunMNS/Requests/SubscribeRequest.php',
        'AliyunMNS\\Requests\\UnsubscribeRequest' => __DIR__ . '/../..' . '/AliyunMNS/Requests/UnsubscribeRequest.php',
        'AliyunMNS\\Responses\\BaseResponse' => __DIR__ . '/../..' . '/AliyunMNS/Responses/BaseResponse.php',
        'AliyunMNS\\Responses\\BatchDeleteMessageResponse' => __DIR__ . '/../..' . '/AliyunMNS/Responses/BatchDeleteMessageResponse.php',
        'AliyunMNS\\Responses\\BatchPeekMessageResponse' => __DIR__ . '/../..' . '/AliyunMNS/Responses/BatchPeekMessageResponse.php',
        'AliyunMNS\\Responses\\BatchReceiveMessageResponse' => __DIR__ . '/../..' . '/AliyunMNS/Responses/BatchReceiveMessageResponse.php',
        'AliyunMNS\\Responses\\BatchSendMessageResponse' => __DIR__ . '/../..' . '/AliyunMNS/Responses/BatchSendMessageResponse.php',
        'AliyunMNS\\Responses\\ChangeMessageVisibilityResponse' => __DIR__ . '/../..' . '/AliyunMNS/Responses/ChangeMessageVisibilityResponse.php',
        'AliyunMNS\\Responses\\CreateQueueResponse' => __DIR__ . '/../..' . '/AliyunMNS/Responses/CreateQueueResponse.php',
        'AliyunMNS\\Responses\\CreateTopicResponse' => __DIR__ . '/../..' . '/AliyunMNS/Responses/CreateTopicResponse.php',
        'AliyunMNS\\Responses\\DeleteMessageResponse' => __DIR__ . '/../..' . '/AliyunMNS/Responses/DeleteMessageResponse.php',
        'AliyunMNS\\Responses\\DeleteQueueResponse' => __DIR__ . '/../..' . '/AliyunMNS/Responses/DeleteQueueResponse.php',
        'AliyunMNS\\Responses\\DeleteTopicResponse' => __DIR__ . '/../..' . '/AliyunMNS/Responses/DeleteTopicResponse.php',
        'AliyunMNS\\Responses\\GetAccountAttributesResponse' => __DIR__ . '/../..' . '/AliyunMNS/Responses/GetAccountAttributesResponse.php',
        'AliyunMNS\\Responses\\GetQueueAttributeResponse' => __DIR__ . '/../..' . '/AliyunMNS/Responses/GetQueueAttributeResponse.php',
        'AliyunMNS\\Responses\\GetSubscriptionAttributeResponse' => __DIR__ . '/../..' . '/AliyunMNS/Responses/GetSubscriptionAttributeResponse.php',
        'AliyunMNS\\Responses\\GetTopicAttributeResponse' => __DIR__ . '/../..' . '/AliyunMNS/Responses/GetTopicAttributeResponse.php',
        'AliyunMNS\\Responses\\ListQueueResponse' => __DIR__ . '/../..' . '/AliyunMNS/Responses/ListQueueResponse.php',
        'AliyunMNS\\Responses\\ListSubscriptionResponse' => __DIR__ . '/../..' . '/AliyunMNS/Responses/ListSubscriptionResponse.php',
        'AliyunMNS\\Responses\\ListTopicResponse' => __DIR__ . '/../..' . '/AliyunMNS/Responses/ListTopicResponse.php',
        'AliyunMNS\\Responses\\MnsPromise' => __DIR__ . '/../..' . '/AliyunMNS/Responses/MnsPromise.php',
        'AliyunMNS\\Responses\\PeekMessageResponse' => __DIR__ . '/../..' . '/AliyunMNS/Responses/PeekMessageResponse.php',
        'AliyunMNS\\Responses\\PublishMessageResponse' => __DIR__ . '/../..' . '/AliyunMNS/Responses/PublishMessageResponse.php',
        'AliyunMNS\\Responses\\ReceiveMessageResponse' => __DIR__ . '/../..' . '/AliyunMNS/Responses/ReceiveMessageResponse.php',
        'AliyunMNS\\Responses\\SendMessageResponse' => __DIR__ . '/../..' . '/AliyunMNS/Responses/SendMessageResponse.php',
        'AliyunMNS\\Responses\\SetAccountAttributesResponse' => __DIR__ . '/../..' . '/AliyunMNS/Responses/SetAccountAttributesResponse.php',
        'AliyunMNS\\Responses\\SetQueueAttributeResponse' => __DIR__ . '/../..' . '/AliyunMNS/Responses/SetQueueAttributeResponse.php',
        'AliyunMNS\\Responses\\SetSubscriptionAttributeResponse' => __DIR__ . '/../..' . '/AliyunMNS/Responses/SetSubscriptionAttributeResponse.php',
        'AliyunMNS\\Responses\\SetTopicAttributeResponse' => __DIR__ . '/../..' . '/AliyunMNS/Responses/SetTopicAttributeResponse.php',
        'AliyunMNS\\Responses\\SubscribeResponse' => __DIR__ . '/../..' . '/AliyunMNS/Responses/SubscribeResponse.php',
        'AliyunMNS\\Responses\\UnsubscribeResponse' => __DIR__ . '/../..' . '/AliyunMNS/Responses/UnsubscribeResponse.php',
        'AliyunMNS\\Signature\\Signature' => __DIR__ . '/../..' . '/AliyunMNS/Signature/Signature.php',
        'AliyunMNS\\Topic' => __DIR__ . '/../..' . '/AliyunMNS/Topic.php',
        'AliyunMNS\\Traits\\MessageIdAndMD5' => __DIR__ . '/../..' . '/AliyunMNS/Traits/MessageIdAndMD5.php',
        'AliyunMNS\\Traits\\MessagePropertiesForPeek' => __DIR__ . '/../..' . '/AliyunMNS/Traits/MessagePropertiesForPeek.php',
        'AliyunMNS\\Traits\\MessagePropertiesForPublish' => __DIR__ . '/../..' . '/AliyunMNS/Traits/MessagePropertiesForPublish.php',
        'AliyunMNS\\Traits\\MessagePropertiesForReceive' => __DIR__ . '/../..' . '/AliyunMNS/Traits/MessagePropertiesForReceive.php',
        'AliyunMNS\\Traits\\MessagePropertiesForSend' => __DIR__ . '/../..' . '/AliyunMNS/Traits/MessagePropertiesForSend.php',
        'ClientTest' => __DIR__ . '/../..' . '/Tests/ClientTest.php',
        'CreateQueueAndSendMessage' => __DIR__ . '/../..' . '/Samples/Queue/CreateQueueAndSendMessage.php',
        'CreateTopicAndPublishMessage' => __DIR__ . '/../..' . '/Samples/Topic/CreateTopicAndPublishMessage.php',
        'GuzzleHttp\\Client' => __DIR__ . '/../..' . '/GuzzleHttp/Client.php',
        'GuzzleHttp\\ClientInterface' => __DIR__ . '/../..' . '/GuzzleHttp/ClientInterface.php',
        'GuzzleHttp\\Cookie\\CookieJar' => __DIR__ . '/../..' . '/GuzzleHttp/Cookie/CookieJar.php',
        'GuzzleHttp\\Cookie\\CookieJarInterface' => __DIR__ . '/../..' . '/GuzzleHttp/Cookie/CookieJarInterface.php',
        'GuzzleHttp\\Cookie\\FileCookieJar' => __DIR__ . '/../..' . '/GuzzleHttp/Cookie/FileCookieJar.php',
        'GuzzleHttp\\Cookie\\SessionCookieJar' => __DIR__ . '/../..' . '/GuzzleHttp/Cookie/SessionCookieJar.php',
        'GuzzleHttp\\Cookie\\SetCookie' => __DIR__ . '/../..' . '/GuzzleHttp/Cookie/SetCookie.php',
        'GuzzleHttp\\Exception\\BadResponseException' => __DIR__ . '/../..' . '/GuzzleHttp/Exception/BadResponseException.php',
        'GuzzleHttp\\Exception\\ClientException' => __DIR__ . '/../..' . '/GuzzleHttp/Exception/ClientException.php',
        'GuzzleHttp\\Exception\\ConnectException' => __DIR__ . '/../..' . '/GuzzleHttp/Exception/ConnectException.php',
        'GuzzleHttp\\Exception\\GuzzleException' => __DIR__ . '/../..' . '/GuzzleHttp/Exception/GuzzleException.php',
        'GuzzleHttp\\Exception\\RequestException' => __DIR__ . '/../..' . '/GuzzleHttp/Exception/RequestException.php',
        'GuzzleHttp\\Exception\\SeekException' => __DIR__ . '/../..' . '/GuzzleHttp/Exception/SeekException.php',
        'GuzzleHttp\\Exception\\ServerException' => __DIR__ . '/../..' . '/GuzzleHttp/Exception/ServerException.php',
        'GuzzleHttp\\Exception\\TooManyRedirectsException' => __DIR__ . '/../..' . '/GuzzleHttp/Exception/TooManyRedirectsException.php',
        'GuzzleHttp\\Exception\\TransferException' => __DIR__ . '/../..' . '/GuzzleHttp/Exception/TransferException.php',
        'GuzzleHttp\\HandlerStack' => __DIR__ . '/../..' . '/GuzzleHttp/HandlerStack.php',
        'GuzzleHttp\\Handler\\CurlFactory' => __DIR__ . '/../..' . '/GuzzleHttp/Handler/CurlFactory.php',
        'GuzzleHttp\\Handler\\CurlFactoryInterface' => __DIR__ . '/../..' . '/GuzzleHttp/Handler/CurlFactoryInterface.php',
        'GuzzleHttp\\Handler\\CurlHandler' => __DIR__ . '/../..' . '/GuzzleHttp/Handler/CurlHandler.php',
        'GuzzleHttp\\Handler\\CurlMultiHandler' => __DIR__ . '/../..' . '/GuzzleHttp/Handler/CurlMultiHandler.php',
        'GuzzleHttp\\Handler\\EasyHandle' => __DIR__ . '/../..' . '/GuzzleHttp/Handler/EasyHandle.php',
        'GuzzleHttp\\Handler\\MockHandler' => __DIR__ . '/../..' . '/GuzzleHttp/Handler/MockHandler.php',
        'GuzzleHttp\\Handler\\Proxy' => __DIR__ . '/../..' . '/GuzzleHttp/Handler/Proxy.php',
        'GuzzleHttp\\Handler\\StreamHandler' => __DIR__ . '/../..' . '/GuzzleHttp/Handler/StreamHandler.php',
        'GuzzleHttp\\MessageFormatter' => __DIR__ . '/../..' . '/GuzzleHttp/MessageFormatter.php',
        'GuzzleHttp\\Middleware' => __DIR__ . '/../..' . '/GuzzleHttp/Middleware.php',
        'GuzzleHttp\\Pool' => __DIR__ . '/../..' . '/GuzzleHttp/Pool.php',
        'GuzzleHttp\\PrepareBodyMiddleware' => __DIR__ . '/../..' . '/GuzzleHttp/PrepareBodyMiddleware.php',
        'GuzzleHttp\\Promise\\AggregateException' => __DIR__ . '/../..' . '/GuzzleHttp/Promise/AggregateException.php',
        'GuzzleHttp\\Promise\\CancellationException' => __DIR__ . '/../..' . '/GuzzleHttp/Promise/CancellationException.php',
        'GuzzleHttp\\Promise\\EachPromise' => __DIR__ . '/../..' . '/GuzzleHttp/Promise/EachPromise.php',
        'GuzzleHttp\\Promise\\FulfilledPromise' => __DIR__ . '/../..' . '/GuzzleHttp/Promise/FulfilledPromise.php',
        'GuzzleHttp\\Promise\\Promise' => __DIR__ . '/../..' . '/GuzzleHttp/Promise/Promise.php',
        'GuzzleHttp\\Promise\\PromiseInterface' => __DIR__ . '/../..' . '/GuzzleHttp/Promise/PromiseInterface.php',
        'GuzzleHttp\\Promise\\PromisorInterface' => __DIR__ . '/../..' . '/GuzzleHttp/Promise/PromisorInterface.php',
        'GuzzleHttp\\Promise\\RejectedPromise' => __DIR__ . '/../..' . '/GuzzleHttp/Promise/RejectedPromise.php',
        'GuzzleHttp\\Promise\\RejectionException' => __DIR__ . '/../..' . '/GuzzleHttp/Promise/RejectionException.php',
        'GuzzleHttp\\Promise\\TaskQueue' => __DIR__ . '/../..' . '/GuzzleHttp/Promise/TaskQueue.php',
        'GuzzleHttp\\Psr7\\AppendStream' => __DIR__ . '/../..' . '/GuzzleHttp/Psr7/AppendStream.php',
        'GuzzleHttp\\Psr7\\BufferStream' => __DIR__ . '/../..' . '/GuzzleHttp/Psr7/BufferStream.php',
        'GuzzleHttp\\Psr7\\CachingStream' => __DIR__ . '/../..' . '/GuzzleHttp/Psr7/CachingStream.php',
        'GuzzleHttp\\Psr7\\DroppingStream' => __DIR__ . '/../..' . '/GuzzleHttp/Psr7/DroppingStream.php',
        'GuzzleHttp\\Psr7\\FnStream' => __DIR__ . '/../..' . '/GuzzleHttp/Psr7/FnStream.php',
        'GuzzleHttp\\Psr7\\InflateStream' => __DIR__ . '/../..' . '/GuzzleHttp/Psr7/InflateStream.php',
        'GuzzleHttp\\Psr7\\LazyOpenStream' => __DIR__ . '/../..' . '/GuzzleHttp/Psr7/LazyOpenStream.php',
        'GuzzleHttp\\Psr7\\LimitStream' => __DIR__ . '/../..' . '/GuzzleHttp/Psr7/LimitStream.php',
        'GuzzleHttp\\Psr7\\MessageTrait' => __DIR__ . '/../..' . '/GuzzleHttp/Psr7/MessageTrait.php',
        'GuzzleHttp\\Psr7\\MultipartStream' => __DIR__ . '/../..' . '/GuzzleHttp/Psr7/MultipartStream.php',
        'GuzzleHttp\\Psr7\\NoSeekStream' => __DIR__ . '/../..' . '/GuzzleHttp/Psr7/NoSeekStream.php',
        'GuzzleHttp\\Psr7\\PumpStream' => __DIR__ . '/../..' . '/GuzzleHttp/Psr7/PumpStream.php',
        'GuzzleHttp\\Psr7\\Request' => __DIR__ . '/../..' . '/GuzzleHttp/Psr7/Request.php',
        'GuzzleHttp\\Psr7\\Response' => __DIR__ . '/../..' . '/GuzzleHttp/Psr7/Response.php',
        'GuzzleHttp\\Psr7\\Stream' => __DIR__ . '/../..' . '/GuzzleHttp/Psr7/Stream.php',
        'GuzzleHttp\\Psr7\\StreamDecoratorTrait' => __DIR__ . '/../..' . '/GuzzleHttp/Psr7/StreamDecoratorTrait.php',
        'GuzzleHttp\\Psr7\\StreamWrapper' => __DIR__ . '/../..' . '/GuzzleHttp/Psr7/StreamWrapper.php',
        'GuzzleHttp\\Psr7\\Uri' => __DIR__ . '/../..' . '/GuzzleHttp/Psr7/Uri.php',
        'GuzzleHttp\\RedirectMiddleware' => __DIR__ . '/../..' . '/GuzzleHttp/RedirectMiddleware.php',
        'GuzzleHttp\\RequestOptions' => __DIR__ . '/../..' . '/GuzzleHttp/RequestOptions.php',
        'GuzzleHttp\\RetryMiddleware' => __DIR__ . '/../..' . '/GuzzleHttp/RetryMiddleware.php',
        'GuzzleHttp\\TransferStats' => __DIR__ . '/../..' . '/GuzzleHttp/TransferStats.php',
        'GuzzleHttp\\UriTemplate' => __DIR__ . '/../..' . '/GuzzleHttp/UriTemplate.php',
        'Psr\\Http\\Message\\MessageInterface' => __DIR__ . '/../..' . '/Psr/Http/Message/MessageInterface.php',
        'Psr\\Http\\Message\\RequestInterface' => __DIR__ . '/../..' . '/Psr/Http/Message/RequestInterface.php',
        'Psr\\Http\\Message\\ResponseInterface' => __DIR__ . '/../..' . '/Psr/Http/Message/ResponseInterface.php',
        'Psr\\Http\\Message\\ServerRequestInterface' => __DIR__ . '/../..' . '/Psr/Http/Message/ServerRequestInterface.php',
        'Psr\\Http\\Message\\StreamInterface' => __DIR__ . '/../..' . '/Psr/Http/Message/StreamInterface.php',
        'Psr\\Http\\Message\\UploadedFileInterface' => __DIR__ . '/../..' . '/Psr/Http/Message/UploadedFileInterface.php',
        'Psr\\Http\\Message\\UriInterface' => __DIR__ . '/../..' . '/Psr/Http/Message/UriInterface.php',
        'QueueTest' => __DIR__ . '/../..' . '/Tests/QueueTest.php',
        'TopicTest' => __DIR__ . '/../..' . '/Tests/TopicTest.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit705f6e4cb45311687a24db1e6da7f854::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit705f6e4cb45311687a24db1e6da7f854::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit705f6e4cb45311687a24db1e6da7f854::$classMap;

        }, null, ClassLoader::class);
    }
}
