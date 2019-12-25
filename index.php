<?php
  require "vendor/autoload.php";

  $client = new GuzzleHttp\Client();
  $url = 'https://googleads.googleapis.com/$rpc/google.ads.googleads.v2.services.MediaFileService/GetMediaFile';

  $mediaFileRequest = new Google\Ads\GoogleAds\V2\Services\GetMediaFileRequest();
  $mediaFile = new Google\Ads\GoogleAds\V2\Resources\MediaFile();

  $mediaFileRequest->setResourceName('customers/123/mediaFiles/456');
  $accessToken = 'ya29.xxx-yyy-zzz';
  $developerToken = '__xxxx_';
  $loginCustomerId = '123456';

  $response = $client->request('POST', $url, [
    'headers' => [
      'Content-Type' => 'application/x-protobuf',
      'Authorization' => "Bearer {$accessToken}",
      'developer-token' => $developerToken,
      'login-customer-id' => $loginCustomerId,
    ],
    'body' => $mediaFileRequest->serializeToString(),
  ]);

  $headers = $response->getHeaders();
  $body = $response->getBody()->getContents();
  $mediaFile->mergeFromString($body);

  echo $mediaFile->getId()->getValue().PHP_EOL;
  echo $mediaFile->getResourceName().PHP_EOL;
  echo $mediaFile->getType().PHP_EOL;
  echo $mediaFile->getMimeType().PHP_EOL;
  echo $mediaFile->getSourceUrl()->getValue().PHP_EOL;
  echo $mediaFile->getFileSize()->getValue().PHP_EOL;
?>
