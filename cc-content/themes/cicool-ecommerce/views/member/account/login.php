

<?=get_header();?>
<body id="page-top">
   <?=get_navigation();?>
   <?=get_view_component('search-nav');?>
<div class="container" style="margin-top: 140px;">
</div>

<div class="container ">
  
  <div class="col-md-6 col-md-offset-3">
    <div class="member-content">
      <div class="login-box">
  <div class="login-logo">
    <a href=""><b><?= cclang('login'); ?></b> <?= get_option('site_name'); ?></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"><?= cclang('sign_to_start_your_session'); ?></p>
    <?php if(isset($error) AND !empty($error)): ?>
         <div class="callout callout-error"  style="color:#C82626">
              <h4><?= cclang('error'); ?>!</h4>
              <p><?= $error; ?></p>
            </div>
    <?php endif; ?>
    <?php
    $message = $this->session->flashdata('f_message'); 
    $type = $this->session->flashdata('f_type'); 
    if ($message):
    ?>
   <div class="callout callout-<?= $type; ?>"  style="color:#C82626">
        <p><?= $message; ?></p>
      </div>
    <?php endif; ?>
     <?= form_open('', [
        'name'    => 'form_login', 
        'id'      => 'form_login', 
        'method'  => 'POST'
      ]); ?>
      <div class="form-group has-feedback <?= form_error('username') ? 'has-error' :''; ?>">
        <input type="email" class="form-control" placeholder="Email" name="username" value="<?= set_value('username', 'admin@admin.com'); ?>">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback <?= form_error('password') ? 'has-error' :''; ?>">
        <input type="password" class="form-control" placeholder="Password" name="password" value="admin123">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember" value="1"> <?= cclang('remember_me'); ?>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat"><?= cclang('sign_in'); ?></button>
        </div>
        <!-- /.col -->
      </div>
    <?= form_close(); ?>

    <!-- /.social-auth-links -->

   <!--  <a href="<?= site_url('administrator/forgot-password'); ?>"><?= cclang('i_forgot_my_password'); ?></a><br> -->
    <a href="<?= site_url('member/account/register'); ?>" class="text-center"><?= cclang('register_a_new_membership'); ?></a>
  
    <br>
    <br>
    <!-- <p align="center"><b>-<?= cclang('or') ?>-</b></p>
    <a href="<?= site_url('oauth/v/google'); ?>" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google"></i> <?= cclang('sign_in_using') ?> Google+</a> -->

  </div>
  <!-- /.login-box-body -->
</div>
    </div>
  </div>
</div>

<script>
  $(function(){
   
  })
</script>
<?=get_footer();?>