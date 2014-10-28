<?php 
$I = new DatetimeTester($scenario);
$I->wantTo('Test the date comparison module');

$d1 = date('r');                            // Today
$d2 = date('r', strtotime('+ 1 month'));    // Today plus one month

$I->seeDateMatches($d1, $d1);
$I->dontSeeDateMatches($d1, $d2);

$I->seeDateIsToday(date('r'));                                     // Today
$I->dontSeeDateIsToday(date('r', strtotime('+ 1 week')));          // Offset by one week
$I->seeDateIsTomorrow(date('r',  strtotime('+ 1 day')));           // Tomorrow
$I->dontSeeDateIsTomorrow(date('r', strtotime('+ 1 week')));       // Offset by one week
$I->seeDateWasYesterday(date('r',  strtotime('- 1 day')));         // Yesterday
$I->dontSeeDateWasYesterday(date('r', strtotime('+ 1 week')));     // Offset by one week

$I->seeDateIsInDays(date('r', strtotime('+3 days')), 3);          // Today's date plus three days
$I->seeDateIsInDays(date('r', strtotime('-25 days')), -25);       // Today's date less twenty-five days
$I->dontSeeDateIsInDays(date('r', strtotime('+10 days')), 12);    // Today's date plus ten days

$I->seeDateWasInDays(date('r', strtotime('-3 days')), 3);         // Today's date less three days
$I->seeDateWasInDays(date('r', strtotime('+25 days')), -25);      // Today's date plus twenty-five days
$I->dontSeeDateWasInDays(date('r', strtotime('-10 days')), 12);   // Today's date less ten days

$I->seeDateIsNextWeek(date('r', strtotime('+1 week')));             // Today's date plus one week
$I->dontSeeDateIsNextWeek(date('r', strtotime('-1 week')));         // Today's date less one week

$I->seeDateIsInWeeks(date('r', strtotime('+3 weeks')), 3);          // Today's date plus three weeks
$I->seeDateIsInWeeks(date('r', strtotime('+9 weeks')), 9);          // Today's date plus nine weeks
$I->seeDateIsInWeeks(date('r', strtotime('+25 weeks')), 25);        // Today's date plus twenty-five weeks
$I->seeDateIsInWeeks(date('r', strtotime('-25 weeks')), -25);       // Today's date less twenty-five weeks
$I->dontSeeDateIsInWeeks(date('r', strtotime('+10 weeks')), 12);    // Today's date plus ten weeks

$I->seeDateWasLastWeek(date('r', strtotime('-1 week')));          // Today's date less one week
$I->dontSeeDateWasLastWeek(date('r', strtotime('+1 week')));      // Today's date plus one week

$I->seeDateWasInWeeks(date('r', strtotime('-3 weeks')), 3);         // Today's date less three weeks
$I->seeDateWasInWeeks(date('r', strtotime('-9 weeks')), 9);         // Today's date less nine weeks
$I->seeDateWasInWeeks(date('r', strtotime('-25 weeks')), 25);       // Today's date less twenty-five weeks
$I->seeDateWasInWeeks(date('r', strtotime('+25 weeks')), -25);      // Today's date plus twenty-five weeks
$I->dontSeeDateWasInWeeks(date('r', strtotime('-10 weeks')), 12);   // Today's date less ten weeks

$I->seeDateIsNextMonth(date('r', strtotime('+1 month')));           // Today's date plus one month
$I->dontSeeDateIsNextMonth(date('r', strtotime('+10 months')));     // Today's date plus ten month

$I->seeDateIsInMonths(date('r', strtotime('+3 months')), 3);          // Today's date plus three months
$I->seeDateIsInMonths(date('r', strtotime('-25 months')), -25);       // Today's date less twenty-five months
$I->dontSeeDateIsInMonths(date('r', strtotime('+10 months')), 12);    // Today's date plus ten months

$I->seeDateWasLastMonth(date('r', strtotime('-1 month')));          // Today's date less one month
$I->dontSeeDateWasLastMonth(date('r', strtotime('-10 months')));    // Today's date less ten month

$I->seeDateWasInMonths(date('r', strtotime('-3 months')), 3);         // Today's date less three months
$I->seeDateWasInMonths(date('r', strtotime('+25 months')), -25);      // Today's date plus twenty-five months
$I->dontSeeDateWasInMonths(date('r', strtotime('-10 months')), 12);   // Today's date less ten months

$I->seeDateIsNextYear(date('r', strtotime('+1 year')));         // Today plus one year
$I->dontSeeDateIsNextYear(date('r', strtotime('-2 year')));     // Today less two years
$I->seeDateIsInYears(date('r', strtotime('+3 years')), 3);      // Today plus three years
$I->seeDateIsInYears(date('r', strtotime('-3 years')), -3);     // Today less three years
$I->dontSeeDateIsInYears(date('r', strtotime('+4 years')), 3);  // Today plus four years

