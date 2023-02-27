<template>
    <edit-render :path_param="['mail', 'signature']" :model="model">
        <div class="row">
            <div class="col-md-6">
                <FormKit v-model="model.id" label="Id" id="id" type="hidden" validation="required" />
                <FormKit v-model="model.title" label="Title" id="title" type="text" validation="required" />
                <FormKit v-model="model.signature" label="Signature" id="signature" type="text" validation="required" />
                <FormKit v-model="model.ordering" label="Ordering" id="ordering" type="text" validation="required" />
                <FormKit v-model="model.published" label="Published" id="published" type="text" validation="required" />
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
                title: "",
                signature: "",
                ordering: "",
                published: "",
            },
        };
        
    }
};
</script>
