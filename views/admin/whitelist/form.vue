<template>
    <edit-render :path_param="['mail', 'whitelist']" :model="model">

        <div class="row">
            <div class="col-md-6">
                <FormKit v-model="model.id" label="Id" id="id" type="hidden" validation="required" />
                <FormKit button_label="Select Contact" id="contact_id" type="recordpicker"
                    comp_url="mail/admin/contact/list.vue" v-model="model.contact_id" validation="required"
                    inner-class="$reset formkit-inner" wrapper-class="$reset formkit-wrapper" />
            </div>
            <div class="col-md-6">

            </div>
        </div>

    </edit-render>
</template>

<script>
export default {

    data() {
        return {
            id: null,
            model: {
                id: "",
                contact_id: "",
            },

        };

    }
};
</script>
