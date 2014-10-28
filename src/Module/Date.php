<?php namespace Codeception\Module;

use Codeception\Module;
use Carbon\Carbon;

class Date extends Module
{
    /* ----------------- Days ----------------- */

    /**
     * See date is today's date.
     *
     * @param string $date
     */
    public function seeDateIsToday($date) {
        \PHPUnit_Framework_Assert::assertTrue($this->_ParseDate($date)->isToday());
    }

    /**
     * See date is not today's date.
     *
     * @param string $date
     */
    public function dontSeeDateIsToday($date) {
        \PHPUnit_Framework_Assert::assertFalse($this->_ParseDate($date)->isToday());
    }

    /**
     * See date is tomorrows date.
     *
     * @param string $date
     */
    public function seeDateIsTomorrow($date) {
        \PHPUnit_Framework_Assert::assertTrue($this->_ParseDate($date)->isTomorrow());
    }

    /**
     * See date is not tomorrows date.
     *
     * @param string $date
     */
    public function dontSeeDateIsTomorrow($date) {
        \PHPUnit_Framework_Assert::assertFalse($this->_ParseDate($date)->isTomorrow());
    }

    /**
     * See date was yesterdays date.
     *
     * @param string $date
     */
    public function seeDateWasYesterday($date) {
        \PHPUnit_Framework_Assert::assertTrue($this->_ParseDate($date)->isYesterday());
    }

    /**
     * See date was not yesterdays date.
     *
     * @param string $date
     */
    public function dontSeeDateWasYesterday($date) {
        \PHPUnit_Framework_Assert::assertFalse($this->_ParseDate($date)->isYesterday());
    }

    /**
     * See date is in a given number of days.
     *
     * @param string $date
     * @param int    $days
     */
    public function seeDateIsInDays($date, $days) {
        \PHPUnit_Framework_Assert::assertEquals($days, $this->_GetNow()->diffInDays($this->_ParseDate($date), false));
    }

    /**
     * See date is not in a given number of days.
     *
     * @param string $date
     * @param int    $days
     */
    public function dontSeeDateIsInDays($date, $days) {
        \PHPUnit_Framework_Assert::assertNotEquals($days, $this->_GetNow()->diffInDays($this->_ParseDate($date), false));
    }

    /**
     * See date was in a given number of days.
     *
     * @param string $date
     * @param int    $days
     */
    public function seeDateWasInDays($date, $days) {
        \PHPUnit_Framework_Assert::assertEquals($days, $this->_ParseDate($date)->diffInDays($this->_GetNow(), false));
    }

    /**
     * See date was in a given number of days.
     *
     * @param string $date
     * @param int    $days
     */
    public function dontSeeDateWasInDays($date, $days) {
        \PHPUnit_Framework_Assert::assertNotEquals($days, $this->_ParseDate($date)->diffInDays($this->_GetNow(), false));
    }

    /* ----------------- Weeks ----------------- */

    /**
     * See date is next week.
     *
     * @param string $date
     */
    public function seeDateIsNextWeek($date) {
        $this->seeDateIsInWeeks($date, 1);
    }

    /**
     * See date is not next week.
     *
     * @param string $date
     */
    public function dontSeeDateIsNextWeek($date) {
        $this->dontSeeDateIsInWeeks($date, 1);
    }

    /**
     * See date is in a given number of weeks.
     *
     * @param string $date
     * @param int    $weeks
     */
    public function seeDateIsInWeeks($date, $weeks) {
        \PHPUnit_Framework_Assert::assertEquals($weeks, $this->_GetNow()->diffInWeeks($this->_ParseDate($date), false));
    }

    /**
     * See date is in a given number of weeks.
     *
     * @param string $date
     * @param int    $weeks
     */
    public function dontSeeDateIsInWeeks($date, $weeks) {
        \PHPUnit_Framework_Assert::assertNotEquals($weeks, $this->_GetNow()->diffInWeeks($this->_ParseDate($date), false));
    }

    /**
     * See date was last week.
     *
     * @param string $date
     */
    public function seeDateWasLastWeek($date) {
        $this->seeDateWasInWeeks($date, 1);
    }

    /**
     * See date was not last week.
     *
     * @param string $date
     */
    public function dontSeeDateWasLastWeek($date) {
        $this->dontSeeDateWasInWeeks($date, 1);
    }

    /**
     * See date was in a given number of weeks.
     *
     * @param string $date
     * @param int    $weeks
     */
    public function seeDateWasInWeeks($date, $weeks) {
        \PHPUnit_Framework_Assert::assertEquals($weeks, $this->_ParseDate($date)->diffInWeeks($this->_GetNow(), false));
    }

