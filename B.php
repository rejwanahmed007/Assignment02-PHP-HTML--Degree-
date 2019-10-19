<html>
    <head>
        <title>Degree</title>
    </head>
    <body>
        <form method="POST">
            <fieldset >
                <legend>
                   <b>DEGREE</b> 
                </legend>
                <table border="0">
                    <tr>
                        <td>
                            <input type="checkbox" name="degree['ssc']" value="SSC">SSC
                            <input type="checkbox" name="degree['hsc']" value="HSC">HSC
                            <input type="checkbox" name="degree['bsc']" value="BSc">BSc
                            <input type="checkbox" name="degree['msc']" value="MSc">MSc
                        </td>
                        <td>
                            <?php

                            if(isset($_REQUEST['submit']))
                            {
                                if(isset($_REQUEST['degree']))
                            {
                                 foreach($_REQUEST['degree'] as $value)
                                {
                                 echo "|".$value." ";
    
                                }
                            } 
                            else
                            echo "| Nothing is checked";
                            }
                            ?>
                        </td>
                        
                    </tr>
                   

                </table> 
                <hr>
                <table border="0">
                    <tr>
                        <td><input type="submit" name="submit" ></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
</html>