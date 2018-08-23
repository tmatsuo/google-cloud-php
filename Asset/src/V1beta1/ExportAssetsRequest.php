<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1beta1/asset_service.proto

namespace Google\Cloud\Asset\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Export asset request.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1beta1.ExportAssetsRequest</code>
 */
class ExportAssetsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The relative name of the root asset. It can only be an
     * organization number (e.g. "organizations/123") or a project number
     * (e.g. "projects/12345").
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * Timestamp to take an asset snapshot. This can only be current or past
     * time. If not specified, the current time will be used. Due to delays in
     * resource data collection and indexing, there is a volatile window during
     * which running the same query may get different results.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 2;</code>
     */
    private $read_time = null;
    /**
     * A list of asset types to take a snapshot for. Example:
     * "google.compute.disk". If specified, only matching assets will be returned.
     *
     * Generated from protobuf field <code>repeated string asset_types = 3;</code>
     */
    private $asset_types;
    /**
     * A list of asset content types. If specified, only matching content will be
     * returned. Otherwise, no content but the asset name will be returned.
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1beta1.ContentType content_types = 4;</code>
     */
    private $content_types;
    /**
     * Required. Output configuration indicating where the results will be output
     * to. All results will be in newline delimited JSON format.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1beta1.OutputConfig output_config = 5;</code>
     */
    private $output_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The relative name of the root asset. It can only be an
     *           organization number (e.g. "organizations/123") or a project number
     *           (e.g. "projects/12345").
     *     @type \Google\Protobuf\Timestamp $read_time
     *           Timestamp to take an asset snapshot. This can only be current or past
     *           time. If not specified, the current time will be used. Due to delays in
     *           resource data collection and indexing, there is a volatile window during
     *           which running the same query may get different results.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $asset_types
     *           A list of asset types to take a snapshot for. Example:
     *           "google.compute.disk". If specified, only matching assets will be returned.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $content_types
     *           A list of asset content types. If specified, only matching content will be
     *           returned. Otherwise, no content but the asset name will be returned.
     *     @type \Google\Cloud\Asset\V1beta1\OutputConfig $output_config
     *           Required. Output configuration indicating where the results will be output
     *           to. All results will be in newline delimited JSON format.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1Beta1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The relative name of the root asset. It can only be an
     * organization number (e.g. "organizations/123") or a project number
     * (e.g. "projects/12345").
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The relative name of the root asset. It can only be an
     * organization number (e.g. "organizations/123") or a project number
     * (e.g. "projects/12345").
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Timestamp to take an asset snapshot. This can only be current or past
     * time. If not specified, the current time will be used. Due to delays in
     * resource data collection and indexing, there is a volatile window during
     * which running the same query may get different results.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 2;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getReadTime()
    {
        return $this->read_time;
    }

    /**
     * Timestamp to take an asset snapshot. This can only be current or past
     * time. If not specified, the current time will be used. Due to delays in
     * resource data collection and indexing, there is a volatile window during
     * which running the same query may get different results.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setReadTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->read_time = $var;

        return $this;
    }

    /**
     * A list of asset types to take a snapshot for. Example:
     * "google.compute.disk". If specified, only matching assets will be returned.
     *
     * Generated from protobuf field <code>repeated string asset_types = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAssetTypes()
    {
        return $this->asset_types;
    }

    /**
     * A list of asset types to take a snapshot for. Example:
     * "google.compute.disk". If specified, only matching assets will be returned.
     *
     * Generated from protobuf field <code>repeated string asset_types = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAssetTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->asset_types = $arr;

        return $this;
    }

    /**
     * A list of asset content types. If specified, only matching content will be
     * returned. Otherwise, no content but the asset name will be returned.
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1beta1.ContentType content_types = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getContentTypes()
    {
        return $this->content_types;
    }

    /**
     * A list of asset content types. If specified, only matching content will be
     * returned. Otherwise, no content but the asset name will be returned.
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1beta1.ContentType content_types = 4;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setContentTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\Asset\V1beta1\ContentType::class);
        $this->content_types = $arr;

        return $this;
    }

    /**
     * Required. Output configuration indicating where the results will be output
     * to. All results will be in newline delimited JSON format.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1beta1.OutputConfig output_config = 5;</code>
     * @return \Google\Cloud\Asset\V1beta1\OutputConfig
     */
    public function getOutputConfig()
    {
        return $this->output_config;
    }

    /**
     * Required. Output configuration indicating where the results will be output
     * to. All results will be in newline delimited JSON format.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1beta1.OutputConfig output_config = 5;</code>
     * @param \Google\Cloud\Asset\V1beta1\OutputConfig $var
     * @return $this
     */
    public function setOutputConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1beta1\OutputConfig::class);
        $this->output_config = $var;

        return $this;
    }

}

