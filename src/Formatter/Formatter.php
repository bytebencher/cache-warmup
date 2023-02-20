<?php

declare(strict_types=1);

/*
 * This file is part of the Composer package "eliashaeussler/cache-warmup".
 *
 * Copyright (C) 2023 Elias Häußler <elias@haeussler.dev>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */

namespace EliasHaeussler\CacheWarmup\Formatter;

use EliasHaeussler\CacheWarmup\Result;

/**
 * Formatter.
 *
 * @author Elias Häußler <elias@haeussler.dev>
 * @license GPL-3.0-or-later
 */
interface Formatter
{
    public function formatParserResult(Result\ParserResult $successful, Result\ParserResult $failed): void;

    public function formatCacheWarmupResult(Result\CacheWarmupResult $result): void;

    public function logMessage(string $message, MessageSeverity $severity = MessageSeverity::Info): void;

    public function isVerbose(): bool;

    public static function getType(): string;
}