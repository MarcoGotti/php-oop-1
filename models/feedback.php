<?php

function renderStars($numb)
{
    for ($i = 0; $i < round($numb); $i++) {
        echo '*';
    }
}
