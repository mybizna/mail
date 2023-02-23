<template>
    <edit-render :path_param="path_param" :model="model">

        <div class="row">
            <div class="col-md-6">
                <FormKit v-model="model.id" label="Id" id="id" type="hidden" validation="required" />
                <FormKit v-model="model.contact_id" label="Contact" id="contact_id" type="text" validation="required" />
            </div>
            <div class="col-md-6">

            </div>
        </div>

    </edit-render>
</template>

<script>
export default {
    data () {
        return {
            id: null,
            path_param: ["mail", "blacklist"],
            model: {
                id: "",
                contact_id: "",
            },

        };

    }
};
</script>
