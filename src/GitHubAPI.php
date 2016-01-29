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

/**
 * @category Class
 * @package  Lib\EvangelistStatus
 */
class GitHubAPI
{
    /**
     * Returns the number of public repos a developer has on GitHub
     *
     * @param  string $username GitHub username
     * @return mixed
     * @throws NullUserException
     */
    public function getNumberOfRepos($username)
    {
        if (empty($username) || empty(trim($username))) {
            throw new NullUserException("A username is required");
        }

        $url = 'https://api.github.com/users/' . $username;
        $json = self::_getGithubInfo($url, "evangelist-status");
        $obj = json_decode($json);

        return $obj->{'public_repos'};
    }

    /**
     * Returns the developer's public GitHub information in JSON
     *
     * @param  string $url       The URL to retrieve API information from
     * @param  string $useragent The user agent or app name required by GitHub
     * @return string
     */
    private function _getGithubInfo($url, $useragent) 
    {
        $curl_handle = curl_init();
        curl_setopt($curl_handle, CURLOPT_URL, $url);
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($curl_handle, CURLOPT_USERAGENT, $useragent);
        $content = curl_exec($curl_handle);
        curl_close($curl_handle);
        return $content;
    }
}
