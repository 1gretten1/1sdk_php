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

import ApiClient from '../ApiClient';
import TemplateComponentsPropInnerButtonsInner from './TemplateComponentsPropInnerButtonsInner';

/**
 * The TemplateComponentsPropInner model module.
 * @module model/TemplateComponentsPropInner
 * @version 2.39.0
 */
class TemplateComponentsPropInner {
    /**
     * Constructs a new <code>TemplateComponentsPropInner</code>.
     * @alias module:model/TemplateComponentsPropInner
     */
    constructor() { 
        
        TemplateComponentsPropInner.initialize(this);
    }

    /**
     * Initializes the fields of this object.
     * This method is used by the constructors of any subclasses, in order to implement multiple inheritance (mix-ins).
     * Only for internal use.
     */
    static initialize(obj) { 
    }

    /**
     * Constructs a <code>TemplateComponentsPropInner</code> from a plain JavaScript object, optionally creating a new instance.
     * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
     * @param {Object} data The plain JavaScript object bearing properties of interest.
     * @param {module:model/TemplateComponentsPropInner} obj Optional instance to populate.
     * @return {module:model/TemplateComponentsPropInner} The populated <code>TemplateComponentsPropInner</code> instance.
     */
    static constructFromObject(data, obj) {
        if (data) {
            obj = obj || new TemplateComponentsPropInner();

            if (data.hasOwnProperty('type')) {
                obj['type'] = ApiClient.convertToType(data['type'], 'String');
            }
            if (data.hasOwnProperty('format')) {
                obj['format'] = ApiClient.convertToType(data['format'], 'String');
            }
            if (data.hasOwnProperty('text')) {
                obj['text'] = ApiClient.convertToType(data['text'], 'String');
            }
            if (data.hasOwnProperty('example')) {
                obj['example'] = ApiClient.convertToType(data['example'], Object);
            }
            if (data.hasOwnProperty('buttons')) {
                obj['buttons'] = ApiClient.convertToType(data['buttons'], [TemplateComponentsPropInnerButtonsInner]);
            }
        }
        return obj;
    }

    /**
     * Validates the JSON data with respect to <code>TemplateComponentsPropInner</code>.
     * @param {Object} data The plain JavaScript object bearing properties of interest.
     * @return {boolean} to indicate whether the JSON data is valid with respect to <code>TemplateComponentsPropInner</code>.
     */
    static validateJSON(data) {
        // ensure the json data is a string
        if (data['type'] && !(typeof data['type'] === 'string' || data['type'] instanceof String)) {
            throw new Error("Expected the field `type` to be a primitive type in the JSON string but got " + data['type']);
        }
        // ensure the json data is a string
        if (data['format'] && !(typeof data['format'] === 'string' || data['format'] instanceof String)) {
            throw new Error("Expected the field `format` to be a primitive type in the JSON string but got " + data['format']);
        }
        // ensure the json data is a string
        if (data['text'] && !(typeof data['text'] === 'string' || data['text'] instanceof String)) {
            throw new Error("Expected the field `text` to be a primitive type in the JSON string but got " + data['text']);
        }
        if (data['buttons']) { // data not null
            // ensure the json data is an array
            if (!Array.isArray(data['buttons'])) {
                throw new Error("Expected the field `buttons` to be an array in the JSON data but got " + data['buttons']);
            }
            // validate the optional field `buttons` (array)
            for (const item of data['buttons']) {
                TemplateComponentsPropInnerButtonsInner.validateJSON(item);
            };
        }

        return true;
    }


}



/**
 * @member {module:model/TemplateComponentsPropInner.TypeEnum} type
 */
TemplateComponentsPropInner.prototype['type'] = undefined;

/**
 * Only for HEADER type
 * @member {module:model/TemplateComponentsPropInner.FormatEnum} format
 */
TemplateComponentsPropInner.prototype['format'] = undefined;

/**
 * @member {String} text
 */
TemplateComponentsPropInner.prototype['text'] = undefined;

/**
 * @member {Object} example
 */
TemplateComponentsPropInner.prototype['example'] = undefined;

/**
 * @member {Array.<module:model/TemplateComponentsPropInnerButtonsInner>} buttons
 */
TemplateComponentsPropInner.prototype['buttons'] = undefined;





/**
 * Allowed values for the <code>type</code> property.
 * @enum {String}
 * @readonly
 */
TemplateComponentsPropInner['TypeEnum'] = {

    /**
     * value: "BODY"
     * @const
     */
    "BODY": "BODY",

    /**
     * value: "HEADER"
     * @const
     */
    "HEADER": "HEADER",

    /**
     * value: "FOOTER"
     * @const
     */
    "FOOTER": "FOOTER",

    /**
     * value: "BUTTONS"
     * @const
     */
    "BUTTONS": "BUTTONS"
};


/**
 * Allowed values for the <code>format</code> property.
 * @enum {String}
 * @readonly
 */
TemplateComponentsPropInner['FormatEnum'] = {

    /**
     * value: "TEXT"
     * @const
     */
    "TEXT": "TEXT",

    /**
     * value: "IMAGE"
     * @const
     */
    "IMAGE": "IMAGE",

    /**
     * value: "DOCUMENT"
     * @const
     */
    "DOCUMENT": "DOCUMENT",

    /**
     * value: "VIDEO"
     * @const
     */
    "VIDEO": "VIDEO"
};



export default TemplateComponentsPropInner;
