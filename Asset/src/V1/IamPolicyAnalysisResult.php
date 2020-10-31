<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/assets.proto

namespace Google\Cloud\Asset\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * IAM Policy analysis result, consisting of one IAM policy binding and derived
 * access control lists.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.IamPolicyAnalysisResult</code>
 */
class IamPolicyAnalysisResult extends \Google\Protobuf\Internal\Message
{
    /**
     * The [full resource
     * name](https://cloud.google.com/asset-inventory/docs/resource-name-format)
     * of the resource to which the [iam_binding][google.cloud.asset.v1.IamPolicyAnalysisResult.iam_binding] policy attaches.
     *
     * Generated from protobuf field <code>string attached_resource_full_name = 1;</code>
     */
    private $attached_resource_full_name = '';
    /**
     * The Cloud IAM policy binding under analysis.
     *
     * Generated from protobuf field <code>.google.iam.v1.Binding iam_binding = 2;</code>
     */
    private $iam_binding = null;
    /**
     * The access control lists derived from the [iam_binding][google.cloud.asset.v1.IamPolicyAnalysisResult.iam_binding] that match or
     * potentially match resource and access selectors specified in the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1.IamPolicyAnalysisResult.AccessControlList access_control_lists = 3;</code>
     */
    private $access_control_lists;
    /**
     * The identity list derived from members of the [iam_binding][google.cloud.asset.v1.IamPolicyAnalysisResult.iam_binding] that match or
     * potentially match identity selector specified in the request.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisResult.IdentityList identity_list = 4;</code>
     */
    private $identity_list = null;
    /**
     * Represents whether all analyses on the [iam_binding][google.cloud.asset.v1.IamPolicyAnalysisResult.iam_binding] have successfully
     * finished.
     *
     * Generated from protobuf field <code>bool fully_explored = 5;</code>
     */
    private $fully_explored = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $attached_resource_full_name
     *           The [full resource
     *           name](https://cloud.google.com/asset-inventory/docs/resource-name-format)
     *           of the resource to which the [iam_binding][google.cloud.asset.v1.IamPolicyAnalysisResult.iam_binding] policy attaches.
     *     @type \Google\Cloud\Iam\V1\Binding $iam_binding
     *           The Cloud IAM policy binding under analysis.
     *     @type \Google\Cloud\Asset\V1\IamPolicyAnalysisResult\AccessControlList[]|\Google\Protobuf\Internal\RepeatedField $access_control_lists
     *           The access control lists derived from the [iam_binding][google.cloud.asset.v1.IamPolicyAnalysisResult.iam_binding] that match or
     *           potentially match resource and access selectors specified in the request.
     *     @type \Google\Cloud\Asset\V1\IamPolicyAnalysisResult\IdentityList $identity_list
     *           The identity list derived from members of the [iam_binding][google.cloud.asset.v1.IamPolicyAnalysisResult.iam_binding] that match or
     *           potentially match identity selector specified in the request.
     *     @type bool $fully_explored
     *           Represents whether all analyses on the [iam_binding][google.cloud.asset.v1.IamPolicyAnalysisResult.iam_binding] have successfully
     *           finished.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\Assets::initOnce();
        parent::__construct($data);
    }

    /**
     * The [full resource
     * name](https://cloud.google.com/asset-inventory/docs/resource-name-format)
     * of the resource to which the [iam_binding][google.cloud.asset.v1.IamPolicyAnalysisResult.iam_binding] policy attaches.
     *
     * Generated from protobuf field <code>string attached_resource_full_name = 1;</code>
     * @return string
     */
    public function getAttachedResourceFullName()
    {
        return $this->attached_resource_full_name;
    }

