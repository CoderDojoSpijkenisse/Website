<?php

namespace Coderdojo\WebsiteBundle\Service;

use CL\Slack\Payload\ChatPostMessagePayload;
use CL\Slack\Payload\PayloadResponseInterface;
use CL\Slack\Transport\ApiClient;
use Symfony\Component\HttpKernel\Kernel;

class SlackService
{
    /**
     * @var ApiClient
     */
    private $client;

    /**
     * @var Kernel
     */
    private $kernel;

    /**
     * SlackService constructor.
     * @param ApiClient $client
     * @param Kernel $kernel
     */
    public function __construct(ApiClient $client, Kernel $kernel)
    {
        $this->client = $client;
        $this->kernel = $kernel;
    }


    /**
     * @param string $channel
     * @param string $message
     * @throws \CL\Slack\Exception\SlackException
     */
    public function sendToChannel($channel, $message)
    {
        if ('prod' !== $this->kernel->getEnvironment()) {
            return;
        }

        $payload = new ChatPostMessagePayload();
        $payload->setChannel($channel);
        $payload->setText($message);
        $payload->setUsername('DojoBot');
        $payload->setIconEmoji('coderdojo');

        $this->client->send($payload);

        return;
    }
}