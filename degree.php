<html>
    <head><title>Degree</title></head>
    <body>
        <table border="0">
            <tr>
                <td>Degree(s) : </td>
                
                <td>
                    <?php
                    if(isset($_REQUEST['degree']))
                    {
                        foreach($_REQUEST['degree'] as $value)
                        {
                            echo $value." ";
    
                        }
                    }
                    else
                    echo "Nothing is checked";
                    ?>
                </td>
            </tr>

        </table>
    </body>
</html>
