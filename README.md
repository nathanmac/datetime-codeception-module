Codeception Date/Time Helpers Module
====================================

[![Build Status](https://travis-ci.org/nathanmac/datetime-codeception-module.svg?branch=master)](https://travis-ci.org/nathanmac/datetime-codeception-module)

Testing helpers for date/time comparisons in your Codeception acceptance tests.

## Installation

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `nathanmac/datetime-codeception-module`.

    {
        "require-dev": {
            "codeception/codeception": "*",
            "nathanmac/datetime-codeception-module": "~1.0"
        }
    }

Next, update Composer from the Terminal:

    composer update

Then enable it in your suite configuration with the following settings

## Examples
### Example Configuration

     modules:
       enabled: [Date, Time]
             
## Actions

### Date Module

##### seeDateIsToday( string $date )
See date is today's date.
	
##### dontSeeDateIsToday( string $date )
See date is not today's date.

##### seeDateIsTomorrow( string $date )
See date is tomorrows date.

##### dontSeeDateIsTomorrow( string $date )
See date is not tomorrows date.

##### seeDateWasYesterday( string $date )
See date was yesterdays date.
	
##### dontSeeDateWasYesterday( string $date )
See date was not yesterdays date.
	
##### seeDateIsInDays( string $date, integer $days )
See date is in a given number of days.

##### dontSeeDateIsInDays( string $date, integer $days )
See date is not in a given number of days.

##### seeDateWasInDays( string $date, integer $days )
See date was in a given number of days.

##### dontSeeDateWasInDays( string $date, integer $days )
See date was in a given number of days.
	
##### seeDateIsNextWeek( string $date )
See date is next week.
	
##### dontSeeDateIsNextWeek( string $date )
See date is not next week.

##### seeDateIsInWeeks( string $date, integer $weeks )
See date is in a given number of weeks.
	
##### dontSeeDateIsInWeeks( string $date, integer $weeks )
See date is in a given number of weeks.

##### seeDateWasLastWeek( string $date )
See date was last week.

##### dontSeeDateWasLastWeek( string $date )
See date was not last week.
	
##### seeDateWasInWeeks( string $date, integer $weeks )
See date was in a given number of weeks.

##### dontSeeDateWasInWeeks( string $date, integer $weeks )
See date was in a given number of weeks.

##### seeDateIsNextMonth( string $date )
See date is next month.

##### dontSeeDateIsNextMonth( string $date )
See date is not next month.

##### seeDateIsInMonths( string $date, integer $months )
See date is in a given number of months.

##### dontSeeDateIsInMonths( string $date, integer $months )
See date is not in a given number of months.

##### seeDateWasLastMonth( string $date )
See date was last month.

##### dontSeeDateWasLastMonth( string $date )
See date was not last month.

##### seeDateWasInMonths( string $date, integer $months )
See date was in a given number of months.

##### dontSeeDateWasInMonths( string $date, integer $months )
See date was not in a given number of years.

##### seeDateIsNextYear( string $date )
See date is next year.

##### dontSeeDateIsNextYear( string $date )
See date is not next year.

##### seeDateIsInYears( string $date, integer $years )
See date is in a given number of years.

##### dontSeeDateIsInYears( string $date, integer $years )
See date is in not a given number of years.

##### seeDateWasLastYear( string $date )
See date was last year.

##### dontSeeDateWasLastYear( string $date )
See date was not last year.

##### seeDateWasInYears( string $date, integer $years )
See date was in a given number of years.

##### dontSeeDateWasInYears( string $date, integer $years )
See date was not in a given number of years.

##### seeDateIsMonday( string $date )
See date is a Monday.

##### dontSeeDateIsMonday( string $date )
See date is not a Monday.

##### seeDateIsTuesday( string $date )
See date is a Tuesday.

##### dontSeeDateIsTuesday( string $date )
See date is not a Tuesday.

##### seeDateIsWednesday( string $date )
See date is a Wednesday.

##### dontSeeDateIsWednesday( string $date )
See date is not a Wednesday.

##### seeDateIsThursday( string $date )
See date is a Thursday.

##### dontSeeDateIsThursday( string $date )
See date is not a Thursday.

##### seeDateIsFriday( string $date )
See date is a Friday

##### dontSeeDateIsFriday( string $date )
See date is not a Friday.

##### seeDateIsSaturday( string $date )
See date is a Saturday.

##### dontSeeDateIsSaturday( string $date )
See date is not a Saturday.

##### seeDateIsSunday( string $date )
See date is a Sunday.

##### dontSeeDateIsSunday( string $date )
See date is not a Sunday.

##### seeDateIsWeekday( string $date )
See date is a weekday.

##### dontSeeDateIsWeekday( string $date )
See date is not a weekday.

##### seeDateIsWeekend( string $date )
See date is a weekend.

##### dontSeeDateIsWeekend( string $date )
See date is not a weekend.

##### seeDateMatches( string $d1, string $d2 )
See that two dates match.

##### dontSeeDateMatches( string $d1, string $d2 )
See that two dates don't match.

##### seeDateInFuture( string $date )
See the date is in the future.

##### dontSeeDateInFuture( string $date )
See the date is not in the future.

##### seeDateInPast( string $date )
See the date is in the past.

##### dontSeeDateInPast( string $date )
See the date is not in the past.

##### seeDateInFirstQuarter( string $date )
See the date is within the first quarter of the year.

##### dontSeeDateInFirstQuarter( string $date )
See the date is not within the first quarter of the year.

##### seeDateInSecondQuarter( string $date )
See the date is within the second quarter of the year.

##### donSeeDateInSecondQuarter( string $date )
See the date is not within the second quarter of the year.

##### seeDateInThirdQuarter( string $date )
See the date is within the third quarter of the year.

##### dontSeeDateInThirdQuarter( string $date )
See the date is not within the third quarter of the year.

##### seeDateInFourthQuarter( string $date )
See the date is within the forth quarter of the year.

##### dontSeeDateInFourthQuarter( string $date )
See the date is not within the forth quarter of the year.

##### seeDateInQuarter( string $date, integer $quarter )
See the date is within a particular quarter of the year.

##### dontSeeDateInQuarter( string $date, integer $quarter )
See the date is not within a particular quarter of the year.

##### seeDateIsLeapYear( string $date )
See the date is a leap year.

##### dontSeeDateIsLeapYear( string $date )
See the date is not a leap year.

##### seeDayInWeek( string $date, integer $day )
See the date is a given day in the week.

##### dontSeeDayInWeek( string $date, integer $day )
See the date is not a given day in the week.

##### seeDayInMonth( string $date, integer $day )
See the date is a given day in the month.

##### dontSeeDayInMonth( string $date, integer $day )
See the date is not a given day in the month.

##### seeDayInYear( string $date, integer $day )
See the date is a given day in the year.

##### dontSeeDayInYear( string $date, integer $day )
See the date is not a given day in the year.

##### seeWeekInMonth( string $date, integer $week )
See the date is a not given week in the month.

##### dontSeeWeekInMonth( string $date, integer $week )
See the date is a not given week in the month.

##### seeWeekInYear( string $date, integer $week )
See the date is a given week in the year.

##### dontSeeWeekInYear( string $date, integer $week )
See the date is not a given week in the year.

##### seeMonthInYear( string $date, integer $month )
See the month in the year is a given value.

##### dontSeeMonthInYear( string $date, integer $month )
See the month in the year is not a given value.

### Time Module

TBA

# License

Released under the same license as Codeception: MIT
