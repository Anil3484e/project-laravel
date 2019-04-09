<center><p><h3>Edit a project<h3></p>
                     <fieldset>
                     	<legend>Project features</legend>
                     	<form method="POST" action="/projects/{{$project->id}}">
                     		{{method_field('PATCH')}}
                     		@csrf
                     		customer name:<br/>
                     		customer name:<input type="text" name="customer_name" value="{{ $project->customer_name }}" placeholder="customer name" required><br>
                     		<br/>
                            customer username:<br/>
                            username:<input type="text" name="username" value="{{ $project->username }}" required><br><br>
                                
                            <br/>
                            <button name="btn1">Update details</button>
                        </form>
                    </fieldset>
                       