
<template>
    <table-render :path_param="['mail', 'signature']"  title="Mail Contact" :table_fields="table_fields">
    
        <template #header>
            <th-render>Title</th-render>
            <th-render>Signature</th-render>
            <th-render>Ordering</th-render>
            <th-render>Published</th-render>
        </template>
        
        <template #body="{ item }">
            <td>{{ item.title }}</td>
            <td>{{ item.signature }}</td>
            <td>{{ item.ordering }}</td>
            <td class="text-center">
                <btn-status :status="item.published"></btn-status>
            </td>
        </template>

    </table-render>
</template>

<script>

export default {
    data() {
        return {
            table_fields: ['title','signature','ordering','published'],
        };
    }
};
</script>
