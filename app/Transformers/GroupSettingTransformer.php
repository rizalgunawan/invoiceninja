<?php
/**
 * Invoice Ninja (https://invoiceninja.com)
 *
 * @link https://github.com/invoiceninja/invoiceninja source repository
 *
 * @copyright Copyright (c) 2019. Invoice Ninja LLC (https://invoiceninja.com)
 *
 * @license https://opensource.org/licenses/AAL
 */

namespace App\Transformers;

use App\Models\GroupSetting;
use App\Utils\Traits\MakesHash;

/**
 * class ClientTransformer
 */
class GroupSettingTransformer extends EntityTransformer
{
    use MakesHash;

    protected $defaultIncludes = [
    ];

    /**
     * @var array
     */
    protected $availableIncludes = [
    ];


    /**
     * @param Client $client
     *
     * @return array
     */
    public function transform(GroupSetting $group_setting)
    {
        return [
            'id' => $this->encodePrimaryKey($group_setting->id),
            'name' => $group_setting->name ?: '',
            'settings' => $group_setting->settings ?: '',
        ];
    }
}