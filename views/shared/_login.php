<?php
$session = PhpMvc\View::getHttpContext()->getSession();

echo '<ul class="nav navbar-nav navbar-right">';

if (empty($session['user'])) {
    echo '<li>' . PhpMvc\Html::actionLink('Log in', 'index', 'account') . '</li>';
}
else {
    echo '<li><a>Hello, ' . $session['user'] . '!</a></li>';
    echo '<li>' . PhpMvc\Html::actionLink('Log out', 'logout', 'account') . '</li>';
}

echo '</ul>';
?>