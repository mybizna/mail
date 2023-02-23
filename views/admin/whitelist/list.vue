
<template>
    <table-render :path_param="['mail', 'whitelist']" title="Mail Whitelist" :table_fields="table_fields">

        <template #header>
            <th-render>Contact</th-render>
        </template>

        <template #body="{ item }">
            <td>{{ item.partner_id__mail_contact__name }} {{ item.partner_id__mail_contact__phone }}</td>
        </template>

    </table-render>
</template>

<script>

export default {
    data() {
        return {
            table_fields: ['partner_id__mail_contact__name', 'partner_id__mail_contact__email'],
        };
    }
};
</script>
