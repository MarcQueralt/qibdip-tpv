<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
if (Configure::read('debug') == 0):
//	throw new NotFoundException();
    echo '<p>&nbsp;</p>';
    echo '<p>&nbsp;</p>';
    echo '<p>&nbsp;</p>';
    echo '<p>&nbsp;</p>';
    echo '<p>&nbsp;</p>';
    echo '<p>&nbsp;</p>';
    echo '<p>&nbsp;</p>';
    echo '<p>&nbsp;</p>';
else:

    App::uses('Debugger', 'Utility');
    ?>
    <?php
    if (Configure::read('debug') > 0):
        Debugger::checkSecurityKeys();
    endif;
    ?>
    <?php
    if (isset($filePresent)):
        App::uses('ConnectionManager', 'Model');
        try {
            $connected = ConnectionManager::getDataSource('default');
        } catch (Exception $connectionError) {
            $connected = false;
        }
        ?>
        <p>
            <?php
            if ($connected && $connected->isConnected()):
                echo '<span class="notice success">';
                echo __d('cake_dev', 'Cake is able to connect to the database.');
                echo '</span>';
            else:
                echo '<span class="notice">';
                echo __d('cake_dev', 'Cake is NOT able to connect to the database.');
                echo '<br /><br />';
                echo $connectionError->getMessage();
                echo '</span>';
            endif;
            ?>
        </p>
    <?php endif; ?>
    <?php
    App::uses('Validation', 'Utility');
    if (!Validation::alphaNumeric('cakephp')) {
        echo '<p><span class="notice">';
        echo __d('cake_dev', 'PCRE has not been compiled with Unicode support.');
        echo '<br/>';
        echo __d('cake_dev', 'Recompile PCRE with Unicode support by adding <code>--enable-unicode-properties</code> when configuring');
        echo '</span></p>';
    }
endif;
?>
