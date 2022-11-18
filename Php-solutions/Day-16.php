<?php



$S = rtrim(fgets(STDIN), "\r\n");
echo is_numeric($S) ? $S : 'Bad String';