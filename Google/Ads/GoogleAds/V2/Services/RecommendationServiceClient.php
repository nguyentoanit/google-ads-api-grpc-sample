<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2019 Google LLC.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
//
namespace Google\Ads\GoogleAds\V2\Services;

/**
 * Proto file describing the Recommendation service.
 *
 * Service to manage recommendations.
 */
class RecommendationServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Returns the requested recommendation in full detail.
     * @param \Google\Ads\GoogleAds\V2\Services\GetRecommendationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetRecommendation(\Google\Ads\GoogleAds\V2\Services\GetRecommendationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.ads.googleads.v2.services.RecommendationService/GetRecommendation',
        $argument,
        ['\Google\Ads\GoogleAds\V2\Resources\Recommendation', 'decode'],
        $metadata, $options);
    }

    /**
     * Applies given recommendations with corresponding apply parameters.
     * @param \Google\Ads\GoogleAds\V2\Services\ApplyRecommendationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ApplyRecommendation(\Google\Ads\GoogleAds\V2\Services\ApplyRecommendationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.ads.googleads.v2.services.RecommendationService/ApplyRecommendation',
        $argument,
        ['\Google\Ads\GoogleAds\V2\Services\ApplyRecommendationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Dismisses given recommendations.
     * @param \Google\Ads\GoogleAds\V2\Services\DismissRecommendationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DismissRecommendation(\Google\Ads\GoogleAds\V2\Services\DismissRecommendationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.ads.googleads.v2.services.RecommendationService/DismissRecommendation',
        $argument,
        ['\Google\Ads\GoogleAds\V2\Services\DismissRecommendationResponse', 'decode'],
        $metadata, $options);
    }

}
