Vim�UnDo� Q�X���Gk�j��4�M�;<�6�j:�
4   E                  8       8   8   8    _�S   4 _�                            ����                                                                                                                                                                                                                                                                                                                                                             _�P�    �      
   E    5�_�                    	        ����                                                                                                                                                                                                                                                                                                                                                             _�P�    �   	      F    �   	   
   F    5�_�                    
        ����                                                                                                                                                                                                                                                                                                                                                             _�P�    �   	   
           5�_�                    	        ����                                                                                                                                                                                                                                                                                                                                                             _�P�    �         F       �   	   
   F    5�_�                    	        ����                                                                                                                                                                                                                                                                                                                                                             _�P�    �      
   O      )//if button is click and process the form5�_�                    	       ����                                                                                                                                                                                                                                                                                                                                                             _�P�    �      
   O      -    //if button is click and process the form5�_�      	              	       ����                                                                                                                                                                                                                                                                                                                                                             _�P�   	 �      
   O      ,   //if button is click and process the form5�_�      
           	   
        ����                                                                                                                                                                                                                                                                                                                                                             _�P�   
 �   	      O       if(isset($_POST['initButton'])){5�_�   	              
          ����                                                                                                                                                                                                                                                                                                                                                             _�P�    �   
      O      8  $query = file_get_contents("resource/university.sql");5�_�   
                        ����                                                                                                                                                                                                                                                                                                                                                             _�P�     �         O        $stmt = $db->prepare($query);5�_�                           ����                                                                                                                                                                                                                                                                                                                                                             _�P�     �         O        if ($stmt->execute()){5�_�                           ����                                                                                                                                                                                                                                                                                                                                                             _�P�     �         O      ,      echo "Success. Database initialized.";5�_�                           ����                                                                                                                                                                                                                                                                                                                                                             _�P�     �         O      
  } else{ 5�_�                           ����                                                                                                                                                                                                                                                                                                                                                             _�P�     �         O      8      echo "Failure. Unable to initialize the database";5�_�      /                     ����                                                                                                                                                                                                                                                                                                                                                             _�P�   ) �         O        }5�_�      0          /   	       ����                                                                                                                                                                                                                                                                                                                                                             _�S   * �      	          +  //if button is click and process the form5�_�   /   1           0   	       ����                                                                                                                                                                                                                                                                                                                                                             _�S   + �      	          "  if(isset($_POST['initButton'])){5�_�   0   2           1   	       ����                                                                                                                                                                                                                                                                                                                                                             _�S   , �      	          :    $query = file_get_contents("resource/university.sql");5�_�   1   3           2   	       ����                                                                                                                                                                                                                                                                                                                                                             _�S   - �      	          !    $stmt = $db->prepare($query);5�_�   2   4           3   	       ����                                                                                                                                                                                                                                                                                                                                                             _�S	   . �      	              if ($stmt->execute()){5�_�   3   5           4   	       ����                                                                                                                                                                                                                                                                                                                                                             _�S	   / �      	          .        echo "Success. Database initialized.";5�_�   4   6           5   	       ����                                                                                                                                                                                                                                                                                                                                                             _�S
   0 �      	              } else{ 5�_�   5   7           6   	       ����                                                                                                                                                                                                                                                                                                                                                             _�S
   1 �      	          :        echo "Failure. Unable to initialize the database";5�_�   6   8           7   	       ����                                                                                                                                                                                                                                                                                                                                                             _�S   2 �      	              }5�_�   7               8   	        ����                                                                                                                                                                                                                                                                                                                                                             _�S   4 �      	          }5�_�             /              ����                                                                                                                                                                                                                                                                                                                                                             _�P�    �         O        }5�_�                   $       ����                                                                                                                                                                                                                                                                                                                                                             _�Q(    �   $   %   O       5�_�                    %        ����                                                                                                                                                                                                                                                                                                                                                             _�Q*    �   %   &   P    �   $   &   P      <form method="post" action="">            <div class="form-group">   g          <input type="submit" class="btn btn-primary" name="initButton" value="Initialize Database" />           </div>         </form>5�_�                    %        ����                                                                                                                                                                                                                                                                                                                                                             _�Q,    �   $   &   T      "    <form method="post" action="">5�_�                    )       ����                                                                                                                                                                                                                                                                                                                                                             _�Q/    �   (   *   T           </form>5�_�                    )       ����                                                                                                                                                                                                                                                                                                                                                             _�Q0    �   (   *   T          </form>5�_�                    '   \    ����                                                                                                                                                                                                                                                                                                                                                             _�Q8    �   &   (   T      f          <input type="submit" class="btn btn-primary" name="initButton" value="Initialize Dtabase" />5�_�                    '   \    ����                                                                                                                                                                                                                                                                                                                                                             _�Q8    �   &   (   T      e          <input type="submit" class="btn btn-primary" name="initButton" value="Initialize Dabase" />5�_�                    '   \    ����                                                                                                                                                                                                                                                                                                                                                             _�Q8    �   &   (   T      d          <input type="submit" class="btn btn-primary" name="initButton" value="Initialize Dbase" />5�_�                    '   \    ����                                                                                                                                                                                                                                                                                                                                                             _�Q8    �   &   (   T      c          <input type="submit" class="btn btn-primary" name="initButton" value="Initialize Dase" />5�_�                    '   \    ����                                                                                                                                                                                                                                                                                                                                                             _�Q8    �   &   (   T      b          <input type="submit" class="btn btn-primary" name="initButton" value="Initialize Dse" />5�_�                    '   \    ����                                                                                                                                                                                                                                                                                                                                                             _�Q9    �   &   (   T      a          <input type="submit" class="btn btn-primary" name="initButton" value="Initialize De" />5�_�                    '   \    ����                                                                                                                                                                                                                                                                                                                                                             _�Q:    �   &   (   T      a          <input type="submit" class="btn btn-primary" name="initButton" value="Initialize DB" />5�_�                     '   ]    ����                                                                                                                                                                                                                                                                                                                                                             _�Q?     �   &   (   T      a          <input type="submit" class="btn btn-primary" name="initButton" value="Initialize DB" />5�_�      !               '   P    ����                                                                                                                                                                                                                                                                                                                                                             _�QC    �   &   (   T      f          <input type="submit" class="btn btn-primary" name="initButton" value="(1.2)Initialize DB" />5�_�       "           !   '   U    ����                                                                                                                                                                                                                                                                                                                                                             _�QE    �   &   (   T      g          <input type="submit" class="btn btn-primary" name="initButton" value="(1.2) Initialize DB" />5�_�   !   #           "   *       ����                                                                                                                                                                                                                                                                                                                                                             _�QQ    �   )   +        5�_�   "   $           #   *       ����                                                                                                                                                                                                                                                                                                                                                             _�QQ    �   )   +        5�_�   #   %           $   *       ����                                                                                                                                                                                                                                                                                                                                                             _�QR     �   )   +        5�_�   $   &           %   *       ����                                                                                                                                                                                                                                                                                                                                                             _�QR   $ �   )   +        5�_�   %       '       &          ����                                                                                                                                                                                                                                                                                                                                                             _�Q�   # �         P          $stmt = $->prepare($query);5�_�   %   (       &   '          ����                                                                                                                                                                                                                                                                                                                                                             _�Q�   % �         P      #    $stmt = $link->prepare($query);5�_�   '   )           (   *       ����                                                                                                                                                                                                                                                                                                                                                             _�R     �   *   +   P       �   *   ,   Q           <-- ->>5�_�   (   *           )   +       ����                                                                                                                                                                                                                                                                                                                                                             _�R$     �   *   ,   Q           <-- ->5�_�   )   +           *   +   
    ����                                                                                                                                                                                                                                                                                                                                                             _�R%     �   *   ,   Q           <-- -->5�_�   *   ,           +   +       ����                                                                                                                                                                                                                                                                                                                                                             _�R'     �   *   ,   Q           <--COMPLETE -->5�_�   +   -           ,   +       ����                                                                                                                                                                                                                                                                                                                                                             _�R*     �   *   ,   Q           <-- COMPLETE -->5�_�   ,   .           -   +       ����                                                                                                                                                                                                                                                                                                                                                             _�R+   ' �   *   ,   Q            <-- COMPLETE -->5�_�   -               .   +       ����                                                                                                                                                                                                                                                                                                                                                             _�R-   & �   *   ,   Q            <!-- COMPLETE -->5�_�                    %       ����                                                                                                                                                                                                                                                                                                                                                             _�Q#    �   %   &   O    �   $   &   O      #    <<form method="post" action="">            <div class="form-group">   g          <input type="submit" class="btn btn-primary" name="initButton" value="Initialize Database" />           </div>         </form>p>5�_�                             ����                                                                                                                                                                                                                                                                                                                                                             _�P�    �      	   E        �      
   F        // Name of the file     //     // $filename = 'project.sql';     //     // // MySQL host     //     // $mysql_host = 'localhost';     //     // // MySQL username     //     // $mysql_username = 'root';     //     // // MySQL password     //     // $mysql_password = '';     //     // // Database name     //   !  // $mysql_database = 'project';     //     //     //     // // Connect to MySQL server     //   U  // $con = @new mysqli($mysql_host,$mysql_username,$mysql_password,$mysql_database);5��