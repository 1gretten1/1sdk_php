# OneMsgWabaSdk.Message

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **String** | unique id | [optional] 
**body** | **String** | text message for type \&quot;chat\&quot;, or link to download the file for \&quot;ptt\&quot;, \&quot;image\&quot;, \&quot;audio\&quot;, \&quot;video\&quot; and \&quot;document\&quot;, or latitude and longitude for \&quot;location\&quot;, or message \&quot;[Call]\&quot; for \&quot;call_log\&quot; | [optional] 
**fromMe** | **Boolean** | true - outgoing, false - incoming | [optional] 
**self** | **Number** | 1 - generated by api, 0 - generated by app | [optional] 
**isForwarded** | **Boolean** | true - forwarded message, false - direct message | [optional] 
**author** | **String** | Author ID of the message | [optional] 
**time** | **Number** | send time, unix timestamp | [optional] 
**chatId** | **String** | chat ID | [optional] 
**type** | **String** | type of the message | [optional] 
**senderName** | **String** | Sender name | [optional] 
**caption** | **String** | File caption or filename | [optional] 
**quotedMsgId** | **String** | ID of quoted message | [optional] 



## Enum: TypeEnum


* `chat` (value: `"chat"`)

* `interactive` (value: `"interactive"`)

* `image` (value: `"image"`)

* `video` (value: `"video"`)

* `document` (value: `"document"`)

* `audio` (value: `"audio"`)

* `sticker` (value: `"sticker"`)

* `voice` (value: `"voice"`)



