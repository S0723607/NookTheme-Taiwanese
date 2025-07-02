<?php

return [
    'daemon_connection_failed' => '嘗試與守護進程通訊時發生異常，導致 HTTP/:code 回應代碼。此異常已記錄。',
    'node' => [
        'servers_attached' => '節點必須沒有任何伺服器連結才能被刪除。',
        'daemon_off_config_updated' => '守護進程設定<strong>已更新</strong>，但在嘗試自動更新守護進程上的設定檔時遇到錯誤。您需要手動更新守護進程的設定檔 (config.yml) 才能套用這些變更。',
    ],
    'allocations' => [
        'server_using' => '伺服器目前已指派給此分配。只有在沒有伺服器目前指派的情況下才能刪除分配。',
        'too_many_ports' => '不支援一次新增超過 1000 個埠的單一範圍。',
        'invalid_mapping' => '為 :port 提供的映射無效，無法處理。',
        'cidr_out_of_range' => 'CIDR 標記法只允許 /25 到 /32 之間的遮罩。',
        'port_out_of_range' => '分配中的埠必須大於 1024 且小於或等於 65535。',
    ],
    'nest' => [
        'delete_has_servers' => '無法從面板刪除具有活動伺服器的巢。',
        'egg' => [
            'delete_has_servers' => '無法從面板刪除具有活動伺服器的蛋。',
            'invalid_copy_id' => '選取用於複製腳本的蛋不存在，或者它本身正在複製腳本。',
            'must_be_child' => '此蛋的「從...複製設定」指令必須是所選巢的子選項。',
            'has_children' => '此蛋是一個或多個其他蛋的父級。請在刪除此蛋之前刪除那些蛋。',
        ],
        'variables' => [
            'env_not_unique' => '環境變數 :name 在此蛋中必須是唯一的。',
            'reserved_name' => '環境變數 :name 受保護，無法指派給變數。',
            'bad_validation_rule' => '驗證規則 ":rule" 對此應用程式而言不是有效的規則。',
        ],
        'importer' => [
            'json_error' => '嘗試解析 JSON 檔案時發生錯誤: :error。',
            'file_error' => '提供的 JSON 檔案無效。',
            'invalid_json_provided' => '提供的 JSON 檔案格式無法識別。',
        ],
    ],
    'subusers' => [
        'editing_self' => '不允許編輯您自己的子使用者帳戶。',
        'user_is_owner' => '您不能將伺服器擁有者新增為此伺服器的子使用者。',
        'subuser_exists' => '具有該電子郵件地址的使用者已在此伺服器上被指派為子使用者。',
    ],
    'databases' => [
        'delete_has_databases' => '無法刪除具有活動資料庫連結的資料庫主機伺服器。',
    ],
    'tasks' => [
        'chain_interval_too_long' => '鏈式任務的最大間隔時間為 15 分鐘。',
    ],
    'locations' => [
        'has_nodes' => '無法刪除具有活動節點的地理位置。',
    ],
    'users' => [
        'node_revocation_failed' => '無法在 <a href=":link">節點 #:node</a> 上撤銷金鑰。:error',
    ],
    'deployment' => [
        'no_viable_nodes' => '找不到滿足自動部署指定要求的節點。',
        'no_viable_allocations' => '找不到滿足自動部署要求的分配。',
    ],
    'api' => [
        'resource_not_found' => '請求的資源在此伺服器上不存在。',
    ],
];
