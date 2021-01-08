/*
 * Copyright 2010-2016 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License.
 * A copy of the License is located at
 *
 *  http://aws.amazon.com/apache2.0
 *
 * or in the "license" file accompanying this file. This file is distributed
 * on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either
 * express or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 */

var apigClientFactory = {};
apigClientFactory.newClient = function (config) {
    var apigClient = {};
    if (config === undefined) {
        config = {
            accessKey: "",
            secretKey: "",
            sessionToken: "",
            region: "",
            apiKey: undefined,
            defaultContentType: "application/json",
            defaultAcceptType: "application/json",
        };
    }
    if (config.accessKey === undefined) {
        config.accessKey = "";
    }
    if (config.secretKey === undefined) {
        config.secretKey = "";
    }
    if (config.apiKey === undefined) {
        config.apiKey = "";
    }
    if (config.sessionToken === undefined) {
        config.sessionToken = "";
    }
    if (config.region === undefined) {
        config.region = "us-east-1";
    }
    //If defaultContentType is not defined then default to application/json
    if (config.defaultContentType === undefined) {
        config.defaultContentType = "application/json";
    }
    //If defaultAcceptType is not defined then default to application/json
    if (config.defaultAcceptType === undefined) {
        config.defaultAcceptType = "application/json";
    }

    // extract endpoint and path from url
    var invokeUrl = "https://hangman.goprogram.co.uk";
    var endpoint = /(^https?:\/\/[^\/]+)/g.exec(invokeUrl)[1];
    var pathComponent = invokeUrl.substring(endpoint.length);

    var sigV4ClientConfig = {
        accessKey: config.accessKey,
        secretKey: config.secretKey,
        sessionToken: config.sessionToken,
        serviceName: "execute-api",
        region: config.region,
        endpoint: endpoint,
        defaultContentType: config.defaultContentType,
        defaultAcceptType: config.defaultAcceptType,
    };

    var authType = "NONE";
    if (sigV4ClientConfig.accessKey !== undefined && sigV4ClientConfig.accessKey !== "" && sigV4ClientConfig.secretKey !== undefined && sigV4ClientConfig.secretKey !== "") {
        authType = "AWS_IAM";
    }

    var simpleHttpClientConfig = {
        endpoint: endpoint,
        defaultContentType: config.defaultContentType,
        defaultAcceptType: config.defaultAcceptType,
    };

    var apiGatewayClient = apiGateway.core.apiGatewayClientFactory.newClient(simpleHttpClientConfig, sigV4ClientConfig);

    apigClient.guess = function (clue, used) {
        params = {
            clue: clue.toLowerCase(),
        };
        if (used != "") {
            params.used = used.toLowerCase();
        }

        var guessGetRequest = {
            verb: "get".toUpperCase(),
            path: pathComponent + uritemplate("/guess").expand(apiGateway.core.utils.parseParametersToObject(params, Object.keys(params))),
            headers: "",
            queryParams: apiGateway.core.utils.parseParametersToObject(params, Object.keys(params)),
            body: "",
        };

        return apiGatewayClient.makeRequest(guessGetRequest, authType, {}, config.apiKey);
    };

    apigClient.update = function (word) {
        params = {
            word: word.toLowerCase(),
        };

        var updatePutRequest = {
            verb: "put".toUpperCase(),
            path: pathComponent + uritemplate("/update").expand(apiGateway.core.utils.parseParametersToObject(params, ["word"])),
            headers: "",
            queryParams: apiGateway.core.utils.parseParametersToObject(params, ["word"]),
            body: "",
        };

        return apiGatewayClient.makeRequest(updatePutRequest, authType, {}, config.apiKey);
    };

    return apigClient;
};