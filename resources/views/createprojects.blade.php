<center><legend><b>Create Project<b></legend><br>
<center><form method="POST" action="/projects">
	{{csrf_field()}}
	customer name:<input type="text" name="customer_name" placeholder="customer name" required><br><br>
    username:<input type="text" name="username" required><br><br>

	
	Password:<input type="password" name="password" required><br><br>


	<button>Create details</button>
</form>