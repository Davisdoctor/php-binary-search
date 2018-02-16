<?php

/**
 * Binary Search in PHP
 * 
 * In binary search, an ordered/sorted array is searched by splitting it in half. If the search item is less 
 * than the value of the item in the middle of the lower half, then it is passed to the upper half.
 * This process if repeated until the search item is found or until it is not found.
 * 
 * Below is an example of binary search using PHP as the programming language (OOP)
 */
class PHPBinary {

    public function search($needle, $csv) {

        /** Converting the CSV into an array */
        $haystack = explode(",", $csv);

        /** Initializing a few variables */
        $highestValue = count($haystack) - 1;
        $lowestValue = 0;
        $hunch = 0;

        while ($lowestValue <= $highestValue) {

            $half = floor(($lowestValue + $highestValue) / 2);

            if ($haystack[$half] == $needle): /** If the needle matches with the item in the haystack */
                return $haystack[$half] . " exists in the haystack!";

            elseif ($haystack[$half] < $needle): /** The needle is greater than than my hunch */
                $lowestValue = $half + 1;
                echo "Hunch " . ++$hunch . "<br>";

            else: /** The needle is less than the hunch */
                $highestValue = $half - 1;
                echo "Hunch " . ++$hunch . "<br>";
            endif;
        }

        /** Unfortunately the needle was not found! */
        return $needle . " does not exist!";
    }

}

/** The comma delimitted string */
$csv = "1, 3, 4, 23, 26, 31, 45";

/** Running the program with sample data */
$PhpBinary = new PHPBinary();
echo $PhpBinary->search(26, $csv);
