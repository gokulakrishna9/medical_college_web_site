<?php ?>
<div class="w3-container">
<?php echo form_open("login",array('role'=>'form','class'=>'')); ?>
        <h2>Please sign in</h2>
        <div class="w3-row  w3-padding-16">
            <div class="w3-col m4">
        <label for="user_name" class="sr-only">User Name:</label>
        <input type="text" id="user_name" name='user_name' class="" placeholder="User Name" required autofocus>
        </div>
        <div class="w3-col m4">
        <label for="password" class="sr-only">Password:</label>
        <input type="password" name='password' id="password" class="" placeholder="Password" required>
        </div>
        <div class="w3-col m4">
        
        </div>
        </div>
        <div class="w3-row  w3-padding-16">
            <div class="w3-col m4">
        <button class="" type="submit">Sign in</button>
        </div></div>
      </form>

</div> <!-- /container -->

