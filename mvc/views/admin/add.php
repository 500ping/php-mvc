
<h1 class="text-center">add product</h1>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" id="title">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control-file" name="image" id="image">
    </div>
    <div class="form-group">
    <label for="status">Status</label>
        <select class="form-control" name="status" id="status">
            <option value="1">Enable</option>
            <option value="2">Disable</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
