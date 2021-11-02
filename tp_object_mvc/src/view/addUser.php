<h1 class='bigTitle'>Create an Account</h1>

<form method='post' style='width: 80%; margin: 10% '>

    <div class ='mb-3'>
        <label for='email'>Email</label>
        <input type='text' class='form-control' id='email' name='email'>

    </div>
    <div class='mb-3'>
        <label for='pswd'>Password</label>
        <input type='password' class='form-control' id='pswd' name='pswd'>
    </div>
    <div class='mb-3'>
        <label for='name' class='form-label'>Pseudo</label>
        <input type='text' class='form-control' id='name' name='name'>
    </div>
    <div class='mb-3'>
        <label for='date'>Birth-date</label>
        <input type='date' class='form-control' id='date' name='date'>

    </div>
    <div class='mb-3'>
        <label for='hobby'>Category</label>
        <select name='hobby' id='hobby'>
            <option value='Sport'>Sport</option>
            <option value='Theater'>Theater</option>
            <option value='Gamer'>Gamer</option>
            <option value='Code'>Code</option>
        </select>
    </div>
    <div class='mb-3'>
        <label for='gender'>Gender</label>
        <select name='gender' id='gender'>
            <option value='M'>Male</option>
            <option value='F'>Female</option>
            <option value='O'>Other</option>
        </select>
    </div>
    <br>
    <button type="submit" class="btn btn-success">Sign Up</button>
</form>
