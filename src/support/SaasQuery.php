<?php

// +----------------------------------------------------------------------
// | Think SaaS 开源软件
// +----------------------------------------------------------------------
// | CatchAdmin [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2024~2030 https://catchadmin.com/ All rights reserved.
// +----------------------------------------------------------------------
// | Author: JaguarJack <njphper@gmail.com>
// +----------------------------------------------------------------------

declare(strict_types=1);

namespace think\saas\support;

use think\db\Query;
use think\saas\support\traits\SaaSQueryTrait;

class SaasQuery extends Query
{
    use SaaSQueryTrait;
}