    /**
     * See date was in a given number of weeks.
     *
     * @param string $date
     * @param int    $weeks
     */
    public function dontSeeDateWasInWeeks($date, $weeks) {
        \PHPUnit_Framework_Assert::assertNotEquals($weeks, $this->_ParseDate($date)->diffInWeeks($this->_GetNow(), false));
    }

    /* ----------------- Months ----------------- */

    /**
     * See date is next month.
     *
     * @param string $date
     */
    public function seeDateIsNextMonth($date) {
        $this->seeDateIsInMonths($date, 1);
    }

    /**
     * See date is not next month.
     *
     * @param string $date
     */
    public function dontSeeDateIsNextMonth($date) {
        $this->dontSeeDateIsInMonths($date, 1);
    }

    /**
     * See date is in a given number of months.
     *
     * @param string $date
     * @param int    $months
     */
    public function seeDateIsInMonths($date, $months) {
        \PHPUnit_Framework_Assert::assertEquals($months, $this->_GetNow()->diffInMonths($this->_ParseDate($date), false));
    }

    /**
     * See date is not in a given number of months.
     *
     * @param string $date
     * @param int    $months
     */
    public function dontSeeDateIsInMonths($date, $months) {
        \PHPUnit_Framework_Assert::assertNotEquals($months, $this->_GetNow()->diffInMonths($this->_ParseDate($date), false));
    }

    /**
     * See date was last month.
     *
     * @param string $date
     */
    public function seeDateWasLastMonth($date) {
        $this->seeDateWasInMonths($date, 1);
    }

    /**
     * See date was not last month.
     *
     * @param string $date
     */
    public function dontSeeDateWasLastMonth($date) {
        $this->dontSeeDateWasInMonths($date, 1);
    }

    /**
     * See date was in a given number of months.
     *
     * @param string $date
     * @param int    $months
     */
    public function seeDateWasInMonths($date, $months) {
        \PHPUnit_Framework_Assert::assertEquals($months, $this->_ParseDate($date)->diffInMonths($this->_GetNow(), false));
    }

    /**
     * See date was not in a given number of years.
     *
     * @param string $date
     * @param int    $months
     */
    public function dontSeeDateWasInMonths($date, $months) {
        \PHPUnit_Framework_Assert::assertNotEquals($months, $this->_ParseDate($date)->diffInMonths($this->_GetNow(), false));
    }

    /* ----------------- Years ----------------- */

    /**
     * See date is next year.
     *
     * @param string $date
     */
    public function seeDateIsNextYear($date) {
        $this->seeDateIsInYears($date, 1);
    }

    /**
     * See date is not next year.
     *
     * @param string $date
     */
    public function dontSeeDateIsNextYear($date) {
        $this->dontSeeDateIsInYears($date, 1);
    }

    /**
     * See date is in a given number of years.
     *
     * @param string $date
     * @param int    $years
     */
    public function seeDateIsInYears($date, $years) {
        \PHPUnit_Framework_Assert::assertEquals($years, $this->_GetNow()->diffInYears($this->_ParseDate($date), false));
    }

    /**
     * See date is in not a given number of years.
     *
     * @param string $date
     * @param int    $years
     */
    public function dontSeeDateIsInYears($date, $years) {
        \PHPUnit_Framework_Assert::assertNotEquals($years, $this->_GetNow()->diffInYears($this->_ParseDate($date), false));
    }

    /**
     * See date was last year.
     *
     * @param string $date
     */
    public function seeDateWasLastYear($date) {
        $this->seeDateWasInYears($date, 1);
    }

    /**
     * See date was not last year.
     *
     * @param string $date
     */
    public function dontSeeDateWasLastYear($date) {
        $this->dontSeeDateWasInYears($date, 1);
    }

    /**
     * See date was in a given number of years.
     *
     * @param string $date
     * @param int    $years
     */
    public function seeDateWasInYears($date, $years) {
        \PHPUnit_Framework_Assert::assertEquals($years, $this->_ParseDate($date)->diffInYears($this->_GetNow(), false));
    }

    /**
     * See date was not in a given number of years.
     *
     * @param string $date
     * @param int    $years
     */
    public function dontSeeDateWasInYears($date, $years) {
        \PHPUnit_Framework_Assert::assertNotEquals($years, $this->_ParseDate($date)->diffInYears($this->_GetNow(), false));
    }

    /* ----------------- Days of the Week ----------------- */

    /**
     * See date is a Monday.
     *
     * @param string $date
     */
    public function seeDateIsMonday($date) {
        \PHPUnit_Framework_Assert::assertTrue($this->_ParseDate($date)->dayOfWeek == Carbon::MONDAY);
    }

