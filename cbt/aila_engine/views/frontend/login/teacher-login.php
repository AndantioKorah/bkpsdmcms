       <div class="card-content  height-470">
        <h4 class="center"><?=$this->config->item('teacher');?> Login</h4>
        <?php  echo  form_open('main/teacher_login', array("class" => "form-signin"));?>

        <?php if ($this->session->flashdata('info')){?>
          <div class="row card-content red lighten-1 white-text center">
            <?=$this->session->flashdata('info');?>
          </div>
        <?php } else { ?> 
         <div class="row card-content alert-info  center">
           Silahkan login dengan <?=$this->config->item('teacher_code');?> dan password anda
         </div>
       <?php }?>
       <div class="row ">
        <div class="input-field col s12">
          <input autofocus="" id="code" name="code" type="text" class="validate"  value="<?=set_value('code');?>" required="">
          <label for="code"><?=$this->config->item('teacher_code');?></label>
          <span class="red-text"><?=form_error('code');?></span>
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