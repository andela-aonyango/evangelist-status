<?php
/**
 * @file     EvangelistStatus.php
 * This file is a class that sets a developer's evangelist status based on
 * public repos
 * @package  Lib\EvangelistStatus
 * @author   andrew <andrew.onyango@andela.com>
 * @license  MIT => https://opensource.org/licenses/MIT
 */
namespace Lib;

use Lib\GitHubAPI;

/**
 * @category Class
 * @package  Lib\EvangelistStatus
 */
class EvangelistStatus
{
    private $_status;

    public function __construct($username)
    {
        $repos = GitHubAPI::getNumberOfRepos($username);
        $this->_setStatus($repos);
    }


    /**
     * Sets the developer's evangelist status
     *
     * @param mixed $repos The number of public repos a developer has on GitHub
     */
    private function _setStatus($repos)
    {
        if ($repos >= 5 && $repos <= 10) {
            $this->_status = "Prodigal Junior Evangelist";
        } elseif ($repos >=11 && $repos <= 20) {
            $this->_status = "Associate Evangelist";
        } elseif ($repos > 20) {
            $this->_status = "Senior Evangelist";
        } else {
            $this->_status = "You call yourself a programmer?!!";
        }
    }

    /**
     * Returns the developer's evangelist status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->_status;
    }
}
