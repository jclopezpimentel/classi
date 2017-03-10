<div>
  <h1>Login</h1>
  <?php echo validation_errors();?>
  <?php echo form_open('verifylogin');?>
  <label for="email">Email: </label>
  <input type="text" size="20" id="email" name="email"/>
  <br/>
  <label for="contrasena">Contraseña: </label>
  <input type="password" size="20" id="contrasena" name="contrasena"/>
  <br/>
  <input type="submit"  value="Login"/>
  </form>
</div>