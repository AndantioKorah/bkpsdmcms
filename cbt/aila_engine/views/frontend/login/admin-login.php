       <div class="card-content  height-470">
        <h4 class="center">Admin Login </h4>
        <?php  echo  form_open('main/admin_login', array("class" => "form-signin"));?>

        <?php if ($this->session->flashdata('info')){?>
          <div class="row card-content red lighten-1 white-text center">
            <?=$this->session->flashdata('info');?>
          </div>
        <?php } else { ?> 
         <div class="row card-content alert-info  center">
           Silahkan login dengan Email dan password
         </div>
       <?php }?>
       <div class="row ">
        <div class="input-field col s12">
          <input autofocus="" id="email" name="email" type="text" class="validate"  value="<?=set_value('email');?>" required="">
          <label for="email">Email</label>
          <span class="red-text"><?=form_error('email');?></span>
        </div>
      </div>

      <div class="row ">
       <div class="input-field col s12">
        <input id="password" name="password" type="password" class="validate" required="">
        <label for="password">Password</label>
        <span class="red-text">
          <?=form_error('password');?>
        </span>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <button type="submit" name="login" class="btn waves-effect  primary  col s12">Login</button>
        </div>
        <div class="col s12">
          <small>
            <a href="<?=base_url('');?>"> <i class="material-icons left" style="font-size: 14px; margin-right: 5px;">arrow_back</i> Back to Home page</a>
          </small>
        </div>
      </div>
    </div>

    <?php echo form_close();?>
  </div>