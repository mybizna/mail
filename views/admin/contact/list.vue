
<template>
    <table-render :path_param="['mail', 'contact']" title="Mail Contact" :table_fields="table_fields">
        <template #header>
            <th-render>Name</th-render>
            <th-render>Email</th-render>
            <th-render>Ordering</th-render>
            <th-render>Published</th-render>
        </template>

        <template #body="{ item }">
            <td>{{ item.name }}</td>
            <td>{{ item.email }}</td>
            <td>{{ item.ordering }}</td>
            <td>{{ item.published }}</td>
        </template>


    </table-render>
</template>

<script>

export default {
    data() {
        return {
            table_fields: ['name', 'email', 'ordering', 'published'],
        };
    }
};
</script>
