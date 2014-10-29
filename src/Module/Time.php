<?php
namespace Codeception\Module;

use Codeception\Module;
use Carbon\Carbon;

class Time extends Module
{
    /* ----------------- Seconds ----------------- */

    /**
     * See time is in a given number of seconds.
     *
     * @param string $time
     * @param int    $seconds
     */
    public function seeTimeIsInSecs($time, $seconds) {
        \PHPUnit_Framework_Assert::assertEquals($seconds, $this->_GetNow()->diffInSeconds($this->_ParseDate($time), false));
    }

    /**
     * See time is not in a given number of seconds.
     *
     * @param string $time
     * @param int    $seconds
     */
    public function dontSeeTimeIsInSecs($time, $seconds) {
        \PHPUnit_Framework_Assert::assertNotEquals($seconds, $this->_GetNow()->diffInSeconds($this->_ParseDate($time), false));
    }

    /**
     * See time was in a given number of seconds.
     *
     * @param string $time
     * @param int    $seconds
     */
    public function seeTimeWasInSecs($time, $seconds) {
        \PHPUnit_Framework_Assert::assertEquals($seconds, $this->_ParseDate($time)->diffInSeconds($this->_GetNow(), false));
    }

    /**
     * See time was not in a given number of seconds.
     *
     * @param string $time
     * @param int    $seconds
     */
    public function dontSeeTimeWasInSecs($time, $seconds) {
        \PHPUnit_Framework_Assert::assertNotEquals($seconds, $this->_ParseDate($time)->diffInSeconds($this->_GetNow(), false));
    }

    /* ----------------- Minutes ----------------- */

    /**
     * See time is in a given number of minutes.
     *
     * @param string $time
     * @param int    $minutes
     */
    public function seeTimeIsInMins($time, $minutes) {
        \PHPUnit_Framework_Assert::assertEquals($minutes, $this->_GetNow()->diffInMinutes($this->_ParseDate($time), false));
    }

    /**
     * See time is not in a given number of minutes.
     *
     * @param string $time
     * @param int    $minutes
     */
    public function dontSeeTimeIsInMins($time, $minutes) {
        \PHPUnit_Framework_Assert::assertNotEquals($minutes, $this->_GetNow()->diffInMinutes($this->_ParseDate($time), false));
    }

    /**
     * See time was in a given number of minutes.
     *
     * @param string $time
     * @param int    $minutes
     */
    public function seeTimeWasInMins($time, $minutes) {
        \PHPUnit_Framework_Assert::assertEquals($minutes, $this->_ParseDate($time)->diffInMinutes($this->_GetNow(), false));
    }

    /**
     * See time was not in a given number of minutes.
     *
     * @param string $time
     * @param int    $minutes
     */
    public function dontSeeTimeWasInMins($time, $minutes) {
        \PHPUnit_Framework_Assert::assertNotEquals($minutes, $this->_ParseDate($time)->diffInMinutes($this->_GetNow(), false));
    }

    /* ----------------- Hours ----------------- */

    /**
     * See time is in a given number of hours.
     *
     * @param string $time
     * @param int    $hours
     */
    public function seeTimeIsInHours($time, $hours) {
        \PHPUnit_Framework_Assert::assertEquals($hours, $this->_GetNow()->diffInHours($this->_ParseDate($time), false));
    }

    /**
     * See time is not in a given number of hours.
     *
     * @param string $time
     * @param int    $hours
     */
    public function dontSeeTimeIsInHours($time, $hours) {
        \PHPUnit_Framework_Assert::assertNotEquals($hours, $this->_GetNow()->diffInHours($this->_ParseDate($time), false));
    }

    /**
     * See time was in a given number of hours.
     *
     * @param string $time
     * @param int    $hours
     */
    public function seeTimeWasInHours($time, $hours) {
        \PHPUnit_Framework_Assert::assertEquals($hours, $this->_ParseDate($time)->diffInHours($this->_GetNow(), false));
    }

    /**
     * See time was not in a given number of hours.
     *
     * @param string $time
     * @param int    $hours
     */
    public function dontSeeTimeWasInHours($time, $hours) {
        \PHPUnit_Framework_Assert::assertNotEquals($hours, $this->_ParseDate($time)->diffInHours($this->_GetNow(), false));
    }

    /* ----------------- Future/Past Matches ----------------- */

    /**
     * See the time is in the future.
     *
     * @param string $time
     */
    public function seeTimeInFuture($time) {
        \PHPUnit_Framework_Assert::assertTrue($this->_ParseDate($time)->isFuture());
    }

    /**
     * See the time is not in the future.
     *
     * @param string $time
     */
    public function dontSeeTimeInFuture($time) {
        \PHPUnit_Framework_Assert::assertFalse($this->_ParseDate($time)->isFuture());
    }

    /**
     * See the time is in the past.
     *
     * @param string $time
     */
    public function seeTimeInPast($time) {
        \PHPUnit_Framework_Assert::assertTrue($this->_ParseDate($time)->isPast());
    }

    /**
     * See the time is not in the past.
     *
     * @param string $time
     */
    public function dontSeeTimeInPast($time) {
        \PHPUnit_Framework_Assert::assertFalse($this->_ParseDate($time)->isPast());
    }

    /* ----------------- Exact Matches ----------------- */

    /**
     * See that two times match.
     *
     * @param string $t1
     * @param string $t2
     */
    public function seeTimeMatches($t1, $t2) {
        \PHPUnit_Framework_Assert::assertTrue($this->_ParseDate($t1)->eq($this->_ParseDate($t2)));
    }

    /**
     * See that two times don't match.
     *
     * @param string $t1
     * @param string $t2
     */
    public function dontSeeTimeMatches($t1, $t2) {
        \PHPUnit_Framework_Assert::assertTrue($this->_ParseDate($t1)->ne($this->_ParseDate($t2)));
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