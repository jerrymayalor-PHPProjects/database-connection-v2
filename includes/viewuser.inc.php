<!-- start php     -->
<?php

class ViewUser extends User {

    public function showAllUsers(){

      $datas = $this->getAllUsers();

        ?>
<!-- end php     -->

        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>View</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            
            
        <!-- start php     -->
        <?php  

            foreach ( $datas as $data ) {

                echo "<tr>".
                        "<td>".
                            $data['id'] .
                        "</td>".
                        "<td>".
                            $data['name'] .
                        "</td>".
                        "<td class='tbl-action'>".
                            "<a href='#' class='btn btn-sm btn-success'>View</a>" .
                        "</td>".
                        "<td class='tbl-action '>".
                            "<a href='#' class='btn btn-sm btn-primary'>Edit</a>" .
                        "</td>".
                        "<td  class='tbl-action '>".
                            "<a href='#' class='btn btn-sm btn-danger'>Delete</a>" .
                        "</td>".
                     "</tr>";

                }
            
        ?>
        <!-- end php     -->
       
            </tbody>
        </table>
     
    <!-- start php     -->
    <?php
    }

}

?>
<!-- end php     -->
