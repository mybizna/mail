
<template>
    <table-render :path_param="['mail', 'blacklist']" title="mail Blacklist" :table_fields="table_fields">

        <template #header>
            <th-render>Contact</th-render>
        </template>

        <template #body="{ item }">
            <td>{{ item.partner_id__mail_contact__name }} {{ item.partner_id__mail_contact__email }}</td>
        </template>

    </table-render>
</template>

<script>

export default {
    data() {
        return {
            table_fields: ['partner_id__mail_contact__name', 'partner_id__mail_contact__email',],
        };
    }
};
</script>
