<!DOCTYPE html>
<html>
 <head>
   <title>Simple Login with CodeIgniter - Private Area</title>
         <?php $this->load->view('Shared/header');?>
 </head>
 <body>
   <h1>Home</h1>
   <h2>Welcome <?php echo $email; ?>!</h2>
   <a href="home/logout">Logout</a>
 </body>
</html>