    /**
     * See date is not a Monday.
     *
     * @param string $date
     */
    public function dontSeeDateIsMonday($date) {
        \PHPUnit_Framework_Assert::assertFalse($this->_ParseDate($date)->dayOfWeek == Carbon::MONDAY);
    }

    /**
     * See date is a Tuesday.
     *
     * @param string $date
     */
    public function seeDateIsTuesday($date) {
        \PHPUnit_Framework_Assert::assertTrue($this->_ParseDate($date)->dayOfWeek == Carbon::TUESDAY);
    }

    /**
     * See date is not a Tuesday.
     *
     * @param string $date
     */
    public function dontSeeDateIsTuesday($date) {
        \PHPUnit_Framework_Assert::assertFalse($this->_ParseDate($date)->dayOfWeek == Carbon::TUESDAY);
    }

    /**
     * See date is a Wednesday.
     *
     * @param string $date
     */
    public function seeDateIsWednesday($date) {
        \PHPUnit_Framework_Assert::assertTrue($this->_ParseDate($date)->dayOfWeek == Carbon::WEDNESDAY);
    }

    /**
     * See date is not a Wednesday.
     *
     * @param string $date
     */
    public function dontSeeDateIsWednesday($date) {
        \PHPUnit_Framework_Assert::assertFalse($this->_ParseDate($date)->dayOfWeek == Carbon::WEDNESDAY);
    }

    /**
     * See date is a Thursday.
     *
     * @param string $date
     */
    public function seeDateIsThursday($date) {
        \PHPUnit_Framework_Assert::assertTrue($this->_ParseDate($date)->dayOfWeek == Carbon::THURSDAY);
    }

    /**
     * See date is not a Thursday.
     *
     * @param string $date
     */
    public function dontSeeDateIsThursday($date) {
        \PHPUnit_Framework_Assert::assertFalse($this->_ParseDate($date)->dayOfWeek == Carbon::THURSDAY);
    }

    /**
     * See date is a Friday
     *
     * @param string $date
     */
    public function seeDateIsFriday($date) {
        \PHPUnit_Framework_Assert::assertTrue($this->_ParseDate($date)->dayOfWeek == Carbon::FRIDAY);
    }

    /**
     * See date is not a Friday.
     *
     * @param string $date
     */
    public function dontSeeDateIsFriday($date) {
        \PHPUnit_Framework_Assert::assertFalse($this->_ParseDate($date)->dayOfWeek == Carbon::FRIDAY);
    }

    /**
     * See date is a Saturday.
     *
     * @param string $date
     */
    public function seeDateIsSaturday($date) {
        \PHPUnit_Framework_Assert::assertTrue($this->_ParseDate($date)->dayOfWeek == Carbon::SATURDAY);
    }

    /**
     * See date is not a Saturday.
     *
     * @param string $date
     */
    public function dontSeeDateIsSaturday($date) {
        \PHPUnit_Framework_Assert::assertFalse($this->_ParseDate($date)->dayOfWeek == Carbon::SATURDAY);
    }

    /**
     * See date is a Sunday.
     *
     * @param string $date
     */
    public function seeDateIsSunday($date) {
        \PHPUnit_Framework_Assert::assertTrue($this->_ParseDate($date)->dayOfWeek == Carbon::SUNDAY);
    }

    /**
     * See date is not a Sunday.
     *
     * @param string $date
     */
    public function dontSeeDateIsSunday($date) {
        \PHPUnit_Framework_Assert::assertFalse($this->_ParseDate($date)->dayOfWeek == Carbon::SUNDAY);
    }

    /* ----------------- Days Grouping ----------------- */

    /**
     * See date is a weekday.
     *
     * @param string $date
     */
    public function seeDateIsWeekday($date) {
        \PHPUnit_Framework_Assert::assertTrue($this->_ParseDate($date)->isWeekday());
    }

    /**
     * See date is not a weekday.
     *
     * @param string $date
     */
    public function dontSeeDateIsWeekday($date) {
        \PHPUnit_Framework_Assert::assertFalse($this->_ParseDate($date)->isWeekday());
    }

    /**
     * See date is a weekend.
     *
     * @param string $date
     */
    public function seeDateIsWeekend($date) {
        \PHPUnit_Framework_Assert::assertTrue($this->_ParseDate($date)->isWeekend());
    }

    /**
     * See date is not a weekend.
     *
     * @param string $date
     */
    public function dontSeeDateIsWeekend($date) {
        \PHPUnit_Framework_Assert::assertFalse($this->_ParseDate($date)->isWeekend());
    }

    /* ----------------- Exact Matches ----------------- */

