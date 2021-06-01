<html>
    <head>
        <title>Checkbox Example</title>
    </head>
    <body>
    <form method="post">
        <h4>Choose Programming language:</h4>
        <table>
            <tr>
                <td>
                    c
                </td>
                <td>
                    <input type="checkbox" name="cbox[]" checked="true" value="c">
                </td>
            </tr>
            <tr>
                <td>
                    c++
                </td>
                <td>
                    <input type="checkbox" name="cbox[]" value="c++">
                </td>
            </tr>
            <tr>
                <td>
                    java
                </td>
                <td>
                    <input type="checkbox" name="cbox[]" value="java">
                </td>
            </tr>
            <tr>
                <td>
                    php
                </td>
                <td>
                    <input type="checkbox" name="cbox[]" value="php">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" >
                </td>
            </tr>
        </table>
        
        
    </form>
    </body>
</html>
<?php
if($_POST){
    $programming=$_POST['cbox'];
    $str=implode(",",$programming);
    echo $str;
}
?>