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
                            <input type="checkbox" name="ssc" value="SSC" 
                            <?php if(isset($_REQUEST['submit']) && isset($_REQUEST["ssc"]))
                            { ?> checked <?php } ?>>SSC
                            <input type="checkbox" name="hsc" value="HSC"
                            <?php if(isset($_REQUEST['submit']) && isset($_REQUEST["hsc"]))
                            { ?> checked<?php } ?>>HSC
                            <input type="checkbox" name="bsc" value="BSc"
                            <?php if(isset($_REQUEST['submit']) && isset($_REQUEST['bsc']))
                            { ?> checked<?php } ?>>BSc
                            <input type="checkbox" name="msc" value="MSc"
                            <?php if(isset($_REQUEST['submit']) && isset($_REQUEST["msc"]))
                            { ?> checked<?php } ?>>MSc
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