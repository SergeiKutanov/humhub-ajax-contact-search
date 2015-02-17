<div class="alert alert-info alert-dismissable">Найдено пользователей: <?php echo count($users);?></div>

<?php
if (count($users) > 0) {
    echo '<ul class="list-group">';
    foreach ($users as $user) {
        $line = '<li class="list-group-item">';
        $line .= $user->userProfile->firstname . " " . $user->userProfile->lastname;
        $line .= '<ul class="list-group">';
        if ($user->userProfile->phone_work) {
            $line .= '<li class="list-group-item">Рабочий: ' . $user->userProfile->phone_work . "</li>";
        }
        if ($user->userProfile->mobile) {
            $line .= '<li class="list-group-item">Мобильный: ' . $user->userProfile->mobile . "</li>";
        }
        if ($user->userProfile->phone_private) {
            $line .= '<li class="list-group-item">Личный: ' . $user->userProfile->phone_private . "</li>";
        }
        $line .= "</ul>";
        $line .= "</li>";
        echo $line;
    }
    echo '</ul>';
}
?>