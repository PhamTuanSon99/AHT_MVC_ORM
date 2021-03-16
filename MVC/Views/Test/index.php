<h1>Test</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="/MVC/test/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new test</a>
        <tr>
            <th>ID</th>
            <th>Test Name</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
        foreach ($test as $value)
        {
            echo '<tr>';
            echo "<td>" . $value->id . "</td>";
            echo "<td>" . $value->name . "</td>";
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/MVC/test/edit/" . $value->id . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='/MVC/test/delete/" . $value->id . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>