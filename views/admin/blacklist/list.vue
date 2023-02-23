
<template>
    <table-render title="mail Blacklist" :path_param="path_param" :search_fields="search_fields" :model="model"
        :table_fields="table_fields"></table-render>
</template>

<script>

export default {
    data () {
        return {
            path_param: ["mail", "blacklist"],
            model: {
                id: "",
                contact_id: "",
            },
            search_fields: [
                { type: "select", name: "contact_id", label: "Contact", ope: "", },
            ],
            table_fields: [
                { 
                    text: "Contact", 
                    prop: "[mail_contact__name] [mail_contact__email]", 
                    name: "partner_id", 
                    foreign: ['mail_contact__name','mail_contact__email',]
                },
            ],
        };
    }
};
</script>
