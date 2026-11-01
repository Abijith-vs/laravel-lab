<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CST463 Laravel Lab</title>
    <style>
        body { font-family: system-ui, sans-serif; max-width: 760px; margin: 40px auto; padding: 0 16px; color: #1f2937; line-height: 1.6 }
        h1 { color: #dc2626; margin-bottom: 0 }
        code { background: #f3f4f6; padding: 2px 6px; border-radius: 4px }
        .box { border: 1px solid #e5e7eb; border-radius: 10px; padding: 14px 18px; margin: 18px 0 }
    </style>
</head>
<body>
    <h1>CST463 Laravel Lab</h1>
    <p>Laravel {{ app()->version() }} · PHP {{ PHP_VERSION }} · running in GitHub Codespaces</p>

    <div class="box">
        <strong>This page came from:</strong><br>
        route <code>GET /</code> in <code>routes/web.php</code> &rarr;
        view <code>resources/views/home.blade.php</code>
    </div>

    <div class="box">
        <strong>The database is ready:</strong>
        the <code>students</code> table has {{ \App\Models\Student::count() }} sample rows.
    </div>
</body>
</html>
