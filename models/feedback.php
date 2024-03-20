<?php

/**
 * @param Int $numb a decimal number
 */
function renderStars($numb)
{
    for ($i = 0; $i < $numb; $i++) {
        echo '*';
    }
}
