<h1 class="text-center">
    <?php
        echo $data["title"];
    ?>
</h1>

<a href="../home/" class="btn btn-danger" style="margin-bottom: 10px;">Client</a> 
<a href="../admin/add/" class="btn btn-success" style="margin-bottom: 10px;">add</a> 

<table style="width:100%" class="display" border="1" id="example">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th> 
            <th>Description</th> 
            <th>Image</th>
            <th>Status</th>
            <th>Create_at</th>
            <th>Update_at</th>
            <th>Action</th>
        </tr>
    </thead>
</table>