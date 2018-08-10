<form method="post" action="/<?php echo  DOMAIN ?>/login/login">
    <table width="800px" align="center">
        <tr>
            <td width="100px">
                USERNAME: 
            </td>
            <td>
                <input type="text" name="login[username]" id="login[username]">
            </td>
        </tr>
        <tr>
            <td>
                PASSWORD: 
            </td>
            <td>
                <input type="text" name="login[password]" id="login[password]">
            </td>
        </tr>
        <tr>
            <td>
                <button class="btb btn-info" type="submit">LOGIN</button>
            </td>
            
        </tr>
        <tr>
            <td>
                <a href="/<?php echo DOMAIN; ?>/register">register</a>
            </td>
        </tr>
    </table>
</form>