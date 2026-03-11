<?php
header('Content-Type: application/json');

$jsonFile = 'api/users.json';

if (!file_exists($jsonFile)) {
    file_put_contents($jsonFile, json_encode(['users' => []], JSON_PRETTY_PRINT));
}

$data = json_decode(file_get_contents($jsonFile), true) ?? ['users' => []];

$action   = $_POST['action']   ?? '';
$username = trim($_POST['username'] ?? '');
$password = trim($_POST['password'] ?? '');

$response = ['success' => false, 'message' => 'طلب غير صالح'];

switch ($action) {
    case 'add':
        if (empty($username) || empty($password)) {
            $response['message'] = 'اسم المستخدم وكلمة المرور مطلوبين';
            break;
        }
        // تحقق إذا موجود بالفعل
        foreach ($data['users'] as $u) {
            if ($u['username'] === $username) {
                $response['message'] = 'اسم المستخدم موجود بالفعل';
                echo json_encode($response);
                exit;
            }
        }
        $data['users'][] = ['username' => $username, 'password' => $password];
        $response = ['success' => true, 'message' => 'تم إضافة المستخدم بنجاح'];
        break;

    case 'edit':
        if (empty($username) || empty($password)) {
            $response['message'] = 'اسم المستخدم وكلمة المرور مطلوبين';
            break;
        }
        $found = false;
        foreach ($data['users'] as &$u) {
            if ($u['username'] === $username) {
                $u['password'] = $password;
                $found = true;
                break;
            }
        }
        $response = $found
            ? ['success' => true, 'message' => 'تم تعديل كلمة المرور']
            : ['success' => false, 'message' => 'المستخدم غير موجود'];
        break;

    case 'delete':
        if (empty($username)) {
            $response['message'] = 'اسم المستخدم مطلوب';
            break;
        }
        $newUsers = [];
        $found = false;
        foreach ($data['users'] as $u) {
            if ($u['username'] !== $username) {
                $newUsers[] = $u;
            } else {
                $found = true;
            }
        }
        $data['users'] = $newUsers;
        $response = $found
            ? ['success' => true, 'message' => 'تم حذف المستخدم']
            : ['success' => false, 'message' => 'المستخدم غير موجود'];
        break;

    case 'list':
        $response = [
            'success' => true,
            'users'   => array_column($data['users'], 'username')
        ];
        break;
}

file_put_contents($jsonFile, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
echo json_encode($response);
exit;
