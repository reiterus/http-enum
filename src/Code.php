<?php

declare(strict_types=1);

/*
 * This file is part of the Reiterus\HttpEnum package.
 * (c) Pavel Vasin <reiterus@yandex.ru>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Reiterus\HttpEnum;

enum Code: Int
{
    // Continue
    case CONTINUE = 100;

    // Switching Protocols
    case SWH_PROTOCOLS = 101;

    // Processing
    case PROCESSING = 102;

    // Early Hints
    case EARLY_HINTS = 103;

    // OK
    case OK = 200;

    // Created
    case CREATED = 201;

    // Accepted
    case ACCEPTED = 202;

    // Non-Authoritative Information
    case NON_AUTH_INFO = 203;

    // No Content
    case NO_CONTENT = 204;

    // Reset Content
    case RESET_CONTENT = 205;

    // Partial Content
    case PART_CONTENT = 206;

    // Multi-Status
    case MULTI_STATUS = 207;

    // Already Reported
    case ALREADY_REPORTED = 208;

    // IM Used
    case IM_USED = 226;

    // Multiple Choices
    case MUL_CHOICES = 300;

    // Moved Permanently
    case MOVED_PERM = 301;

    // Found
    case FOUND = 302;

    // See Other
    case SEE_OTHER = 303;

    // Not Modified
    case NOT_MODIFIED = 304;

    // Use Proxy
    case USE_PROXY = 305;

    // Temporary Redirect
    case TEMP_REDIRECT = 307;

    // Permanent Redirect
    case PERM_REDIRECT = 308;

    // Bad Request
    case BAD_REQUEST = 400;

    // Unauthorized
    case UNAUTHORIZED = 401;

    // Payment Required
    case PAY_REQUIRED = 402;

    // Forbidden
    case FORBIDDEN = 403;

    // Not Found
    case NOT_FOUND = 404;

    // Method Not Allowed
    case M_NOT_ALLOWED = 405;

    // Not Acceptable
    case NOT_ACCEPTABLE = 406;

    // Proxy Authentication Required
    case PROXY_AUTH_REQ = 407;

    // Request Timeout
    case REQ_TIMEOUT = 408;

    // Conflict
    case CONFLICT = 409;

    // Gone
    case GONE = 410;

    // Length Required
    case LENGTH_REQ = 411;

    // Precondition Failed
    case PRE_COND_FAILED = 412;

    // content Too Large
    case CONTENT_LARGE = 413;

    // Uri Too Long
    case URI_TOO_LONG = 414;

    // Unsupported Media Type
    case UNS_MEDIA_TYPE = 415;

    // Range Not Satisfiable
    case NOT_SAT_ABLE = 416;

    // Expectation Failed
    case EXP_FAILED = 417;

    // I'm A Teapot
    case IAM_TEAPOT = 418;

    // Misdirected Request
    case MIS_DIR_REQ = 421;

    // Unprocessable Content
    case UNP_CONTENT = 422;

    // Locked
    case LOCKED = 423;

    // Failed Dependency
    case FAILED_DEP = 424;

    // Too Early
    case TOO_EARLY = 425;

    // Upgrade Required
    case UPGRADE_REQ = 426;

    // Precondition Required
    case PRE_COND_REQ = 428;

    // Too Many Requests
    case TOO_MANY_REQ = 429;

    // Request Header Fields Too Large
    case FDS_TOO_LARGE = 431;

    // Unavailable For Legal Reasons
    case UNV_LEGAL_REASONS = 451;

    // Internal Server Error
    case INT_SRV_ERROR = 500;

    // Not Implemented
    case NOT_IMPLEMENTED = 501;

    // Bad Gateway
    case BAD_GATEWAY = 502;

    // Service Unavailable
    case SVC_UNV_ABLE = 503;

    // Gateway Timeout
    case GTW_TOUT = 504;

    // Http Version Not Supported
    case HTTP_NOT_SUPP = 505;

    // Variant Also Negotiates
    case VAR_NEGOTIATES = 506;

    // Insufficient Storage
    case INS_STORAGE = 507;

    // Loop Detected
    case LOOP_DETECTED = 508;

    // Not Extended
    case NOT_EXTENDED = 510;

    // Network Authentication Required
    case NET_AUTH_REQ = 511;
}
