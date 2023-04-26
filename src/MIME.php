<?php

declare(strict_types=1);

/*
 * This file is part of the Reiterus\HttpEnum package.
 * (c) Pavel Vasin <reiterus@yandex.ru>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Reiterus\HttpEnum;

enum MIME: string
{
    case ATOM = 'application/atom+xml';

    case DOC = 'application/msword';

    case DTD = 'application/xml-dtd';

    case DVI = 'application/x-dvi';

    case EXCEL = 'application/vnd.ms-excel';

    case FLASH = 'application/x-shockwave-flash';

    case FORM = 'application/x-www-form-urlencoded';

    case GZIP = 'application/gzip';

    case JS = 'application/javascript';

    case JSON = 'application/json';

    case JSONLD = 'application/ld+json';

    case OGG = 'application/ogg';

    case PDF = 'application/pdf';

    case POST_SCR = 'application/postscript';

    case PWR_POINT = 'application/vnd.ms-powerpoint';

    case RAR = 'application/x-rar-compressed';

    case RDF = 'application/rdf+xml';

    case RSS = 'application/rss+xml';

    case SOAP = 'application/soap+xml';

    case STREAM = 'application/octet-stream';

    case TORRENT = 'application/x-bittorrent';

    case TTF = 'application/x-font-ttf';

    case WOFF = 'application/font-woff';

    case XHTML = 'application/xhtml+xml';

    case XML = 'application/xml';

    case ZIP = 'application/zip';

    case CSS = 'text/css';

    case TXT = 'text/plain';

    case TXT_HTML = 'text/html';

    case TXT_JS = 'text/javascript';

    case TXT_XML = 'text/xml';

    case FORM_M_PART = 'multipart/form-data';
}
