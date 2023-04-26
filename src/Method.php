<?php

declare(strict_types=1);

/*
 * This file is part of the Reiterus\HttpEnum package.
 * (c) Pavel Vasin <reiterus@yandex.ru>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Reiterus\HttpEnum;

enum Method: string
{
    case CONNECT = 'CONNECT';

    case DELETE = 'DELETE';

    case GET = 'GET';

    case HEAD = 'HEAD';

    case OPTIONS = 'OPTIONS';

    case PATCH = 'PATCH';

    case POST = 'POST';

    case PURGE = 'PURGE';

    case PUT = 'PUT';

    case TRACE = 'TRACE';
}
