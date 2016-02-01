<?php
/**
 * @file     GitHubAPI.php
 * This file is a class that retrieves GitHub API information
 * @package  Lib\EvangelistStatus
 * @author   andrew <andrew.onyango@andela.com>
 * @license  MIT => https://opensource.org/licenses/MIT
 */

namespace Lib;

use Lib\Exceptions\NullUserException;
use Lib\Exceptions\UserNotFoundException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

/**
 * @category Class
 * @package  Lib\EvangelistStatus
 */
class GitHubAPI
{
    /**
     * Returns the number of public repos a developer has on GitHub
     *
     * @param  string $username    GitHub username
     * @return mixed
     * @throws NullUserException
     */
    public static function getNumberOfRepos($username)
    {
        if (empty(trim($username))) {
            throw new NullUserException("A valid username is required.");
        }

        $githubInfo = self::getGithubInfo($username);
        $obj = json_decode($githubInfo);

        return $obj->{"public_repos"};
    }

    /**
     * Returns the developer's public GitHub information in JSON
     *
     * @param  string $username    The username whose information is to be retrieved
     * @return string
     * @throws UserNotFoundException
     */
    private static function getGithubInfo($username)
    {
        $client = new Client(["base_uri" => "https://api.github.com/users/"]);

        try {
            $response = $client->get($username);
            $info = $response->getBody(true);
        } catch (ClientException $e) {
            if ($e->getCode() === 404) {
                throw new UserNotFoundException(
                    "The user " . $username . " was not found on GitHub."
                );
            }
        }

        return $info;
    }
}
