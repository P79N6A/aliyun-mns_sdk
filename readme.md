# Aliyun MNS PHP SDK


## sdk修改

```
 /**
 * AliyunMNS/GuzzleHttp/Handler/CurlFactory.php line 69
 */
 if (count($this->handles) >= $this->maxHandles )  => if ( $this->handles !== null && count($this->handles) >= $this->maxHandles ) 
```