    /**
     * The [full resource
     * name](https://cloud.google.com/asset-inventory/docs/resource-name-format)
     * of the resource to which the [iam_binding][google.cloud.asset.v1.IamPolicyAnalysisResult.iam_binding] policy attaches.
     *
     * Generated from protobuf field <code>string attached_resource_full_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAttachedResourceFullName($var)
    {
        GPBUtil::checkString($var, True);
        $this->attached_resource_full_name = $var;

        return $this;
    }

    /**
     * The Cloud IAM policy binding under analysis.
     *
     * Generated from protobuf field <code>.google.iam.v1.Binding iam_binding = 2;</code>
     * @return \Google\Cloud\Iam\V1\Binding
     */
    public function getIamBinding()
    {
        return isset($this->iam_binding) ? $this->iam_binding : null;
    }

    public function hasIamBinding()
    {
        return isset($this->iam_binding);
    }

    public function clearIamBinding()
    {
        unset($this->iam_binding);
    }

    /**
     * The Cloud IAM policy binding under analysis.
     *
     * Generated from protobuf field <code>.google.iam.v1.Binding iam_binding = 2;</code>
     * @param \Google\Cloud\Iam\V1\Binding $var
     * @return $this
     */
    public function setIamBinding($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Iam\V1\Binding::class);
        $this->iam_binding = $var;

        return $this;
    }

    /**
     * The access control lists derived from the [iam_binding][google.cloud.asset.v1.IamPolicyAnalysisResult.iam_binding] that match or
     * potentially match resource and access selectors specified in the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1.IamPolicyAnalysisResult.AccessControlList access_control_lists = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAccessControlLists()
    {
        return $this->access_control_lists;
    }

    /**
     * The access control lists derived from the [iam_binding][google.cloud.asset.v1.IamPolicyAnalysisResult.iam_binding] that match or
     * potentially match resource and access selectors specified in the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1.IamPolicyAnalysisResult.AccessControlList access_control_lists = 3;</code>
     * @param \Google\Cloud\Asset\V1\IamPolicyAnalysisResult\AccessControlList[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAccessControlLists($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Asset\V1\IamPolicyAnalysisResult\AccessControlList::class);
        $this->access_control_lists = $arr;

        return $this;
    }

    /**
     * The identity list derived from members of the [iam_binding][google.cloud.asset.v1.IamPolicyAnalysisResult.iam_binding] that match or
     * potentially match identity selector specified in the request.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisResult.IdentityList identity_list = 4;</code>
     * @return \Google\Cloud\Asset\V1\IamPolicyAnalysisResult\IdentityList
     */
    public function getIdentityList()
    {
        return isset($this->identity_list) ? $this->identity_list : null;
    }

    public function hasIdentityList()
    {
        return isset($this->identity_list);
    }

    public function clearIdentityList()
    {
        unset($this->identity_list);
    }

    /**
     * The identity list derived from members of the [iam_binding][google.cloud.asset.v1.IamPolicyAnalysisResult.iam_binding] that match or
     * potentially match identity selector specified in the request.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisResult.IdentityList identity_list = 4;</code>
     * @param \Google\Cloud\Asset\V1\IamPolicyAnalysisResult\IdentityList $var
     * @return $this
     */
    public function setIdentityList($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1\IamPolicyAnalysisResult\IdentityList::class);
        $this->identity_list = $var;

        return $this;
    }

    /**
     * Represents whether all analyses on the [iam_binding][google.cloud.asset.v1.IamPolicyAnalysisResult.iam_binding] have successfully
     * finished.
     *
     * Generated from protobuf field <code>bool fully_explored = 5;</code>
     * @return bool
     */
    public function getFullyExplored()
    {
        return $this->fully_explored;
    }

    /**
     * Represents whether all analyses on the [iam_binding][google.cloud.asset.v1.IamPolicyAnalysisResult.iam_binding] have successfully
     * finished.
     *
     * Generated from protobuf field <code>bool fully_explored = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setFullyExplored($var)
    {
        GPBUtil::checkBool($var);
        $this->fully_explored = $var;

        return $this;
    }

}

