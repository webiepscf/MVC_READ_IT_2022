<?php

namespace Core\Functions;

function getFormatedDate(string $date, string $format = 'd-m-Y')
{
    return date_format(date_create($date), $format);
}
