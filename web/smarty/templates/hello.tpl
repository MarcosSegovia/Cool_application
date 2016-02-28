<h1>THIS IS SMARTY =D</h1>

{if isset($user)}
If you can see this result, you are retrieving them from database, it's awesome =D
<p>
    {$user.id}
    {$user.name}
    {$user.email}
</p>
{/if}
