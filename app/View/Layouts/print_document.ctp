<?php
$company = Configure::read('Company');
$company_address = Configure::read('Company-Address');
$company_address2 = Configure::read('Company-Address2');
$company_phone = Configure::read('Company-Phone');
$company_email = Configure::read('Company-email');
$company_web = Configure::read('Company-Web');
$company_logo_file = Configure::read('Company-Logo-File');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $company ?>:
            <?php echo $title_for_layout; ?>
        </title>
        <?php
        echo $this->Html->meta('icon');
        echo $this->Html->css('qibdip-printer');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <body>
        <div id="container">
            <div id="header">
                <table border="0" id="document-company">
                    <tr>
                        <td>
                            <?php
                            if (isset($company_logo_file)):
                                echo '<img src="' . $this->webroot . 'img' . DS . $company_logo_file . '">';
                            endif;
                            ?>
                            &nbsp;
                        </td>
                        <td id="company-info">
                            <span id="company-name">
                                <?php echo $company; ?>
                            </span><br/>
                            <span id="company-address">
                                <?php echo $company_address; ?>
                            </span><br/>
                            <span id="company-address2">
                                <?php echo $company_address2; ?>
                            </span><br/>
                            <span id="company-phone">
                                <?php echo $company_phone; ?>
                            </span><br/>
                            <span id="company-email">
                                <?php echo $company_email; ?>
                            </span><br/>
                            <span id="company-web">
                                <?php echo $company_web; ?>
                            </span>
                        </td>
                    </tr>
                </table>
                <div id="content">
                    <?php echo $this->fetch('content'); ?>
                </div>
                <div id="footer">
                    &nbsp;
                </div>
            </div>
    </body>
</html>
