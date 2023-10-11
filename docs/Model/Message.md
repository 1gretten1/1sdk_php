# # Message

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | unique id | [optional]
**body** | **string** | text message for type \&quot;chat\&quot;, or link to download the file for \&quot;ptt\&quot;, \&quot;image\&quot;, \&quot;audio\&quot;, \&quot;video\&quot; and \&quot;document\&quot;, or latitude and longitude for \&quot;location\&quot;, or message \&quot;[Call]\&quot; for \&quot;call_log\&quot; | [optional]
**from_me** | **bool** | true - outgoing, false - incoming | [optional]
**self** | **int** | 1 - generated by api, 0 - generated by app | [optional]
**is_forwarded** | **bool** | true - forwarded message, false - direct message | [optional]
**author** | **string** | Author ID of the message | [optional]
**time** | **int** | send time, unix timestamp | [optional]
**chat_id** | **string** | chat ID | [optional]
**type** | **string** | type of the message | [optional]
**sender_name** | **string** | Sender name | [optional]
**caption** | **string** | File caption or filename | [optional]
**quoted_msg_id** | **string** | ID of quoted message | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)