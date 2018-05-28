<?php 
use PhpMvc\View;
use PhpMvc\Html;
$model = new RootNamespaceOfYourApp\Models\Login();

View::setLayout('_layout');
View::setTitle('Log in');
View::injectModel($model);
?>

<div class="row">
    <div class="col-md-4 set-colon-to-labels">
        <h2><?=View::getTitle()?></h2>
        <p>This is a demonstration of working with forms.</p>
        <?=Html::beginForm('login', 'account', null, 'post', true)?>
            <div class="form-group">
                <?=Html::label('username')?>
                <?=Html::textBox(
                  'username',
                  null, 
                  array(
                    'class' => 'form-control',
                    'maxlength' => 50
                  )
                )?>
                <p><?=Html::validationMessage('username')?></p>
                <p class="help-block"><?=Html::displayText('username')?></p>
            </div>
            <div class="form-group">
                <?=Html::label('password')?>
                <?=Html::password(
                  'password',
                  null, 
                  array(
                    'class' => 'form-control'
                  )
                )?>
                <p><?=Html::validationMessage('password')?></p>
                <p class="help-block"><?=Html::displayText('password')?></p>
            </div>

            <button type="submit" class="btn btn-primary">Log in</button>
        <?=Html::endForm()?>
    </div>
</div>
