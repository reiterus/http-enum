<?php

declare(strict_types=1);

/*
 * This file is part of the Reiterus\HttpEnum package.
 * (c) Pavel Vasin <reiterus@yandex.ru>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Reiterus\HttpEnum;

enum Header: string
{
    case A_IM = 'A-IM';

    case ACT = 'Accept';

    case ACT_CHARSET = 'Accept-Charset';

    case ACT_ENCODING = 'Accept-Encoding';

    case ACT_LANGUAGE = 'Accept-Language';

    case ACT_DATETIME = 'Accept-Datetime';

    case ACS_REQ_METHOD = 'Access-Control-Request-Method';

    case ACS_REQ_HEADERS = 'Access-Control-Request-Headers';

    case AUTHORIZATION = 'Authorization';

    case CACHE_CONTROL = 'Cache-Control';

    case CONNECTION = 'Connection';

    case CONTENT_LENGTH = 'Content-Length';

    case CONTENT_TYPE = 'Content-Type';

    case COOKIE = 'Cookie';

    case DATE = 'Date';

    case EXPECT = 'Expect';

    case FORWARDED = 'Forwarded';

    case FROM = 'From';

    case HOST = 'Host';

    case IF_MATCH = 'If-Match';

    case IF_MOD_SINCE = 'If-Modified-Since';

    case IF_NONE_MATCH = 'If-None-Match';

    case IF_RANGE = 'If-Range';

    case IF_UNM_SINCE = 'If-Unmodified-Since';

    case MAX_FORWARDS = 'Max-Forwards';

    case ORIGIN = 'Origin';

    case PRAGMA = 'Pragma';

    case PROXY_AUTH = 'Proxy-Authorization';

    case RANGE = 'Range';

    case REFERER = 'Referer';

    case TE = 'TE';

    case USER_AGENT = 'User-Agent';

    case UPGRADE = 'Upgrade';

    case VIA = 'Via';

    case WARNING = 'Warning';
}
