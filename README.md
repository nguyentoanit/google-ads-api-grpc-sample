# Google Ads API via gRPC sample
## Getting Started
### Prerequisites
- Have basic knowledges about 
  - [Google Ads API](https://developers.google.com/google-ads/api/docs/start)
  - [gRPC Docs](https://grpc.io/)
- [Credentials](https://developers.google.com/google-ads/api/docs/oauth/overview)
- Install PHP and Composer

### Installing
Install dependencies

```
composer i
```

Open *index.php* and update credentials

```
  $mediaFileRequest->setResourceName('customers/123/mediaFiles/456');
  $accessToken = 'ya29.xxx-yyy-zzz';
  $developerToken = '__xxxx_';
  $loginCustomerId = '123456';
```

## References:
- https://code.tutsplus.com/tutorials/rest-vs-grpc-battle-of-the-apis--cms-30711
- https://github.com/googleapis/googleapis.github.io
- https://github.com/googleapis/googleapis/tree/master/google/ads/googleads
