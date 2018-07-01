<template>
    <aside class="menu m-t-30">
        <ul class="menu-list">
            <li><a class="is-active">Dashboard</a></li>
            <li><a>Customers</a></li>
        </ul>
        <ul class="menu-list">
            <li><a>Team Settings</a></li>
            <li>
            <a>Manage Your Team</a>
            <ul>
                <li><a>Members</a></li>
                <li><a>Plugins</a></li>
                <li><a>Add a member</a></li>
            </ul>
            </li>
            <li><router-link to="/me/login">Login</router-link></li>
        </ul>
    </aside>
</template>

<script>
export default {

}
</script>

<style>

</style>
