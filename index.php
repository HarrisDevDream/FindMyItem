<?php
require_once 'dbconnect.php';

// 取得所有可借用的物品清單
$stmt = $conn->prepare("SELECT * FROM items WHERE borrowed = 0");
$stmt->execute();
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>物品借用清單</title>
</head>
<body>
    <h1>物品借用清單</h1>

    <table>
        <tr>
            <th>物品名稱</th>
            <th>物品描述</th>
            <th>操作</th>
        </tr>

        <?php foreach ($items as $item): ?>
            <tr>
                <td><?php echo $item['name']; ?></td>
                <td><?php echo $item['description']; ?></td>
                <td>
                    <form action="borrow_request.php" method="POST">
                        <input type="hidden" name="item_id" value="<?php echo $item['id']; ?>">
                        <input type="submit" value="借用">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>