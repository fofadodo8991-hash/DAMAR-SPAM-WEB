<?php
session_start();

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input_username = trim($_POST['username'] ?? '');
    $input_password = trim($_POST['password'] ?? '');

    if (empty($input_username) || empty($input_password)) {
        $error = 'يرجى ملء جميع الحقول';
    } else {
        $json_path = __DIR__ . 'users.json';

        if (file_exists($json_path)) {
            $json_content = file_get_contents($json_path);
            $data = json_decode($json_content, true);

            if (json_last_error() === JSON_ERROR_NONE && isset($data['users']) && is_array($data['users'])) {
                $is_valid = false;
                $is_admin = false;

                foreach ($data['users'] as $user) {
                    if (isset($user['username'], $user['password'])) {
                        if ($user['username'] === $input_username && $user['password'] === $input_password) {
                            $is_valid = true;
                            if ($user['username'] === 'ADHAM111' && $user['password'] === 'KAREM111') {
                                $is_admin = true;
                            }
                            break;
                        }
                    }
                }

                if ($is_valid) {
                    $_SESSION['logged_in'] = true;
                    $_SESSION['username'] = $input_username;

                    if ($is_admin) {
                        header('Location: admin.html');
                    } else {
                        header('Location: spam.html');
                    }
                    exit;
                } else {
                    $error = 'اسم المستخدم أو كلمة المرور غير صحيحة';
                }
            } else {
                $error = 'خطأ في قراءة ملف المستخدمين';
            }
        } else {
            $error = 'ملف المستخدمين غير موجود';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>DAMAR SPAM - تسجيل الدخول</title>
  
  <!-- Font Awesome للأيقونات -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <style>
    :root {
      --primary: #00ff9d;
      --primary-dark: #00c853;
      --bg: #0a0f1a;
      --card: #0f1a2e;
      --text: #e0f7fa;
      --text-light: #80deea;
      --error: #ff6b6b;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, var(--bg), #001220);
      color: var(--text);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    .login-card {
      background: var(--card);
      border: 1px solid rgba(0, 255, 157, 0.18);
      border-radius: 16px;
      padding: 2.5rem 2rem;
      width: 100%;
      max-width: 420px;
      box-shadow: 0 10px 40px rgba(0, 255, 157, 0.08);
      backdrop-filter: blur(8px);
      transition: transform 0.3s ease;
    }

    .login-card:hover {
      transform: translateY(-5px);
    }

    .logo-title {
      text-align: center;
      margin-bottom: 2.2rem;
    }

    .logo-title h1 {
      font-size: 2.4rem;
      color: var(--primary);
      text-shadow: 0 0 15px rgba(0, 255, 157, 0.4);
      margin-bottom: 0.4rem;
    }

    .logo-title p {
      color: var(--text-light);
      font-size: 1.05rem;
    }

    .input-group {
      position: relative;
      margin-bottom: 1.6rem;
    }

    .input-group i {
      position: absolute;
      right: 1rem;
      top: 50%;
      transform: translateY(-50%);
      color: var(--text-light);
      font-size: 1.1rem;
    }

    .input-group input {
      width: 100%;
      padding: 1rem 1rem 1rem 3.2rem;
      background: rgba(13, 27, 42, 0.8);
      border: 1px solid rgba(0, 188, 212, 0.3);
      border-radius: 10px;
      color: white;
      font-size: 1.05rem;
      transition: all 0.25s ease;
    }

    .input-group input:focus {
      outline: none;
      border-color: var(--primary);
      box-shadow: 0 0 0 3px rgba(0, 255, 157, 0.18);
    }

    .btn-login {
      width: 100%;
      padding: 1.1rem;
      background: linear-gradient(90deg, var(--primary-dark), var(--primary));
      color: black;
      font-size: 1.15rem;
      font-weight: bold;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      transition: all 0.3s ease;
      margin-top: 1rem;
      box-shadow: 0 6px 20px rgba(0, 200, 83, 0.25);
    }

    .btn-login:hover {
      transform: translateY(-2px);
      box-shadow: 0 12px 30px rgba(0, 200, 83, 0.4);
    }

    .error-msg {
      background: rgba(255, 107, 107, 0.15);
      color: var(--error);
      padding: 0.9rem;
      border-radius: 8px;
      text-align: center;
      margin: 1.2rem 0;
      font-size: 1.02rem;
      border-right: 4px solid var(--error);
    }

    .footer {
      text-align: center;
      margin-top: 2rem;
      color: #78909c;
      font-size: 0.92rem;
    }

    @media (max-width: 480px) {
      .login-card {
        padding: 2rem 1.4rem;
      }
      .logo-title h1 {
        font-size: 2.1rem;
      }
    }
  </style>
</head>
<body>

<div class="login-card">
  <div class="logo-title">
    <h1>DAMAR SPAM</h1>
    <p>DAMAR SPAM TEAM</p>
  </div>

  <form method="POST">
    <div class="input-group">
      <i class="fas fa-user"></i>
      <input type="text" name="username" placeholder="اسم المستخدم" required autocomplete="off" />
    </div>

    <div class="input-group">
      <i class="fas fa-lock"></i>
      <input type="password" name="password" placeholder="كلمة المرور" required autocomplete="off" />
    </div>

    <button type="submit" class="btn-login">
      <i class="fas fa-sign-in-alt" style="margin-left: 8px;"></i>
      تسجيل الدخول
    </button>
  </form>

  <?php if (!empty($error)): ?>
    <div class="error-msg">
      <?php echo htmlspecialchars($error); ?>
    </div>
  <?php endif; ?>

  <div class="footer">
    © <?php echo date('Y'); ?> DAMAR SPAM - جميع الحقوق محفوظة
  </div>
</div>

</body>
</html>
