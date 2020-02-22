 <center>
     <h3>SIGN IN</h3>
     	<?php echo validation_errors(); ?>
        <?php echo form_open('MY_logflashdata/proses_login'); ?>
    <table align="center">
    <tr>
        <td style="padding-bottom: 20px;"> Username</td>
        <td style="padding-bottom: 20px;"> <?php echo form_input('username'); ?> </td>
    </tr>
    <tr>
        <td style="padding-bottom: 20px;"> Password</td>
        <td style="padding-bottom: 20px;"> <?php echo form_input('password'); ?> </td>
    </tr>
    <tr>
        <td> <?php echo form_submit('log in', 'Log in'); ?> </td>
    </tr>
    </table>
    <?php echo form_close(); ?> 
    <?php
    if($this->session->flashdata('gagal') <> ''){

    }
    ?>
    <?php
    echo $this->session->flashdata('gagal');
    ?>
    </center>