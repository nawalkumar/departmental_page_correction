<?php
$dept = $_GET['dept'] ?? 'cse';
switch ($dept) {
    case 'cse':
        $section = $_GET['section'] ?? 'fac';
        header("Location: cse/$section.php?dept=$dept&section=$section");
        exit;
    case 'ece':
        $section = $_GET['section'] ?? 'fac';
        header("Location: ece/$section.php?dept=$dept&section=$section");
        exit;
    case 'eee':
        $section = $_GET['section'] ?? 'fac';
        header("Location: eee/$section.php?dept=$dept&section=$section");
        exit;
    case 'ce':
        $section = $_GET['section'] ?? 'fac';
        header("Location: ce/$section.php?dept=$dept&section=$section");
        exit;
    case 'me':
        $section = $_GET['section'] ?? 'fac';
        header("Location: me/$section.php?dept=$dept&section=$section");
        exit;

    default:
        echo "Please select a valid department.";
        break;
}
?>