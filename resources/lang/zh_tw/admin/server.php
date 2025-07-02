<?php

return [
    'exceptions' => [
        'no_new_default_allocation' => '您正在嘗試刪除此伺服器的預設分配，但沒有可用的備用分配。',
        'marked_as_failed' => '此伺服器被標記為先前安裝失敗。在此狀態下無法切換目前狀態。',
        'bad_variable' => ':name 變數存在驗證錯誤。',
        'daemon_exception' => '嘗試與守護進程通訊時發生異常，導致 HTTP/:code 回應代碼。此異常已記錄。(請求 ID: :request_id)',
        'default_allocation_not_found' => '在伺服器的分配中找不到請求的預設分配。',
    ],
    'alerts' => [
        'startup_changed' => '此伺服器的啟動組態已更新。如果此伺服器的巢或蛋已更改，現在將進行重新安裝。',
        'server_deleted' => '伺服器已成功從系統中刪除。',
        'server_created' => '伺服器已成功在面板上建立。請允許守護進程幾分鐘以完全安裝此伺服器。',
        'build_updated' => '此伺服器的建置詳細資訊已更新。某些變更可能需要重新啟動才能生效。',
        'suspension_toggled' => '伺服器暫停狀態已變更為 :status。',
        'rebuild_on_boot' => '此伺服器已被標記為需要重建 Docker 容器。這將在伺服器下次啟動時發生。',
        'install_toggled' => '此伺服器的安裝狀態已切換。',
        'server_reinstalled' => '此伺服器已排入佇列，現在開始重新安裝。',
        'details_updated' => '伺服器詳細資訊已成功更新。',
        'docker_image_updated' => '已成功更改此伺服器要使用的預設 Docker 映像。需要重新啟動才能應用此更改。',
        'node_required' => '您必須至少設定一個節點才能將伺服器新增到此面板。',
        'transfer_nodes_required' => '您必須至少設定兩個節點才能傳輸伺服器。',
        'transfer_started' => '伺服器傳輸已開始。',
        'transfer_not_viable' => '您選擇的節點沒有足夠的可用磁碟空間或記憶體來容納此伺服器。',
    ],
];
