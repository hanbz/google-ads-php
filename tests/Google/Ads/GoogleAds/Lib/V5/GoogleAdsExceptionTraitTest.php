<?php

/*
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Ads\GoogleAds\Lib\V5;

use Google\Ads\GoogleAds\Lib\Testing\V5\GoogleAdsExceptionTraitInserted;
use Google\Ads\GoogleAds\V5\Errors\GoogleAdsFailure;
use Google\ApiCore\ApiException;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for `GoogleAdsExceptionTrait`.
 *
 * @covers \Google\Ads\GoogleAds\Lib\V5\GoogleAdsExceptionTrait
 * @small
 */
class GoogleAdsExceptionTraitTest extends TestCase
{
    /** @var GoogleAdsExceptionTraitInserted $googleAdsExceptionTraitInserted */
    private $googleAdsExceptionTraitInserted;

    /** @var StatusMetadataExtractor $statusMetadataExtractor */
    private $statusMetadataExtractor;

    /**
     * @see \PHPUnit\Framework\TestCase::setUp()
     */
    protected function setUp()
    {
        $this->statusMetadataExtractor = $this
            ->getMockBuilder(StatusMetadataExtractor::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->statusMetadataExtractor->method("extractGoogleAdsFailure")->willReturn(
            new GoogleAdsFailure()
        );
        $this->googleAdsExceptionTraitInserted = new GoogleAdsExceptionTraitInserted();
    }

    /**
     * @expectedException \Google\Ads\GoogleAds\Lib\V5\GoogleAdsException
     */
    public function testThrowGoogleAdsExceptionUsingBinaryKey()
    {
        $metadata = ['google.ads.googleads.v5.errors.googleadsfailure-bin' => ['test']];
        $apiException = new ApiException('dummy', 404, 'error', ['metadata' => $metadata]);
        $this->googleAdsExceptionTraitInserted->throwGoogleAdsException(
            $apiException,
            $this->statusMetadataExtractor
        );
    }

    /**
     * @expectedException \Google\Ads\GoogleAds\Lib\V5\GoogleAdsException
     */
    public function testThrowGoogleAdsExceptionUsingJsonKey()
    {
        $metadata = ['google.ads.googleads.v5.errors.googleadsfailure' => ['test']];
        $apiException = new ApiException('dummy', 404, 'error', ['metadata' => $metadata]);
        $this->googleAdsExceptionTraitInserted->throwGoogleAdsException(
            $apiException,
            $this->statusMetadataExtractor
        );
    }
}
