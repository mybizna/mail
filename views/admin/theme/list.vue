
<template>
    <table-render :path_param="['mail', 'theme']" title="Mail Theme" :table_fields="table_fields">
        <template #header>
            <th-render>Title</th-render>
            <th-render>File Name</th-render>
            <th-render>Is File</th-render>
            <th-render>Is Default</th-render>
        </template>

        <template #body="{ item }">
            <td>{{ item.title }}</td>
            <td>{{ item.file_name }}</td>
            <td>{{ item.is_file }}</td>
            <td>{{ item.is_default }}</td>
        </template>


    </table-render>
</template>

<script>

export default {
    data() {
        return {
            table_fields: ['title', 'file_name', 'is_file', 'is_default'],
        };
    }
};
</script>
