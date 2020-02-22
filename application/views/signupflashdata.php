<center>
     <h3>Sign Up</h3>
        <?php echo form_open('MY_logflashdata/signIn'); ?>
    <table align="center">
    <tr>
        <td style="padding-bottom: 20px;"> Username</td>
        <td style="padding-bottom: 20px;"> <?php echo form_input('username'); ?> </td>
    </tr>
    <tr>
        <td style="padding-bottom: 20px;"> First Name</td>
        <td style="padding-bottom: 20px;"> <?php echo form_input('firstname'); ?> </td>
    </tr>
    <tr>
        <td style="padding-bottom: 20px;"> Last Name</td>
        <td style="padding-bottom: 20px;"> <?php echo form_input('lastname'); ?> </td>
    </tr>
    <tr>
        <td style="padding-bottom: 20px;"> Password</td>
        <td style="padding-bottom: 20px;"> <?php echo form_input('password'); ?> </td>
    </tr>
    <tr>
        <td> <?php echo form_submit('signup', 'SignUpHere'); ?> </td>
    </tr>
    </table>
    <?php echo form_close(); ?> 
    </center>  