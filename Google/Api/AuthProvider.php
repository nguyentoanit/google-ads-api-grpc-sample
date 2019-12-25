<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/auth.proto

namespace Google\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for an authentication provider, including support for
 * [JSON Web Token
 * (JWT)](https://tools.ietf.org/html/draft-ietf-oauth-json-web-token-32).
 *
 * Generated from protobuf message <code>google.api.AuthProvider</code>
 */
class AuthProvider extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique identifier of the auth provider. It will be referred to by
     * `AuthRequirement.provider_id`.
     * Example: "bookstore_auth".
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Identifies the principal that issued the JWT. See
     * https://tools.ietf.org/html/draft-ietf-oauth-json-web-token-32#section-4.1.1
     * Usually a URL or an email address.
     * Example: https://securetoken.google.com
     * Example: 1234567-compute&#64;developer.gserviceaccount.com
     *
     * Generated from protobuf field <code>string issuer = 2;</code>
     */
    protected $issuer = '';
    /**
     * URL of the provider's public key set to validate signature of the JWT. See
     * [OpenID
     * Discovery](https://openid.net/specs/openid-connect-discovery-1_0.html#ProviderMetadata).
     * Optional if the key set document:
     *  - can be retrieved from
     *    [OpenID
     *    Discovery](https://openid.net/specs/openid-connect-discovery-1_0.html of
     *    the issuer.
     *  - can be inferred from the email domain of the issuer (e.g. a Google
     *  service account).
     * Example: https://www.googleapis.com/oauth2/v1/certs
     *
     * Generated from protobuf field <code>string jwks_uri = 3;</code>
     */
    protected $jwks_uri = '';
    /**
     * The list of JWT
     * [audiences](https://tools.ietf.org/html/draft-ietf-oauth-json-web-token-32#section-4.1.3).
     * that are allowed to access. A JWT containing any of these audiences will
     * be accepted. When this setting is absent, only JWTs with audience
     * "https://[Service_name][google.api.Service.name]/[API_name][google.protobuf.Api.name]"
     * will be accepted. For example, if no audiences are in the setting,
     * LibraryService API will only accept JWTs with the following audience
     * "https://library-example.googleapis.com/google.example.library.v1.LibraryService".
     * Example:
     *     audiences: bookstore_android.apps.googleusercontent.com,
     *                bookstore_web.apps.googleusercontent.com
     *
     * Generated from protobuf field <code>string audiences = 4;</code>
     */
    protected $audiences = '';
    /**
     * Redirect URL if JWT token is required but not present or is expired.
     * Implement authorizationUrl of securityDefinitions in OpenAPI spec.
     *
     * Generated from protobuf field <code>string authorization_url = 5;</code>
     */
    protected $authorization_url = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           The unique identifier of the auth provider. It will be referred to by
     *           `AuthRequirement.provider_id`.
     *           Example: "bookstore_auth".
     *     @type string $issuer
     *           Identifies the principal that issued the JWT. See
     *           https://tools.ietf.org/html/draft-ietf-oauth-json-web-token-32#section-4.1.1
     *           Usually a URL or an email address.
     *           Example: https://securetoken.google.com
     *           Example: 1234567-compute&#64;developer.gserviceaccount.com
     *     @type string $jwks_uri
     *           URL of the provider's public key set to validate signature of the JWT. See
     *           [OpenID
     *           Discovery](https://openid.net/specs/openid-connect-discovery-1_0.html#ProviderMetadata).
     *           Optional if the key set document:
     *            - can be retrieved from
     *              [OpenID
     *              Discovery](https://openid.net/specs/openid-connect-discovery-1_0.html of
     *              the issuer.
     *            - can be inferred from the email domain of the issuer (e.g. a Google
     *            service account).
     *           Example: https://www.googleapis.com/oauth2/v1/certs
     *     @type string $audiences
     *           The list of JWT
     *           [audiences](https://tools.ietf.org/html/draft-ietf-oauth-json-web-token-32#section-4.1.3).
     *           that are allowed to access. A JWT containing any of these audiences will
     *           be accepted. When this setting is absent, only JWTs with audience
     *           "https://[Service_name][google.api.Service.name]/[API_name][google.protobuf.Api.name]"
     *           will be accepted. For example, if no audiences are in the setting,
     *           LibraryService API will only accept JWTs with the following audience
     *           "https://library-example.googleapis.com/google.example.library.v1.LibraryService".
     *           Example:
     *               audiences: bookstore_android.apps.googleusercontent.com,
     *                          bookstore_web.apps.googleusercontent.com
     *     @type string $authorization_url
     *           Redirect URL if JWT token is required but not present or is expired.
     *           Implement authorizationUrl of securityDefinitions in OpenAPI spec.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Auth::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique identifier of the auth provider. It will be referred to by
     * `AuthRequirement.provider_id`.
     * Example: "bookstore_auth".
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The unique identifier of the auth provider. It will be referred to by
     * `AuthRequirement.provider_id`.
     * Example: "bookstore_auth".
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Identifies the principal that issued the JWT. See
     * https://tools.ietf.org/html/draft-ietf-oauth-json-web-token-32#section-4.1.1
     * Usually a URL or an email address.
     * Example: https://securetoken.google.com
     * Example: 1234567-compute&#64;developer.gserviceaccount.com
     *
     * Generated from protobuf field <code>string issuer = 2;</code>
     * @return string
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * Identifies the principal that issued the JWT. See
     * https://tools.ietf.org/html/draft-ietf-oauth-json-web-token-32#section-4.1.1
     * Usually a URL or an email address.
     * Example: https://securetoken.google.com
     * Example: 1234567-compute&#64;developer.gserviceaccount.com
     *
     * Generated from protobuf field <code>string issuer = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setIssuer($var)
    {
        GPBUtil::checkString($var, True);
        $this->issuer = $var;

        return $this;
    }

    /**
     * URL of the provider's public key set to validate signature of the JWT. See
     * [OpenID
     * Discovery](https://openid.net/specs/openid-connect-discovery-1_0.html#ProviderMetadata).
     * Optional if the key set document:
     *  - can be retrieved from
     *    [OpenID
     *    Discovery](https://openid.net/specs/openid-connect-discovery-1_0.html of
     *    the issuer.
     *  - can be inferred from the email domain of the issuer (e.g. a Google
     *  service account).
     * Example: https://www.googleapis.com/oauth2/v1/certs
     *
     * Generated from protobuf field <code>string jwks_uri = 3;</code>
     * @return string
     */
    public function getJwksUri()
    {
        return $this->jwks_uri;
    }

    /**
     * URL of the provider's public key set to validate signature of the JWT. See
     * [OpenID
     * Discovery](https://openid.net/specs/openid-connect-discovery-1_0.html#ProviderMetadata).
     * Optional if the key set document:
     *  - can be retrieved from
     *    [OpenID
     *    Discovery](https://openid.net/specs/openid-connect-discovery-1_0.html of
     *    the issuer.
     *  - can be inferred from the email domain of the issuer (e.g. a Google
     *  service account).
     * Example: https://www.googleapis.com/oauth2/v1/certs
     *
     * Generated from protobuf field <code>string jwks_uri = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setJwksUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->jwks_uri = $var;

        return $this;
    }

    /**
     * The list of JWT
     * [audiences](https://tools.ietf.org/html/draft-ietf-oauth-json-web-token-32#section-4.1.3).
     * that are allowed to access. A JWT containing any of these audiences will
     * be accepted. When this setting is absent, only JWTs with audience
     * "https://[Service_name][google.api.Service.name]/[API_name][google.protobuf.Api.name]"
     * will be accepted. For example, if no audiences are in the setting,
     * LibraryService API will only accept JWTs with the following audience
     * "https://library-example.googleapis.com/google.example.library.v1.LibraryService".
     * Example:
     *     audiences: bookstore_android.apps.googleusercontent.com,
     *                bookstore_web.apps.googleusercontent.com
     *
     * Generated from protobuf field <code>string audiences = 4;</code>
     * @return string
     */
    public function getAudiences()
    {
        return $this->audiences;
    }

    /**
     * The list of JWT
     * [audiences](https://tools.ietf.org/html/draft-ietf-oauth-json-web-token-32#section-4.1.3).
     * that are allowed to access. A JWT containing any of these audiences will
     * be accepted. When this setting is absent, only JWTs with audience
     * "https://[Service_name][google.api.Service.name]/[API_name][google.protobuf.Api.name]"
     * will be accepted. For example, if no audiences are in the setting,
     * LibraryService API will only accept JWTs with the following audience
     * "https://library-example.googleapis.com/google.example.library.v1.LibraryService".
     * Example:
     *     audiences: bookstore_android.apps.googleusercontent.com,
     *                bookstore_web.apps.googleusercontent.com
     *
     * Generated from protobuf field <code>string audiences = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setAudiences($var)
    {
        GPBUtil::checkString($var, True);
        $this->audiences = $var;

        return $this;
    }

    /**
     * Redirect URL if JWT token is required but not present or is expired.
     * Implement authorizationUrl of securityDefinitions in OpenAPI spec.
     *
     * Generated from protobuf field <code>string authorization_url = 5;</code>
     * @return string
     */
    public function getAuthorizationUrl()
    {
        return $this->authorization_url;
    }

    /**
     * Redirect URL if JWT token is required but not present or is expired.
     * Implement authorizationUrl of securityDefinitions in OpenAPI spec.
     *
     * Generated from protobuf field <code>string authorization_url = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setAuthorizationUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->authorization_url = $var;

        return $this;
    }

}

