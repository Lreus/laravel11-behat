<?php

namespace Tests\behat\features\home;

use Soulcodex\Behat\Addon\Context;

class HomeContext extends Context
{
    /**
     * @Given I go to home page
     * @When je visite la page d'accueil
     */
    public function iGoToHomePage()
    {
        $this->visitUrl('http://127.0.0.1:8000');
    }

    /**
     * @Then I should see the message :message
     * @Then le message :message s'affiche
     */
    public function iShouldSeeTheMessage($message)
    {
        $hasContent = $this->session()->getPage()->hasContent($message);

        self::assertEquals(
            true,
            $hasContent,
            "Unable to find {$message}"
        );
    }
}
