<div id="login">
       <h3 class="vol">SEARCH | APPLY | ADMIN LOGIN</h3>
      	<div class="search">
        		<input type="text" name="Search" placeholder="Search" class="searchbox" />
				<input type="submit" name="Search" value="" class="searchbutton" />
        
        
        </div> <!--search ends-->
        
        <div class="apply_vol">
        	<a href="volunteer-form/volunteer_form.php">APPLY FOR VOLUNTARISM</a>   
        </div>
        
        <div class="apply_int">
        <a href="intern_form/intern_form.php">APPLY FOR INTERNSHIP  </a>
        </div>
        
             
         <?php require('cocap_vol/includes/admin.php'); ?>
        
        
        
        <div id="main_container">

	<div class="header_login">
    
    
    </div>

     
         <!--<div class="login_form">
         
         
         
         
         
         
         
         
         <h3>Admin Panel Login</h3>
         
         <a href="forgot_password.php" class="forgot_pass">Forgot password</a> 
         
         <form action="process/process_login.php" method="post" class="niceform">
         
                <fieldset>
                    <dl>
                        <dt><label for="email">Username:</label></dt>
                        <dd><input type="text" name="uname" id="uname" size="54" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="password">Password:</label></dt>
                        <dd><input type="password" name="pass" id="pass" size="54" /></dd>
                    </dl>
                    
                    <dl>
                        <dt><label></label></dt>
                        <dd>
                    <input type="checkbox" name="interests[]" id="" value="1" /><label class="check_label">Remember me</label>
                        </dd>
                    </dl>
                    
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="Login" />
                     </dl>
                    
                </fieldset>
                
         </form>
         </div>-->  
          
	
    
    <!--<div class="footer_login"></div>
</div>
        
  
<section id="loginBox1">
      <p class="hi">User Login<p>
	
	<form method="post" class="minimal">
		<label for="username">
			Username:
			<input type="text" name="username" id="username" placeholder="Type your user name" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
		</label>
		<label for="password">
			Password:
			<input type="password" name="password" id="password" placeholder="Type the password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
		</label>
		<button type="submit" class="btn-minimal">Sign in</button>
	</form>
</section>
        
        
        <!--<div id="admin">
        <p class="pfor">ADMIN LOGIN</p>
       	  <form id="form1" name="form1" method="post" action="" >
       	        
   	            <table>
   	              <tr>
   	                <th scope="row">User Name</th>
   	                <td><label for="uname"></label>
                    <span id="sprytextfield1">
                    <input type="text" name="uname" id="uname" />
                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                  </tr>
   	              <tr>
   	                <th scope="row">Password</th>
   	                <td><label for="pass"></label>
   	                  <span id="sprytextfield2">
   	                  <input type="password" name="pass" id="pass" />
                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                  </tr>
   	              <tr>
   	                <th colspan="2" scope="row"><input type="checkbox" name="tick" id="tick" />
                    <label for="tick">Remember || <a href="#">Forgot Password ?</a></label></th>
                  </tr>
   	              <tr>
   	                <th scope="row"><input type="submit" name="cmdlogin" id="cmdlogin" value="login" /></th>
   	                <td><input type="submit" name="cancel" id="cancel" value="Cancel" /></td>
                  </tr>
                </table>
       	     
       	
   	      </form>
        </div>-->
      </div>
        

      
      
      
      
      </div>