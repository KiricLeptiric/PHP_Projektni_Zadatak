<?php 
if (!isset($_SESSION['user']['role']) || $_SESSION['user']['role'] != 2) {
    header("Location: index.php");
    exit;
}
if ($_SESSION['user']['valid'] == 'true') {
    if (!isset($action)) { $action = 2; }
    print '
    <h1>Administration</h1>
    <div id="admin">
        <ul>
            <li><a href="index.php?menu=7&amp;action=2">Mercedes News</a></li>
        </ul>';
        if (isset($action) && $action == 1) { 
            include("admin/news.php"); 
        }
    print '
    </div>';
}
else {
    $_SESSION['message'] = '<p>Please register or login using your credentials!</p>';
    header("Location: index.php?menu=6");
}
?>