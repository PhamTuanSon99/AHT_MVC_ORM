<h1>Edit test</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="title">Name</label>
        <input type="text" class="form-control" id="test_name" placeholder="Enter a name" name="test_name" value ="<?php if (isset($test["name"])) echo $test["name"];?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>