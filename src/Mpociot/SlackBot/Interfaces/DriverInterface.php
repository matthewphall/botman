<?php
/**
 * Created by PhpStorm.
 * User: marcel
 * Date: 28/11/2016
 * Time: 11:53
 */

namespace Mpociot\SlackBot\Interfaces;


use Mpociot\SlackBot\Message;
use Mpociot\SlackBot\Question;
use Symfony\Component\HttpFoundation\Request;

interface DriverInterface
{

    /**
     * Determine if the request is for this driver.
     *
     * @return bool
     */
    public function matchesRequest();

    /**
     * @param Request $request
     * @return void
     */
    public function buildPayload(Request $request);

    /**
     * Retrieve the chat message(s).
     *
     * @return array
     */
    public function getMessages();

    /**
     * @return bool
     */
    public function isBot();

    /**
     * @return Answer
     */
    public function getConversationAnswer();

    /**
     * @param string|Question $message
     * @param Message $matchingMessage
     * @param array $additionalParameters
     * @return $this
     */
    public function reply($message, $matchingMessage, $additionalParameters = []);
}