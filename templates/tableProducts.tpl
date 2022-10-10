{include file="templates/header.tpl"}
<table class='table'>
<thead>
    <tr>
        <th>Imagen</th>
        <th>Producto</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Categoria</th>
        {if $user= true}
            <th>Editar</th>
            <th>Eliminar</th>
        {/if}
    </tr>
</thead>
<tbody>
{foreach from=$products item=$product }
    <tr>
        <td> </td>
        <td> {$product->p_name} </td>
        <td> {$product->price} </td>
        <td> {$product->stock} </td>
        <td> {$product->categoria}</td>
        {if !isset($smarty.session.USER_ID)}
            <td><a href="edit/{$product->id}">Editar</a></td>
            <td><a href="delete/{$product->id}">Eliminar</a></td>
        {/if}
    </tr>
{/foreach}
</tbody>
</table>
{include file="templates/footer.tpl"}