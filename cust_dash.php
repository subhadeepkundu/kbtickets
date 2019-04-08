<?php include('db_connect.php');
session_start(); 

if (!isset($_SESSION["email"])) {
    header("location: cust_login.php");
    exit; 
}
else $email= $_SESSION["email"];
?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
</head>
<body>

          
                 
  
         <table border="10" cellspacing="10" cellpadding="10" width="100%"
                    bgcolor="#4e8975">
                    <tr>
                        <td bgcolor="#54c571" width="100%">
                          <font size="4" face="Arial">
                            <B>Main Menu</B>
                          </font>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#a74ac7" width="100%" align="center">
                          <font size="2" face="Arial">
                            <B><a href="stu_dash.php" style="text-decoration: none;">DASHBOARD</a<asp:Label ID="lblname" runat="server" Text=""></asp:Label></B>
                          </font>
                        </td>
                         <tr>
                        <td bgcolor="#a74ac7" width="100%">
                          <font size="2" face="Arial"><B><A href="http://www.srmuniv.ac.in/" target="_blank">Institute Details </A> </B></font>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#a74ac7" width="100%">
                          <font size="2" face="Arial">
                            <B> <a href="stuexamlist.php">Exam List</a>
                               
                            </B>
                          </font>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#a74ac7" width="100%">
                          <font size="2" face="Arial">
                            <B><a href="logout_cust.php">Logout</a>
                         
                            </B>
                          </font>
                        </td>
                    </tr>

                    <?php $results = mysqli_query($conn, "SELECT * FROM customer where email='$email'"); 
                          $rowf = mysqli_fetch_array($results);
                    ?>

      <P>
        <TABLE border=10 cellSpacing=0 cellPadding=0 width="100%" bgColor=#f87431>
          <TR>
            <TD width="100%" align=middle>
              <B>
                <FONT color=#ffffff size=2 face=Arial>Developed By:</FONT>
              </B>
            </TD>
          </TR>
        </TABLE>
        <TABLE border=0 cellSpacing=10 cellPadding=10 width="100%" bgColor=#bce954>
          <TR>
            <TD bgColor=#e0ffff width="100%">
              <FONT size=2 face=Arial><b>Subhadeep Kundu</b></FONT>
            </TD>
          </TR>
        </TABLE>
      </P>
      </TD>
   <p></p>
   <p></p>
      <TD bgcolor=#ffffff vAlign=top width="61%" align=left>
        <P>
          <BR>
          <FONT color=#ff0000 size=5 face="Lucida Calligraphy">
            <B>
              
            </B>
          </FONT>
          <p align="right" style="font-size: 20px"><b>Hi,&nbsp; <?php echo $rowf['name'];?></b><br>
          <br><center><img src="stulogo.jpg" width="450" height="270"></center>
            <TABLE >
              <tr>
                <!--<td bgColor=#e56e94 vAlign=top align=left>
                  <FONT size=3 face=Arial>
                    <b>                    </b><br>
                  </FONT>
                </td> -->
              </tr>
              
            

</table> 

      </TD>
    </font>
</TABLE>





          <br>
          </TABLE>
          </form>
</body>
</html>