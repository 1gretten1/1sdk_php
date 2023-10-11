/**
 * one_msg_waba_sdk
 * [1MSG.IO](https://1msg.io/) is the perfect WhatsApp management tool for your business. With us you get full access to the official Whatsapp API/webhooks.  Every API request must contain an Authorize HTTP header with a token.  This is your channel token, which can be found in your channel project on your profile page. Please do not give the token to anyone or post it publicly.  The authorization token must be added to each request in the GET parameter 'token' and always passed to query string (?token={your_token}). Parameters in GET queries pass query string. Parameters in POST requests — through the JSON-encoded request body.   All 'send' methods (except /sendTemplate) will only work when the dialog session with the user is open. Some of our solutions simplify and avoid such limitations, but we urge you to pay more attention to this detail
 *
 * The version of the OpenAPI document: 2.39.0
 * Contact: hello@1msg.io
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 *
 */


import ApiClient from "../ApiClient";
import AddTemplateRequest from '../model/AddTemplateRequest';
import GetMe401Response from '../model/GetMe401Response';
import GetTemplates from '../model/GetTemplates';
import RemoveTemplateRequest from '../model/RemoveTemplateRequest';
import SendMessageStatus from '../model/SendMessageStatus';
import SendTemplateRequest from '../model/SendTemplateRequest';
import SetMe from '../model/SetMe';

/**
* Templates service.
* @module api/TemplatesApi
* @version 2.39.0
*/
export default class TemplatesApi {

    /**
    * Constructs a new TemplatesApi. 
    * @alias module:api/TemplatesApi
    * @class
    * @param {module:ApiClient} [apiClient] Optional API client implementation to use,
    * default to {@link module:ApiClient#instance} if unspecified.
    */
    constructor(apiClient) {
        this.apiClient = apiClient || ApiClient.instance;
    }



    /**
     * Create template
     * Create new template for sending.
     * @param {module:model/AddTemplateRequest} addTemplateRequest 
     * @return {Promise} a {@link https://www.promisejs.org/|Promise}, with an object containing data of type {@link Object} and HTTP response
     */
    addTemplateWithHttpInfo(addTemplateRequest) {
      let postBody = addTemplateRequest;
      // verify the required parameter 'addTemplateRequest' is set
      if (addTemplateRequest === undefined || addTemplateRequest === null) {
        throw new Error("Missing the required parameter 'addTemplateRequest' when calling addTemplate");
      }

      let pathParams = {
      };
      let queryParams = {
      };
      let headerParams = {
      };
      let formParams = {
      };

      let authNames = ['token'];
      let contentTypes = ['application/x-www-form-urlencoded', 'application/json'];
      let accepts = ['application/json'];
      let returnType = Object;
      return this.apiClient.callApi(
        '/addTemplate', 'POST',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, null
      );
    }

    /**
     * Create template
     * Create new template for sending.
     * @param {module:model/AddTemplateRequest} addTemplateRequest 
     * @return {Promise} a {@link https://www.promisejs.org/|Promise}, with data of type {@link Object}
     */
    addTemplate(addTemplateRequest) {
      return this.addTemplateWithHttpInfo(addTemplateRequest)
        .then(function(response_and_data) {
          return response_and_data.data;
        });
    }


    /**
     * Remove template
     * Deleted template can not be restored.
     * @param {module:model/RemoveTemplateRequest} removeTemplateRequest 
     * @return {Promise} a {@link https://www.promisejs.org/|Promise}, with an object containing data of type {@link module:model/SetMe} and HTTP response
     */
    removeTemplateWithHttpInfo(removeTemplateRequest) {
      let postBody = removeTemplateRequest;
      // verify the required parameter 'removeTemplateRequest' is set
      if (removeTemplateRequest === undefined || removeTemplateRequest === null) {
        throw new Error("Missing the required parameter 'removeTemplateRequest' when calling removeTemplate");
      }

      let pathParams = {
      };
      let queryParams = {
      };
      let headerParams = {
      };
      let formParams = {
      };

      let authNames = ['token'];
      let contentTypes = ['application/x-www-form-urlencoded', 'application/json'];
      let accepts = ['application/json'];
      let returnType = SetMe;
      return this.apiClient.callApi(
        '/removeTemplate', 'POST',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, null
      );
    }

