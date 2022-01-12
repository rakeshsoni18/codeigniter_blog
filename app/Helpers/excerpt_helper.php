<?php

function excerpt(string $content, int $length = 200, string $read_more = '...'): string
{
    return substr($content, 0, $length) . $read_more;
}