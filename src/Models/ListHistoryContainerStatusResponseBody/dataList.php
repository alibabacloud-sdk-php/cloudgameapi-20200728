<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListHistoryContainerStatusResponseBody;

use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListHistoryContainerStatusResponseBody\dataList\playerDetailList;
use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @description 主机账号ID
     *
     * @var string
     */
    public $accountId;

    /**
     * @description 容器退出时间（Linux时间戳，单位毫秒）
     *
     * @var int
     */
    public $containerQuitTime;

    /**
     * @description 容器启动时间（Linux时间戳，单位毫秒）
     *
     * @var int
     */
    public $containerStartTime;

    /**
     * @description 容器状态
     *
     * @var string
     */
    public $containerState;

    /**
     * @description 游戏ID
     *
     * @var string
     */
    public $gameId;

    /**
     * @description 游戏会话ID
     *
     * @var string
     */
    public $gameSessionId;

    /**
     * @description 玩家信息集合
     *
     * @var playerDetailList[]
     */
    public $playerDetailList;

    /**
     * @description 项目ID
     *
     * @var string
     */
    public $projectId;

    /**
     * @description 自定义标识
     *
     * @var string
     */
    public $tags;

    /**
     * @description 系统时间戳
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'accountId'          => 'AccountId',
        'containerQuitTime'  => 'ContainerQuitTime',
        'containerStartTime' => 'ContainerStartTime',
        'containerState'     => 'ContainerState',
        'gameId'             => 'GameId',
        'gameSessionId'      => 'GameSessionId',
        'playerDetailList'   => 'PlayerDetailList',
        'projectId'          => 'ProjectId',
        'tags'               => 'Tags',
        'timestamp'          => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->containerQuitTime) {
            $res['ContainerQuitTime'] = $this->containerQuitTime;
        }
        if (null !== $this->containerStartTime) {
            $res['ContainerStartTime'] = $this->containerStartTime;
        }
        if (null !== $this->containerState) {
            $res['ContainerState'] = $this->containerState;
        }
        if (null !== $this->gameId) {
            $res['GameId'] = $this->gameId;
        }
        if (null !== $this->gameSessionId) {
            $res['GameSessionId'] = $this->gameSessionId;
        }
        if (null !== $this->playerDetailList) {
            $res['PlayerDetailList'] = [];
            if (null !== $this->playerDetailList && \is_array($this->playerDetailList)) {
                $n = 0;
                foreach ($this->playerDetailList as $item) {
                    $res['PlayerDetailList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['ContainerQuitTime'])) {
            $model->containerQuitTime = $map['ContainerQuitTime'];
        }
        if (isset($map['ContainerStartTime'])) {
            $model->containerStartTime = $map['ContainerStartTime'];
        }
        if (isset($map['ContainerState'])) {
            $model->containerState = $map['ContainerState'];
        }
        if (isset($map['GameId'])) {
            $model->gameId = $map['GameId'];
        }
        if (isset($map['GameSessionId'])) {
            $model->gameSessionId = $map['GameSessionId'];
        }
        if (isset($map['PlayerDetailList'])) {
            if (!empty($map['PlayerDetailList'])) {
                $model->playerDetailList = [];
                $n                       = 0;
                foreach ($map['PlayerDetailList'] as $item) {
                    $model->playerDetailList[$n++] = null !== $item ? playerDetailList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
