<?php

namespace Tje3d\Telegram\Traits;

trait BotUpdates
{
    /**
     * Use this method to receive incoming updates using long polling (wiki). An Array of Update objects is returned.
     *
     * @param  integer $offset          Identifier of the first update to be returned. Must be greater by one than the highest among the identifiers of previously received updates. By default, updates starting with the earliest unconfirmed update are returned. An update is considered confirmed as soon as getUpdates is called with an offset higher than its update_id. The negative offset can be specified to retrieve updates starting from -offset update from the end of the updates queue. All previous updates will forgotten.
     * @param  integer $limit           Limits the number of updates to be retrieved. Values between 1—100 are accepted. Defaults to 100.
     * @param  integer $timeout         Timeout in seconds for long polling. Defaults to 0, i.e. usual short polling. Should be positive, short polling should be used for testing purposes only.
     * @param  array|string  $allowed_updates List the types of updates you want your bot to receive. For example, specify [“message”, “edited_channel_post”, “callback_query”] to only receive updates of these types. See Update for a complete list of available update types. Specify an empty list to receive all updates regardless of type (default). If not specified, the previous setting will be used. Please note that this parameter doesn't affect updates created before the call to the getUpdates, so unwanted updates may be received for a short period of time.
     */
    public function getUpdates($offset = 0, $limit = 100, $timeout = 0, $allowed_updates = null)
    {
        $body = [
            'offset'  => $offset,
            'limit'   => $limit,
            'timeout' => $timeout,
        ];

        if ($allowed_updates) {
            $body['allowed_updates'] = $allowed_updates;
        }

        return $this->request()->api('getUpdates')->body($body)->send();
    }

    /**
     * Use this method to specify a url and receive incoming updates via an outgoing webhook. Whenever there is an update for the bot, we will send an HTTPS POST request to the specified url, containing a JSON-serialized Update. In case of an unsuccessful request, we will give up after a reasonable amount of attempts. Returns true.
     * If you'd like to make sure that the Webhook request comes from Telegram, we recommend using a secret path in the URL, e.g. https://www.example.com/<token>. Since nobody else knows your bot‘s token, you can be pretty sure it’s us.
     * @param string  $url             HTTPS url to send updates to. Use an empty string to remove webhook integration
     * @param string  $certificate     Upload your public key certificate so that the root certificate in use can be checked. See our self-signed guide for details.
     * @param integer $max_connections Maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery, 1-100. Defaults to 40. Use lower values to limit the load on your bot‘s server, and higher values to increase your bot’s throughput.
     * @param array|string  $allowed_updates List the types of updates you want your bot to receive. For example, specify [“message”, “edited_channel_post”, “callback_query”] to only receive updates of these types. See Update for a complete list of available update types. Specify an empty list to receive all updates regardless of type (default). If not specified, the previous setting will be used. Please note that this parameter doesn't affect updates created before the call to the setWebhook, so unwanted updates may be received for a short period of time.
     */
    public function setWebhook($url, $certificate = null, $max_connections = 40, $allowed_updates = null)
    {
    	$request = $this->request();

        $body = [
            'url'             => $url,
            'max_connections' => $max_connections,
        ];

        if ($certificate) {
            $body['certificate'] = [
                'Content-type' => 'multipart/form-data',
                'name'         => pathinfo($certificate, PATHINFO_BASENAME),
                'contents'     => file_get_contents($certificate),
            ];
            $request->hasFile();
        }

        if ($allowed_updates) {
            $body['allowed_updates'] = $allowed_updates;
        }

        return $request->api('setWebhook')->body($body)->send();
    }

    /**
     * Use this method to remove webhook integration if you decide to switch back to getUpdates. Returns True on success. Requires no parameters.
     */
    public function deleteWebhook()
    {
    	return $this->request()->api('deleteWebhook')->send();
    }

    /**
     * Use this method to get current webhook status. Requires no parameters. On success, returns a WebhookInfo object. If the bot is using getUpdates, will return an object with the url field empty.
     */
    public function getWebhookInfo()
    {
    	return $this->request()->api('getWebhookInfo')->send();
    }
}
