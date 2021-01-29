@extends('Layouts.layout')

@section('content')
<div class="wrapper create-pizza">
<h1>Create a New Pizza</h1>
<form action="/pizzas" method="POST">
@csrf
<label for="name">Name</label>
<input type="text" id="name" name="name">
<label for="type">Choose Pizza type:</label>
<select name="type" id="type">
<option value="Regina">Regina</option>
<option value="Meat Delux">Meat Delux</option>
<option value="Peri Peri Chicken">Peri Peri Chicken</option>
<option value="Veg Supreme">Veg Supreme</option>
</select>
<label for="base">Choose Pizza type:</label>
<select name="base" id="base">
<option value="Cheesy crust">Cheesy crust</option>
<option value="Garlic crust">Garlic crust</option>
<option value="Thin and crispy">Thin and crispy</option>
<option value="Deep pan">Deep pan</option>
</select>
<fieldset>
    <label>Extra toppings</label>
    <input type="checkbox" name="toppings[]" value="Cheese">Cheese<br/>
    <input type="checkbox" name="toppings[]" value="Bacon">Bacon<br/>
    <input type="checkbox" name="toppings[]" value="Chicken">Chicken<br/>
    <input type="checkbox" name="toppings[]" value="Mushrooms">Mushrooms<br/>
    <input type="checkbox" name="toppings[}" value="Peppers and Olives">Peppers and Olives<br/>
</fieldset>
<input type="submit" value="Order a Pizza">
</form>
</div>
@endsection