    /**
     * See that two dates match.
     *
     * @param string $d1
     * @param string $d2
     */
    public function seeDateMatches($d1, $d2) {
        \PHPUnit_Framework_Assert::assertTrue($this->_ParseDate($d1)->eq($this->_ParseDate($d2)));
    }

    /**
     * See that two dates don't match.
     *
     * @param string $d1
     * @param string $d2
     */
    public function dontSeeDateMatches($d1, $d2) {
        \PHPUnit_Framework_Assert::assertTrue($this->_ParseDate($d1)->ne($this->_ParseDate($d2)));
    }

    /* ----------------- Future/Past Matches ----------------- */

    /**
     * See the date is in the future.
     *
     * @param string $date
     */
    public function seeDateInFuture($date) {
        \PHPUnit_Framework_Assert::assertTrue($this->_ParseDate($date)->isFuture());
    }

    /**
     * See the date is not in the future.
     *
     * @param string $date
     */
    public function dontSeeDateInFuture($date) {
        \PHPUnit_Framework_Assert::assertFalse($this->_ParseDate($date)->isFuture());
    }

    /**
     * See the date is in the past.
     *
     * @param string $date
     */
    public function seeDateInPast($date) {
        \PHPUnit_Framework_Assert::assertTrue($this->_ParseDate($date)->isPast());
    }

    /**
     * See the date is not in the past.
     *
     * @param string $date
     */
    public function dontSeeDateInPast($date) {
        \PHPUnit_Framework_Assert::assertFalse($this->_ParseDate($date)->isPast());
    }

    /* ----------------- Quarters ----------------- */

    /**
     * See the date is within the first quarter of the year.
     *
     * @param string $date
     */
    public function seeDateInFirstQuarter($date) {
        $this->seeDateInQuarter($date, 1);
    }

    /**
     * See the date is not within the first quarter of the year.
     *
     * @param string $date
     */
    public function dontSeeDateInFirstQuarter($date) {
        $this->dontSeeDateInQuarter($date, 1);
    }

    /**
     * See the date is within the second quarter of the year.
     *
     * @param string $date
     */
    public function seeDateInSecondQuarter($date) {
        $this->seeDateInQuarter($date, 2);
    }

    /**
     * See the date is not within the second quarter of the year.
     *
     * @param string $date
     */
    public function donSeeDateInSecondQuarter($date) {
        $this->dontSeeDateInQuarter($date, 2);
    }

    /**
     * See the date is within the third quarter of the year.
     *
     * @param string $date
     */
    public function seeDateInThirdQuarter($date) {
        $this->seeDateInQuarter($date, 3);
    }

    /**
     * See the date is not within the third quarter of the year.
     *
     * @param string $date
     */
    public function dontSeeDateInThirdQuarter($date) {
        $this->dontSeeDateInQuarter($date, 3);
    }

    /**
     * See the date is within the forth quarter of the year.
     *
     * @param string $date
     */
    public function seeDateInFourthQuarter($date) {
        $this->seeDateInQuarter($date, 4);
    }

    /**
     * See the date is not within the forth quarter of the year.
     *
     * @param string $date
     */
    public function dontSeeDateInFourthQuarter($date) {
        $this->dontSeeDateInQuarter($date, 4);
    }

    /**
     * See the date is within a particular quarter of the year.
     *
     * @param string $date
     * @param int    $quarter
     */
    public function seeDateInQuarter($date, $quarter) {
        \PHPUnit_Framework_Assert::assertEquals($quarter, $this->_ParseDate($date)->quarter);
    }

    /**
     * See the date is not within a particular quarter of the year.
     *
     * @param string $date
     * @param int    $quarter
     */
    public function dontSeeDateInQuarter($date, $quarter) {
        \PHPUnit_Framework_Assert::assertNotEquals($quarter, $this->_ParseDate($date)->quarter);
    }

    /* ----------------- Years ----------------- */

    /**
     * See the date is a leap year.
     *
     * @param string $date
     */
    public function seeDateIsLeapYear($date) {
        \PHPUnit_Framework_Assert::assertTrue($this->_ParseDate($date)->isLeapYear());
    }

    /**
     * See the date is not a leap year.
     *
     * @param string $date
     */
    public function dontSeeDateIsLeapYear($date) {
        \PHPUnit_Framework_Assert::assertFalse($this->_ParseDate($date)->isLeapYear());
    }

    /* ----------------- System Helpers ----------------- */

    /**
     * Parse the date input to format the datetime object.
     *
     * @param string $date
     *
     * @return Carbon
     */
    private function _ParseDate($date) {
        return Carbon::parse($date);
    }

    /**
     * Return the current date.
     *
     * @return Carbon
     */
    private function _GetNow() {
        return Carbon::now();
    }

}
