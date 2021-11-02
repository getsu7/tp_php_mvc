<form method="post" style='width: 80%; margin: 0 0 0 10%'>
    <div class='m-3'>
        <label for='filter_gender'>Gender</label>
        <select name='filter_gender' id='filter_gender'>
            <option value="none">---</option>
            <option value='M'>Male</option>
            <option value='F'>Female</option>
            <option value='O'>Other</option>
        </select>
    </div>
    <div class='m-3'>
        <label for='filter_hobby'>Category</label>
        <select name='filter_hobby' id='filter_hobby'>
            <option value="none">---</option>
            <option value='Sport'>Sport</option>
            <option value='Theater'>Theater</option>
            <option value='Gamer'>Gamer</option>
            <option value='Code'>Code</option>
        </select>
    </div>
    <button type='submit' class='btn btn-success'>APPLY</button>
    <a href='?page=list' class='btn btn-danger'>Reset</a>
</form>


<form method='post' style='width: 80%; margin: 0 0 0 10%'>

    <div class='m-3'>
        <label for='filter_date'>Date</label>
        <input name="filter_date" id="filter_date" type="date">
    </div>
    <button type='submit' class='btn btn-success'>APPLY</button>
</form>

<?php
if (isset($users)) {
    foreach ($users as $user) {

        echo "<div class=\"card mb-3\" style=\"max-width: 540px; margin: auto;\">
                  <div class=\"row g-0\">
                    <div class=\"col-md-4\">
                      <a href='?page=show&id={$user['user_id']}'><h5 class=\"card-title\">{$user['user_name']}</h5></a>
                    </div>
                    <div class=\"col-md-8\">
                      <div class=\"card-body\">
                        <p class=\"card-text\"><small class=\"text-muted\">Hobby: {$user['user_hobby']}</small></p>
                      </div>
                    </div>
                  </div>
                </div>";
    }
}
?>