    /**
     * Remove template
     * Deleted template can not be restored.
     * @param {module:model/RemoveTemplateRequest} removeTemplateRequest 
     * @return {Promise} a {@link https://www.promisejs.org/|Promise}, with data of type {@link module:model/SetMe}
     */
    removeTemplate(removeTemplateRequest) {
      return this.removeTemplateWithHttpInfo(removeTemplateRequest)
        .then(function(response_and_data) {
          return response_and_data.data;
        });
    }


    /**
     * Send Template Message
     * Send Template Message to a new or existing chat. Only one of two parameters is needed to determine the destination - chatId or phone.  Example:  {\"template\":\"template_name\",\"language\":{\"policy\":\"deterministic\",\"code\":\"en\"},\"namespace\":\"namespace_id\",\"params\":[{\"type\":\"header\",\"parameters\":[{\"type\":\"image\",\"image\": {\"link\":\"https://...\"}}]},{\"type\":\"body\",\"parameters\":[{\"type\":\"text\",\"text\":\"test\"}]}],\"phone\":\"556123122026\"}
     * @param {module:model/SendTemplateRequest} sendTemplateRequest 
     * @return {Promise} a {@link https://www.promisejs.org/|Promise}, with an object containing data of type {@link module:model/SendMessageStatus} and HTTP response
     */
    sendTemplateWithHttpInfo(sendTemplateRequest) {
      let postBody = sendTemplateRequest;
      // verify the required parameter 'sendTemplateRequest' is set
      if (sendTemplateRequest === undefined || sendTemplateRequest === null) {
        throw new Error("Missing the required parameter 'sendTemplateRequest' when calling sendTemplate");
      }

      let pathParams = {
      };
      let queryParams = {
      };
      let headerParams = {
      };
      let formParams = {
      };

      let authNames = ['token'];
      let contentTypes = ['application/x-www-form-urlencoded', 'application/json'];
      let accepts = ['application/json'];
      let returnType = SendMessageStatus;
      return this.apiClient.callApi(
        '/sendTemplate', 'POST',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, null
      );
    }

    /**
     * Send Template Message
     * Send Template Message to a new or existing chat. Only one of two parameters is needed to determine the destination - chatId or phone.  Example:  {\"template\":\"template_name\",\"language\":{\"policy\":\"deterministic\",\"code\":\"en\"},\"namespace\":\"namespace_id\",\"params\":[{\"type\":\"header\",\"parameters\":[{\"type\":\"image\",\"image\": {\"link\":\"https://...\"}}]},{\"type\":\"body\",\"parameters\":[{\"type\":\"text\",\"text\":\"test\"}]}],\"phone\":\"556123122026\"}
     * @param {module:model/SendTemplateRequest} sendTemplateRequest 
     * @return {Promise} a {@link https://www.promisejs.org/|Promise}, with data of type {@link module:model/SendMessageStatus}
     */
    sendTemplate(sendTemplateRequest) {
      return this.sendTemplateWithHttpInfo(sendTemplateRequest)
        .then(function(response_and_data) {
          return response_and_data.data;
        });
    }


    /**
     * Get templates list
     * 
     * @return {Promise} a {@link https://www.promisejs.org/|Promise}, with an object containing data of type {@link module:model/GetTemplates} and HTTP response
     */
    templatesListWithHttpInfo() {
      let postBody = null;

      let pathParams = {
      };
      let queryParams = {
      };
      let headerParams = {
      };
      let formParams = {
      };

      let authNames = ['token'];
      let contentTypes = [];
      let accepts = ['application/json'];
      let returnType = GetTemplates;
      return this.apiClient.callApi(
        '/templates', 'GET',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, null
      );
    }

    /**
     * Get templates list
     * 
     * @return {Promise} a {@link https://www.promisejs.org/|Promise}, with data of type {@link module:model/GetTemplates}
     */
    templatesList() {
      return this.templatesListWithHttpInfo()
        .then(function(response_and_data) {
          return response_and_data.data;
        });
    }


}