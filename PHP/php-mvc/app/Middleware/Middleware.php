<?php

// 11.
// MIDDLEWARE

namespace Codeir\BelajarPhpMvc\Middleware;

interface Middleware
{
    function before(): void;
}
