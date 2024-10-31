<?php header('HTTP/1.0 403 Forbidden'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>403 Forbidden: Access Denied</title>

    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .full-height {
            height: 100vh;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .position-ref {
            position: relative;
        }
        .content {
            text-align: center;
        }
        .title {
            font-size: 84px;
            color: #db1c48;
        }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
        .description {
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            <img src=" data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAAA9CAYAAAAXgFT/AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyNpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDYuMC1jMDAyIDc5LjE2NDQ2MCwgMjAyMC8wNS8xMi0xNjowNDoxNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIDIxLjIgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkZBQ0I1NTdGREE2ODExRUFCNDlGQTVFRjMzOTYxRDlGIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkZBQ0I1NTgwREE2ODExRUFCNDlGQTVFRjMzOTYxRDlGIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RkFDQjU1N0REQTY4MTFFQUI0OUZBNUVGMzM5NjFEOUYiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RkFDQjU1N0VEQTY4MTFFQUI0OUZBNUVGMzM5NjFEOUYiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5ap4MEAAAUhklEQVR42uydDZAl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">
            <br />
            ACCESS DENIED
        </div>

        <div class="description m-b-md">
            Your request has been blocked as your connecting IP (<?php echo urlencode($ip); ?>) is marked:
            <strong style="color: #db1c48">
                <?php
                switch ($code) {
                    case NSTIS_THREAT:
                        echo "THREAT";
                        break;

                    case NSTIS_ABUSER:
                        echo "ABUSER";
                        break;

                    case NSTIS_MALWARE:
                        echo "MALWARE";
                        break;

                    case NSTIS_BOTNET:
                        echo "BOTNET";
                        break;
                }
                ?>
            </strong>
        </div>
    </div>
</div>
</body>
</html>