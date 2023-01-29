<template>
    <table-edit :path_param="path_param" :model="model">

        <div class="row">
            <div class="col-md-6">
                <FormKit v-model="model.id" label="Id" id="id" type="hidden" validation="required" />
                <FormKit v-model="model.contact_id" label="Contact" id="contact_id" type="text" validation="required" />
            </div>
            <div class="col-md-6">

            </div>
        </div>

    </table-edit>
</template>

<script>
export default {
    components: {
        TableEdit: window.$func.fetchComponent("components/common/TableEdit.vue")
    },
    data() {
        return {
            id: null,
            path_param: ["mail", "whitelist"],
            model: {
                id: "",
                contact_id: "",
            },

        };

    }
};
</script>
