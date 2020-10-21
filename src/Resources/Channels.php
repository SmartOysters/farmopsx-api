<?php

/*
 * This file is part of the FarmOpsX API PHP Package
 *
 * (c) James Rickard <james.rickard@smartoysters.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartOysters\FarmOpsX\Resources;

use SmartOysters\FarmOpsX\Resources\Base\Resource;
use SmartOysters\FarmOpsX\Response;

class Channels extends Resource
{
    protected $disabled = ['list', 'fetch', 'create', 'update'];

    public function Channels(int $teamId, int $channelId, bool $scheduleImport = true)
    {
        return $this->request->post('/', compact('teamId', 'channelId', 'scheduleImport'));
    }

}
