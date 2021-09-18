<?php

/**
 * Created
 * User: NamNv
 * Date: 18/09/2021
 * Time: 05:37AM
 */

namespace App\Http\Utils;

use Illuminate\Support\Facades\Log;

class AppUtils
{
    const AUTH_FLAG_ADMIN = 0;
    const AUTH_FLAG_USER = 1;

    const STATE_FLAG_DELETE = -1;
    const STATE_FLAG_REGISTRATION = 0;
    const STATE_FLAG_VALID = 0;

    const ACCOUNT_TYPE_ADMIN = 'admin';
    const ACCOUNT_TYPE_USER = 'user';
    const TIME_OUT_SETTING_DAY_DEFAULT = 1;

    const MAIL_TYPE_ADMIN = 0;
    const MAIL_TYPE_USER = 1;
}
