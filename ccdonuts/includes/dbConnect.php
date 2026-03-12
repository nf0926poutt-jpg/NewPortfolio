 <?php
// 1. まず接続情報のファイルを読み込む
require_once('localDBdata.php'); 

// 2. 定数を使って接続する
try {
    // ここが「new PDO」になります！
    $pdo = new PDO(ACCESSDB, DBID, DBPW); 
    
    // エラーが起きた時に「例外（エラー通知）」を出す設定
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    // 接続に失敗した場合は、そこで処理を止めてメッセージを出す
    exit('データベース接続失敗');
}
?>