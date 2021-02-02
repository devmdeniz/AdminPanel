<form action="theme/dashboard/changeparagraph.php" method="post">
<label for="changeparagraph"><b>Change Paragraph</b></label>
    <input type="text" placeholder="Change Paragraph" name="changeparagraph">
    <input type="text" placeholder="Paragraph to Change" name="paragraphtochange">
    <button type="submit">Change Paragraph</button>

    </form>
    <br>
    <form action="theme/dashboard/changeparabyid.php" method="post">
        <label for="changeparabyid"><b>Change Paragraph By ID</b></label>
            <input type="text" placeholder="Change Paragraph" name="changeparagraph">
            <input type="text" placeholder="ID" name="changeid">
        <button type="submit">Change Paragraph By ID</button>
    </form>
    <details>
        <summary>IDs and Paragraphs </summary>
            <table>
<?php
            include("system/connection.php");

          $id = $conn -> query("SELECT * FROM mainphp ORDER BY id DESC LIMIT 1");
            $outputs = $id->fetch_array();
        
                $maxnumber = $outputs["id"];
                $minnumber = 1;
                while($minnumber <= $maxnumber){
                $sorgu = $conn -> query("SELECT mainparagraph FROM mainphp WHERE id=$minnumber");    
                        $output = $sorgu->fetch_array();
                        echo
                         "<tr>" .
                         "<th class='datas'>" .
                         $output["mainparagraph"] .
                         " - [$minnumber] -" .
                         "</th>" .
                         "</tr>";
                        $minnumber++;
                    }
        
        
?>
            </table>
    </details>

    <br>    

    <form action="theme/dashboard/deleteparagraph.php" method="post">
        <label for="deleteparagraph"><b>Delete</b></label>
        <input type="text" placeholder="Delete Paragraph" name="deleteparagraph">
        <button type="submit">Delete Paragraph</button>
    </form>

    <br>

    <form action="theme/dashboard/deleteparagraphbyid.php" method="post">
        <label for="deleteparagraphbyid"><b>Delete</b></label>
        <input type="text" placeholder="ID" name="deleteparagraphbyid">
        <button type="submit">Delete Paragraph By ID</button>
    </form>


       <br>

    <form action="theme/dashboard/createparagraph.php" method="post">
        <label for="createparagraph"><b>Create</b></label>
            <input type="text" placeholder="Create Paragraph" name="createparagraph">
            <button type="submit">Create Paragraph</button>
    </form>