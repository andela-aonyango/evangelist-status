<?php

namespace Lib;

use Lib\GitHubAPI;

class EvangelistStatus
{
    private $status;

    public function __construct($username)
    {
        $repos = GitHubAPI::getNumberOfRepos($username);
        $this->setStatus($repos);
    }


    /**
     * Sets the developer's evangelist status
     *
     * @param mixed $repos The number of public repos a developer has on GitHub
     */
    private function setStatus($repos)
    {
        if ($repos >= 5 && $repos <= 10) {
            $this->status = "Prodigal Junior Evangelist";
        }
        elseif ($repos >=11 && $repos <= 20) {
            $this->status = "Associate Evangelist";
        }
        elseif ($repos > 20) {
            $this->status = "Senior Evangelist";
        }
        else {
            $this->status = "You call yourself a programmer?!!";
        }
    }

    /**
     * Returns the developer's evangelist status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
}
