<?php

return [
    'notices' => [
        'created' => '已成功建立一個新的巢 :name，ID 為 :id。',
        'deleted' => '已成功從面板中刪除請求的巢。',
        'updated' => '已成功更新巢的組態選項。',
    ],
    'eggs' => [
        'notices' => [
            'imported' => '已成功匯入此蛋及其相關變數。',
            'updated_via_import' => '此蛋已使用提供的檔案進行更新。',
            'deleted' => '已成功從面板中刪除請求的蛋。',
            'updated' => '蛋的組態已成功更新。',
            'script_updated' => '蛋的安裝腳本已更新，並將在伺服器安裝時執行。',
            'egg_created' => '已成功產下一個新蛋。您需要重新啟動任何正在運行的守護進程以應用此新蛋。',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => '變數 ":variable" 已刪除，重建後將不再適用於伺服器。',
            'variable_updated' => '變數 ":variable" 已更新。您需要重建任何使用此變數的伺服器才能應用變更。',
            'variable_created' => '已成功建立新變數並分配給此蛋。',
        ],
    ],
];
