<?php

namespace Lib;

class GitHubAPI
{
    public function getNumberOfRepos($username)
    {
        $url = 'https://api.github.com/users/' . $username;
        $json = self::getGithubInfo($url);
        $obj = json_decode($json);

        return $obj->{'public_repos'};
    }

    private function getGithubInfo($url) {
        $curl_handle = curl_init();
        curl_setopt($curl_handle, CURLOPT_URL, $url);
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($curl_handle, CURLOPT_USERAGENT, "evangelist-status");
        $content = curl_exec($curl_handle);
        curl_close($curl_handle);
        return $content;
    }
}