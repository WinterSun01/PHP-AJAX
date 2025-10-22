<?php

$users = 
[
    ['name' => 'Иван',  'score' => 85],
    ['name' => 'Александр',  'score' => 90],
    ['name' => 'Мария',  'score' => 78],
    ['name' => 'Анна',   'score' => 92],
    ['name' => 'Ольга', 'score' => 88],
];

function validateUsers($users): bool 
{
    if (!is_array($users) || empty($users)) 
        {
            return false;
        }

    foreach ($users as $user) 
        {
            if (!is_array($user)) 
                {
                    return false;
                }
            if (!array_key_exists('name', $user) || !array_key_exists('score', $user)) 
                {
                    return false;
                }
        if (!is_string($user['name'])) 
                {
                    return false;
                }
        if (!is_numeric($user['score'])) 
                {
                    return false;
                }
    }

    return true;
}

function sortByScore(array &$users): void 
{
    usort($users, function($a, $b) 
    {
        return (float)$b['score'] <=> (float)$a['score'];
    });
}
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Пользователи, отсортированные по баллам</title>
<style>
    body { font-family: Arial, sans-serif; padding: 20px; }
    table { border-collapse: collapse; width: 80%; max-width: 800px; margin: 0 auto; }
    th, td { border: 1px solid #ccc; padding: 8px 12px; text-align: left; }
    th { background: #f4f4f4; }
    tr:nth-child(even) { background: #fafafa; }
    caption { caption-side: top; font-weight: bold; margin-bottom: 8px; }
    .error { color: #c00; text-align: center; font-weight: bold; }
</style>
</head>
<body>

<?php
if (!validateUsers($users)) 
    {
        echo '<p class="error">Invalid or empty user data</p>';
    } 
else 
    {
        sortByScore($users);
        echo '<table>';
        echo '<caption>Пользователи, отсортированные по баллам (самый высокий → самый низкий)</caption>';
        echo '<thead><tr><th>Номер</th><th>Имя</th><th>Баллы</th></tr></thead>';
        echo '<tbody>';
    foreach ($users as $index => $user) 
        {
            $rank = $index + 1;
            $safeName = htmlspecialchars($user['name'], ENT_QUOTES, 'UTF-8');
            $safeScore = htmlspecialchars((string)$user['score'], ENT_QUOTES, 'UTF-8');
            echo "<tr>";
            echo "<td>{$rank}</td>";
            echo "<td>{$safeName}</td>";
            echo "<td>{$safeScore}</td>";
            echo "</tr>";
        }
    echo '</tbody>';
    echo '</table>';
    }
?>

</body>
</html>
