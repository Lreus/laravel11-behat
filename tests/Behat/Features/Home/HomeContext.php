<?php

namespace Tests\Behat\Features\Home;

use App\Models\Sentence;
use Soulcodex\Behat\Addon\Context;
use Tests\Behat\AllowTransactionTrait;

class HomeContext extends Context
{
    use AllowTransactionTrait;

    /**
     * @Given I go to home page
     * @When je visite la page d'accueil
     */
    public function iGoToHomePage(): void
    {
        $this->visitUrl('http://127.0.0.1:8000');
    }

    /**
     * @Then I should see the message :message
     * @Then le message :message s'affiche
     */
    public function iShouldSeeTheMessage(string $message): void
    {
        $hasContent = $this->session()->getPage()->hasContent($message);

        self::assertEquals(
            true,
            $hasContent,
            "Unable to find \"{$message}\""
        );
    }

    /**
     * @Given la citation de :arg1: :arg2 est enregitrée
     */
    public function givenAQuoteExists(string $author, string $quote): void
    {
        Sentence::factory()->create([
            'author' => $author,
            'value' => $quote,
        ]);
    }

    /**
     * @Given j'affiche la page des citations
     */
    public function whenIGetQuotes(): void
    {
        $this->visitUrl('http://127.0.0.1:8000/quotes');
    }

    /**
     * @Then je dois trouver la citation de :arg1: :arg2
     */
    public function assertQuoteFromAuthor(string $author, string $quote): void
    {
        $completeQuote = sprintf('%s, %s', $quote, $author);
        $doesContainQuote = $this->session()->getPage()->hasContent($completeQuote);

        self::assertEquals(
            true,
            $doesContainQuote,
            "Unable to find \"{$completeQuote}\"");
    }

}
