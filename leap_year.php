<h2>Find a leap year</h2>
<p>A year is a leap year if the following conditions are satisfied: 
    <ol type="A">
        <li>The year is multiple of 400.</li>
        <li>The year is multiple of 4 and not multiple of 100.</li>
    </ol>
</p>
<form>
    <p>
        <label for="year">Year:</label>
        <input type="text" id="year" name="year" value="2018">
    </p>
    <p>
        <button type="submit">Check for leap year</button>
    </p>
</form>
</form>

<?php
/**
 * Find a leap year
 *  A year is a leap year if the following conditions are satisfied: 
 *
 *      The year is multiple of 400.
 *      The year is multiple of 4 and not multiple of 100.  
 */
$year = 2018; //input here

function find_leapyear( $year){

    if( $year % 400 == 0){ echo "$year This is a leap year";}
    else if( $year % 4 == 0 AND $year % 100 != 0 ){ echo "$year This is a leap year"; }
    else { echo "$year This is not a leap year"; }
}
if( !empty( $_REQUEST['year']) ){
    global $year;
    $year = (int) $_REQUEST['year']; // casting to integer from string
}
find_leapyear( $year);
?>






