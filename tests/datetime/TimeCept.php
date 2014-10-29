<?php 
$I = new DatetimeTester($scenario);
$I->wantTo('Test the time comparison module');

$t1 = date('H:i:s');                            // Today
$t2 = date('H:i:s', strtotime('+2 hours'));     // Today plus two hours

$I->seeTimeMatches($t1, $t1);
$I->dontSeeTimeMatches($t1, $t2);

$I->seeTimeInFuture(date('H:i:s', strtotime('+2 hours')));      // Today plus 2 hours
$I->dontSeeTimeInFuture(date('H:i:s', strtotime('-2 hours')));  // Today less 2 hours
$I->seeTimeInPast(date('H:i:s', strtotime('-2 hours')));        // Today less 2 hours
$I->dontSeeTimeInPast(date('H:i:s', strtotime('+2 hours')));    // Today plus 2 hours

$I->seeTimeIsInSecs(date('H:i:s', strtotime('+2 seconds')), 2);         // Today plus 2 seconds
$I->dontSeeTimeIsInSecs(date('H:i:s', strtotime('+4 seconds')), 2);     // Today plus 4 seconds
$I->seeTimeWasInSecs(date('H:i:s', strtotime('-2 seconds')), 2);        // Today less 2 seconds
$I->dontSeeTimeWasInSecs(date('H:i:s', strtotime('-4 seconds')), 2);    // Today less 4 seconds

$I->seeTimeIsInMins(date('H:i:s', strtotime('+2 minutes')), 2);         // Today plus 2 minutes
$I->dontSeeTimeIsInMins(date('H:i:s', strtotime('+4 minutes')), 2);     // Today plus 4 minutes
$I->seeTimeWasInMins(date('H:i:s', strtotime('-2 minutes')), 2);        // Today less 2 minutes
$I->dontSeeTimeWasInMins(date('H:i:s', strtotime('-4 minutes')), 2);    // Today less 4 minutes

$I->seeTimeIsInHours(date('H:i:s', strtotime('+2 hours')), 2);         // Today plus 2 hours
$I->dontSeeTimeIsInHours(date('H:i:s', strtotime('+4 hours')), 2);     // Today plus 4 hours
$I->seeTimeWasInHours(date('H:i:s', strtotime('-2 hours')), 2);        // Today less 2 hours
$I->dontSeeTimeWasInHours(date('H:i:s', strtotime('-4 hours')), 2);    // Today less 4 hours