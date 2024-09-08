<?php

namespace Tests\Behat;

use Behat\Behat\Hook\Scope\AfterScenarioScope;
use Behat\Behat\Hook\Scope\BeforeScenarioScope;
use Illuminate\Support\Facades\DB;

trait AllowTransactionTrait
{
    /**
     * @BeforeScenario
     */
    public static function startTransaction(BeforeScenarioScope $scope): void
    {
        DB::beginTransaction();
    }

    /**
     * @AfterScenario
     */
    public function rollback(AfterScenarioScope $scope): void
    {
        DB::rollBack();
    }
}
