<!DOCTYPE html>
<html>

<head>
    <base href="public/style/"/>
    <link rel="stylesheet" href="admin.css" />
    <link rel="stylesheet" href="map.css" />
    <link rel="stylesheet" href="table_process.css" />
</head>

<body>
    <div class="admin">
        <div class="header-bar">
            <a class="logout-btn">LOGOUT</a>
        </div>

        <div class="state-admin">
            <div class="map-state">
                <div class="status">
                    <div class="status_">
                        <div class="status-color empty">
                        </div>
                        <span>Trống</span>
                    </div>
                    <div class="status_">
                        <div class="status-color picked">
                        </div>
                        <span> Đặt chỗ</span>
                    </div>
                    <div class="status_">
                        <div class="status-color done">
                        </div>
                        <span>Có khách</span>
                    </div>
                    <div class="status_">
                        <div class="status-color late">
                        </div>
                        <span>Trễ</span>
                    </div>
                </div>
                <?php include "./mvc/views/admin/table_map.php"; ?>
            </div>
            <div class="process-state">
                <?php include "./mvc/views/admin/table_process.php"; ?>
            </div>
        </div>
    </div>
</body>

</html>