$I->seeDateWasLastYear(date('r', strtotime('-1 year')));            // Today less one year
$I->dontSeeDateWasLastYear(date('r', strtotime('+2 year')));        // Today plus two years
$I->seeDateWasInYears(date('r', strtotime('-3 years')), 3);         // Today less three years
$I->seeDateWasInYears(date('r', strtotime('+3 years')), -3);        // Today plus three years
$I->dontSeeDateWasInYears(date('r', strtotime('-4 years')), 3);     // Today less four years

$I->seeDateIsMonday(date('r', mktime(12, 0, 0, 12, 1, 2014)));          // Monday 1st Dec 2014
$I->dontSeeDateIsMonday(date('r', mktime(12, 0, 0, 12, 2, 2014)));      // Tuesday 2nd Dec 2014
$I->seeDateIsTuesday(date('r', mktime(12, 0, 0, 12, 2, 2014)));         // Tuesday 2nd Dec 2014
$I->dontSeeDateIsTuesday(date('r', mktime(12, 0, 0, 12, 3, 2014)));     // Wednesday 3rd Dec 2014
$I->seeDateIsWednesday(date('r', mktime(12, 0, 0, 12, 3, 2014)));       // Wednesday 3rd Dec 2014
$I->dontSeeDateIsWednesday(date('r', mktime(12, 0, 0, 12, 4, 2014)));   // Thursday 4th Dec 2014
$I->seeDateIsThursday(date('r', mktime(12, 0, 0, 12, 4, 2014)));        // Thursday 4th Dec 2014
$I->dontSeeDateIsThursday(date('r', mktime(12, 0, 0, 12, 5, 2014)));    // Friday 5th Dec 2014
$I->seeDateIsFriday(date('r', mktime(12, 0, 0, 12, 5, 2014)));          // Friday 5th Dec 2014
$I->dontSeeDateIsFriday(date('r', mktime(12, 0, 0, 12, 6, 2014)));      // Saturday 6th Dec 2014
$I->seeDateIsSaturday(date('r', mktime(12, 0, 0, 12, 6, 2014)));        // Saturday 6th Dec 2014
$I->dontSeeDateIsSaturday(date('r', mktime(12, 0, 0, 12, 7, 2014)));    // Sunday 7th Dec 2014
$I->seeDateIsSunday(date('r', mktime(12, 0, 0, 12, 7, 2014)));          // Sunday 7th Dec 2014
$I->dontSeeDateIsSunday(date('r', mktime(12, 0, 0, 12, 1, 2014)));      // Monday 1st Dec 2014

$I->seeDateIsWeekday(date('r', mktime(12, 0, 0, 12, 3, 2014)));         // Wednesday 3rd Dec 2014
$I->dontSeeDateIsWeekday(date('r', mktime(12, 0, 0, 12, 7, 2014)));     // Sunday 7th Dec 2014
$I->seeDateIsWeekend(date('r', mktime(12, 0, 0, 12, 7, 2014)));         // Sunday 7th Dec 2014
$I->dontSeeDateIsWeekend(date('r', mktime(12, 0, 0, 12, 3, 2014)));     // Wednesday 3rd Dec 2014

$I->seeDateInFuture(date('r', strtotime('+3 years')));      // Today plus three years
$I->dontSeeDateInFuture(date('r', strtotime('-3 years')));  // Today less three years
$I->seeDateInPast(date('r', strtotime('-3 years')));        // Today less three years
$I->dontSeeDateInPast(date('r', strtotime('+3 years')));    // Today plus three years

$I->seeDateInFirstQuarter(date('r', mktime(12, 0, 0, 2, 1, 2014)));         // Feb 2014
$I->dontSeeDateInFirstQuarter(date('r', mktime(12, 0, 0, 11, 1, 2014)));    // Nov 2014
$I->seeDateInSecondQuarter(date('r', mktime(12, 0, 0, 5, 1, 2014)));        // May 2014
$I->donSeeDateInSecondQuarter(date('r', mktime(12, 0, 0, 2, 1, 2014)));     // Feb 2014
$I->seeDateInThirdQuarter(date('r', mktime(12, 0, 0, 8, 1, 2014)));         // Aug 2014
$I->dontSeeDateInThirdQuarter(date('r', mktime(12, 0, 0, 5, 1, 2014)));     // May 2014
$I->seeDateInFourthQuarter(date('r', mktime(12, 0, 0, 11, 1, 2014)));       // Nov 2014
$I->dontSeeDateInFourthQuarter(date('r', mktime(12, 0, 0, 2, 1, 2014)));    // Feb 2014

$I->seeDateInQuarter(date('r', mktime(12, 0, 0, 2, 1, 2014)), 1);       // Feb 2014
$I->dontSeeDateInQuarter(date('r', mktime(12, 0, 0, 9, 1, 2014)), 1);   // Sept 2014

$I->seeDateIsLeapYear(date('r', mktime(12, 0, 0, 1, 1, 2000)));         // 1st Jan 2000
$I->dontSeeDateIsLeapYear(date('r', mktime(12, 0, 0, 1, 1, 2003)));     // 1st Jan 2003