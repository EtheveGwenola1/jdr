<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div align="center">
	<form method="POST">

		<div class="form-group">
   			<label for="exampleInputPseudo">Pseudo</label>
    		<input type="form-text" class="form-control" id="pseudo" name="pseudo" aria-describedby="emailHelp" placeholder="Enter pseudo">
  		</div>

  		<div class="form-group">
   			<label for="exampleInputEmail1">Email address</label>
    		<input type="email" class="form-control" id="Email" name="mail" aria-describedby="emailHelp" placeholder="Enter email">
    		<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  		</div>

  		<div class="form-group">
   			<label for="exampleInputEmail1">Email address confirmation</label>
    		<input type="email" class="form-control" id="Email" name="mail2" aria-describedby="emailHelp" placeholder="Enter email">
  		</div>

  		<div class="form-group">
    		<label for="exampleInputPassword1">Password</label>
    		<input type="password" class="form-control" id="Password" name="mdp" placeholder="Password">
  		</div>

  		<div class="form-group">
    		<label for="exampleInputPassword1">Password confirmation</label>
    		<input type="password" class="form-control" id="Password" name="mdp2" placeholder="Password">
  		</div>

  		<div class="form-check">
    		<label class="form-check-label">
    		<input type="checkbox" class="form-check-input">
      		Check me out</label>
 		</div>

  		<button type="submit" name="submit" class="btn btn-primary">Submit</button>

	</form>
	</div>


</body>
</html>