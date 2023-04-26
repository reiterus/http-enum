<?php

declare(strict_types=1);

/*
 * This file is part of the Reiterus\HttpEnum package.
 * (c) Pavel Vasin <reiterus@yandex.ru>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Reiterus\HttpEnum;

enum Server: string
{
    case DOC_ROOT = 'DOCUMENT_ROOT';

    case HTTP_ACCEPT = 'HTTP_ACCEPT';

    case HTTP_ACT_ENC = 'HTTP_ACCEPT_ENCODING';

    case HTTP_ACT_LANG = 'HTTP_ACCEPT_LANGUAGE';

    case HTTP_CONN = 'HTTP_CONNECTION';

    case HTTP_HOST = 'HTTP_HOST';

    case HTTP_SEC_F_DEST = 'HTTP_SEC_FETCH_DEST';

    case HTTP_SEC_F_MODE = 'HTTP_SEC_FETCH_MODE';

    case HTTP_SEC_F_SITE = 'HTTP_SEC_FETCH_SITE';

    case HTTP_SEC_F_USER = 'HTTP_SEC_FETCH_USER';

    case HTTP_SEC_UA = 'HTTP_SEC_CH_UA';

    case HTTP_SEC_UA_MOB = 'HTTP_SEC_CH_UA_MOBILE';

    case HTTP_SEC_UA_PLF = 'HTTP_SEC_CH_UA_PLATFORM';

    case HTTP_UPG_INS_REQ = 'HTTP_UPGRADE_INSECURE_REQUESTS';

    case HTTP_USER_AGENT = 'HTTP_USER_AGENT';

    case PHP_SELF = 'PHP_SELF';

    case REM_ADDR = 'REMOTE_ADDR';

    case REM_PORT = 'REMOTE_PORT';

    case REQ_METHOD = 'REQUEST_METHOD';

    case REQ_TIME = 'REQUEST_TIME';

    case REQ_TIME_FLOAT = 'REQUEST_TIME_FLOAT';

    case REQ_URI = 'REQUEST_URI';

    case SCR_FILENAME = 'SCRIPT_FILENAME';

    case SCR_NAME = 'SCRIPT_NAME';

    case SRV_NAME = 'SERVER_NAME';

    case SRV_PORT = 'SERVER_PORT';

    case SRV_PROTOCOL = 'SERVER_PROTOCOL';

    case SRV_SOFTWARE = 'SERVER_SOFTWARE';
}
