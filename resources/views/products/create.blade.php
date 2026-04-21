<form method="POST" action="/products">
@csrf
<input name="sku">
<input name="name">
<input name="price">
<button type="submit">Save</button>
</form>