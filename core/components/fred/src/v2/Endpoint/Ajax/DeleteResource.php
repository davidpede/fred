<?php

/*
 * This file is part of the Fred package.
 *
 * Copyright (c) MODX, LLC
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fred\v2\Endpoint\Ajax;

class DeleteResource extends Endpoint
{
    use \Fred\Traits\Endpoint\Ajax\DeleteResource;

    private $resourceClass = 'modResource';
    protected $deletedTime = 0;
}
