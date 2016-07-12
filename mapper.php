#!/usr/bin/php
<?php

    // Read input line
while (($line = fgets(STDIN)) !== false) {
   // Split it according to file format
   $words = preg_split('/;/', $line, 0, PREG_SPLIT_NO_EMPTY);
   // Echo key-value pair
   echo "$words[2]\t$words[3]";
   // Easy-peasy
}
